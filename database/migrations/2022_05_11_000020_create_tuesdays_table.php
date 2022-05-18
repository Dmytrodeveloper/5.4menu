<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTuesdaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuesdays', function (Blueprint $table) {
            $table->id();
            $table->string('content_id');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->integer('start_second')->nullable();
            $table->integer('end_second')->nullable();
            $table->string('date_check')->nullable();
            $table->date('selectdata');
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
        Schema::dropIfExists('tuesdays');
    }
}
