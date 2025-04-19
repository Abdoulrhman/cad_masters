<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'education_level',
        'message',
        'cv_path',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
