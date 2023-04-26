<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\VehicleModel;
use App\Models\VehicleState;
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
            'contract_company_id' => Company::all()->random()->id,
            'contractNumber' => (string) fake()->numberBetween(100000, 999999),
            'contract_guarantee_level_id' => fake()->numberBetween(1, 3),
            'contractEndDate' => fake()->dateTimeBetween('now', '+2 year'),
            'vehicle_state_id' => VehicleState::all()->random()->id,
            'vehicle_model_id' => VehicleModel::all()->random()->id,
        ];
    }
}
