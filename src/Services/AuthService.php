<?php

namespace Shipdeo\Services;

use GuzzleHttp\Client;

class AuthService
{
    protected $client;
    protected $config;

    public function __construct()
    {
        $this->client = new Client();
        $this->config = config('shipdeo.auth');
    }

    public function authenticate($clientId, $clientSecret, $username, $password, $platform)
    {
        $response = $this->client->post($this->config['url'], [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'form_params' => [
                'client_id' => $clientId,
                'client_secret' => $clientSecret,
                'grant_type' => 'client_credentials',
                'username' => $username,
                'password' => $password,
                'platform' => $platform,
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
