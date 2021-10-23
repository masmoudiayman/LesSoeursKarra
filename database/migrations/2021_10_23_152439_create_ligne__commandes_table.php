<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLigneCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ligne__commandes', function (Blueprint $table) {
            $table->unsignedBigInteger('id_art');
            $table->unsignedBigInteger('id_cde');
            $table->integer('qtes');
            $table->primary(['id_art','id_cde']);
            $table->foreign('id_art')->references('id')->on('articles')->onDelete('cascade');
            $table->foreign('id_cde')->references('id')->on('commandes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ligne__commandes');
    }
}
