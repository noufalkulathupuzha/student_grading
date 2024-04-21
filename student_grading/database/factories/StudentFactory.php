<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(20),
            'course'=>fake()->realText(20),
            'branch'=>fake()->realText(30),
            'registration_number'=>fake()->randomLetter(),
            'date_of_birth'=>fake()->date('d-m-Y'),
            'address'=>fake()->address(),
            'user_id'=>1,
        ];
    }
}
