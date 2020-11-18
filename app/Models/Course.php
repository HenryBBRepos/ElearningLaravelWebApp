<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_name',
        'teacher_name',
        'course_hours',
        'course_price',
        'discounted_price',
        'course_aim',
        'class',
        'subject',
        'description',
        'keyword',
        'course_image',


                            ];
    public function sections(){
        return $this->hasMany(Section::class);
    }


}
