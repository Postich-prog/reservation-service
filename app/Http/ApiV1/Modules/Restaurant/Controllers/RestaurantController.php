<?php

namespace App\Http\ApiV1\Modules\Restaurant\Controllers;


use App\Domain\Reservation\Actions\CreateRestaurantAction;
use App\Domain\Reservation\Models\Restaurant;
use App\Http\ApiV1\Modules\Restaurant\Queries\RestaurantQuery;
use App\Http\ApiV1\Modules\Restaurant\Requests\CreateRestaurantRequest;
use App\Http\ApiV1\Modules\Restaurant\Resources\RestaurantCollection;
use App\Http\ApiV1\Modules\Restaurant\Resources\RestaurantResource;
use DB;

class RestaurantController
{
    public function create(CreateRestaurantRequest $request, CreateRestaurantAction $action): RestaurantResource
    {
        return new RestaurantResource($action->execute($request->validated()));
    }

    public function get(int $id, RestaurantQuery $query): RestaurantResource
    {
        return new RestaurantResource($query->findOrFail($id));
    }

    public function getAll(RestaurantQuery $query): RestaurantCollection
    {
        return new RestaurantCollection($query->getAll());
    }

}