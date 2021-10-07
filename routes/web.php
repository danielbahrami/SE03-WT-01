<?php

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

use App\Http\Controllers\MainController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CoursesController;

Route::get('/courses', [ CoursesController::class,'showLists']);

Route::get('/courses/create', [ CoursesController::class,'form']);

Route::post('/courses', [ CoursesController::class,'create']);

Route::get('/courses', [ CoursesController::class,'showCourses']);

Route::get('/courses', [ CoursesController::class,'updateForm']);

Route::put('/courses', [ CoursesController::class,'updateCourses']);

Route::delete('/courses', [ CoursesController::class,'deleteCourses']);


