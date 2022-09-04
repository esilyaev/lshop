<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ShopItemFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'name' => $this->faker->words(2, true),
      'description' => $this->faker->paragraph(1),
      'price' => $this->faker->numberBetween(1, 100),
      'shop_category_id' => $this->faker->numberBetween(1, 5),
      'image' => 'product-' . $this->faker->numberBetween(1, 16) . '.jpg'
    ];
  }
}
