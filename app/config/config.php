<?php

return
    [
        'defaults' => [
            'guard' => env('AUTH_GUARD', 'ABC'),
        ],
        'guards' => [
            'ABC' => [
                'driver' => 'token',
                'provider' => 'XYZ'
            ],
        ],
        'providers' => [
            'XYZ' => [
                'driver' => 'eloquent',
                'model' => App\Member::class,
            ],
        ],
    ];
