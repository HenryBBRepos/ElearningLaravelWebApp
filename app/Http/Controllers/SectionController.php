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
//        return $request;
        $section = Section::firstOrCreate($request->only($this->section_fillable));
        if ($section != null) {
            $lesson = $section->lessons->create($this->lesson_fillable);
            if ($lesson) {
                $img = $this->saveOneImage($request, 'video_upload');
                if ($section->lessons->where('id', $lesson->id)->update(['lesson_video' => $img])) {
                    return redirect()->back()->with(['status' => 'success', 'status_code' => 200]);
                }
                return redirect()->back()->with(['status' => 'error', 'status_code' => 401]);
            }
        }
        return redirect()->back()->with(['status' => 'error', 'status_code' => 401]);
    }

    public function saveOneImage(Request $request, $key)
    {

        if ($request->has($key) && $request[$key] != null) {
            $filename = "wolosys_img-" . random_int(3000, 10000000);
            $img = $this->uploadOne($request[$key], 'images', $filename);
            return $img;
        }
        return null;
    }

    public function uploadOne(UploadedFile $file, $folder = null, $filename = 'wolosys', $disk = 'public')
    {
        return $file->storeAs($folder, $filename . "." . $file->getClientOriginalExtension(), $disk);
    }
}
