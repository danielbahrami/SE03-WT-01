<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function showLists()
    {
        return 'courses';
    }
    public function form()
    {
        return 'coursFormCreate';
    }
    public function create()
    {
        return 'createCours';
    }
    public function showCourses()
    {
        return 'showcourses';
    }
    public function updateForm()
    {
        return 'form that update courses';
    }
    public function updateCourses()
    {
        return 'update the couses';
    }
    public function deleteCourses()
    {
        return 'Deltes the courses';
    }
}
