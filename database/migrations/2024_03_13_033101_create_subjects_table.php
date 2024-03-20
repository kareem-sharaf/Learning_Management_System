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
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->binary('image_data')->default('default_image.jpg');
            // $table->unsignedBigInteger('stage_id')->references('id')->on('stages')->onDelete('cascade');
            // $table->unsignedBigInteger('year_id')->references('id')->on('years')->onDelete('cascade');
            // $table->unique(['name', 'year_id']);

            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
