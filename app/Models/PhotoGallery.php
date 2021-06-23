<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhotoGallery extends Model
{
    protected $table = 'photo_gallery';


    public function moderator()
    {
        return $this->belongsTo(Moderator::class);
    }
}
