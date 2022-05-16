<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('favoritos', function(Blueprint $table){
            $table -> id();
            $table -> string  ( 'titulo', 20 );
            $table -> string  ( 'descripcion', 255 ); 
            $table -> string  ( 'categoria', 30 ); 
            $table -> integer ( 'visible', 1 );          
            $table -> integer ( 'borrado', 1 );          
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('favoritos');
    }
};