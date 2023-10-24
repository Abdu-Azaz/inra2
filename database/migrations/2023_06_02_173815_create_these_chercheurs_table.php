<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('these_chercheurs', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('these_id');
            // ENCADRANTS:
            $table->unsignedSmallInteger('chercheur_id');
            // Add any additional columns you may need in the pivot table

            // Define foreign key constraints
            $table->foreign('these_id')->references('id')->on('theses')->onDelete('cascade');
            $table->foreign('chercheur_id')->references('id')->on('chercheurs')->onDelete('cascade');

            // Add timestamps if needed
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('these_chercheurs');
    }
};
