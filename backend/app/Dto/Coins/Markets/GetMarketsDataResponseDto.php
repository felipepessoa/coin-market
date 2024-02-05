<?php

namespace App\Dto\Coins\Markets;


use Spatie\LaravelData\Data;

class GetMarketsDataResponseDto extends Data
{


    public string $id;
    public string $symbol;
    public string $name;
    public string $image;
    public float $current_price;
    public int $market_cap_rank;
    public float $high_24h;
    public float $low_24h;
    public float $price_change_24h;
    public float $price_change_percentage_24h;
    public string $last_updated;
}
