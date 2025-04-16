<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'department',
        'type',
        'description',
        'requirements',
        'is_active',
    ];

    protected $casts = [
        'requirements' => 'array',
        'is_active'    => 'boolean',
    ];
}
