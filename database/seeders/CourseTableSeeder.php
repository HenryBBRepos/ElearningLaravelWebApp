<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Course::create([
            'course_name' => 'SHS 2 -Elective Mathematics',
            'class' => 'SHS 1',
            'subject' => 'Integrated Science',
            'description' => 'The Decription should be really detailed',
            'keyword' => 'Matter,Living things',
            'course_aim' => 'to understand the concept of living and non-living things',
            'section_one' => 'DIVERSITY OF MATTER',
            'lesson_one' => 'Introduction to integrated science',
            'lesson_two' => 'Diversity of living and non-living things',
            'lesson_three' => 'Diversity of living and non-living things',
            'lesson_four' => 'Diversity of living and non-living things',
            'lesson_five' => 'Diversity of living and non-living things',
            'section_two' => 'DIVERSITY OF MATTER',
            'lesson_six' => 'Diversity of living and non-living things',
            'lesson_seven' => 'Diversity of living and non-living things',
            'lesson_eight' => 'Diversity of living and non-living things',
            'lesson_nine' => 'Diversity of living and non-living things',
            'lesson_ten' => 'Diversity of living and non-living things',
            'section_three' => 'DIVERSITY OF MATTER',
            'lesson_eleven' => 'Diversity of living and non-living things',
            'lesson_twelve' => 'Diversity of living and non-living things',
            'lesson_thirtheen' => 'Diversity of living and non-living things',
            'lesson_fourtheen' => 'Diversity of living and non-living things',
            'lesson_fiftheen' => 'Diversity of living and non-living things',
            'section_four' => 'DIVERSITY OF MATTER',
            'lesson_sixtheen' => 'Diversity of living and non-living things',
            'lesson_seventheen' => 'Diversity of living and non-living things',
            'lesson_eightheen' => 'Diversity of living and non-living things',
            'lesson_ninetheen' => 'Diversity of living and non-living things',
            'lesson_twenty' => 'Diversity of living and non-living things',
            'section_five' => 'DIVERSITY OF MATTER',
            'lesson_twenty_one' => 'Diversity of living and non-living things',
            'lesson_twenty_two' => 'Diversity of living and non-living things',
            'lesson_twenty_three' => 'Diversity of living and non-living things',
            'lesson_twenty_four' => 'Diversity of living and non-living things',
            'lesson_twenty_five' => 'Diversity of living and non-living things',
            'section_six' => 'DIVERSITY OF MATTER',
            'lesson_twenty_six' => 'Diversity of living and non-living things',
            'lesson_twenty_seven' => 'Diversity of living and non-living things',
            'lesson_twenty_eight' => 'Diversity of living and non-living things',
            'lesson_twenty_nine' => 'Diversity of living and non-living things',
            'lesson_thirty' => 'Diversity of living and non-living things',
            'section_seven' => 'DIVERSITY OF MATTER',
            'lesson_thirty_one' => 'Diversity of living and non-living things',
            'lesson_thirty_two' => 'Diversity of living and non-living things',
            'lesson_thirty_three' => 'Diversity of living and non-living things',
            'lesson_thirty_four' => 'Diversity of living and non-living things',
            'lesson_thirty_five' => 'Diversity of living and non-living things',
            'course_price' => 'GH20',
            'discounted_price' => 'GH15',
            'teacher_name' => 'Francis Appiah - Fokuoh',
            
        ]);
    }
}
