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
        Schema::create('animal_infor_infor', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->unsignedBigInteger('animal_id');
            $table->foreign('animal_id')->references('id')->on('animals_infor')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal_infor_infor');
    }
};
