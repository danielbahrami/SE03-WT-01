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
        $deparment = new Department();
        $deparment->name = $request->name;
        $deparment->code = $request->code;
        $deparment->description = $request->description;
        $deparment->save();
        return redirect('/departments')->with('message', 'Success!');
    }

    public function showDepartment($id)
    {
        return Department::find($id);
    }



}
