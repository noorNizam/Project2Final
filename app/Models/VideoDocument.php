<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoDocument extends Model
{
    use HasFactory;
    protected $fillable=['video_id','file','file_type'];
    public function video(){
        return $this->belongsTo(Video::class);
    }
}
