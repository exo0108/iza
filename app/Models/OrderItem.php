<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'orderID',
        'goodsID',
        'amount',
        'total',
    ];

    public function good()
    {
        return $this->belongsTo(Good::class, 'goodsID');
    }

    public function getGoodNameAttribute()
    {
        return $this->good->name;
    }

    public function getGoodPriceAttribute()
    {
        return $this->good->price;
    }
}
