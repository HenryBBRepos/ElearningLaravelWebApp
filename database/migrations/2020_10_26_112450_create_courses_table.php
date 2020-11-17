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
            $table->id();
            $table->string('course_name');
            $table->string('teacher_name')->nullable();
            $table->string('course_hours')->nullable();
            $table->string('course_price')->nullable();
            $table->string('course_aim')->nullable();
            $table->string('class')->nullable();
            $table->string('subject')->nullable();
            $table->string('description')->nullable();
            $table->string('keyword')->nullable();
            $table->string('course_image')->nullable();
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
