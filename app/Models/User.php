<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = ['email', 'password', 'description', 'image_path', 'name'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
