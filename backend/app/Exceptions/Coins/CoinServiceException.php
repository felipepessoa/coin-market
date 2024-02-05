<?php

namespace App\Exceptions\Coins;

use Exception;

class CoinServiceException extends Exception
{
    public const MESSAGE = 'An error occurred while retrieving data from the API.';
    public const CODE = 500;
}
