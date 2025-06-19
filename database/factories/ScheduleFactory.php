<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $room = 100 + fake()->randomDigit();
        $term = fake()->randomElement([1, 2, 3]);
        return [
            'day_of_week' => fake()->dayOfWeek(),
            'time_slot' => fake()->dayOfWeek(),
            'room' => $room,
            'term' => $term
        ];
    }
}
