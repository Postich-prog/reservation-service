<?php

namespace App\Domain\Reservation\Actions;

use App\Domain\Reservation\Models\Restaurant;

class CreateRestaurantAction
{
    public function execute(array $fields): Restaurant
    {
        $restaurant = new Restaurant();
        $restaurant->fill($fields);
        $restaurant->save();

        return $restaurant;
    }
}