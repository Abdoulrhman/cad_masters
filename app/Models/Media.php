<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'file_path',
        'mime_type',
        'order',
    ];

    /**
     * Get the album this media belongs to.
     */
    public function album()
    {
        return $this->belongsTo(MediaAlbum::class, 'album_id');
    }

    /**
     * Get the URL for the media file.
     */
    public function getUrlAttribute()
    {
        return asset('storage/' . $this->file_path);
    }

    /**
     * Get the thumbnail URL for the media file.
     */
    public function getThumbnailUrlAttribute()
    {
        $path_parts     = pathinfo($this->file_path);
        $thumbnail_path = $path_parts['dirname'] . '/thumbnails/' . $path_parts['basename'];
        return asset('storage/' . $thumbnail_path);
    }
}
