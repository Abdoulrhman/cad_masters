<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSettings extends Model
{
    protected $fillable = [
        'sales_email',
        'support_email',
        'webmaster_email',
    ];
}
