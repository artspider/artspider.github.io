<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experts', function (Blueprint $table) {
          $table->increments('id');

          $table->string('nombre')->nullable();
          $table->string('paterno')->nullable();
          $table->string('materno')->nullable();
          $table->string('telefono')->nullable();
          $table->string('email', 100)->unique();
          $table->string('profesion', 50)->nullable();
          $table->string('especialidad', 50)->nullable();
          $table->unsignedBigInteger('cedula')->nullable();
          $table->string('universidad')->nullable();
          $table->string('ciudad')->nullable();
          $table->string('estado', 3)->nullable();
          $table->string('facebook')->nullable();
          $table->string('instagram')->nullable();
          $table->string('twitter')->nullable();
          $table->text('habilidades')->nullable();
          $table->string('username')->unique();
          $table->string('password');
          $table->rememberToken();
          $table->string('api_token', 60)->unique();
          $table->unsignedInteger('user_id');

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
        Schema::dropIfExists('experts');
    }
}
