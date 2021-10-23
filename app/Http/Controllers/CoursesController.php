<?php

namespace App\Http\Controllers;
use App\Models\Department;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use App\Models\Course;

class CoursesController extends Controller {
    public function index() {
        $data = Course::all();
        return view('courses', ['courses' => $data]);
    }

    public function createCourse() {
        $department = Department::all();
        return view('createCourse', compact('department'));
    }

    public function saveCourse(Request $request) {
        $course = new Course();
        $course -> department_id = $request -> department_id;
        $course -> name = $request -> name;
        $course -> code = $request -> code;
        $course -> ects = $request -> ects;
        $course -> description = $request -> description;
        $course -> save();
        return redirect('/courses') -> with('message', 'Course "' . $course -> code . '" created successfully');
    }

    public function showCourse($id) {
        $course = Course::find($id);
        return view('showCourse', ['course' => $course]);
    }

    public function editCourse($id) {
        $course = Course::find($id);
        return view('editCourse', ['course' => $course]);
    }

    public function updateCourse(Request $request) {
        $course = Course::find($request -> id);
        $course -> department_id = $request -> department_id;
        $course -> name = $request -> name;
        $course -> code = $request -> code;
        $course -> ects = $request -> ects;
        $course -> description = $request -> description;
        $course -> save();
        return redirect('/courses') -> with('message', 'Course "' . $course -> code . '" updated successfully');
    }

    public function deleteCourse($id) {
        $course = Course::find($id);
        $course -> delete();
        return redirect('/courses') -> with('message', 'Course "' . $course -> code . '" successfully removed');
    }
}
