<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'memberID',
        'payWay',
        'total',
        'status',
    ];

    public function user(){
        // belongsTo(User::class) 會預設抓取User資料表中'user_id'的欄位
        return $this->belongsTo(User::class, 'memberID');
    }

    public function getUserNameAttribute(){
        return $this->user->name;
    }

    public function getUserPhoneAttribute(){
        return $this->user->phone;
    }
}
