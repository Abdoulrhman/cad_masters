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
        'category_id',
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
     * Get the category that owns the course.
     */
    public function category()
    {
        return $this->belongsTo(CourseCategory::class, 'category_id');
    }

    /**
     * Get the instructor that owns the course.
     */
    public function instructor()
    {
        return $this->belongsTo(\App\Models\Instructor::class, 'instructor_id');
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
}
