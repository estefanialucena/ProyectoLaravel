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

        Schema::create('canciones', function (Blueprint $table) {
            //Borrado en cascada
            $table->engine="InnoDB";
            
            $table->bigIncrements('id');

            $table->bigInteger('categoria_Id')->unsigned();//Relacion con categorias

            $table->string('nombre');
            $table->timestamps();

            //Relacion con categorias y borrado en cascada
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
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
