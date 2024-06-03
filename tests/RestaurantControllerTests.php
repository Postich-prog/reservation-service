<?php

namespace Tests;
use Illuminate\Http\Response;
use Tests\TestCase;
class RestaurantControllerTests
{
    public function testIndexReturnsDataInValidFormat() {

        $this->json('get', 'api/v1/restaurants/')
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure(
                [
                    'data' => [
                        '*' => [
                            'id',
                            'name',
                            'description',
                        ]
                    ]
                ]
            );
    }

    public function testUserIsCreatedSuccessfully() {

        $payload = [
            'name' => $this->faker->name,
            'description'  => $this->faker->description
        ];
        $this->json('post', 'api/v1/restaurants/', $payload)
            ->assertStatus(Response::HTTP_CREATED)
            ->assertJsonStructure(
                [
                    'data' => [
                        'id',
                        'name',
                        'description',
                    ]
                ]
            );
        $this->assertDatabaseHas('restaurants', $payload);
    }
}