<?php

use App\Http\Controllers\api\StudentApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UpdatePasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('showStudents', StudentController::class);

// Route::get('showStudents', [StudentController::class, 'showStudents']);
Route::get('/ShowDataProfile', [AuthController::class, 'loginPost']);
Route::post('/cs/profile/login', [AuthController::class, 'loginJson']);
Route::post('/cs/profile/edit-password/{id}', [UpdatePasswordController::class, 'update']);

// Route::get('showStudent/{id}', [StudentController::class, 'showStudent']);

Route::get('/students', [StudentApiController::class, 'index']);
