<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => '337324593444896',         // Your GitHub Client ID
        'client_secret' => '54199489d24e4068f103380046a60f4a', // Your GitHub Client Secret
        'redirect' => 'http://kobuplus.com/sociallogin',
    ],

    'google' => [
        'client_id' => '117841940759-fdeaqqs1o9ahobc5ccet9mlhenvuvkk4.apps.googleusercontent.com',         // Your GitHub Client ID
        'client_secret' => 'Lhb8jD1e421S2-muq74oJkNS', // Your GitHub Client Secret
        'redirect' => 'http://kobuplus.com/googlesociallogin',
    ],

];
