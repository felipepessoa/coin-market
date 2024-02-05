<?php

namespace App\Http\Requests\Coins;

use Illuminate\Foundation\Http\FormRequest;

class CoinRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'id' => 'required|string',
        ];
    }
}
