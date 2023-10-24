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
        Schema::create('thesards', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('full_name', 45);
            $table->string('titre', "100");
            // PFE or PHD
            $table->string('axe');
            $table->string('type',10);
            $table->string('photo')->nullable();
            $table->string('fichier')->nullable();
            $table->string('soutenu_le')->nullable();
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
        Schema::dropIfExists('thesards');
    }
};
