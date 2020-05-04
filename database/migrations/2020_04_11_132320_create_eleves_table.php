<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
            $table->id();
            $table->string('prenoms');
            $table->string('nom');
            $table->string('datnais');
            $table->string('lieunais');
            $table->enum('sexe', ['M','F']);
            $table->string('matricule')->unique();
            $table->unsignedInteger('classe_id');
            $table->string('photo')->default('default.jpg');
            $table->string('prenomspere')->nullable();
            $table->string('prenomNomMere')->nullable();
            $table->string('tuteur')->nullable();
            $table->string('contact')->nullable();
            $table->string('adresse')->nullable();
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
        Schema::dropIfExists('eleves');
    }
}
