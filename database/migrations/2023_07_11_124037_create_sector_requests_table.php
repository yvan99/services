<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sector_requests', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->foreignId('citizen_id')->constrained('citizens');
            $table->foreignId('service_id')->constrained('services');
            $table->foreignId('sector_id')->constrained('sectors');
            $table->date('preferred_date');
            $table->time('preferred_hour');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('sector_requests');
    }
}
