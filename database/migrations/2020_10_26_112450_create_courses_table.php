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
            $table->string('class');
            $table->string('subject');
            $table->string('description');
            $table->string('keyword');
            $table->string('course_aim')->nullable();
            $table->string('section_one')->nullable();
            $table->string('lesson_one')->nullable();
            $table->string('video_one')->nullable();
            $table->string('video_two')->nullable();
            $table->string('video_three')->nullable();
            $table->string('video_four')->nullable();
            $table->string('video_five')->nullable();
            $table->string('video_six')->nullable();
            $table->string('video_seven')->nullable();
            $table->string('video_eight')->nullable();
            $table->string('video_nine')->nullable();
            $table->string('video_ten')->nullable();
            $table->string('video_eleven')->nullable();
            $table->string('video_twelve')->nullable();
            $table->string('video_thirteen')->nullable();
            $table->string('video_fourteen')->nullable();
            $table->string('video_fifteen')->nullable();
            $table->string('video_sixteen')->nullable();
            $table->string('video_seventeen')->nullable();
            $table->string('video_eighteen')->nullable();
            $table->string('video_nineteen')->nullable();
            $table->string('video_twenty')->nullable();
            $table->string('video_twenty_one')->nullable();
            $table->string('video_twenty_two')->nullable();
            $table->string('video_twenty_three')->nullable();
            $table->string('video_twenty_four')->nullable();
            $table->string('video_twenty_five')->nullable();
            $table->string('video_twenty_six')->nullable();
            $table->string('video_twenty_seven')->nullable();
            $table->string('video_twenty_eight')->nullable();
            $table->string('video_twenty_nine')->nullable();
            $table->string('video_thirty')->nullable();
            $table->string('video_thirty_one')->nullable();
            $table->string('video_thirty_two')->nullable();
            $table->string('video_thirty_three')->nullable();
            $table->string('video_thirty_four')->nullable();
            $table->string('video_thirty_five')->nullable();
            $table->string('lesson_two')->nullable();
            $table->string('lesson_three')->nullable();
            $table->string('lesson_four')->nullable();
            $table->string('lesson_five')->nullable();
            $table->string('section_two')->nullable();
            $table->string('lesson_six')->nullable();
            $table->string('lesson_seven')->nullable();
            $table->string('lesson_eight')->nullable();
            $table->string('lesson_nine')->nullable();
            $table->string('lesson_ten')->nullable();
            $table->string('section_three')->nullable();
            $table->string('lesson_eleven')->nullable();
            $table->string('lesson_twelve')->nullable();
            $table->string('lesson_thirtheen')->nullable();
            $table->string('lesson_fourtheen')->nullable();
            $table->string('lesson_fiftheen')->nullable();
            $table->string('section_four')->nullable();
            $table->string('lesson_sixtheen')->nullable();
            $table->string('lesson_seventheen')->nullable();
            $table->string('lesson_eightheen')->nullable();
            $table->string('lesson_ninetheen')->nullable();
            $table->string('lesson_twenty')->nullable();
            $table->string('section_five')->nullable();
            $table->string('lesson_twenty_one')->nullable();
            $table->string('lesson_twenty_two')->nullable();
            $table->string('lesson_twenty_three')->nullable();
            $table->string('lesson_twenty_four')->nullable();
            $table->string('lesson_twenty_five')->nullable();
            $table->string('section_six')->nullable();
            $table->string('lesson_twenty_six')->nullable();
            $table->string('lesson_twenty_seven')->nullable();
            $table->string('lesson_twenty_eight')->nullable();
            $table->string('lesson_twenty_nine')->nullable();
            $table->string('lesson_thirty')->nullable();
            $table->string('section_seven')->nullable();
            $table->string('lesson_thirty_one')->nullable();
            $table->string('lesson_thirty_two')->nullable();
            $table->string('lesson_thirty_three')->nullable();
            $table->string('lesson_thirty_four')->nullable();
            $table->string('lesson_thirty_five')->nullable();
            $table->string('course_price');
            $table->string('discounted_price');
            $table->string('teacher_name');
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
