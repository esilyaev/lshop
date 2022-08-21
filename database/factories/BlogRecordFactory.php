<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogRecordFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'title' => $this->faker->words(4, true),
      'body' => $this->faker->paragraph(5),
      'user_id' => $this->faker->numberBetween(1, 11),
      'image' => 'image.jpg',
      'blog_category_id' => $this->faker->numberBetween(1, 10),
    ];
  }
}
