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
        Schema::create('recents', function (Blueprint $table) {
            $table->id();
            $table->string('sid');
            $table->string('title');
            $table->string('by');
            $table->string('descendants');
            $table->string('score');
            $table->string('time');
            $table->string('type');
            $table->text('url', 50000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recents');
    }
};
