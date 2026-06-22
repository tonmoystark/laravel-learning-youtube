<?php

namespace Database\Factories;

use App\Models\Hero;
use App\Models\HeroProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<HeroProfile>
 */
class HeroProfileFactory extends Factory
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
            'email' => $this->faker->email(),
            'bio' => $this->faker->text(),
            'location' => $this->faker->city(),
            'hero_id' => Hero::factory(),
        ];
    }
}
