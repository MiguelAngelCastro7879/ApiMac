<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $products="products";
    public $timestamps= true;
    
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'category_id',
        'provider_id',
    ];
}
