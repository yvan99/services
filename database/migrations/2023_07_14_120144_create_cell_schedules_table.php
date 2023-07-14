<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCellSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cell_schedule', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cell_request_id');
            $table->foreign('cell_request_id')->references('id')->on('cell_requests')->onDelete('cascade');
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
        Schema::dropIfExists('cell_schedules');
    }
}
