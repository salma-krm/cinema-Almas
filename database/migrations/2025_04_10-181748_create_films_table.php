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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description'); 
            $table->date('date_sortie');
            $table->text('resume'); 
            $table->decimal('budget', 15, 2); 
            $table->string('realisateur');
            $table->date('duree'); 
            $table->string('langue');
            $table->string('photo'); 
            $table->string('age_restriction')->nullable(); 
            $table->string('video')->nullable(); 
            $table->foreignId('genre_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('films');
    }
};
