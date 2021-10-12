<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);

Route::prefix('departments')->group(function() {
    Route::get('/', [DepartmentController::class, 'index']);
    Route::view('/create', 'createDepartment');
    //Route::view('/','createDepartment');
    Route::post('/create', [DepartmentController::class, 'createDepartment']);
    Route::get('/{id}', [DepartmentController::class, 'showDepartment']);
    Route::get('/{id}/edit', [DepartmentController::class, 'editDepartment']);
    Route::put('/{id}', [DepartmentController::class, 'updateDepartment']);
    Route::delete('/{id}', [DepartmentController::class, 'deleteDepartment']);
});

Route::prefix('courses')->group(function () {
    Route::get('/', [CoursesController::class, 'index']);
    Route::get('/create', [CoursesController::class, 'createCourse']);
    Route::post('/', [CoursesController::class, 'createCourse']);
    Route::get('/{id}', [CoursesController::class, 'showCourse']);
    Route::get('/{id}/edit', [CoursesController::class, 'editCourse']);
    Route::put('/{id}', [CoursesController::class, 'updateCourse']);
    Route::delete('/{id}', [CoursesController::class, 'deleteCourse']);
});
