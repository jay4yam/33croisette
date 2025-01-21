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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['available', 'reserved', 'sold'])->default('available');
            $table->string('reference');
            $table->string('type');
            $table->string('address');
            $table->string('residence');
            $table->string('postal_code');
            $table->string('city');
            $table->decimal('price', 10, 2);
            $table->integer('rooms');
            $table->integer('bedrooms');
            $table->decimal('area');
            $table->integer('floor');
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
