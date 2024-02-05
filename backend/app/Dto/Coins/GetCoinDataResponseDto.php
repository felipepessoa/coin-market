<?php

namespace App\Dto\Coins;

use Spatie\LaravelData\Data;

class GetCoinDataResponseDto extends Data
{
    public string $id;
    public string $symbol;
    public string $name;
    public string $web_slug;
    public array $image;

    public array $market_data;
    public string $last_updated;

}
