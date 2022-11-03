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
        Schema::create('ventas', function(Blueprint $table){
            $table -> id();
            $table -> foreignId('id_cliente') -> constrained('clientes');
            $table -> foreignId('id_usuario') -> constrained('usuarios'); 
            $table -> foreignId('id_empresa') -> constrained('empresa');
            $table -> dateTime('fecha');
            $table -> enum('lista_productos', []);
            $table -> string('metodo_pago');
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
