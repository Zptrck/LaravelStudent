<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Students; // Import the correct model

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * The name of the model that this factory corresponds to.
     * Ensure it's correctly assigned to avoid errors.
     *
     * @var string
     */
    protected $model = Students::class; // Explicitly define the model

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'gender' => fake()->randomElement(['Male', 'Female']),
            'age' => fake()->numberBetween(18, 22),
            'email' => fake()->safeEmail(),
        ];
    }
}
