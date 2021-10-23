<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLignePaniersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ligne__paniers', function (Blueprint $table) {
            $table->unsignedBigInteger('id_art');
            $table->unsignedBigInteger('id_panier');
            $table->integer('qtes');
            $table->primary(['id_art','id_panier']);
            $table->foreign('id_art')->references('id')->on('articles')->onDelete('cascade');
            $table->foreign('id_panier')->references('id')->on('paniers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ligne__paniers');
    }
}
