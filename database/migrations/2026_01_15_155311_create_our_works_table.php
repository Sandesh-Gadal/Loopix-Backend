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
        Schema::create('our_works', function (Blueprint $table) {
         $table->id();
        $table->string('image_url');
        $table->string('category')->nullable();
        $table->string('client_name')->nullable();
        $table->text('description')->nullable();
        $table->json('tools_used')->nullable(); // Changed to JSON for easier Filament handling
        $table->boolean('is_visible')->default(true);
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_works');
    }
};
