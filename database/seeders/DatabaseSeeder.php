<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use App\Models\BlogRecord;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    User::factory(10)->create();
    User::factory()->create(
      [
        'name' => 'eos',
        'email' => 'eos@lc-vote.com',
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
      ]
    );

    BlogCategory::factory(10)->create();
    BlogRecord::factory(250)->create();
  }
}
