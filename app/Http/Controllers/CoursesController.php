<?php

namespace App\Http\Controllers;

class CoursesController extends Controller
{
    public function showLists()
    {
        return 'courses';
    }

    public function form()
    {
        return 'courseFormCreate';
    }

    public function create()
    {
        return 'createCourse';
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
        return 'update the courses';
    }

    public function deleteCourses()
    {
        return 'deletes the courses';
    }
}
