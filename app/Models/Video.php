<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable=['course_id','title','discription','file','thumbnail','data','time'];

public function course(){


    return $this->belongsTo(Course::class);
}


public function videoDocuments(){
    return $this->hasMany(VideoDocument::class);
}
public function comments(){
    return $this->hasMany(Comment::class);
}

}
