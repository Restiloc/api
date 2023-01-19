<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'licencePlate' => fake()->word(),
            'color' => fake()->word(),
            'releaseYear' => fake()->year(),
            'vehicle_model_id' => 1,
        ];
    }
}
