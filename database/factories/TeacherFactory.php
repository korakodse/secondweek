<?php

namespace Database\Factories;

use App\Models\Province;
use App\Models\Title;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pre' => Title::InRandomOrder()->first()->id,
            'name' => $this->faker->name,
            'lastname' => $this->faker->lastname,
            'email' => $this->faker->email,
            'province_id' => Province::InRandomOrder()->first()->id,
            'created_at' => now(),
        ];
    }
}
