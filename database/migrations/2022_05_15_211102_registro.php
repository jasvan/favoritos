<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('registro', function (Blueprint $table) {
            $table -> id();
            $table -> string('usuario', 10);
            $table -> string('correo', 100);
            $table -> string('contrasena', 15);            
        }); 
    }

    
    public function down()
    {
        Schema::dropIfExists('registro');
    }
};
