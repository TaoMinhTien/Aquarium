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
    Schema::create('information_images', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('information_id')->nullable();
        $table->string('image_url', 255);
        $table->timestamps();

        $table->foreign('information_id')->references('id')->on('informations')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information_images');
    }
};
