<?php

namespace App\Services;

use GuzzleHttp\Client;

/**
 * Class BaseService
 *
 * This abstract class provides a base for all service classes in the application.
 * It includes a method for getting a GuzzleHttp client instance with the base URL
 * and headers already set for the CoinGecko API.
 *
 * @package App\Services
 */
abstract class BaseService
{
    /**
     * Get a GuzzleHttp client instance.
     *
     * This method returns a GuzzleHttp client instance with the base URL and headers
     * already set for the CoinGecko API. The base URL and API key are retrieved from
     * the application's configuration.
     *
     * @return Client The GuzzleHttp client instance.
     */
    protected function getClient(): Client
    {
        return new Client([
            'base_uri' => config('app.coin_gecko.api_url'),
            'headers' => [
                'x_cg_pro_api_key' => config('app.coin_gecko.api_key')
            ]
        ]);
    }
}
