<?php

namespace App\Http\Controllers;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function departments()
    {
        $data= Department::all();
        return view('departments',['departments'=>$data]);
    }

    public function createDepartment()
    {
        return view('createDepartment');
    }

    public function showDepartment()
    {
        return 'show department';
    }

    public function editDepartment()
    {
        return 'update department';
    }

    public function updateDepartment()
    {
        return 'Update department';
    }

    public function deleteDepartment()
    {
        return 'delete department';
    }
}
