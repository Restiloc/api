<?php

namespace Database\Factories;

use App\Models\Client;
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
            'startedAt' => now()->addHours(fake()->numberBetween(0, 23))->addMinutes(fake()->numberBetween(0, 59)),
            'kilometersCounter' => fake()->numberBetween(1000, 200000),
            'folder' => fake()->regexify('[A-Z0-9]{5}'), // génère un nom alphanumérique de 5 caractères,
            'type' => fake()->randomElement(['Garage', 'Client']),
            'isFinished' => true,
            'vehicle_id' => Vehicle::all()->random()->id,
            'expert_id' => Expert::all()->random()->id,
            'garage_id' => Garage::all()->random()->id,
            'client_id' => Client::all()->random()->id,
        ];
    }
}
