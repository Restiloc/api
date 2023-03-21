<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lastName' => fake()->lastName(),
            'firstName' => fake()->firstName(),
            'email' => fake()->email(),
            'phoneNumber' => fake()->phoneNumber(),
            'addressNumber' => fake()->numberBetween(1, 400),
            'postalCode' => fake()->postcode(),
            'street' => fake()->streetName(),
            'city' => fake()->city(),
            'latitude' => "48.8333",
            'longitude' => "7.1833"
        ];
    }
}
