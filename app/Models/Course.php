<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'price_offer',
        'schedule_time',
        'hours',
        'branch',
        'image',
        'description',
        'category_id',
    ];

    protected $casts = [
        'price'         => 'decimal:2',
        'price_offer'   => 'decimal:2',
        'schedule_time' => 'datetime',
        'hours'         => 'datetime',
    ];

    public function category()
    {
        return $this->belongsTo(CourseCategory::class, 'category_id');
    }
}
