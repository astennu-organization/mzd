<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoGallery extends Model
{
    protected $table = 'video_gallery';


    public function moderator()
    {
        return $this->belongsTo(Moderator::class);
    }
}
