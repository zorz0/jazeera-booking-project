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
            $table->float('price_adult',10,5);
            $table->float('price_child',10,5);
            $table->integer('from');
            $table->integer('to');
            $table->timestamp('leaving_date');
            $table->timestamp('arriving_date');
            $table->integer('passengers')->nullable();
            $table->timestamps();

            $table->foreign('from')->references('id')->on('states');
            $table->foreign('to')->references('id')->on('states');
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
