<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'item_id',
        'price',
        'postal_code',
        'address',
        'building',
    ];
    
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}