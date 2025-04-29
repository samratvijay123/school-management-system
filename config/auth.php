<?php

return [

    'defaults' => [
        'guard' => 'web',  // Default authentication guard
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
        'teacher' => [
            'driver' => 'session',
            'provider' => 'teachers',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL',App\Models\User::class),
        ],
        'admins' => [
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL',App\Models\User::class), // Ensure this model exists
        ],
        'teachers' => [
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL',App\Models\User::class), // Ensure this model exists
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
        'admins' => [  // Added password reset settings for admins
            'provider' => 'admins',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];
