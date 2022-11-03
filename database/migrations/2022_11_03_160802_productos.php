<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
    
        Schema::create('productos', function (Blueprint $table){
            $table->id();
            $table->foreignId('ID_receta')->constrained('recetas');
            $table->string('nombre');
            $table->int('precio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
