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
        scheam::create('proveedores', function(blueprint $table){
            $table-> id();
            $table-> string('nombre');
            $table-> string('direccion');
            $table-> int('telefono');
            $table-> foreingid('ID_insumos') -> constrained('insumos');
            $table-> string('correo');
            $table-> String('ciudad');
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
