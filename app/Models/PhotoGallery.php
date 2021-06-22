<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends Model
{
    protected $table = 'photo_gallery';
    protected $fillable = ['title', 'photo'];
}
