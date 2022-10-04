<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id');
            $table->string('ip_address');
            $table->string('city');
            $table->string('region_name');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('os');
            $table->string('browser');
            $table->boolean('is_bot');
            $table->string('device_model');
            $table->string('visite_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitors');
    }
};
