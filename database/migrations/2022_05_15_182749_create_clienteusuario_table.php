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
        Schema::create('clienteusuario', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
<<<<<<< HEAD:database/migrations/2022_05_15_182749_create_clienteusuario_table.php
            $table->unsignedBigInteger('id_cliente');
            $table->foreign("id_cliente")
            ->references("id")
            ->on("clientes")
            ->onDelete("cascade")
            ->onUpdate("cascade");
=======
            $table->foreignId('role_id')->nullable()->constrained('roles')->cascadeOnUpdate()->nullOnDelete();
            $table->unsignedInteger('persona_id')->nullable();
            $table->unsignedInteger('tipo_id')->nullable()->default(3);
            $table->unsignedSmallInteger('estado')->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path',200)->nullable();
            $table->timestamps();
>>>>>>> dilker:crm2proyecto/database/migrations/2014_10_12_000000_create_users_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clienteusuario');
    }
};
