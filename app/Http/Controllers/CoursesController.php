<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Course;

class CoursesController extends Controller {
    public function index() {
        $data = Course::all();
        return view('courses', ['courses' => $data]);
    }

    public function createCourse(Request $request) {
        $course = new Course();
        $course -> department_id = $request -> department_id;
        $course -> code = $request -> code;
        $course -> name = $request -> name;
        $course -> ects = $request -> ects;
        $course -> description = $request -> description;
        $course -> save();
        return redirect('/courses')->with('message', 'Course "' . $course -> code . '" created successfully');
    }

    public function showCourse($id) {
        return Course::find($id);
    }

    public function editCourse($id) {
        $course = Course::find($id);
        return view('editCourse', ['course' => $course]);
    }

    public function updateCourse(Request $request) {
        $course = Course::find($request -> id);
        $course -> department_id = $request -> department_id;
        $course -> code = $request -> code;
        $course -> name = $request -> name;
        $course -> ects = $request -> ects;
        $course -> description = $request -> description;
        $course -> save();
        return redirect('/courses') -> with('message', 'Course "' . $course -> code . '" updated successfully');
    }

    public function deleteCourse($id) {
        $course = Course::find($id);
        $course -> delete();
        return redirect('/courses')->with('message', 'Course "' . $course -> code . '" successfully removed');
    }
}
