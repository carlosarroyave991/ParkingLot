<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EntradaSalidaHasClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('entrada_salida', function (Blueprint $table) {
            $table->foreign('vehiculo_id')->references('id')->on('vehiculo')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('cliente_id')->references('id')->on('cliente')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('entrada_salida',function(Blueprint $table){
            $table->dropForeign(['vehiculo_id']);
            $table->dropColumn('vehiculo_id');
            $table->dropForeign(['cliente_id']);
            $table->dropColumn('cliente_id');
        });
    }
}
