<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Insurance>
 */
class InsuranceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->text("MAIF", "MATMUT", "AXA"),
            'addressNumber' => fake()->text("18", "1/3", "6"),
            'street' => fake()->text("route de Polygone", "rue Saint Aloise", "Quai Kleber"),
            'postalCode' => fake()->number(67000, 67100, 67000),
            'city' => fake()->text("Strasbourg", "Strasbourg", "Strasbourg"),
            'phoneNumber' => fake()->text("0972721515", "0388659778", "0388150490")
        ];
    }
}
