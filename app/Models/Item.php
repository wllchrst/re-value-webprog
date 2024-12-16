<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'weight', 'item_type_id', 'user_id', 'image_path', 'sold'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function item_transactions(){
        return $this->hasMany(ItemTransaction::class);
    }

    public function item_type(){
        return $this->belongsTo(ItemType::class);
    }
}
