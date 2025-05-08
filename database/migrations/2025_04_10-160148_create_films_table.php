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
            $table->time('duree');
            $table->unsignedBigInteger('genre_id');
            $table->string('langue');
            $table->string('photo');
            $table->string('video');
            $table->string('age_restriction')->nullable();
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade'); // Add foreign key constraint
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
