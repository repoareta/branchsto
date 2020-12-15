<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

// load controllers
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\StableController;
use App\Http\Controllers\Api\HorseController;
use App\Http\Controllers\Api\CoachController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Auth::routes(['verify' => true]);

// User API
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

// Stable API
Route::get('stable', [StableController::class, 'index']);
Route::post('stable', [StableController::class, 'store']);
Route::put('stable/{stable}', [StableController::class, 'update']);
Route::delete('stable/{stable}', [StableController::class, 'destroy']);
Route::get('stable/{stable}', [StableController::class, 'show']);
Route::get('stable-by-user/{user}', [StableController::class, 'showByUserId']);

// Horse API
Route::get('horse', [HorseController::class, 'index']);
Route::post('horse', [HorseController::class, 'store']);
Route::put('horse/{horse}', [HorseController::class, 'update']);
Route::delete('horse/{horse}', [HorseController::class, 'destroy']);
Route::get('horse/{horse}', [HorseController::class, 'show']);

// Coach API
Route::get('coach', [CoachController::class, 'index']);
Route::post('coach', [CoachController::class, 'store']);
Route::put('coach/{coach}', [CoachController::class, 'update']);
Route::delete('coach/{coach}', [CoachController::class, 'destroy']);
Route::get('coach/{coach}', [CoachController::class, 'show']);
