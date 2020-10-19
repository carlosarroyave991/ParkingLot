<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('cedula', 12)->nullable(false);
            $table->string('nombres',255)->nullable(false);
            $table->string('apellidos',255)->nullable()->default(NULL);
            $table->string('correo')->nullable()->unique();
            $table->string('telefono', 15)->default('0000000000');
            $table->string('foto', 250)->default('storage/storage/img/datosbasicos/default.png')->nullable();
            $table->string('direccion',255)->nullable()->default(NULL);
            $table->softDeletes();
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
        Schema::dropIfExists('cliente');
    }
}
