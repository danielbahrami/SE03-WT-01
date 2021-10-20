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
    Route::get('/{id}/delete', [DepartmentsController::class, 'deleteDepartment']);
});

Route::post('editDepartment', [DepartmentsController::class, 'updateDepartment']);

Route::prefix('courses')->group(function () {
    Route::get('/', [CoursesController::class, 'index']);
    Route::view('/create', 'createCourse');
    Route::post('/create', [CoursesController::class, 'createCourse']);
    Route::get('/{id}', [CoursesController::class, 'showCourse']);
    Route::get('/{id}/edit', [CoursesController::class, 'editCourse']);
    Route::get('/{id}/delete', [CoursesController::class, 'deleteCourse']);
});

Route::post('editCourse', [CoursesController::class, 'updateCourse']);
