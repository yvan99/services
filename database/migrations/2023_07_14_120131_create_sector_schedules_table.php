<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sector_schedule', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sector_request_id');
            $table->foreign('sector_request_id')->references('id')->on('sector_requests')->onDelete('cascade');
            $table->date('date');
            $table->time('hour');
            $table->string('title');
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
        Schema::dropIfExists('sector_schedules');
    }
}
