<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
   
    protected $fillable =[
        'name',
        'description',
        'image',
        'categorie_id',
        'price',
        'content'
    ];
    
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    
}
