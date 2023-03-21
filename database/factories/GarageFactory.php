<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Garage>
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
            'name' => fake()->word() . ' Garage',
            'addressNumber' => fake()->numberBetween(1, 400),
            'street' => fake()->streetName(),
            'postalCode' => fake()->postcode(),
            'city' => fake()->city(),
            'phoneNumber' => fake()->phoneNumber(),
            'latitude' => "48.5734053",
            'longitude' => "7.7521113"
        ];
    }
}
