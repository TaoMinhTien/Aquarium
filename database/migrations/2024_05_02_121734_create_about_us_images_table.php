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
    Schema::create('about_us_images', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('about_us_id')->nullable();
        $table->string('image_url', 255);
        $table->timestamps();

        $table->foreign('about_us_id')->references('id')->on('about_uss')->onDelete('cascade');
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us_images');
    }
};
