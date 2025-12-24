<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'gallery_id',
        'title',
        'description',
        'is_publish',
    ];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Get Post Image
    public function getImageAttribute()
    {
        return $this->gallery
            ? asset('uploads/posts/' . $this->gallery->image)
            : asset('uploads/no_user/no_user.jpg');
    }
}
