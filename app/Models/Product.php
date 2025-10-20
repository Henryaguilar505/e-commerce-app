<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image',
        'user_id',
        'category_id'
    ];

    //relacion de muchos a uno con category
    public function category(){
        return $this->belongsTo(Category::class, 'category_id');  
    }
}
