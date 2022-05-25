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
        Schema::create('administrativos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ci')->unique();
            $table->String('nombre',70);
            $table->String('apellidos',100);
            $table->String('correo');
            $table->String('direccion',100);
            $table->String('telefono',15);
            $table->date('fecha_nacimiento');
            $table->unsignedSmallInteger('estado')->default(1);
            $table->Char('sexo',1);
            $table->unsignedSmallInteger('tipo')->default(1);
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
        Schema::dropIfExists('administrativos');
    }
};
