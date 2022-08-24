<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BlogRecord
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $title
 * @property string $body
 * @property string $image
 * @property int $user_id
 * @property int $blog_category_id
 * @property-read \App\Models\BlogCategory|null $blog_category
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\BlogRecordFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogRecord whereBlogCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogRecord whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogRecord whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogRecord whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogRecord whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogRecord whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogRecord whereUserId($value)
 * @mixin \Eloquent
 */
class BlogRecord extends Model
{
  use HasFactory;


  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function blog_category()
  {
    return $this->belongsTo(BlogCategory::class);
  }
}
