<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Department;


class DepartmentController extends Controller
{
    public function index()
    {
        $data= Department::all();
        return view('departments',['departments'=>$data]);
    }

    public function createDepartment(Request $request) {
        $deparment= new Department;
        $deparment->name=$request->name;
        $deparment->code=$request->code;
        $deparment->description=$request->description;
        $deparment->save();
        return redirect('/departments')->with('message', 'Success!');
    }

}
