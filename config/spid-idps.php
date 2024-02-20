<?php
/**
 * This file contains the config settings for SPID Identity Providers.
 *
 * @package Italia\SPIDAuth
 * @license BSD-3-clause
 */

// SPID IdP data
return [
    'infocert' => [
        'provider' => 'infocert',
        'title' => 'Infocert',
        'entityName' => 'Infocert ID',
        'logo' => 'spid-idp-infocertid.svg',
        'logoPng' => 'spid-idp-infocertid.png',
        'isActive' => true,
        'entityId' => 'https://identity.infocert.it',
        'singleSignOnService' => [
            'url' => 'https://identity.infocert.it/spid/samlsso',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'singleLogoutService' => [
            'url' => 'https://identity.infocert.it/spid/samlslo',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'x509cert' => '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',
    ],
    'poste' => [
        'provider' => 'poste',
        'title' => 'Poste',
        'entityName' => 'Poste ID',
        'logo' => 'spid-idp-posteid.svg',
        'logoPng' => 'spid-idp-posteid.png',
        'isActive' => true,
        'entityId' => 'https://posteid.poste.it',
        'singleSignOnService' => [
            'url' => 'https://posteid.poste.it/jod-fs/ssoserviceredirect',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'singleLogoutService' => [
            'url' => 'https://posteid.poste.it/jod-fs/sloserviceredirect',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'x509cert' => 'MIIFizCCA3OgAwIBAgIIFYLDd7sRdIowDQYJKoZIhvcNAQELBQAwZTELMAkGA1UEBhMCSVQxHjAc BgNVBAoMFVBvc3RlIEl0YWxpYW5lIFMucC5BLjEaMBgGA1UEYQwRVkFUSVQtMDExMTQ2MDEwMDYx GjAYBgNVBAMMEVBvc3RlIEl0YWxpYW5lIENBMB4XDTI0MDIwODEzNTQzOVoXDTI3MDIwODEzNTQz OVowRzELMAkGA1UEBhMCSVQxHjAcBgNVBAoMFVBvc3RlIEl0YWxpYW5lIFMucC5BLjEYMBYGA1UE AwwPaWRwLXBvc3RlaWQyMDI0MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAlAUwk/CY RRsQSTfczqFAZ9TF/6Jwnr82pNfx/hcHXqDn/MrIkhg4t9vWf8N+cPW/CfcvFuySdo+ecs07KCm2 A8stUQ+zRH49/GK0v3rHmEs5/lPacwuXTdWPdKL1/f7APQBoebk5y13QVH1yO4RHW0UItKBtqF16 eaI9ceiS7O4tn+M7QQyj5wftVHrlRNZlFhHoXeLpsum0WLesjSrceUHntbUtyXyQGmX6tT0tcmwJ wdbK9H670uK/xioenaGoU3pfnd/6W0glHh8G1fztTPfrazMjHT2+Ii+aKX4hFeVIu19xaNbNGFL5 RpIG1XEKGL/EoJXKCtnKVn/8PveztwIDAQABo4IBWzCCAVcwHwYDVR0jBBgwFoAUbNNNuRe4R3dH flC8gGhCz2e8P3kwPwYIKwYBBQUHAQEEMzAxMC8GCCsGAQUFBzABhiNodHRwOi8vcG9zdGVjZXJ0 LnBvc3RlLml0L3BpLW9jc3BDQTArBgNVHREEJDAigSBpZHAtcG9zdGVpZDIwMjRAcG9zdGVpdGFs aWFuZS5pdDA+BgNVHSAENzA1MDMGCCtMMAEFAQEEMCcwJQYIKwYBBQUHAgEWGWh0dHA6Ly9wb3N0 ZWNlcnQucG9zdGUuaXQwHQYDVR0lBBYwFAYIKwYBBQUHAwIGCCsGAQUFBwMEMDgGA1UdHwQxMC8w LaAroCmGJ2h0dHA6Ly9wb3N0ZWNlcnQucG9zdGUuaXQvcGktQ0EvY3JsLmNybDAdBgNVHQ4EFgQU m2Mfz8pVslcPa8X1rgKVQjJRczcwDgYDVR0PAQH/BAQDAgWgMA0GCSqGSIb3DQEBCwUAA4ICAQBO RueMtFdRkTK8iIXHWZiLlOxgWI9vKC5xcuJJpkSGjnu4kb80nim3m5FPo9VhlDrl6vGsxbZbOK8E 3qNLMh+uUYJOmryUULjh+rlth4meWLcQ+W6IWwbM7Of2yG4wEE8UIB8tgoNZmI4MQWxk5kZU2gzP jbYpGk+3gHvVODloQBrwG+C0yhQt3BBBtdB26W6ebESGUyBEBhOGuszzyBVGuWiHUBcyHsEH/qoS 0Mh6AMpPbGjoFcgGQv6dQ5Rm1s+mt184kfl/k9kDHH8a9NgD5eVLenArTW8yqiX23ck0qepKDC0d n9wq9hNFD+UquT1fHrzZhxJhk93r6AY6yCHMN8sIHTY8zg8TNTGSE7PkeWmXxvjiw3o7vWS/79qb ePrCfy/7ICvI/ys5/Z0pATWBMGXkEN+Mee4Ivf+YPDpxfcZLj3DQ/XJ5FscYM2uTOZAwYT+9LcLo npJUexazCWfTNsF//Knyo/ZhcslEhoPT5F1b8yO5uwXeM/PRRkaX1ACl2ApLKobHyG0qG8lYGMFu IAsHtsC+tJfZrX4F55kcTzVfR/cp7S50XyFhBqs4piM/ZsF4jSPXhVDCF9Nw/XC8VvVOWq8I5kVm uf8/32Nqk9bFaevGvv7ExcZKVsUbSfu8kB/t9eePoNtjqHAUxoxWs807k9vQE3d3DlYGa3M0Cw==',
    ],
    'tim' => [
        'provider' => 'tim',
        'title' => 'Tim',
        'entityName' => 'Tim ID',
        'logo' => 'spid-idp-timid.svg',
        'logoPng' => 'spid-idp-timid.png',
        'isActive' => true,
        'entityId' => 'https://login.id.tim.it/affwebservices/public/saml2sso',
        'singleSignOnService' => [
            'url' => 'https://login.id.tim.it/affwebservices/public/saml2sso',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'singleLogoutService' => [
            'url' => 'https://login.id.tim.it/affwebservices/public/saml2slo',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'x509cert' => 'MIID0jCCArqgAwIBAgIUXDUOKL3WuolxDw96Fk9es8rIt6kwDQYJKoZIhvcNAQELBQAwgYsxCzAJBgNVBAYTAklUMS4wLAYDVQQKDCVUZWxlY29tIEl0YWxpYSBUcnVzdCBUZWNobm9sb2dpZXMgc3JsMSgwJgYDVQQLDB9TZXJ2aXppIHBlciBsJ2lkZW50aXRhIGRpZ2l0YWxlMSIwIAYDVQQDDBlUSSBUcnVzdCBUZWNobm9sb2dpZXMgc3JsMB4XDTIxMTExMTE3MDMyMFoXDTI1MTExMDE3MDMyMFowgYsxCzAJBgNVBAYTAklUMS4wLAYDVQQKDCVUZWxlY29tIEl0YWxpYSBUcnVzdCBUZWNobm9sb2dpZXMgc3JsMSgwJgYDVQQLDB9TZXJ2aXppIHBlciBsJ2lkZW50aXRhIGRpZ2l0YWxlMSIwIAYDVQQDDBlUSSBUcnVzdCBUZWNobm9sb2dpZXMgc3JsMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA6sIS3+3iZSaAIyVywahlbpua2uJ/XmpV68P1e1STJpHoaj32STdHhqZnnb4Y/FshP1NUolzNolPXAYDmDduW1OnGndJZ+G9Hjh1PCkdiRw+p0FjhQAsGJkn8NdgTIHLJjqN1qQwtOsVGab8ScyA3mtmj3xKYuBhUoweuATzC7f5r7FfIoc3cy6N5lgrpZpfeAChxLwoHVjoAVgIBuemi6HAzmd4/BI06KzOcR7+dBVi4+uiseldxrJ5bhnjZKIwgkX14y9UA84Y+e+rMtyT8cT3XXi9NazZl5Ej5/bQPqqVsbg6tXzQSfEJD6JEjuYeC0RUKMS/EJn3hL5VLzTJ1NwIDAQABoywwKjAdBgNVHQ4EFgQUfctFZ8bRtmEvXPRlqgVDuggY/ZwwCQYDVR0TBAIwADANBgkqhkiG9w0BAQsFAAOCAQEA0lszHadknPfE17IWGWsgvlXOdKMnWcl9H5rEYmsWwDB9FJG9XAZvPMcVv1kkWi6XZI/8N2Twhu1BdZkdvntDRscuck8wxxIpkRV7CwlcqNFZ/IwjDBxOBa8Q1J850p+qP8A9apsLLPUlu/oLygNDWIXzcOjMqnPkEP+XXUNYPto5iV+OyDzLLacCYqDDHcvDewWLmEjt35X967KcM+m7K2zGRLWfqcZPIjJJOkpNjgcs+MaisMrGDyOKiD16v0LpwVyIpTqXvDk7KHo8CUNXDxyLxZzB6WffgnOgjXTfU3vluweOx0qQy/VxIupDlNBKiZB4gnt1oAfnaMbqla9wcw==',
    ],
    'sielte' => [
        'provider' => 'sielte',
        'title' => 'Sielte',
        'entityName' => 'Sielte ID',
        'logo' => 'spid-idp-sielteid.svg',
        'logoPng' => 'spid-idp-sielteid.png',
        'isActive' => true,
        'entityId' => 'https://identity.sieltecloud.it',
        'singleSignOnService' => [
            'url' => 'https://identity.sieltecloud.it/simplesaml/saml2/idp/SSO.php',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'singleLogoutService' => [
            'url' => 'https://identity.sieltecloud.it/simplesaml/saml2/idp/SLS.php',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'x509cert' => 'MIIDczCCAlugAwIBAgIJAMsX0iEKQM6xMA0GCSqGSIb3DQEBCwUAMFAxCzAJBgNVBAYTAklUMQ4wDAYDVQQIDAVJdGFseTEgMB4GA1UEBwwXU2FuIEdyZWdvcmlvIGRpIENhdGFuaWExDzANBgNVBAoMBlNpZWx0ZTAeFw0xNTEyMTQwODE0MTVaFw0yNTEyMTMwODE0MTVaMFAxCzAJBgNVBAYTAklUMQ4wDAYDVQQIDAVJdGFseTEgMB4GA1UEBwwXU2FuIEdyZWdvcmlvIGRpIENhdGFuaWExDzANBgNVBAoMBlNpZWx0ZTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANIRlOjM/tS9V9jYjJreqZSctuYriLfPTDgX2XdhWEbMpMpwA9p0bsbLQoC1gP0piLO+qbCsIh9+boPfb4/dLIA7E+Vmm5/+evOtzvjfHG4oXjZK6jo08QwkVV8Bm1jkakJPVZ57QFbyDSr+uBbIMY7CjA2LdgnIIwKN/kSfFhrZUMJ6ZxwegM100X5psfNPSV9WUtgHsvqlIlvydPo2rMm21sg+2d3Vtg8DthNSYRLqgazCc0NTsigrH7niSbJCO0nq/svMX2rSFdh5GFK7/pxT+c3OFWqIR8r+RX4qW+auJqkbTuNRwxV22Sm6r69ZJwV0WspvsVJi+FYqiyoWhgUCAwEAAaNQME4wHQYDVR0OBBYEFCUx063GwUhEFDllwCBe/+jdeW+XMB8GA1UdIwQYMBaAFCUx063GwUhEFDllwCBe/+jdeW+XMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQELBQADggEBADF94c3JwyBM86QBLeoUZxRYKPniba8B39FfJk0pb+LejKfZMvspOrOFgYQQ9UrS8IFkBX9Xr7/tjRbr2cPwZNjrEZhoq+NfcE09bnaWTyEl1IEKK8TWOupJj9UNVpYXX0LfIRrMwNEzAPQykOaqPOnyHxOCPTY957xXSo3jXOyvugtvPHbd+iliAzUoPm1tgiTKWS+EkQ/e22eFv5NEyT+oHiKovrQ+voPWOIvJVMjiTyxRic8fEnI9zzV0SxWvFvty77wgcYbeEuFZa3iidhojUge8o1uY/JUyQjFxcvvfAgWSIZwdHiNyWaAgwzLPmPCPsvBdR3xrlcDg/9Bd3D0=',
    ],
    'aruba' => [
        'provider' => 'aruba',
        'title' => 'Aruba',
        'entityName' => 'Aruba ID',
        'logo' => 'spid-idp-arubaid.svg',
        'logoPng' => 'spid-idp-arubaid.png',
        'isActive' => true,
        'entityId' => 'https://loginspid.aruba.it',
        'singleSignOnService' => [
            'url' => 'https://loginspid.aruba.it/ServiceLoginWelcome',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'singleLogoutService' => [
            'url' => 'https://loginspid.aruba.it/ServiceLogoutRequest',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'x509cert' => 'MIIExTCCA62gAwIBAgIQH32A70kY92tuXB8AGi2DdDANBgkqhkiG9w0BAQsFADBsMQswCQYDVQQG EwJJVDEYMBYGA1UECgwPQXJ1YmFQRUMgUy5wLkEuMSEwHwYDVQQLDBhDZXJ0aWZpY2F0aW9uIEF1 dGhvcml0eUIxIDAeBgNVBAMMF0FydWJhUEVDIFMucC5BLiBORyBDQSAyMB4XDTIwMDEyMjAwMDAw MFoXDTI1MDEyMTIzNTk1OVowgaAxCzAJBgNVBAYTAklUMRYwFAYDVQQKDA1BcnViYSBQRUMgc3Bh MREwDwYDVQQLDAhQcm9kb3R0bzEWMBQGA1UEAwwNcGVjLml0IHBlYy5pdDEZMBcGA1UEBRMQWFhY WFhYMDBYMDBYMDAwWDEPMA0GA1UEKgwGcGVjLml0MQ8wDQYDVQQEDAZwZWMuaXQxETAPBgNVBC4T CDIwODc2Mzc5MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqt2oHJhcp03l73p+QYpE J+f3jYYj0W0gos0RItZx/w4vpsiKBygaqDNVWSwfo1aPdVDIX13f62O+lBki29KTt+QWv5K6SGHD UXYPntRdEQlicIBh2Z0HfrM7fDl+xeJrMp1s4dsSQAuB5TJOlFZq7xCQuukytGWBTvjfcN/os5aE sEg+RbtZHJR26SbbUcIqWb27Swgj/9jwK+tvzLnP4w8FNvEOrNfR0XwTMNDFrwbOCuWgthv5jNBs VZaoqNwiA/MxYt+gTOMj/o5PWKk8Wpm6o/7/+lWAoxh0v8x9OkbIi+YaFpIxuCcUqsrJJk63x2gH Cc2nr+yclYUhsKD/AwIDAQABo4IBLDCCASgwDgYDVR0PAQH/BAQDAgeAMB0GA1UdDgQWBBTKQ3+N PGcXFk8nX994vMTVpba1EzBHBgNVHSAEQDA+MDwGCysGAQQBgegtAQEBMC0wKwYIKwYBBQUHAgEW H2h0dHBzOi8vY2EuYXJ1YmFwZWMuaXQvY3BzLmh0bWwwWAYDVR0fBFEwTzBNoEugSYZHaHR0cDov L2NybC5hcnViYXBlYy5pdC9BcnViYVBFQ1NwQUNlcnRpZmljYXRpb25BdXRob3JpdHlCL0xhdGVz dENSTC5jcmwwHwYDVR0jBBgwFoAU8v9jQBwRQv3M3/FZ9m7omYcxR3kwMwYIKwYBBQUHAQEEJzAl MCMGCCsGAQUFBzABhhdodHRwOi8vb2NzcC5hcnViYXBlYy5pdDANBgkqhkiG9w0BAQsFAAOCAQEA ZKpor1MrrYwPw+IuPZElQAuNzXsaSWSnn/QQwJtW49c4rFM4mEud9c61p9XxIIbgQKmDmNbzC+Dm wJSZ8ILdCAyBHmY3BehVRAy3KRA2KQhS9kd4vywf5KVYd1L5hQa9DBrusxF7i1X/SEeLQgoKkov0 R8v43UncqXS/ql50ovJFxi938Rv4rVwa8o0hqqc6WUcjkidB6M9aNJLIbOZN3xNUgC28qIr8y7N8 lbxWbwVrGxqKDtpaA9J0hOOXxwuTfSd1zOtT0KSSSUQ53QGOPnxyjxYDQbJu60/lBPuUV5wb/Z2r gpeUH1/n7limHV5sVmOZgSnf18T+0STANCfkXg==',
    ],
    'namirial' => [
        'provider' => 'namirial',
        'title' => 'Namirial',
        'entityName' => 'Namirial ID',
        'logo' => 'spid-idp-namirialid.svg',
        'logoPng' => 'spid-idp-namirialid.png',
        'isActive' => true,
        'entityId' => 'https://idp.namirialtsp.com/idp',
        'singleSignOnService' => [
            'url' => 'https://idp.namirialtsp.com/idp/profile/SAML2/Redirect/SSO',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'singleLogoutService' => [
            'url' => 'https://idp.namirialtsp.com/idp/profile/SAML2/Redirect/SLO',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'x509cert' => 'MIIISTCCBjGgAwIBAgIIdhWoGwd6zoowDQYJKoZIhvcNAQELBQAwgYcxITAfBgNVBAMMGE5hbWly aWFsIEVVIFF1YWxpZmllZCBDQTEfMB0GA1UECwwWVHJ1c3QgU2VydmljZSBQcm92aWRlcjEYMBYG A1UECgwPTmFtaXJpYWwgUy5wLkEuMRowGAYDVQRhDBFWQVRJVC0wMjA0NjU3MDQyNjELMAkGA1UE BhMCSVQwHhcNMjAwNzIwMTUxODAwWhcNMjYwNzIwMTUxODAwWjBdMQswCQYDVQQGEwJJVDEaMBgG A1UEYQwRVkFUSVQtMDIwNDY1NzA0MjYxGDAWBgNVBAoMD05BTUlSSUFMIFMuUC5BLjEYMBYGA1UE AwwPTkFNSVJJQUwgUy5QLkEuMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvaluo+O4 93cRZIutqyV3Y7q6/avPAmbWL4w502HaGm6nECkl/TgQyeD7px4Drcd9ArW6ry7+m282m66qOlag mmhJOAbEVQni8EpV/JCuKZ3gLQSOxHBdJB87fNnooLp3sU/cmiPds0rmEniRRdwq4KcLxGbNt+hZ /OooJ/sPar2JgeXtIKSsQXOSNEV4o/gwJOufnMql3iixENGUIo+tUdO+ROskTl6PlG409HSlHOnG DFLDLUqpASMwmBcfI4KA9QKzXP2OU8knRnNnsjlDPez84tizvK7exfefSGMbg7lH7Q43ESndweAx sKhLNPyyGA03apNgqs6suB4bEJhlyQIDAQABo4ID4DCCA9wwgYcGCCsGAQUFBwEBBHsweTA+Bggr BgEFBQcwAoYyaHR0cHM6Ly9kb2NzLm5hbWlyaWFsdHNwLmNvbS9kb2N1bWVudHMvTmFtQ0E0Sy5j cnQwNwYIKwYBBQUHMAGGK2h0dHA6Ly9vY3NwLm5hbWlyaWFsdHNwLmNvbS9vY3NwL2NlcnRzdGF0 dXMwHQYDVR0OBBYEFJFw0qD1CsRQ3xDAskv5VJ6YVKhWMB8GA1UdIwQYMBaAFGO4zbhJUuXnCXtX jPt6QQ5BqnhZMIHDBggrBgEFBQcBAwSBtjCBszAIBgYEAI5GAQEwCwYGBACORgEDAgEUMBMGBgQA jkYBBjAJBgcEAI5GAQYCMIGEBgYEAI5GAQUwejA7FjVodHRwczovL2RvY3MubmFtaXJpYWx0c3Au Y29tL2RvY3VtZW50cy9QRFMvUERTX2VuLnBkZhMCZW4wOxY1aHR0cHM6Ly9kb2NzLm5hbWlyaWFs dHNwLmNvbS9kb2N1bWVudHMvUERTL1BEU19pdC5wZGYTAml0MIICAgYDVR0gBIIB+TCCAfUwggHc BgsrBgEEAYKaawECATCCAcswKQYIKwYBBQUHAgEWHWh0dHBzOi8vZG9jcy5uYW1pcmlhbHRzcC5j b20vMIIBnAYIKwYBBQUHAgIwggGOHoIBigBWAGEAbABpAGQAbwAgAHMAbwBsAG8AIABwAGUAcgAg AGwAYQAgAHAAcgBvAHQAZQB6AGkAbwBuAGUAIABkAGkAIABpAG4AdABlAGcAcgBpAHQA4AAgAGQA aQAgAGYAaQByAG0AZQAgAGUAbABlAHQAdAByAG8AbgBpAGMAaABlACAAZwBlAG4AZQByAGEAdABl ACAAZABhACAAdABlAGMAbgBvAGwAbwBnAGkAYQAgAE4AYQBtAGkAcgBpAGEAbAAgAEcAcgBvAHUA cAAvAFYAYQBsAGkAZAAgAG8AbgBsAHkAIABmAG8AcgAgAHAAcgBvAHQAZQBjAHQAaQBvAG4AIABv AGYAIABJAG4AdABlAGcAcgBpAHQAeQAgAG8AZgAgAGUALQBzAGkAZwBuAGEAdAB1AHIAZQAgAGcA ZQBuAGUAcgBhAHQAZQBkACAAYgB5ACAATgBhAG0AaQByAGkAYQBsACAARwByAG8AdQBwACcAcwAg AHQAZQBjAGgAbgBvAGwAbwBnAHkwCQYHBACL7EABATAIBgYEAI96AQEwNAYDVR0fBC0wKzApoCeg JYYjaHR0cDovL2NybC5uYW1pcmlhbHRzcC5jb20vQ0E0Sy5jcmwwDgYDVR0PAQH/BAQDAgZAMA0G CSqGSIb3DQEBCwUAA4ICAQCHBLQQWvCEM8q2Xxn3NL6Xn2Hs+ZVNQET1rNh6/ZhBorh/O8JunqX9 +5JU88h6kFvwxLm+84RyZk2oP+EX4RUZ3BteWVmctht71CzMVvx28YRaEaAPr5835hfHgXy9+K98 TMDQS9ah0StQ0RG4EAEniShIOGEng2LfeRZznFMsB95xPU/Pcr0oUHpfsLFmCyIx/fNNY1IIAp8p Y+nJQ52SlZ8FWctw0ipbwdy9XvzaLTKiLE0mh93/WJ02SI5S+b5sCA2vwvJ2iTpucSqbeBnMfcsv pUODgrIm5tpTsYIftJ8q4ueeunO2rLKw/ZADLJEEyx+wKdWkv2X/pypsFaEBSAIbXRBkpekdXAfW QM7HNfSQrGcMv9gI27wmnWD1XgNvx+PlJ3U3HvuL/Rl1NQPHhVhGWArJSRwLtZozMMNitP2uVSfg WIg5M7EA2+pNm3A9J1IyTySBT5B86xXkrGbRLyx4voSX7z/EsOOfcv5wlv5hc3gsid44gnwzeuPC 3JYOi7iytuurCr5dpYC3KkDaE6ARqAnU9yLmPAbvbBU/qRlNhNNU+JDep2llUHMtUJq7jDY5WrMx LvfofeELw7At2IUpHN0C3GsMsFF1Kb03/5j+GDvhTp/6G5AmsrnAtcSRAqX/XNGscKd+HcFLKogc KXW60bsCEfSd6z1or8gfnA==',
    ],
    'spiditalia' => [
        'provider' => 'spiditalia',
        'title' => 'SPIDItalia Register.it',
        'entityName' => 'SPIDItalia Register.it',
        'logo' => 'spid-idp-spiditalia.svg',
        'logoPng' => 'spid-idp-spiditalia.png',
        'isActive' => true,
        'entityId' => 'https://spid.register.it',
        'singleSignOnService' => [
            'url' => 'https://spid.register.it/login/sso',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'singleLogoutService' => [
            'url' => 'https://spid.register.it/login/singleLogout',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'x509cert' => 'MIIDazCCAlOgAwIBAgIED8R+MDANBgkqhkiG9w0BAQsFADBmMQswCQYDVQQGEwJJVDELMAkGA1UECBMCRkkxETAPBgNVBAcTCGZsb3JlbmNlMREwDwYDVQQKEwhyZWdpc3RlcjERMA8GA1UECxMIcmVnaXN0ZXIxETAPBgNVBAMTCHJlZ2lzdGVyMB4XDTE3MDcxMDEwMzM0OVoXDTI3MDcwODEwMzM0OVowZjELMAkGA1UEBhMCSVQxCzAJBgNVBAgTAkZJMREwDwYDVQQHEwhmbG9yZW5jZTERMA8GA1UEChMIcmVnaXN0ZXIxETAPBgNVBAsTCHJlZ2lzdGVyMREwDwYDVQQDEwhyZWdpc3RlcjCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBANkYXHbm3q6xt3wrLAXnytswtj2JE1MM8aYmNXkTgDMCwO/+ahQOoQru6IBTbjfWH9jr+Woy54FDdX6bHl+5/mO6l/yAB/bKgwe5HmUjZJ5oakJjWucsSm+VkEwN2HquBZoN+mktju00xvLX5VAjmDHvZc/b8NhNr/FRKlYITboygkhGiUwGI3wLf3IaB76J0o7ugpW2WNLcywpX+p1VWZAMCdHBveBe/e42hh6WnWPqdwYUWHOgJ8HX4IzCHifiS1n6eUMgtoTQOmSvTQDwSjD0WWJE8tWSYt+txXg1t+3A3tbZOFu7T442wE7DtMdUL4+8gimQS+e8PxDK1uTqIPUCAwEAAaMhMB8wHQYDVR0OBBYEFMCgo1gzCIcUThQIs5g5ikfv1D7eMA0GCSqGSIb3DQEBCwUAA4IBAQBnGw3i3hQ37L8vyelkyZMeO3tLK65Cqti4oVrQZxClGV5zNA6fIMDY8Mci1UhLwjzp29POd/sez0vuHZ/Vmmygzoye4jTKr6c3jAh0u81FTzefBU+vIietm9RuV3sd7D9xq6EqOY1NDL+rkvBcTFtiwLEUm2kHYu/U67jk73pxOtmqxQvQeMU8oi42tehMZGLIGp3U5lGS8YGGl+GtkkQ2Z5/PSm67HGP81kTArG/QX+bX+ykypTJVg9hfb9zOFQidp1HkCRIez6YhDiP/ZLurd6Grt/wVfZPNBO8EOgy25AkRZlp+UD686BFg7qq5KKEbz3qmPrj8deHL3duacZcp',
    ],
    'intesa' => [
        'provider' => 'intesa',
        'title' => 'Intesa',
        'entityName' => 'Intesa ID',
        'logo' => 'spid-idp-intesaid.svg',
        'logoPng' => 'spid-idp-intesaid.png',
        'isActive' => true,
        'entityId' => 'https://spid.intesa.it',
        'singleSignOnService' => [
            'url' => 'https://spid.intesa.it/Time4UserServices/services/idp/AuthnRequest/',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'singleLogoutService' => [
            'url' => 'https://spid.intesa.it/Time4UserServices/services/idp/SingleLogout',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'x509cert' => 'MIIEDjCCAvagAwIBAgIIIT1A+ywbIQAwDQYJKoZIhvcNAQELBQAwXjEzMDEGA1UEAwwqSU4uVEUuUy5BLiBTLnAuQSAtIENlcnRpZmljYXRpb24gQXV0aG9yaXR5MRowGAYDVQQKDBFJTi5URS5TLkEuIFMucC5BLjELMAkGA1UEBhMCSVQwHhcNMTcwOTE1MTMyMzQ1WhcNMzYwNzAxMTk1OTAwWjBQMSUwDwYDVQQuEwgyMDA3OTc5NzASBgNVBAMMC1NBTUwgU2lnbmVyMRowGAYDVQQKDBFJTi5URS5TLkEuIFMucC5BLjELMAkGA1UEBhMCSVQwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDhYXkP+eQBURgmslDXBjG0ad+DkSAkWt7hUoaTyiK0e34QiyArq043plqTrt+6FzTGeX7960Qr3tCLGCiVOi47QuE09IKfJmKGEaUQnJQehHYZs/XV0OYQl18WrCxUX6ALOcqPs+4ypCbJV1WzSosfBcPBzivJER8kvrynMXI3or18e9XPTGBn8qNFyNF1E3BJ5UhrDvk5W2gKyYKz0M/CIu9PiHuO/ne6HbeNrCS/xzXtjsTusk41AOxIQoFbEzS08xcRY+QDE8oLcAmecSjT3xv3r9dWke6KTTAahS3K+5mOYRcBXj2FFegiUp+xh4OAWdH1+gGDYm+3aAmMpaLtAgMBAAGjgd0wgdowHQYDVR0OBBYEFEw9xWg4qvQGdlGMCqmJcVDgdE8aMAwGA1UdEwEB/wQCMAAwHwYDVR0jBBgwFoAUySnWJ2sw0ljDpJVrtrxCCP0b1CYwGgYDVR0QBBMwEYAPMjAxNzA5MTUxMzIzNDVaMD8GA1UdHwQ4MDYwNKAyoDCGLmh0dHA6Ly9lLXRydXN0Y29tLmludGVzYS5pdC9DUkwvSU5URVNBX25DQS5jcmwwDgYDVR0PAQH/BAQDAgSwMB0GA1UdJQQWMBQGCCsGAQUFBwMCBggrBgEFBQcDBDANBgkqhkiG9w0BAQsFAAOCAQEAVRHyFRZZFpW/qjJpKftd86h3wOdUqOhc2W8ZHv0st8ptG+mZk3l1iWAsEPqKMIBhksgTvalnHC1lHUt11xsZ2mzUjVpiG8XiWXYXQnY2D+q7Dc4n20kJ717qf4SDN8wX1A6XvT3Wrsfh87vg3ZFD56/eyur2snWu4OilsFqAyLhnExG4puJ4JKBWnlwAGXD9SFgkSZ8FC66KQs6CAwVkvCIom3IwJeU/VrYQF6XHkVCQgr5mojXgCkrlRNl53WAKfQHCT4QH+oQVP97PCEL/wQ1zi0UzWauKT6u2wDym9rcpch+WLa0GUtYNhuoLU2SregPKwTWg2DfINJObyWRpww==',
    ],
    'lepida' => [
        'provider' => 'lepida',
        'title' => 'Lepida',
        'entityName' => 'Lepida',
        'logo' => 'spid-idp-lepidaid.svg',
        'logoPng' => 'spid-idp-lepidaid.png',
        'isActive' => true,
        'entityId' => 'https://id.lepida.it/idp/shibboleth',
        'singleSignOnService' => [
            'url' => 'https://id.lepida.it/idp/profile/SAML2/Redirect/SSO',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'singleLogoutService' => [
            'url' => 'https://id.lepida.it/idp/profile/SAML2/Redirect/SLO',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'x509cert' => 'MIIDHDCCAgSgAwIBAgIVALisbudTRxLy3vlMcEDfaqr3iW89MA0GCSqGSIb3DQEBCwUAMBcxFTAT BgNVBAMMDGlkLmxlcGlkYS5pdDAeFw0xODA4MDgxMDIzMTJaFw0zODA4MDgxMDIzMTJaMBcxFTAT BgNVBAMMDGlkLmxlcGlkYS5pdDCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAMOFERgx PEYPqAjN7oW6y8oSSY6tGm2OCIU+VyKhb2OqfNLpF8tPrytX17pgwVYHzjxRCNMTC83frbmtBapA Btm9KuX7qaSPvaJx0+UqYk9FdKCKQOEkmWcNOJfwzNMP65B+cDxP3sa1JoAMeAO0x95bnYoX0ZHc ssKkwpgMb8/JHZHzqu3odxADtO5PaT3xaCyMIcqIp1O2nVn7SizUE1gNucLAdaP4kh0o7nU61pz4 pG3gQXK+uROteDD8cTU2Nxi7W1T73tQSuwst54BS2p9IBXzWrA9V0Ck10oiQTcIC8X9McepCrNzg COBdap00Tifusb30t74BREARgwjp1N8CAwEAAaNfMF0wHQYDVR0OBBYEFL32/n7uf1Re14pW+gwG xZQHUZBCMDwGA1UdEQQ1MDOCDGlkLmxlcGlkYS5pdIYjaHR0cHM6Ly9pZC5sZXBpZGEuaXQvaWRw L3NoaWJib2xldGgwDQYJKoZIhvcNAQELBQADggEBAK80B1mEWKOTJkVJOJot2xU79Lhs1+domUSY QiA+tlS46IAfWwDZqI1llIjgL85n7qMsKFvYTIskInoG51Iezv2dTxlB6IMI8NPRfiFXo2s8NYjb zWyETbdXzCbDR0tKNke0TFE0oxunNfE5YRsmH4bPnjhPUjCSHX7wIhlNrLae3FjMQp1OLDs7HmJo 3AhuAVmHCoG7QV/ly4ZHcVYx4F7HUsFg5uxNYjZbo+XMutJz4nZFOFE+uRzTwwfdR2sxny+ppkru TwIhEXyzknoiw1mGIEWZc6scnOAiwZeqTccUYVNHp+PSFs9SD8l+2PO4Oh8Y3dYT+5ojv+S6T7vy 5xE=',
    ],
    'etnaid' => [
        'provider' => 'etnaid',
        'title' => 'EHT',
        'entityName' => 'EtnaID',
        'logo' => 'spid-idp-etnaid.svg',
        'logoPng' => 'spid-idp-etnaid.png',
        'isActive' => true,
        'entityId' => 'https://id.eht.eu',
        'singleSignOnService' => [
            'url' => 'https://id.eht.eu/SSO',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'singleLogoutService' => [
            'url' => 'https://id.eht.eu/SLS',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'x509cert' => 'MIIJKTCCBxGgAwIBAgIIJza0JRXSeRwwDQYJKoZIhvcNAQENBQAwgfsxCzAJBgNVBAYTAklUMQ0w CwYDVQQHDARSb21lMSYwJAYDVQQKDB1BZ2VuemlhIHBlciBsJ0l0YWxpYSBEaWdpdGFsZTEwMC4G A1UECwwnU2Vydml6aW8gQWNjcmVkaXRhbWVudG8gZSBwcm9nZXR0byBTUElEMTwwOgYDVQQDDDNQ cm9nZXR0byBTUElEIC0gR2VzdG9yaSBkaSBJZGVudGl0w6AgRGlnaXRhbGUgKElkUCkxKTAnBgkq hkiG9w0BCQEWGnByb3RvY29sbG9AcGVjLmFnaWQuZ292Lml0MRowGAYDVQQFExFWQVRJVC05Nzcz NTAyMDU4NDAeFw0yMzAyMTcwMDAwMDBaFw0zMzAyMTYyMzU5NTlaMIGcMQswCQYDVQQGEwJJVDEQ MA4GA1UECAwHQ2F0YW5pYTEQMA4GA1UEBwwHQ2F0YW5pYTEcMBoGA1UECgwTRXRuYUhpdGVjaCBT LkMucC5BLjESMBAGA1UEAwwJaWQuZWh0LmV1MRowGAYDVQRhDBFWQVRJVC0wNDMyMzIxMDg3NDEb MBkGA1UEUwwSaHR0cHM6Ly9pZC5laHQuZXUvMIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKC AgEA1JqeZUoCMKUh/Wm1X5NhvWQy2Kbp1uAAoJOmaBdR8ud2axp9Y+QABDcTVgDYgHG8o7AjOQWn PWz9LDvfzswu1CB3idEcg1cSiYVvphTMfmN62q+1HsuxvcWVuGIKq9CwGCnO2mVAOtt86rkaAsP9 5uou4vN9MlB8/nFY7gQjw/3h6fOZ3JS3Qdw1aY8N8SKJTPgSHvTThs8eTZy4ke5yvL09WSmosJLP 3h63HZwB2BpuUue0EzWS4YnSnZ6V1p7O1LQZr3e4QKg1TOplItDWDItFgZSCQqOraBf2tfIgPtFd pgUsuJGa1sywbyjfczQ62pE9chIc7F0DKUTdUV88ygyrpAHA2z5cWALXT9+uYtau2KtTf91M0Cru IkmGTu1IYSNtU+lCBdF+Pd1IlxP9HM5o5k++LUGQaDm9rsfhfYuRXFP6zp/TZsOoiygN8ryRcFOQ swdyoDGEK47cXm1jYTBwOhSGVReqf990gC7paeOZwptKGSFHE/DC0Kn5b3QCuad5Yx48G/H8znsh y1ZaEYR69Oh11Q/ytkKpZVNfvzVz2p43TPnNH3cQi0l4NzWV+x395sdJuObAT8ajcxl4aJ7niZna 9arO54CV+RWABoJl1DKCaqVX8eG6Ha/9W3hW3vDJgMf7JG7wm7rz72vcHMKigz5UTWtX4Ilfd79r hTUCAwEAAaOCAwwwggMIMAwGA1UdEwEB/wQCMAAwHQYDVR0OBBYEFKFmFUK23mm9Xsrqsguak005 wmCtMB8GA1UdIwQYMBaAFMhfI5fCW5/U6IcEkxe+3+UDSXdfMA4GA1UdDwEB/wQEAwIGwDARBgNV HREECjAIggZpZHAuaXQwFgYDVR0SBA8wDYILc3BpZC5nb3YuaXQwPwYDVR0fBDgwNjA0oDKgMIYu aHR0cHM6Ly9laWRhcy5hZ2lkLmdvdi5pdC9jcmwvY3JsX1NQSURfSWRQLmNybDBqBggrBgEFBQcB AQReMFwwRAYIKwYBBQUHMAKGOGh0dHA6Ly9laWRhcy5hZ2lkLmdvdi5pdC9jZXJ0aWZpY2F0aS9T dWJfQ0FfU1BJRF9JZFAuY2VyMBQGCCsGAQUFBzABhghodHRwczovLzCCAc4GA1UdIASCAcUwggHB MAkGBwQAjkYBBgIwgZUGBCtMEAYwgYwwRAYIKwYBBQUHAgIwOBo2RWxlY3Ryb25pYyBjZXJ0aWZp Y2F0ZSBjb25mb3JtaW5nIHdpdGggQUdJRCBHdWlkZWxpbmVzMEQGCCsGAQUFBwICMDgaNkNlcnRp ZmljYXRvIGVsZXR0cm9uaWNvIGNvbmZvcm1lIGFsbGUgTGluZWUgZ3VpZGEgQWdJRDByBgYrTBAE AQIwaDA5BggrBgEFBQcCAjAtGitTUElEOiBnZXN0b3JlIGRlbGxlIGlkZW50aXTgIGRpZ2l0YWxp IChJZFApMCsGCCsGAQUFBwICMB8aHVNQSUQ6IElkZW50aXR5IFByb3ZpZGVyIChJZFApMAgGBgQA j3oBAzBNBgQrTBAEMEUwQwYIKwYBBQUHAgEWN2h0dHBzOi8vZWlkYXMuYWdpZC5nb3YuaXQvY3Bz L0FnSURfZUlEQVNfcm9vdENBX2Nwcy5wZGYwTwYGBACORgEFMEUwQwYIKwYBBQUHAgEWN2h0dHBz Oi8vZWlkYXMuYWdpZC5nb3YuaXQvY3BzL0FnSURfZUlEQVNfcm9vdENBX2Nwcy5wZGYwDQYJKoZI hvcNAQENBQADggIBABlvKT22WGSr8xeLC0HcCtcZh1G2M+/4vDrptipMGNtpJQ3Oz3srPIo2WK9F qQGJ/Msd7L9n0uJz2c0/WRlFI/wom1KakyG4IxrerX7li5GhVGczse6eY+YbUBWFKsDseYE+1KTl hXJeyWfeT42VgYU24Zx4vFjvvGmTh3u2z6EYotFsUzZv2rA55uukxI7pat9u/plaBi9RIV5FUudC D6+5wpmUB6ks1sKGDnt9p7OtqDgTUnTiZKpSuW3E/TOp+EmedtYgujUhcpQ6vElbBs+nc9XH51Zw 3wmuxaq/knCmdTXzZquTRn8bwVJVy2EhDgxCvCuZsFZyr7taXqKz265WqCsQJozybNJQABzzavL2 c6rtqNATJJS3YyLmc3FdFk/HFIcGYMOOypdp9qZugIalg6LZmtCsio9mGA0iBk5DRmLceBmV+soJ fwDjXfW8IFy5md55MkbmdWRs/qjzWP2c3sI0CpVF7PGr7fHzYSCfLaueDXC1xZh4gigHMDrjwU9Q ay5SDhANe99Drumku5XnMDPky0WllHgJNfg32bYWOP0gcwCSbLNg/cB5n51oHXWi5nzP5zXE+4d3 Ffhzcw8aW89IJyJYF2HwRO/PpEAEmPSKmhkgL1cI60iHoLAFs8RrAPMBVj7SlJhuRskFnBxRvHzQ MUMGbLPHk0mm93gJ',
    ],
    'teamsystem' => [
        'provider' => 'teamsystem',
        'title' => 'TeamSystem',
        'entityName' => 'TeamSystem ID',
        'logo' => 'spid-idp-teamsystemid.svg',
        'logoPng' => 'spid-idp-teamsystemid.png',
        'isActive' => true,
        'entityId' => 'https://spid.teamsystem.com/idp',
        'singleSignOnService' => [
            'url' => 'https://spid.teamsystem.com/idp/sso/redirect',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'singleLogoutService' => [
            'url' => 'https://spid.teamsystem.com/idp/logout/redirect',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'x509cert' => 'MIIINTCCBh2gAwIBAgIIJz+ujRbSAYwwDQYJKoZIhvcNAQENBQAwgfsxCzAJBgNV BAYTAklUMQ0wCwYDVQQHDARSb21lMSYwJAYDVQQKDB1BZ2VuemlhIHBlciBsJ0l0 YWxpYSBEaWdpdGFsZTEwMC4GA1UECwwnU2Vydml6aW8gQWNjcmVkaXRhbWVudG8g ZSBwcm9nZXR0byBTUElEMTwwOgYDVQQDDDNQcm9nZXR0byBTUElEIC0gR2VzdG9y aSBkaSBJZGVudGl0w6AgRGlnaXRhbGUgKElkUCkxKTAnBgkqhkiG9w0BCQEWGnBy b3RvY29sbG9AcGVjLmFnaWQuZ292Lml0MRowGAYDVQQFExFWQVRJVC05NzczNTAy MDU4NDAeFw0yMjA1MTAwMDAwMDBaFw0zMjA1MDkyMzU5NTlaMIGrMRowGAYDVQRh DBFWQVRJVC0wMTAzNTMxMDQxNDEcMBoGA1UEAwwTc3BpZC50ZWFtc3lzdGVtLmNv bTEaMBgGA1UECgwRVGVhbVN5c3RlbSBTLnAuQS4xKDAmBgNVBFMMH2h0dHBzOi8v c3BpZC50ZWFtc3lzdGVtLmNvbS9pZHAxCzAJBgNVBAYTAklUMQ8wDQYDVQQHDAZQ ZXNhcm8xCzAJBgNVBAgMAlBVMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKC AQEAyNJMgyn+iquzTvLR5Z/eYBfOoyJIfI3rYcj5WOSlTzlqXXBCzdcROm/JKgrf 3MOTEzH8RAn6XkSHXtJDtMpD7GlwYB0mo8scqDNtpszbhm/UXapJTrP7gy/UI3yf n99n4hvqkGOdld7w5vaAPS0w9PdcaRxY/7X4olHKBAx2cHAwiqhKuiFEDhfACRWs bw4gaIjVM7NuUtL/jG+PJV1NHrEn10vizE7IneMxDNqiQ14IjLL7pJMEPXwbXedz ZsModKKAXIX5reNSegEU1Y386BCkmg4IMWd+DglmMJ4uuzcga1AppgjDuqb8yFDa NOKy/0Jivh2rs7u9boE4cLVBPQIDAQABo4IDCTCCAwUwCQYDVR0TBAIwADAdBgNV HQ4EFgQU/q5NWlPmylmZTsX0C2MwZkrx3b4wHwYDVR0jBBgwFoAUyF8jl8Jbn9To hwSTF77f5QNJd18wDgYDVR0PAQH/BAQDAgbAMBEGA1UdEQQKMAiCBmlkcC5pdDAW BgNVHRIEDzANggtzcGlkLmdvdi5pdDA/BgNVHR8EODA2MDSgMqAwhi5odHRwczov L2VpZGFzLmFnaWQuZ292Lml0L2NybC9jcmxfU1BJRF9JZFAuY3JsMGoGCCsGAQUF BwEBBF4wXDBEBggrBgEFBQcwAoY4aHR0cDovL2VpZGFzLmFnaWQuZ292Lml0L2Nl cnRpZmljYXRpL1N1Yl9DQV9TUElEX0lkUC5jZXIwFAYIKwYBBQUHMAGGCGh0dHBz Oi8vMIIBzgYDVR0gBIIBxTCCAcEwCQYHBACORgEGAjCBlQYEK0wQBjCBjDBEBggr BgEFBQcCAjA4GjZFbGVjdHJvbmljIGNlcnRpZmljYXRlIGNvbmZvcm1pbmcgd2l0 aCBBR0lEIEd1aWRlbGluZXMwRAYIKwYBBQUHAgIwOBo2Q2VydGlmaWNhdG8gZWxl dHRyb25pY28gY29uZm9ybWUgYWxsZSBMaW5lZSBndWlkYSBBZ0lEMHIGBitMEAQB AjBoMDkGCCsGAQUFBwICMC0aK1NQSUQ6IGdlc3RvcmUgZGVsbGUgaWRlbnRpdOAg ZGlnaXRhbGkgKElkUCkwKwYIKwYBBQUHAgIwHxodU1BJRDogSWRlbnRpdHkgUHJv dmlkZXIgKElkUCkwCAYGBACPegEDME0GBCtMEAQwRTBDBggrBgEFBQcCARY3aHR0 cHM6Ly9laWRhcy5hZ2lkLmdvdi5pdC9jcHMvQWdJRF9lSURBU19yb290Q0FfY3Bz LnBkZjBPBgYEAI5GAQUwRTBDBggrBgEFBQcCARY3aHR0cHM6Ly9laWRhcy5hZ2lk Lmdvdi5pdC9jcHMvQWdJRF9lSURBU19yb290Q0FfY3BzLnBkZjANBgkqhkiG9w0B AQ0FAAOCAgEAG9XZeAkIuqSmYb6bq5WrcI2FQtVrfbMH1CXGDKytZUsH5phkGfk/ 8UaIfkbHhnWakM4H9J2gnvfhKorfMt2FHyXFFJ38hlWR8MhFziqthXLUxyLZpUMn h8CcNQyFpNz7xbZk/qN5yFfJyY4Rggm1qdgCNR1LsVI3hjuaORTAzvy4kLjfuU5r nVYPcxpHF7feJKlN03d8JRKYaIi5U+QVYtYJpTcE7jeYmn4Ewfry2BDCOsnljeYl gm3fF8EEVpMfHIhvJg8evATWmKWHpXL2BRtVrl7TfhvtWqKv4tLff+Lv2YqRpmYu oApA48/MB4QxwAPUBnmQb3CxVGs6OCbE/tdUfda9HuHP5MXYLtTVbRYu8pHEPnaN jPA8y90KRw2wiedgjgOG8BxOkhVF/cYs3yH+0hbPS5Oji27t0P2g9eG/p9TOy4AI gUykFimVFk6HV9znknrFSdgsePSp+T5zy45Jdi1z4/RgJN10szJfqEBuvd8MhUu4 meVgfDqXrqavCVzGpSLuicdk41sTOviBz+PEgbQ/qP9KHQv67SHoF4US9Pp9tkyj VFUs7lBnrlFAPpOzd97XdiZfotCA5umibqlxLshy4UK7yl2LZFllpxrfiXTCDASM KlMMIcIsWx0lU/qw5KPpqvXELiya791kohJTi+9pyG7LXIOHHA0whr0=',
    ],
    'test' => [
        'provider' => 'test',
        'title' => 'Test IdP',
        'entityName' => 'Test IdP',
        'logo' => 'spid-idp-test.svg',
        'logoPng' => 'spid-idp-test.png',
        'isActive' => true,
        'entityId' => 'spid-testenv',
        'singleSignOnService' => [
            'url' => 'https://spid-testenv/sso',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'singleLogoutService' => [
            'url' => 'https://spid-testenv/slo',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'x509cert' => 'spid-testenv-cert',
    ],
    'validator' => [
        'provider' => 'validator',
        'title' => 'SPID Validator',
        'entityName' => 'SPID Validator',
        'logo' => 'spid-validator.svg',
        'logoPng' => 'spid-validator.png',
        'isActive' => true,
        'entityId' => 'spid-validator',
        'singleSignOnService' => [
            'url' => 'https://spid-validator/sso',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'singleLogoutService' => [
            'url' => 'https://spid-validator/slo',
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        'x509cert' => 'spid-validator-cert',
    ],
    'empty' => [
        'provider' => 'empty',
        'entityId' => 'empty',
        'singleSignOnService' => [
            'url' => 'https://empty',
        ],
        'x509cert' => 'empty',
    ],
];
