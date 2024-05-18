<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAuthController;
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

Route::get('/test', function() {
    if(!auth('student')->check()) 
        return response()->json(['status' => "Not Authorized"], 401);

    return response()->json(['status' => "passed"], 200);
});
