<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Authenticatable
{
    use HasApiTokens;
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'image'
    ];

    // Method to handle file upload
    public function setImageAttribute($value)
    {
        if ($value) {
            $this->attributes['image'] = $value->store('images', 'public');
        }
    }
}
