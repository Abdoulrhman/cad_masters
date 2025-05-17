<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'title'];

    public function courses()
    {
        return $this->belongsToMany(\App\Models\Course::class, 'course_instructor');
    }
}
