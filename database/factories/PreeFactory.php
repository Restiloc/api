<?php

namespace Database\Factories;

use App\Models\Mission;
use App\Models\Pree;
use App\Models\Unavailability;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pree>
 */
class PreeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'label' => fake()->word(),
            'description' => fake()->words(5, true),
            'image' => fake()->image(),
            'mission_id' => Mission::all()->random()->id,
        ];
    }
}
