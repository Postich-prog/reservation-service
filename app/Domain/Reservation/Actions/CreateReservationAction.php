<?php

namespace App\Domain\Reservation\Actions;

use App\Domain\Reservation\Models\Reservation;

class CreateReservationAction
{
    public function execute(array $fields): Reservation
    {
        $reservation = new Reservation();
        $reservation->fill($fields);
        $reservation->save();

        return $reservation;
    }
}
