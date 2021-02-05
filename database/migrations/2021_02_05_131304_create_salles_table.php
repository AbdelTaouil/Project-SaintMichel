<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salles', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('code')->nullable();
            $table->unsignedBigInteger('batiment_id');
            $table->foreign('batiment_id')->references('id')->on('batiments');
            $table->unsignedBigInteger('etage_id');
            $table->foreign('etage_id')->references('id')->on('etages');
            $table->unsignedBigInteger('intermediaire_id');
            $table->foreign('intermediaire_id')->references('id')->on('intermediaires');
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
        Schema::dropIfExists('salles');
    }
}
