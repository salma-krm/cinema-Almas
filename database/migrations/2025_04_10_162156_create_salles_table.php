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
        Schema::create('salles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('capacite')->unsigned(); 
            $table->enum('status', ['disponible', 'en seance', 'maitenance'])->default('disponible'); 
            $table->string('maintenance_notes');
            $table->string('type') ;
            $table->string('description');
            $table->string('equipment') ;
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
        Schema::dropIfExists('salles');
    }
};
