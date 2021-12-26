<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('track_steps', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('track_id')->references('id')->on('tracks');
            $table->string('step_type')->nullable();
            $table->unsignedInteger('step_id')->references('id')->on('steps');
            $table->integer('position')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('track_steps');
    }
}
