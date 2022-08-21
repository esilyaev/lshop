<?php

use App\Models\BlogCategory;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogRecordsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('blog_records', function (Blueprint $table) {
      $table->id();
      $table->timestamps();

      $table->string('title');
      $table->text('body');
      $table->string('image');

      $table->foreignIdFor(User::class);
      $table->foreignIdFor(BlogCategory::class);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('blog_records');
  }
}
