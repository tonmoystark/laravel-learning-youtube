<?php

namespace Database\Factories;

use App\Models\Teacher;
use App\Models\TeacherProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TeacherProfile>
 */
class TeacherProfileFactory extends Factory
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
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'qualification' => $this->faker->jobTitle(),
        ];
    }
}
