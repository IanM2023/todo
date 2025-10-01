<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       $dueAt = fake()
            ->optional(0.8)
            ->dateTimeBetween('-1 week', '+1 mont');

        return [
            'user_id' => User::factory(),
            'title' => fake()->sentence(4),
            'description' => fake()->optional()->paragraph(),
            'due_at' => $dueAt,
            'reminder_at' => $dueAt ? fake()->dateTimeBetween('-1 week', $dueAt) : null,
            'is_completed' => fake()->boolean(20),
            'is_reminder_sent' => false,
        ];
    }

}
