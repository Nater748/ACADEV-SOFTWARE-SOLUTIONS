<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('signup');
});

// Admin Routes
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::post('/admin/course', [AdminController::class, 'addCourse']);
Route::delete('/admin/course/{id}', [AdminController::class, 'deleteCourse'])->name('admin.course.delete');

// Student Routes
Route::get('/student/dashboard', [StudentController::class, 'dashboard']);
Route::post('/student/feedback', [StudentController::class, 'submitFeedback']);