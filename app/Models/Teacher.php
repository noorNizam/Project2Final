<?php

namespace App\Models;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Authenticatable
{
    use HasApiTokens;
  
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password','specialization' // Add other fields as necessary
    ];
    
    // Method to handle file upload
    public function setImageAttribute($value)
    {
        if ($value) {
            $this->attributes['image'] = $value->store('images', 'public');
        }
    }
}
