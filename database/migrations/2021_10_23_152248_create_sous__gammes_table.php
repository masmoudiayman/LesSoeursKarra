<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSousGammesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sous_gammes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_gam');
            $table->string('nom');
            $table->foreign('id_gam')->references('id')->on('gammes')->onDelete('cascade');
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
        Schema::dropIfExists('sous__gammes');
    }
}
