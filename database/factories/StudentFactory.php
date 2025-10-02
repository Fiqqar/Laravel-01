<?php

namespace Database\Factories;

use App\Models\Classroom;
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
        $gender = $this->faker->randomElement(['Laki-laki', 'Perempuan']);
        return [
            'name' => $gender == 'Laki-laki'
                ? $this->faker->firstNameMale()
                : $this->faker->firstNameFemale(),
            'gender' => $gender,
            'email' => $this->faker->unique()->safeEmail(),
            'birthdate' => $this->faker->date(),
            'classroom_id' => Classroom::factory(),
            'address' => $this->faker->address(),
        ];
    }
}
