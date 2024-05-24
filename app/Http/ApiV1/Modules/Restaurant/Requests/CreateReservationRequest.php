<?php

namespace App\Http\ApiV1\Modules\Restaurant\Requests;

use App\Http\ApiV1\Support\Requests\BaseFormRequest;

class CreateReservationRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            'numguests' => ['required', 'int'],
            'fromreserve' => ['required', 'date_format:Y-m-d H:i:s'],
            'toreserve' => ['required', 'date_format:Y-m-d H:i:s'],
        ];
    }
}