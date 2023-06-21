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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('from_station_id');
            // $table->unsignedBigInteger('to_station_id');
            $table->unsignedBigInteger('train_id')->nullable(false);
            // $table->time('arrive_time1');
            // $table->time('arrive_time2');
            // $table->foreign('from_station_id')->references('id')->on('stations');
            // $table->foreign('to_station_id')->references('id')->on('stations');
            $table->foreign('train_id')->references('id')->on('trains');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
