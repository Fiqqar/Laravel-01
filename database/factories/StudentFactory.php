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
        $gender = $this->faker->randomElement(['Laki-laki', 'Perempuan']);
        return [
            'name' => $gender == 'Laki-laki' 
                    ? $this->faker->firstNameMale()
                    : $this->faker->firstNameFemale(),
            'gender' => $gender,
            'email' => $this->faker->unique()->safeEmail(),
            'birthdate' => $this->faker->date(),
            'grade' => $this->faker->randomElement(array: ['10 PPLG 2', '10 PPLG 1', '10 PPLG 3', '11 PPLG 1', '11 PPLG 2']),
            'address' => $this->faker->address(), 
        ];
    }
}
