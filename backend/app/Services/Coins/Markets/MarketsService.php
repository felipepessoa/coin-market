<?php

namespace App\Services\Coins\Markets;

use App\Dto\Coins\Markets\GetMarketsDataResponseDto;
use App\Exceptions\Coins\Markets\MarketsServiceException;
use App\Services\BaseService;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\JsonResponse;


class MarketsService extends BaseService
{
    public function getMarketsData(array $params = []): array|JsonResponse
    {
        $client = $this->getClient();

        try {

            $response = $client->get('coins/markets', ['query' => $params]);
            $data = json_decode($response->getBody()->getContents(), true);

            return GetMarketsDataResponseDto::collection($data)->toArray();
        } catch (GuzzleException $e) {
            return response()->json(MarketsServiceException::MESSAGE, MarketsServiceException::CODE);
        }
    }
}
