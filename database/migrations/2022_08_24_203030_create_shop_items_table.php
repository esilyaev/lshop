<?php

use App\Models\ShopCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopItemsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('shop_items', function (Blueprint $table) {
      $table->id();
      $table->timestamps();

      $table->string('name');
      $table->text('description');
      $table->float('price');
      $table->string('image');


      $table->foreignIdFor(ShopCategory::class);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('shop_items');
  }
}
