<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherWallet extends Model
{
    use HasFactory;
    protected $fillable=['teacher_id','value'];
    public function teacher(){

return $this->belongsTo(Teacher::class);



    }
}
