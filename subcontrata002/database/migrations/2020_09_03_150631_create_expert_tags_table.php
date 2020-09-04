<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpertTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expert_tags', function (Blueprint $table) {
            //$table->id();
            //combinacion de dos llaves para crear una sola y no se repitan
            $table->primary(['expert_id', 'tag_id']);
            $table->unsignedInteger('expert_id');
            $table->unsignedInteger('tag_id');

            $table->foreign('expert_id')->references('id')->on('experts')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');

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
        Schema::dropIfExists('expert_tags');
    }
}
