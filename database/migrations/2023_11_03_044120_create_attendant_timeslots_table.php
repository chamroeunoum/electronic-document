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
        Schema::create('attendant_timeslots', function (Blueprint $table) {
            $table->id();
            $table->integer('attendant_id')->nullable(false)->comment('ID of the attendant');
            $table->integer('timeslot_id')->nullable(false)->comment('ID of the timeslot');
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
        Schema::dropIfExists('attendant_timeslots');
    }
};