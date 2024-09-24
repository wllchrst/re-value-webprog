<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['email', 'password', 'description', 'image_path', 'name'];

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    public function cart(){
        return $this->hasOne(Cart::class);
    }
}
