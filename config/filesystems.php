<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. A "local" driver, as well as a variety of cloud
    | based drivers are available for your choosing. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

        'uploads' => [
            'driver' => 's3',
            'key' => env('BB_KEY_PUBLIC'),
            'secret' => env('BB_SECRET_PUBLIC'),
            'region' => env('BB_REGION'),
            'bucket' => env('BB_BUCKET_PUBLIC'),
            'endpoint' => env('BB_ENDPOINT'),
            'url' => env('BB_URL_PUBLIC'),
            'visibility' => 'public'
        ],

        'media' => [
            'driver' => 's3',
            'key' => env('BB_KEY_MEDIA'),
            'secret' => env('BB_SECRET_MEDIA'),
            'region' => env('BB_REGION'),
            'bucket' => env('BB_BUCKET_MEDIA'),
            'endpoint' => env('BB_ENDPOINT'),
            'url' => env('BB_URL_MEDIA'),
            'visibility' => 'public'
            
        ],
        'resources' => [
            'driver' => 's3',
            'key' => env('WAS_ACCESS_KEY_ID'),
            'secret' => env('WAS_SECRET_ACCESS_KEY'),
            'region' => env('WAS_DEFAULT_REGION'),
            'bucket' => env('WAS_BUCKET'),
            'endpoint' => env('WAS_URL'),
            'visibility' => 'public',    
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],
        'private' => [
            'driver' => 's3',
            'key' => env('BB_KEY_PRIVATE'),
            'secret' => env('BB_SECRET_PRIVATE'),
            'region' => env('BB_REGION'),
            'bucket' => env('BB_BUCKET_PRIVATE'),
            'endpoint' => env('BB_ENDPOINT'),
            'url' => env('BB_URL_PRIVATE'),
        ]

    ],

];
