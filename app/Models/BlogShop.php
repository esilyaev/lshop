<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogShop extends Model
{
    use HasFactory;
}
public function user()
{
  return $this->belongsTo(User::class);
}

public function blog_category()
{
  return $this->belongsTo(BlogShop::class);
}
