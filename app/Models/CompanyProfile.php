<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    protected $fillable = [
        'title',
        'description',
        'file_path',
        'file_name',
    ];
}
