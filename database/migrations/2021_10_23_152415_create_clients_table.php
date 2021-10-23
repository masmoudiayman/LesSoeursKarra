<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenom'); 
            $table->date('date_naissance');   
            $table->string('email')->unique();
            $table->string('mdp');
            $table->string('pays');
            $table->string('gouvernorat');
            $table->string('ville');
            $table->string('adresse'); 
            $table->integer('code_postal'); 
            $table->integer('tel');                  
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
        Schema::dropIfExists('clients');
    }
}
