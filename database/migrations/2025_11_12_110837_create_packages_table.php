<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('location');
            $table->text('about');
            $table->string('featured_event')->nullable();
            $table->string('language')->nullable();
            $table->string('foods')->nullable();
            $table->date('departure_date');
            $table->string('duration');
            $table->string('type');
            $table->integer('price');
            $table->integer('quota');
            $table->longText('itineraries')->nullable();
            $table->string('thumbnail')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};