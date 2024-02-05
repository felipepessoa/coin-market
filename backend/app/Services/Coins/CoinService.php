<?php

namespace App\Services\Coins;

use App\Dto\Coins\GetCoinDataResponseDto;
use App\Exceptions\Coins\CoinServiceException;
use App\Services\BaseService;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\JsonResponse;

class CoinService extends BaseService
{
    public function getCoinData(string $id)
    {
        $client = $this->getClient();

        try {

            $response = $client->get("coins/{$id}");
            $data = $response->getBody()->getContents();

            return GetCoinDataResponseDto::from($data);

        } catch (GuzzleException $e) {
            return response()->json(CoinServiceException::MESSAGE, CoinServiceException::CODE);
        }
    }
}
