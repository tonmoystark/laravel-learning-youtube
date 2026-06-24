<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Hero;
use App\Models\HeroProfile;
use App\Models\Learner;
use App\Models\Student;
use App\Models\Student_Profile;
use App\Models\StudentProfile;
use App\Models\Teacher;
use App\Models\TeacherProfile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Hero::factory(10)->create();
        HeroProfile::factory(10)->create();
        Student::factory(10)->create();
        StudentProfile::factory(10)->create();
        Teacher::factory()
            ->count(10)
            ->has(TeacherProfile::factory(), 'profile')
            ->has(Course::factory()->count(3), 'courses')
            ->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
