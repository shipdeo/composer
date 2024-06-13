# Shipdeo API

A Shipdeo API package.

## 1. Installation

You can install the package via composer:

```bash
composer require shipdeo/api
```

## 2. Configuration

Add the following environment variables to your .env file:

```plaintext
SHIPDEO_CLIENT_ID=your-client-id
SHIPDEO_CLIENT_SECRET=your-client-secret
SHIPDEO_PLATFORM=your-platform
SHIPDEO_AUTH_URL=https://auth-api-development.shipdeo.com/oauth2/connect/token
```

## 3. Usage
### Authenticationg

```php
use Shipdeo\Facades\Shipdeo;

$authService = app('shipdeo.auth');
$response = $authService->authenticate(
    config('shipdeo.auth.client_id'),
    config('shipdeo.auth.client_secret'),
    'your-username',
    'your-password',
    config('shipdeo.auth.platform')
);

echo $response['accessToken'];
```


### Step 4: Autoload Dependencies

Make sure to update your `composer.json` to include the necessary dependencies:

```json
"require": {
    "php": ">=7.4",
    "guzzlehttp/guzzle": "^7.0"
}
```

Run composer update to install the new dependencies.

