<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'lesson_name',
        'lesson_article',
        'lesson_video',
        'course_id',
        'section_id',
    ];
    public function section(){
        return $this->belongsTo(Section::class,'section_id');
    }

}
