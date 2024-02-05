<?php

namespace App\Http\Requests\Coins\Markets;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class MarketsRequest
 * @package App\Http\Requests
 */
class MarketsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'vs_currency' => 'required|string',
            'order' => 'string',
            'per_page' => 'integer',
            'page' => 'integer',
            'sparkline' => 'boolean',
        ];
    }
}
