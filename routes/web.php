<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LecturerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ========================
// LANDING PAGE
// ========================
Route::get('/', function () {
    return redirect()->route('login');
});


// ========================
// AUTH ROUTES
// ========================
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// ========================
// ADMIN ROUTES
// ========================
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard');

Route::post('/admin/course', [AdminController::class, 'addCourse'])
    ->name('admin.course.add');

Route::delete('/admin/course/{id}', [AdminController::class, 'deleteCourse'])
    ->name('admin.course.delete');


// ========================
// STUDENT ROUTES
// ========================
Route::get('/student/dashboard', [StudentController::class, 'dashboard'])
    ->name('student.dashboard');

// show feedback form page
Route::get('/student/course/{id}/feedback', [StudentController::class, 'showFeedbackForm'])
    ->name('student.feedback.form');

// submit feedback
Route::post('/student/feedback', [StudentController::class, 'submitFeedback'])
    ->name('student.feedback.submit');


// ========================
// LECTURER ROUTES
// ========================
Route::get('/lecturer/dashboard', [LecturerController::class, 'dashboard'])
    ->name('lecturer.dashboard');

Route::get('/lecturer/course/{id}/feedback', [LecturerController::class, 'viewFeedback'])
    ->name('lecturer.feedback');