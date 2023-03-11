<?php

namespace Database\Factories;

use App\Models\Mission;
use App\Models\Reason;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Unavailabilitie>
 */
class UnavailabilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'customerResponsible' => fake()->boolean(),
            'reason_id' => Reason::all()->random()->id,
            'mission_id' => Mission::all()->random()->id,
        ];
    }
}
