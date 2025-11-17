return [
    'disks' => [
        'private' => [
            'driver' => 'local',
            'root' => storage_path('app/private'),
            'url' => env('APP_URL').'/storage/private',
            'visibility' => 'private',
        ],
    ],
];