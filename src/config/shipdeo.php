<?php

return [
    // Configuration options for Shipdeo
    'auth' => [
        'client_id' => env('SHIPDEO_CLIENT_ID', 'SX+h5I+lIhr0PbXy'),
        'client_secret' => env('SHIPDEO_CLIENT_SECRET', 'EDy8GaRQHXdw4WlB'),
        'platform' => env('SHIPDEO_PLATFORM', 'integrasi'),
        'url' => env('SHIPDEO_AUTH_URL', 'https://auth-api-development.shipdeo.com/oauth2/connect/token'),
    ],
];
