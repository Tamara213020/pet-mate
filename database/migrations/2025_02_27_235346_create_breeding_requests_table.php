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
        Schema::create('breeding_requests', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->text('note');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('pet_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('breeding_requests');
    }
};
