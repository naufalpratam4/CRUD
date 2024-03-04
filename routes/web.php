<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UpdatePasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::group(["middleware" => "guest"], function () {
});
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
// update password
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');

Route::get('edit-password', [UpdatePasswordController::class, 'edit'])->name('password.edit')->middleware('auth');
Route::post('edit-password', [UpdatePasswordController::class, 'update'])->middleware('auth');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::resource('student', StudentController::class);
// Route::resource('listStudents', [StudentController::class, 'listStudents'])->name();
Route::get('/listStudent', [StudentController::class, 'listStudents'])->name('listStudents');
Route::get('/create', [StudentController::class, 'create']);

Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::post('/edit/{id}', [StudentController::class, 'update'])->name('update');

// show
Route::get('/detail/{id}', [StudentController::class, 'detail'])->name('detail');

Route::delete('/edit/{id}', [StudentController::class, 'destroy'])->name('destroy');


// Route::post('/student/create', [StudentController::class, 'student'])->name('student');
// Route::post('/student/update', [StudentController::class, 'student'])->name('student');
