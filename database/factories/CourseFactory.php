<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Course>
 */
class CourseFactory extends Factory
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
            'name' => $this->faker->randomElement([
                'Laravel Fundamentals',
                'Advanced Laravel',
                'PHP Programming',
                'Object Oriented PHP',
                'MySQL Database Design',
                'JavaScript Essentials',
                'Advanced JavaScript',
                'React Fundamentals',
                'React & Laravel Integration',
                'REST API Development',
                'Web Development Bootcamp',
                'Git & GitHub',
                'Data Structures',
                'Algorithms Basics',
                'Frontend Development',
                'Backend Development',
                'Software Engineering',
                'Database Management Systems',
                'Computer Networks',
                'Cyber Security Fundamentals',
            ]),
            'description' => $this->faker->text(),
            'start_date' => $this->faker->date(),
        ];
    }
}
