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
            $table->string('date');
            $table->integer('clients_id');
            $table->string('description');
            $table->integer('shoulder');
            $table->integer('back');
            $table->integer('sleeve');
            $table->integer('lap');
            $table->integer('collar');
            $table->integer('chest');
            $table->integer('armhole');
            $table->integer('long');
            $table->integer('neck');
            $table->integer('waist');
            $table->integer('bottom');
            $table->integer('length');
            $table->integer('top');
            $table->integer('short');
            $table->integer('trouser');
            $table->integer('hip');
            $table->integer('inches');
            $table->integer('other');
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
