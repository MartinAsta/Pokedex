<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('hp');
            $table->float('weight');
            $table->float('height');
            $table->string('image')->nullable();
            
            $table->foreignId('move1_id')->references('id')->on('moves')->onDelete('cascade');
            $table->foreignId('move2_id')->nullable()->references('id')->on('moves')->onDelete('cascade');
            $table->foreignId('move3_id')->nullable()->references('id')->on('moves')->onDelete('cascade');
            $table->foreignId('move4_id')->nullable()->references('id')->on('moves')->onDelete('cascade');

            $table->foreignId('type1_id')->references('id')->on('types')->onDelete('cascade');
            $table->foreignId('type2_id')->nullable()->references('id')->on('types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon');
    }
};
