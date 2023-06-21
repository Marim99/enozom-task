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
        Schema::create('trip_routes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trip_id')->nullable(false); 
            $table->foreign('trip_id')->references('id')->on('trips');
            $table->unsignedBigInteger('station_id')->nullable(false);
            $table->foreign('station_id')->references('id')->on('stations');
            $table->string('arrive_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trip_routes');
    }
};
