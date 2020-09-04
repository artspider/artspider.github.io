<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->string('ciudad');
            $table->char('estado', 3);
            $table->string('telefono');
            $table->string('email', 100)->unique();
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
        Schema::dropIfExists('employers');
    }
}
