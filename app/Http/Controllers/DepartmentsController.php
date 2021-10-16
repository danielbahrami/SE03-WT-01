<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentsController extends Controller
{
    public function index()
    {
        $data = Department::all();
        return view('departments', ['departments' => $data]);
    }

    public function createDepartment(Request $request)
    {
        $department = new Department();
        $department->code = $request->code;
        $department->name = $request->name;
        $department->description = $request->description;
        $department->save();
        return redirect('/departments')->with('message', 'Success!');
    }

    public function showDepartment($id)
    {
        $data = Department::all();
        return view('departments', ['departments' => $data]);
    }
    public function editDepartment($id)
    {
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

}
