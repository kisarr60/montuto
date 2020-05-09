<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('refClasse')->unique();
            $table->string('libClasse');
            $table->unsignedInteger('salle_id')->nullable();
            $table->unsignedInteger('professeur_id')->nullable();
            $table->unsignedInteger('surveillant_id')->nullable();
            $table->unsignedInteger('responsable_id')->nullable();
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
        Schema::dropIfExists('classes');
    }
}
