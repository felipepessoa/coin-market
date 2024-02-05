<?php

namespace App\Http\Controllers\Coins\Markets;

use App\Exceptions\Coins\Markets\MarketsServiceException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Coins\Markets\MarketsRequest;
use App\Services\Coins\Markets\MarketsService;
use Illuminate\Http\JsonResponse;

/**
 * Class MarketsController
 *
 * This class extends the base Controller class and provides a method for handling
 * requests related to market data from the CoinGecko API.
 *
 * @package App\Http\Controllers\Markets
 */
class MarketsController extends Controller
{
    /**
     * @var MarketsService
     *
     * The service class for handling operations related to market data.
     */
    protected MarketsService $coinsService;

    /**
     * MarketsController constructor.
     *
     * This constructor method initializes the MarketsService.
     *
     * @param MarketsService $coinsService The service class for market data operations.
     */
    public function __construct(MarketsService $coinsService)
    {
        $this->coinsService = $coinsService;
    }

    /**
     * Handle a request to get market data.
     *
     * This method handles a request to get market data from the CoinGecko API.
     * It uses the MarketsService to retrieve the data and returns it as a JSON response.
     * If an error occurs during the retrieval of the data, a MarketsServiceException is thrown.
     *
     * @param MarketsRequest $request The request object containing the parameters for the API request.
     * @return JsonResponse The market data from the API, or an error message if an error occurred.
     */
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
