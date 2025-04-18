<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaAlbum extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'cover_image',
        'slug',
    ];

    /**
     * Get the media items in this album.
     */
    public function media()
    {
        return $this->hasMany(Media::class, 'album_id')->orderBy('order');
    }

    /**
     * Get the URL for the album's cover image.
     */
    public function getCoverImageUrlAttribute()
    {
        return $this->cover_image ? asset('storage/' . $this->cover_image) : null;
    }
}
