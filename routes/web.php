<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);

Route::prefix('departments')->group(function() {
    Route::get('/', [DepartmentController::class, 'index']);
    Route::get('/create', [DepartmentController::class, 'createDepartment']);
    Route::post('/create', [DepartmentController::class, 'saveDepartment']);
    Route::get('/{id}', [DepartmentController::class, 'showDepartment']);
    Route::get('/{id}/edit', [DepartmentController::class, 'editDepartment']);
    Route::get('/{id}/delete', [DepartmentController::class, 'deleteDepartment']);
});

Route::post('editDepartment', [DepartmentController::class, 'updateDepartment']);

Route::prefix('courses')->group(function () {
    Route::get('/', [CourseController::class, 'index']);
    Route::get('/create', [CourseController::class, 'createCourse']);
    Route::post('/create', [CourseController::class, 'saveCourse']);
    Route::get('/{id}', [CourseController::class, 'showCourse']);
    Route::get('/{id}/edit', [CourseController::class, 'editCourse']);
    Route::get('/{id}/delete', [CourseController::class, 'deleteCourse']);
});

Route::post('editCourse', [CourseController::class, 'updateCourse']);
