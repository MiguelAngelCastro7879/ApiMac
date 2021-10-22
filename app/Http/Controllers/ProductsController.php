<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    //
    public function getProducts(){
        //Returna todos los elementos de la bd en un JSON
        return Product::all();

        //Busca productos por su key
        //return Product::find(2);

      //  return Product::where(
      //      /*column->*/'stock',
       //     /*operador->*/ '>',
       //     /*Parametro->*/ 50
       // )->get();

        //Retorna solo las columnas seleccionadas
        //return Product::select('id', 'nombre')->get();
      
        // return Product::select('products.nombre as PRODUCTO', 'categories.nombre as CATEGORIA')
        //             ->join('categories',
        //                    'categories.id',
        //                    '=',
        //                    'products.category_id')
        //             ->get();       
    }

    public function store(Request $request){
        
        // $producto =new Product;
        // $producto->nombre=$request->nombre;
        // $producto->descripcion=$request->descripcion;
        // $producto->precio=$request->precio;
        // $producto->stock=$request->stock;
        // $producto->category_id=$request->category_id;
        // $producto->provider_id=$request->provider_id;
        // $producto->save();
        Product::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'precio'=>$request->precio,
            'stock'=>$request->stock,
            'category_id'=>$request->category_id,
            'provider_id'=>$request->provider_id

        ]);

        return response()->json([
            'message' => 'Successfully created product!'
        ], 201);
    } 

    public function update($id,Request $request){
        $productoa = Product::find($id);

        $productoa->precio = $request->precio;
        $productoa->stock = $request->stock;

        $productoa->save();

        $productob = Product::find($id);

        return  response()->json([
            'message' => 'Successfully updated product!',
            'product_After' => $productoa,
            'product_Before' => $productob
        ], 201);
    }

    public function delete($id){
        
        $producto = Product::find($id);
        $producto->delete();
        return  response()->json([
            'message' => 'Successfully deleted product!',
            'product' => $producto
        ], 201);
    }

}

/*
"nombre":""
"descripcion":""
"precio":""
"stock":""
"category_id":""
"provider_id":""
*/