<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\StudentProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<StudentProfile>
 */
class StudentProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'guardian_name' => $this->faker->name(),
            'student_id' => Student::factory(),
        ];
    }
}
