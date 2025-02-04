<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/** @noinspection PhpHierarchyChecksInspection */
class Course extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category_id',
        'start_date',
        'end_date',
        'hours',
        'schedule_time',
        'branch',
        'image',
        'price',
        'price_offer'];

    public function category()
    {
        return $this->belongsTo(CourseCategory::class);

    }
}
