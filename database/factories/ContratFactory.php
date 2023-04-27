<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contrat>
 */
class ContratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numeroContrat'
            => fake()->numberBetween(100000, 999999),
            'dateDebut' => fake()->dateTimeBetween('-1 years', 'now'),
            'dateFin' => fake()->dateTimeBetween('now', '+1 years'),
            'degreeFranchise' => fake()->numberBetween(0, 2),
            'assurence_id' => fake()->numberBetween(1, 3),
        ];
    }
}
