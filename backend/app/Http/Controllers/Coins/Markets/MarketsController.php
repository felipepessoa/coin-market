<?php

namespace App\Http\Controllers\Coins\Markets;

use App\Exceptions\Coins\Markets\MarketsServiceException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Coins\Markets\MarketsRequest;
use App\Services\Coins\Markets\MarketsService;
use Illuminate\Http\JsonResponse;


class MarketsController extends Controller
{




    public function __construct(
        protected MarketsService $coinsService
    ){

    }


    public function index(MarketsRequest $request): JsonResponse
    {
        try {
            $data = $this->coinsService->getMarketsData($request->validated());
            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json(MarketsServiceException::MESSAGE, MarketsServiceException::CODE);
        }
    }
}
