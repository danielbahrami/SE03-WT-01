<?php

namespace App\Http\Controllers;

class DepartmentController extends Controller
{
    public function departments()
    {
        return view('departments');
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
