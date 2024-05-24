<?php

namespace App\Http\ApiV1\Modules\Restaurant\Resources;

use App\Domain\Reservation\Models\Restaurant;
use App\Http\ApiV1\Support\Resources\BaseJsonResource;

/**
 * @mixin Restaurant
 */
class RestaurantResource extends BaseJsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ];
    }
}