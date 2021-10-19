<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);

Route::prefix('departments')->group(function() {
    Route::get('/', [DepartmentsController::class, 'index']);
    Route::view('/create', 'createDepartment');
    Route::post('/create', [DepartmentsController::class, 'createDepartment']);
    Route::get('/{id}', [DepartmentsController::class, 'showDepartment']);
    Route::get('/{id}/edit', [DepartmentsController::class, 'editDepartment']);
    Route::put('/{id}', [DepartmentsController::class, 'updateDepartment']);
    Route::delete('/{id}', [DepartmentsController::class, 'deleteDepartment']);
});

Route::prefix('courses')->group(function () {
    Route::get('/', [CoursesController::class, 'index']);
    Route::view('/create',  'createCourse');
    Route::get('/create', [CoursesController::class, 'createCourse']);
    Route::post('/create', [CoursesController::class, 'createCourse']);
    Route::get('/{id}', [CoursesController::class, 'showCourse']);
    Route::get('/{id}/edit', [CoursesController::class, 'editCourse']);
    Route::put('/{id}', [CoursesController::class, 'updateCourse']);
    Route::delete('/{id}', [CoursesController::class, 'deleteCourse']);
});
