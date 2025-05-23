<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image'];

    public function courses()
    {
        return $this->belongsToMany(\App\Models\Course::class, 'certificate_course');
    }
}
