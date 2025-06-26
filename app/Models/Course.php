<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'image',
        'description',
        'price',
        'price_offer',
        'branch_id',
        'hours',
        'is_active',
        'max_students',
        'instructor_id',
        'duration',
        'outline_link',
        'youtube_link',
        'daysInWeek',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_active'   => 'boolean',
        'start_date'  => 'datetime',
        'end_date'    => 'datetime',
        'price'       => 'decimal:2',
        'price_offer' => 'decimal:2',
        'hours'       => 'integer',
    ];

    /**
     * The categories that belong to the course (many-to-many).
     */
    public function categories()
    {
        return $this->belongsToMany(CourseCategory::class, 'course_category');
    }



    /**
     * Get the students enrolled in the course.
     */
    public function students()
    {
        return $this->belongsToMany(User::class, 'course_enrollments')
            ->withTimestamps();
    }

    /**
     * Get the image URL attribute.
     */
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }

    /**
     * Get the sessions for the course.
     */
    public function sessions()
    {
        return $this->hasMany(\App\Models\CourseSession::class);
    }

    /**
     * Get the branch that owns the course.
     */
    public function branch()
    {
        return $this->belongsTo(\App\Models\Branch::class, 'branch_id');
    }

    /**
     * The instructors that belong to the course.
     */
    public function instructors()
    {
        return $this->belongsToMany(\App\Models\Instructor::class, 'course_instructor');
    }

    /**
     * The certificates that belong to the course.
     */
    public function certificates()
    {
        return $this->belongsToMany(\App\Models\Certificate::class, 'certificate_course');
    }

    public function getPrimaryCategoryAttribute()
    {
        return $this->categories->first() ??
        (new class { public $name = 'Uncategorized'; });
    }
}
