<?php

namespace Database\Seeders;

use App\Models\Sport;
use App\Models\User;
use App\Models\Club;
use App\Models\Content;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    User::factory()->create([
      'name' => 'Admin',
      'email' => 'admin@example.com',
      'role' => 'Administrator',
    ]);

    User::factory()->create([
      'name' => 'User',
      'email' => 'user@example.com',
    ]);

    User::factory(10)->create();

    $sports = array_to_object([
      [
        'name' => 'Basketball',
        'image' => asset('images/sports/basketball.jpg'),
        'description' => 'Learn the fundamentals of basketball, including dribbling, shooting, and passing.',
      ],
      [
        'name' => 'Badminton',
        'image' => asset('images/sports/badminton.jpg'),
        'description' => 'Master the art of badminton with our comprehensive guide to techniques and strategies.',
      ],
      [
        'name' => 'Tennis',
        'image' => asset('images/sports/tennis.jpg'),
        'description' => 'Discover the essential skills and strategies for playing tennis like a pro.',
      ],
      [
        'name' => 'Boxing',
        'image' => asset('images/sports/boxing.jpg'),
        'description' => 'Get fit and learn self-defense with our boxing training program.',
      ],
      [
        'name' => 'Volleyball',
        'image' => asset('images/sports/volleyball.jpg'),
        'description' => 'Learn the fundamentals of volleyball, including dribbling, shooting, and passing.',
      ],
      [
        'name' => 'Golf',
        'image' => asset('images/sports/golf.jpg'),
        'description' => 'Master the art of golf with our comprehensive guide to techniques and strategies.',
      ]
    ]);

    $created = [];
    foreach ($sports as $sport) {
      $created[] = Sport::create([
        'name' => $sport->name,
        'image' => $sport->image,
        'description' => $sport->description,
      ]);
    }

    foreach ($created as $sport) {
      Club::factory()->count(3)->create([
        'sport_id' => $sport->id,
      ]);

      Content::factory()->count(3)->create([
        'sport_id' => $sport->id,
      ]);

      Comment::factory()->count(3)->create([
        'sport_id' => $sport->id,
        'user_id' => User::inRandomOrder()->first()->id,
      ]);
    }
  }
}
