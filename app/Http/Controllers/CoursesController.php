<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Course;

class CoursesController extends Controller
{
    public function index()
    {
        $data = Course::all();
        return view('courses', ['courses' => $data]);
    }

    public function createCourse(Request $request)
    {
        $course = new Course();
        $course -> code = $request -> code;
        $course -> name = $request -> name;
        $course -> ects = $request -> ects;
        $course -> save();
        return redirect('/courses');


    }

    public function showCourse($id)
    {
        return Course::find($id);
    }

}
