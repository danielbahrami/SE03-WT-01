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
        return view('createCourse');
        /*
        $data = new Course();
        $data -> code = $request -> code;
        $data -> name = $request -> name;
        $data -> ects = $request -> ects;
        //$course -> department_id = $request -> department_id;
        $data -> save();
        return redirect('/courses')->with('message', 'Success!');
        */

    }

    public function showCourse($id)
    {
        return Course::find($id);
    }

}
