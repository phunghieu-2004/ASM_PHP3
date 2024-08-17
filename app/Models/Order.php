<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'email',
        'address',
        'status',
        'token'
    ];

    public function user(){
        return $this ->belongsTo(User::class,'user_id');
    }

    public function details(){
        return $this ->hasMany(OrderDetails::class,'order_id', 'id');
    }
}