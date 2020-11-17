<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
class SectionController extends Controller
{
    private $section_fillable;
    private $lesson_fillable;
    private $model;

    public function __constract(Section $model, Lesson $lesson)
    {
        $this->section_fillable = $model->getFillable();
        $this->lesson_fillable = $lesson->getFillable();

    }

    public function store(Request $request)
    {
        $sec_req = new Request();
        $sec_req->merge([
            'section_name'=>$request->section
        ]);
        $lesson_req = new Request();
        $lesson_req->merge([
            'lesson_name'=>$request->lesson,
        ]);
        $section = Section::firstOrCreate($sec_req->all());
        if ($section != null) {
            $lesson = $section->lessons()->create($lesson_req->all());
            if ($lesson) {
                $img = $this->uploadOne($request);
                if ($section->lessons()->where('id', $lesson->id)->update(['lesson_video' => $img])) {
                    return redirect()->back()->with(['status' => 'success', 'status_code' => 200]);
                }
                return redirect()->back()->with(['status' => 'error', 'status_code' => 401]);
            }
        }
        return redirect()->back()->with(['status' => 'error', 'status_code' => 401]);
    }


    public function uploadOne(Request $request, $folder = 'images',  $disk = 'public')
    {
        $filename = "wolosys_img-" . random_int(3000, 10000000);
        $file =  $request->file('video_upload')[0] ;
        return $file->storeAs($folder, $filename . "." . $file->getClientOriginalExtension());
    }
}
