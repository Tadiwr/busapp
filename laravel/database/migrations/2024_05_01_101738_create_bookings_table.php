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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('bus_id');
            $table->integer('route_id');
            $table->integer('passenger_count');
            $table->integer("student_id");

            $table->foregin("bus_id")->reference("id")->on("buses");
            $table->foreign("student_id")->references("id")->on("students");
            $table->foreign("route_id")->references("id")->on("routes");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
