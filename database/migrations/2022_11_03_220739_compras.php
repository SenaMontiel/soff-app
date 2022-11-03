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
    public function up()
    {
        Schema::create('compras', function(Blueprint $table){
            $table -> id();
            $table -> foreignId('id_proveedor') -> constrained('proveedores');
            $table -> enum('lista_insumos', []);
            $table -> dateTime('fecha');
            $table -> integer('precio');
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
