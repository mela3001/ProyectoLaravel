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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('apellido', 50);
            $table->string('usuario', 20)->unique();
            $table->string('password');
            $table->text('imagen'); //+255
            $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('genero', 30);
            $table->integer('telefono'); //----------de 9
            // $table->rememberToken();
            // $table->timestamps();
            $table->string('ciudad'); //-------------nombre de la ciudad
            $table->date('fecha_nac');
            $table->tinyInteger('edad'); //----------calculado
            $table->string('preferencia', 50);
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
        Schema::dropIfExists('users');
    }
};
