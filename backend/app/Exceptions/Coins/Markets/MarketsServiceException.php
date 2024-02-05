<?php

namespace App\Exceptions\Coins\Markets;

use Exception;

class MarketsServiceException extends Exception
{
    public const MESSAGE = 'An error occurred while retrieving data from the API.';
    public const CODE = 500;


}
