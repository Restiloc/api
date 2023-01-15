<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experts>
 */
class ExpertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'firstName' => fake()->firstName(),
            'email' => fake()->email(),
            'email_verified_at' => now(),
            'phoneNumber' => fake()->phoneNumber(),
            'username' => fake()->userName(),
            'password' => fake()->password()
        ];
    }
}
