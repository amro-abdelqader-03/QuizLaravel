<?php

namespace Database\Factories;

use App\Models\Lecturer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Lecturer>
 */
class LecturerFactory extends Factory
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
            'employee_number' => fake()->sentence(1),
            'department' => fake()->sentence(3),
            'office_room' => fake()->sentence(3),
            'photo' => fake()->imageUrl(640, 480, 'products', true),
        ];
    }
}
