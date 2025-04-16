<?php

namespace Database\Factories;

use App\Models\Sport;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'sport_id' => Sport::inRandomOrder()->first()->id,
      'user_id' => User::inRandomOrder()->first()->id,
      'body' => $this->faker->paragraph(),
      'created_at' => now(),
      'updated_at' => now(),
    ];
  }
}
