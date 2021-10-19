<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Department;
use App\Models\Course;


class DepartmentsController extends Controller
{
    public function index() {
        $data = Department::all();
        return view('departments', ['departments' => $data]);
    }

    public function createDepartment(Request $request) {
        $department = new Department();
        $department->code = $request->code;
        $department->name = $request->name;
        $department->description = $request->description;
        $department->save();
        return redirect('/departments')->with('message', 'Department "' . $department->code . '" created successfully');
    }

    public function showDepartment($id) {

        $department = Department::find($id);
        $courses = $department->courses;
       return view('showDepartment', compact('department','courses'));
    }

    public function editDepartment($id) {
        return Department::find($id);
        /*
        $department= Department::find($request->id);
        $department->code = $request->code;
        $department->name = $request->name;
        $department->description = $request->description;
        $department->save();
        return redirect('/departments')->with('message', 'Success!');
        */
    }

    public function deleteDepartment($id) {
        $department = Department::find($id);
        $department->delete();
        return redirect('/departments')->with('message', 'Department "' . $department->code . '" successfully removed');
    }

}
