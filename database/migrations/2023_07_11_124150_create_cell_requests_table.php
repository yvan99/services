<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCellRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cell_requests', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->foreignId('citizen_id')->constrained('citizens');
            $table->foreignId('service_id')->constrained('services');
            $table->foreignId('cell_id')->constrained('cells');
            $table->date('preferred_date');
            $table->time('preferred_hour');
            $table->text('description')->nullable();
            $table->text('status')->default('pending');
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
        Schema::dropIfExists('cell_requests');
    }
}
