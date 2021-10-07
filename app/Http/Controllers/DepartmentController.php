<?php

namespace App\Http\Controllers;

class DepartmentController extends Controller
{
    public function listDepartment()
    {
        return 'List department';
    }

    public function createDepartmentForm()
    {
        return 'Create department form';
    }

    public function createDepartment()
    {
        return 'create department';
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
