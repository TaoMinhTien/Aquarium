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
    Schema::create('overview_images', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('overview_id')->nullable();
        $table->string('image_url', 255);
        $table->timestamps();

        $table->foreign('overview_id')->references('id')->on('overviews')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('overview_images');
    }
};
