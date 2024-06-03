<?php

namespace App\Http\ApiV1\Modules\Restaurant\Tests;
use App\Http\ApiV1\Support\Tests\ApiV1ComponentTestCase;
use App\Domain\Reservation\Models\Restaurant;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;
uses(ApiV1ComponentTestCase::class);
uses()->group('component');

test('POST /api/v1/restaurants create success', function () {
    $request = [
        'name' => 'Test name',
        'description' => 'test desc body',
    ];

    postJson('/api/v1/restaurants/', $request)
        ->assertStatus(201)
        ->assertJsonPath('data.name', $request['name'])
        ->assertJsonPath('data.description', $request['description']);


    assertDatabaseHas(Restaurant::class, [
        'name' => $request['name'],
    ]);
});

test('GET /api/v1/restaurants/{id} get restaurant success', function () {
    /** @var Restaurant $restaurant */
    $restaurant = Restaurant::factory()->create();

    getJson("/api/v1/restaurants/{$restaurant->id}")
        ->assertStatus(200)
        ->assertJsonPath('data.name', $restaurant->name)
        ->assertJsonPath('data.description', $restaurant->description);
});