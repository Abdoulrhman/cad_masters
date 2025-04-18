<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
    ];

    /**
     * Get the courses that belong to this category.
     */
    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    /**
     * Get the posts that belong to this category.
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_category');
    }

    /**
     * Get the image URL attribute.
     */
    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        }
        return asset('assets/img/placeholder.jpg');
    }
}
