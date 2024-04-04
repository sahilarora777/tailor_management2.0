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
        Schema::create('measurements', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->integer('clients_id');
            $table->integer('categories_id');
            $table->string('description')->nullable();
            $table->integer('shoulder')->nullable();
            $table->integer('back')->nullable();
            $table->integer('sleeve')->nullable();
            $table->integer('lap')->nullable();
            $table->integer('collar')->nullable();
            $table->integer('chest')->nullable();
            $table->integer('armhole')->nullable();
            $table->integer('long')->nullable();
            $table->integer('neck')->nullable();
            $table->integer('waist')->nullable();
            $table->integer('bottom')->nullable();
            $table->integer('length')->nullable();
            $table->integer('top')->nullable();
            $table->integer('short')->nullable();
            $table->integer('trouser')->nullable();
            $table->integer('hip')->nullable();
            $table->integer('inches')->nullable();
            $table->integer('other')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('measurements');
    }
};
