<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
     'client_id' => '1288676511305769',
     'client_secret' => '639140d9ab83f47baf676b64927a0adf',
     'redirect' => 'http://localhost:8000/callback/facebook',
   ],

    'google' => [
        'client_id' => '314075673053-161rliv1fq6artcbr2agesrfq8mfaa48.apps.googleusercontent.com',
        'client_secret' => '05IbzsKWd-5x9CFAfU0MQPWY',
        'redirect' => 'http://localhost:8000/callback/google',

    ]

];
