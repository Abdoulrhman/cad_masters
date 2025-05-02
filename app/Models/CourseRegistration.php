<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'course_name',
        'first_name',
        'email',
        'phone',
        'message',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
