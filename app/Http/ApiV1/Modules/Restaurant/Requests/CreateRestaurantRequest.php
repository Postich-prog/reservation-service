<?php

namespace App\Http\ApiV1\Modules\Restaurant\Requests;

use App\Http\ApiV1\Support\Requests\BaseFormRequest;

class CreateRestaurantRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
        ];
    }
}