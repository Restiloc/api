<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contract>
 */
class ContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'contractNumber'
            => fake()->numberBetween(100000, 999999),
            'dateDebut' => fake()->dateTimeBetween('-1 years', 'now'),
            'dateFin' => fake()->dateTimeBetween('now', '+1 years'),
            'degreeFranchise' => fake()->numberBetween(0, 2),
            'insurance_id' => fake()->numberBetween(1, 3),
        ];
    }
}
