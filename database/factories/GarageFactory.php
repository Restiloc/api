<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Garages>
 */
class GarageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->words(3, true),
            'addressNumber' => fake()->streetAddress(),
            'street' => fake()->streetName(),
            'postalCode' => fake()->postcode(),
            'city' => fake()->city(),
            'phoneNumber' => fake()->phoneNumber(),
            'latitude' => fake()->latitude(),
            'longitude' => fake()->longitude()
        ];
    }
}