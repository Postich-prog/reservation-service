<?php

namespace App\Http\ApiV1\Modules\Restaurant\Controllers;

use App\Domain\Reservation\Actions\CreateReservationAction;
use App\Domain\Reservation\Models\Reservation;
use App\Http\ApiV1\Modules\Restaurant\Requests\CreateReservationRequest;
use App\Http\ApiV1\Modules\Restaurant\Resources\ReservationResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Request;
use Response;

class ReservationController
{
    public function create(int $restaurantId, CreateReservationRequest $request, CreateReservationAction $action): ReservationResource
    {
        $validatedData = $request->validated();
        $validatedData['restaurant_id'] = $restaurantId;
        $reservation = $action->execute($validatedData);
        return new ReservationResource($reservation);
    }


    public function get($restaurantId): AnonymousResourceCollection
    {
        $reservations = Reservation::where('restaurant_id', $restaurantId)->get();

        return ReservationResource::collection($reservations);
    }
}