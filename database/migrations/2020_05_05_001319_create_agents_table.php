<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('prenoms');
            $table->string('nom');
            $table->string('datnais');
            $table->string('lieunais');
            $table->enum('sexe', ['M','F']);
            $table->string('matricule')->unique();
            $table->string('corps');
            $table->string('grade');
            $table->string('fonction');
            $table->string('displine');
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
        Schema::dropIfExists('agents');
    }
}
