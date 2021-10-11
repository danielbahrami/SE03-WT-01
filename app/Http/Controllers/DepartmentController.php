<?php

namespace App\Http\Controllers;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $data= Department::all();
        return view('departments',['departments'=>$data]);
    }

    public function createDepartment() {
        return view('createDepartment');
    }

}
