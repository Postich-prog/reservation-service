<?php

namespace App\Domain\Reservation\Models\Tests\Factories;

use App\Domain\Reservation\Models\Restaurant;
use Ensi\LaravelTestFactories\BaseModelFactory;

class RestaurantFactory extends BaseModelFactory
{
    protected $model = Restaurant::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
        ];
    }
}