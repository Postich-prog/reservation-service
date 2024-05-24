<?php

namespace App\Http\ApiV1\Modules\Restaurant\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class RestaurantCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return $this->collection->transform(function ($restaurant) {
            return [
                'id' => $restaurant->id,
                'name' => $restaurant->name,
                'description' => $restaurant->description,
            ];
        });
    }
}