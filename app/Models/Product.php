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
        'users_id',
        'categories_id'
    ];

    //relacion de muchos a uno con category
    public function category(){
        return $this->belongsTo(Category::class, 'categories_id');  
    }
}
