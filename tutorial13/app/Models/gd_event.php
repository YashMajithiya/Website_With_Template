<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gd_event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'small_desc',
        'detail_desc',
        'galleryid',
        'photo_url',
    ];
}
