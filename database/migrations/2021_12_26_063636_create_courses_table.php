<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->text('content')->nullable();
            $table->string('preview_origin')->nullable();
            $table->string('preview_youtube_id')->nullable();
            $table->string('preview_video')->nullable();
            $table->string('language')->nullable();
            $table->string('syntax_highlight')->nullable();
            $table->integer('level')->nullable();
            $table->integer('priority')->nullable();
            $table->string('students_count')->nullable();
            $table->string('thumbnail_cdn')->nullable();
            $table->string('preview_video_cdn')->nullable();
            // $table->string('will_learns');
            // $table->string('requirements');
            // $table->string('tracks');
            // $table->string('user_progress');
            // $table->string('is_registered');
            $table->softDeletes();
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
        Schema::dropIfExists('courses');
    }
}
