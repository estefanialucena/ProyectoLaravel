<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //

        Schema::create('categorias', function (Blueprint $table) {
            //Borrado en cascada
            $table->engine="InnoDB";
            
            $table->bigIncrements('id');//Clave forane en canciones
            $table->string('nombre');
            $table->string('autor');
            $table->string('portada'); //img
            $table->string('album');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
