<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'products_id',
        'price',
        'quantity'
        
    ];
    public function product(){
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
    public $timestamps = false;
}