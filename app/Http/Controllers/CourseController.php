<?php

namespace App\Http\Controllers;

use App\Course;
use App\Lesson;
use App\Stage;
use App\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function courses()
    {
        $courses = Course::orderBy('id', 'DESC')->paginate(4);
        return view('layouts.index', compact('courses'));
    }


    public function show($id)
    {
        try {
            $course = Course::find($id);

            $teacher = $course->teachers->first();
            $teachersAll=$course->teachers->all();
            $stage_name = $course->stage->stage_name;
            $stage_class = $course->stage->stage_class;
            $lessons=$course->lessons->all();
            $lessonsCount = $course->lessons->count();



//            $stage = Stage::with('courses')->get();

            return view('site.course_details', compact('course', 'teacher', 'stage_name','stage_class','lessonsCount','lessons','teachersAll'));
        } catch (\Exception$ex) {
            return $ex;
        }

    }


}
