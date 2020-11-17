<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_name',
        'class',
        'description',
        'keyword',
        'course_aim',
        'course_price',
        'discounted_price',
        'teacher_name',

                            ];
    public function sections(){
        return $this->hasMany(Section::class);
    }


}
