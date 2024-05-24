<?php

namespace App\Http\ApiV1\Modules\Restaurant\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReservationResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'restaurant_id' => $this->restaurant_id,
            'fromreserve' => $this->fromreserve,
            'toreserve' => $this->toreserve,
            'numguests' => $this->numguests,
        ];
    }
}