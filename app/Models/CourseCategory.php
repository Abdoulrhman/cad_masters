<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category_id',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'category_id');
    }

    public function parent()
    {
        return $this->belongsTo(CourseCategory::class, 'category_id');
    }

    public function children()
    {
        return $this->hasMany(CourseCategory::class, 'category_id');
    }
}
