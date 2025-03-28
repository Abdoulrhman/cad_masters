<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselImage extends Model
{
    use HasFactory;

    protected $fillable = ['carousel_id', 'image'];

    public function carousel()
    {
        return $this->belongsTo(Carousel::class, 'carousel_id');
    }
}
