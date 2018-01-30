<?php

namespace Italia\SPIDAuth\Tests;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Foundation\Exceptions\Handler;

use Orchestra\Testbench\TestCase;
use Mockery as m;
use OneLogin_Saml2_Error;

use DOMDocument;
use Exception;

use Italia\SPIDAuth\SPIDAuth;
use Italia\SPIDAuth\SPIDUser;
use Italia\SPIDAuth\Events\LoginEvent;
use Italia\SPIDAuth\Events\LogoutEvent;

class SPIDAuthTest extends TestCase
{
    protected $SPIDAuth;
    protected $loginURL;
    protected $acsURL;
    protected $logoutURL;
    protected $afterLoginURL;
    protected $afterLogoutURL;
    protected $loginView;
    protected $metadataURL;
    protected $providersURL;

    protected function setUp()
    {
        parent::setUp();
        
        $this->loginURL = URL::route('spid-auth_login');
        $this->doLoginURL = URL::route('spid-auth_do-login');
        $this->acsURL = URL::route('spid-auth_acs');
        $this->afterLoginURL = $this->app['config']->get('spid-auth.after_login_url');
        $this->afterLogoutURL = $this->app['config']->get('spid-auth.after_logout_url');
        $this->logoutURL = URL::route('spid-auth_logout');
        $this->loginView = $this->app['config']->get('spid-auth.login_view');
        $this->metadataURL = URL::route('spid-auth_metadata');
        $this->providersURL = URL::route('spid-auth_providers');
    }
    
    protected function tearDown()
    {
        m::close();
    }
    
    protected function getPackageProviders($app)
    {
        return ['Italia\SPIDAuth\ServiceProvider'];
    }
    
    protected function setSPIDAuthMock(
        bool $withErrors = false,
        bool $isAuthenticated = true)
    {
        $testRedirectURL = $this->app['config']->get('spid-idps.test.singleSignOnService.url');
        $this->SPIDAuth = m::mock(SPIDAuth::class)->makePartial()->shouldAllowMockingProtectedMethods();
        $SAMLAuth = m::mock('OneLogin_Saml2_Auth');
        $SAMLAuth->shouldReceive('login')->with(null, [], true)->andReturn(
            Response::redirectTo($testRedirectURL)
        );
        $SAMLAuth->shouldReceive('processResponse')->andReturn(true);
        $SAMLAuth->shouldReceive('getErrors')->andReturn($withErrors);
        $SAMLAuth->shouldReceive('getLastAssertionId')->andReturn('assertionId');
        $SAMLAuth->shouldReceive('getLastAssertionNotOnOrAfter')->andReturn(time() + 300);
        $SAMLAuth->shouldReceive('isAuthenticated')->andReturn($isAuthenticated);
        $SAMLAuth->shouldReceive('getAttributes')->andReturn([
            'spidCode' => ['TEST0123456789'],
            'name' => ['Nome'],
            'familyName' => ['Cognome'],
            'fiscalNumber' => ['FSCLNB17A01H501X']
        ]);
        $SAMLAuth->shouldReceive('getLastResponseXML')->andReturn(
            '<?xml version="1.0" encoding="UTF-8"?>
            <saml2p:Response xmlns:saml2p="urn:oasis:names:tc:SAML:2.0:protocol">
               <saml2:Issuer xmlns:saml2="urn:oasis:names:tc:SAML:2.0:assertion">idp.spid.gov.it</saml2:Issuer>
            </saml2p:Response>'
        );
        $SAMLAuth->shouldReceive('getSessionIndex')->andReturn('sessionIndex');
        $SAMLAuth->shouldReceive('logout')->with(URL::to($this->afterLogoutURL), [], null, 'sessionIndex')->andReturn(
            Response::redirectTo($this->afterLoginURL)
        );
        $SAMLAuth->shouldReceive('getSettings')->andReturn($SAMLAuth);
        $SAMLAuth->shouldReceive('getSPMetadata')->andReturn();
        $SAMLAuth->shouldReceive('validateMetadata')->andReturn(['error']);
        $this->SPIDAuth->shouldReceive('getSAML')->andReturn($SAMLAuth);
        $this->app->instance('SPIDAuth', $this->SPIDAuth);
    }
    
    public function testLogin()
    {
        $response = $this->get($this->loginURL);
        $response->assertViewIs($this->loginView);
    }
    
    public function testLoginIfAuthenticated()
    {
        $response = $this->withSession(['spid_sessionIndex' => 'sessionIndex'])->get($this->loginURL);
        $response->assertRedirect($this->afterLoginURL);
    }
    
    public function testLoginIfAuthenticatedWithIntendedURL()
    {
        $response = $this->withSession(['spid_sessionIndex' => 'sessionIndex', 'url.intended' => 'intendedURL'])->get($this->loginURL);
        $response->assertRedirect('intendedURL');
    }
    
    
    public function testDoLoginIfAuthenticated()
    {
        $response = $this->withSession(['spid_sessionIndex' => 'sessionIndex'])->post($this->doLoginURL);
        $response->assertRedirect($this->afterLoginURL);
    }
    
    public function testDoLoginIfAuthenticatedWithIntendedURL()
    {
        $response = $this->withSession(['spid_sessionIndex' => 'sessionIndex', 'url.intended' => 'intendedURL'])->post($this->doLoginURL);
        $response->assertRedirect('intendedURL');
    }
    
    public function testDoLoginWithoutProvider()
    {
        $response = $this->post($this->doLoginURL);
        $response->assertStatus(400);
    }
    
    public function testDoLogin()
    {
        $this->setSPIDAuthMock();
        $response = $this->post($this->doLoginURL, ['provider' => 'test']);
        $response->assertSessionHas('spid_idp');
        $response->assertRedirect();
    }
    
    public function testAcs()
    {
        Event::fake();
        $this->setSPIDAuthMock();
        $response = $this->post($this->acsURL);
        $response->assertSessionHas('spid_idp_entity_name');
        $response->assertSessionHas('spid_sessionIndex');
        $response->assertSessionHas('spid_user');
        $response->assertRedirect($this->afterLoginURL);
        Event::assertDispatched(LoginEvent::class, function ($e) {
            $SPIDUser = $e->getSPIDUser();
            $isSPIDUserReturned = get_class($SPIDUser) == SPIDUser::class;
            $areSPIDUserFieldsSet =
                $SPIDUser->name == 'Nome' &&
                $SPIDUser->familyName == 'Cognome' &&
                $SPIDUser->fiscalNumber == 'FSCLNB17A01H501X' &&
                $SPIDUser->spidCode == 'TEST0123456789' &&
                $SPIDUser->nonExistent == null;
            $isIdpReturned = $e->getIdp() == 'Test IdP';
            return $isSPIDUserReturned && $areSPIDUserFieldsSet && $isIdpReturned;
        });
        $SPIDUser = $this->app->make('SPIDAuth')->getSPIDUser();
        $this->assertInstanceOf(SPIDUser::class, $SPIDUser);
    }
    
    public function testAcsWithIntendedURL()
    {
        $this->setSPIDAuthMock();
        $response = $this->withSession(['url.intended' => 'intendedURL'])->post($this->acsURL);
        $response->assertRedirect('intendedURL');
    }
    
    public function testAcsWithMalformedSAMLResponse()
    {
        $this->setSPIDAuthMock(true);
        $response = $this->post($this->acsURL);
        $response->assertStatus(500);
    }
    
    public function testAcsWithFailedSAMLAuthentication()
    {
        $this->setSPIDAuthMock(false, false);
        $response = $this->post($this->acsURL);
        $response->assertStatus(500);
    }
    
    public function testAcsWithReplayAttack()
    {
        $this->setSPIDAuthMock();
        $response = $this->post($this->acsURL);
        $response = $this->post($this->acsURL);
        $response->assertStatus(500);
    }
    
    public function testLogout()
    {
        Event::fake();
        $this->testAcs();
        $response = $this->get($this->logoutURL);
        $response->assertSessionMissing('spid_idp_entity_name');
        $response->assertSessionMissing('spid_sessionIndex');
        $response->assertSessionMissing('spid_user');
        $response->assertRedirect($this->afterLogoutURL);
        Event::assertDispatched(LogoutEvent::class, function ($e) {
            $SPIDUser = $e->getSPIDUser();
            $isSPIDUserReturned = get_class($SPIDUser) == SPIDUser::class;
            $areSPIDUserFieldsSet =
                $SPIDUser->name == 'Nome' &&
                $SPIDUser->familyName == 'Cognome' &&
                $SPIDUser->fiscalNumber == 'FSCLNB17A01H501X' &&
                $SPIDUser->spidCode == 'TEST0123456789' &&
                $SPIDUser->nonExistent == null;
            $isIdpReturned = $e->getIdp() == 'Test IdP';
            return $isSPIDUserReturned && $areSPIDUserFieldsSet && $isIdpReturned;
        });
        $SPIDUser = $this->app->make('SPIDAuth')->getSPIDUser();
        $this->assertNull($SPIDUser);
    }
    
    public function testLogoutIfNotAuthenticated()
    {
        $response = $this->get($this->logoutURL);
        $response->assertRedirect($this->afterLogoutURL);
    }
    
    public function testMetadata()
    {
        $response = $this->get($this->metadataURL);
        $response->assertStatus(200);
        $metadata = new DOMDocument;
        $metadata->loadXML($response->getContent());
        $this->assertTrue($metadata->schemaValidate('tests/xml-schemas/saml-schema-metadata-SPID-SP.xsd'));
    }
    
    public function testMalformedMetadata()
    {
        $this->withoutExceptionHandling();
        $this->expectException(OneLogin_Saml2_Error::class);
        $this->setSPIDAuthMock();
        $response = $this->get($this->metadataURL);
        var_dump($response);
    }
    
    public function testProviders()
    {
        $response = $this->get($this->providersURL);
        $response->assertJson(['spidProviders' => array_values($this->app['config']->get('spid-idps'))]);
    }
}