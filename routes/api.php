<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAuthController;
use App\Http\Controllers\TeacherAuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/student/login', [StudentAuthController::class, 'login']);
Route::post('/student/register', [StudentAuthController::class, 'register']);

Route::post('/teacher/login', [TeacherAuthController::class, 'login']);
Route::post('/teacher/register', [TeacherAuthController::class, 'register']);
Route::put('/students/{id}', [StudentAuthController::class, 'update']);

Route::middleware('auth:sanctum')->group(function () {
Route::post('/student/logout', [StudentAuthController::class, 'logout']);});


Route::get('/test', function() {
    if(!auth('teacher')->check()) 
        return response()->json(['status' => "Not Authorized"], 401);

    return response()->json(['status' => "passed"], 200);
});