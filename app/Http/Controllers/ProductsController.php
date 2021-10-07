<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    //
    public function getProducts(){
        //Returna todos los elementos de la bd en un JSON
        //return Product::all();

        //Busca productos por su key
        //return Product::find(2);

      //  return Product::where(
      //      /*column->*/'stock',
       //     /*operador->*/ '>',
       //     /*Parametro->*/ 50
       // )->get();

        //Retorna solo las columnas seleccionadas
        //return Product::select('id', 'nombre')->get();

        return Product::select('products.nombre as PRODUCTO', 'categories.nombre as CATEGORIA')
                    ->join('categories',
                           'categories.id',
                           '=',
                           'products.category_id')
                    ->get();       
    }
}
