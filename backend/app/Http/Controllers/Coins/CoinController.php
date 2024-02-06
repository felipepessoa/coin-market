<?php

namespace App\Http\Controllers\Coins;

use App\Exceptions\Coins\CoinServiceException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Coins\CoinRequest;
use App\Services\Coins\CoinService;
use Illuminate\Http\JsonResponse;

class CoinController extends Controller
{


    public function __construct(
        protected CoinService $coinService
    ){

    }

    public function index(CoinRequest $request)
    {
        $params = $request->validated();
        try {

            return $this->coinService->getCoinData($params['id']);

        } catch (\Exception $e) {

            return response()->json(CoinServiceException::MESSAGE, CoinServiceException::CODE);
        }
    }
}
