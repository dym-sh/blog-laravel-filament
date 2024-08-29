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
        Schema::create('text_wigets', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->string('image', 2048)->nullable();
            $table->string('title', 2048);
            $table->string('content', 2048)->nullable();
            $table->boolean('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('text_wigets');
    }
};
