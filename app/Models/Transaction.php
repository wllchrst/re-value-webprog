<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function productTransaction(){
        return $this->hasMany(productTransaction::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
