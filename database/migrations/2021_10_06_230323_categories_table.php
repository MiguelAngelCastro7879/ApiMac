<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}

// insert into categories (nombre, descripcion) values 
// ('Bebidas','bebidas de diversas marcas y tipos'),
// ('Sopas instantaneas','Sopas instantaneas de estilo ramen'),
// ('Medicina','Tipos de medicina de todos tipos');

// insert into providers (nombre, correo, celular) values 
// ('Cocacola','service@cocacola.com','(000)-444-5555'),
// ('Sopas korn','service@korn.com','(000)-444-5556'),
// ('Jose Antonio','elmariguas@gmail.com','(000)-444-5557'); 


// insert into products (nombre, descripcion, precio, stock, created_at, updated_at,category_id,provider_id) values 
// ("Cocacola","its cancer",18.5,50,now(), now(),1,1),
// ("Pepsi","its cancer",17,50,now(), now(),1,1), 
// ("Agua","its GOD",10.5,50,now(), now(),1,1), 
// ("Maruchan","its cancer",13.5,50,now(), now(),2,2),
// ("Cigarros","its cancer",60,50,now(), now(),4,3), 
// ("Mariaverde","its GOD",150,5,now(), now(),4,3),
// ("Mariarosa","its bad",150,150,now(), now(),4,3);
