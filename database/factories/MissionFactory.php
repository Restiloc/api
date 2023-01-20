<?php

namespace Database\Factories;

use App\Models\Expert;
use App\Models\Garage;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Missions>
 */
class MissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'dateMission' => now()->addDays(fake()->numberBetween(0, 30)),
            'kilometersCounter' => fake()->numberBetween(1000, 200000),
            'nameExpertFile' => fake()->name(),
            'vehicle_id' => Vehicle::all()->random()->id,
            'expert_id' => Expert::all()->random()->id,
            'garage_id' => Garage::all()->random()->id,
        ];
    }
}
