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
            'course_price' => 'GH20',
            'discounted_price' => 'GH15',
            'teacher_name' => 'Francis Appiah - Fokuoh',

        ]);
    }
}
