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
        Schema::create('talla_calzado', function (Blueprint $table) {
            $table->unsignedInteger('talla_id');
            $table->unsignedInteger('calzado_id');
            $table->integer('cantidad');
            $table->foreign('talla_id')->references('id')->on('talla')->onDelete('cascade');
            $table->foreign('calzado_id')->references('id')->on('calzado')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talla_calzado');
    }
};
