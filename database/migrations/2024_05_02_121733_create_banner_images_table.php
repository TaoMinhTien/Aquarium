<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('banner_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('banner_id')->nullable();
            $table->string('image_url', 255);
            $table->timestamps();
            $table->foreign('banner_id')->references('id')->on('banners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner_images');
    }
};
