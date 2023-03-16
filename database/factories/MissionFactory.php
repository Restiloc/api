<?php

namespace Database\Factories;

use App\Models\Expert;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

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
            'dateMission' => Carbon::create(2023, rand(1, 12), rand(1, 31), null, null, null)->toDateTimeString(),
            'startedAt' => Carbon::create(null, null, null, rand(8, 17), rand(0, 59), rand(0, 59))->toDateTimeString(),
            'kilometersCounter' => fake()->numberBetween(1000, 300000),
            'folder' => fake()->regexify('[A-Z0-9]{5}'), // génère un nom alphanumérique de 5 caractères,
            // Possibilité de création d'une table type et renvoyer le type_id
            'type' => fake()->randomElement(['Garage', 'Client']),
            'isFinished' => false,
            'vehicle_id' => Vehicle::all()->random()->id,
            'expert_id' => Expert::all()->random()->id,
            'garage_id' => null,
            'client_id' => null,
        ];
    }
}
