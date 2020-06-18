<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->integer('num');
            $table->string('ano1');
            $table->string('ano2');
            $table->string('nom');
            $table->string('prenom');
            $table->string('ne');
            $table->string('lieu');
            $table->string('eps');
            $table->string('lv1');
            $table->string('lv2');
            $table->string('Eo');
            $table->string('Ep');
            $table->string('Ef');
            $table->string('sexe');
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
        Schema::dropIfExists('candidats');
    }
}
