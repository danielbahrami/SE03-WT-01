<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'welcome']);

Route::get('/departments', [DepartmentController::class, 'listDepartment']);

Route::get('/departments/create', [DepartmentController::class, 'createDepartmentForm']);

Route::post('/departments', [DepartmentController::class, 'createDepartment']);

Route::get('/departments/{department}', [DepartmentController::class, 'showDepartment']);

Route::get('/departments/{department/edit}', [DepartmentController::class, 'editDepartment']);

Route::put('/departments/{department}', [DepartmentController::class, 'updateDepartment']);

Route::delete('/departments/{department}', [DepartmentController::class,]);

Route::get('/courses', [CoursesController::class, 'showLists']);

Route::get('/courses/create', [CoursesController::class, 'form']);

Route::post('/courses', [CoursesController::class, 'create']);

Route::get('/courses', [CoursesController::class, 'showCourses']);

Route::get('/courses', [CoursesController::class, 'updateForm']);

Route::put('/courses', [CoursesController::class, 'updateCourses']);

Route::delete('/courses', [CoursesController::class, 'deleteCourses']);
