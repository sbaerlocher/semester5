<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PhaseController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ProcessModelController;
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
    return view('welcome');
});

Route::get('new/user', [UserController::class, 'create']);
Route::get('new/project', [ProjectController::class, 'create']);
Route::get('new/phase', [PhaseController::class, 'create']);
Route::get('new/activity', [ActivityController::class, 'create']);
Route::get('new/processmodel', [ProcessModelController::class, 'create']);

Route::get('user', [UserController::class, 'index']);
Route::get('user/{id}', [UserController::class, 'edit']);
Route::post('user/{id}/update', [UserController::class, 'update']);
Route::post('new/user/store', [UserController::class, 'store']);

Route::get('project', [ProjectController::class, 'index']);
Route::get('project/{id}', [ProjectController::class, 'edit']);
Route::post('project/{id}/update', [ProjectController::class, 'update']);
Route::post('new/project/store', [ProjectController::class, 'store']);

Route::get('phase', [PhaseController::class, 'index']);
Route::get('phase/{id}', [PhaseController::class, 'edit']);
Route::post('phase/{id}/update', [PhaseController::class, 'update']);
Route::post('new/phase/store', [PhaseController::class, 'store']);

Route::get('activity', [ActivityController::class, 'index']);
Route::get('activity/{id}', [ActivityController::class, 'edit']);
Route::post('activity/{id}/update', [ActivityController::class, 'update']);
Route::post('new/activity/store', [ActivityController::class, 'store']);

Route::get('processmodel', [ProcessModelController::class, 'index']);
Route::get('processmodel/{id}', [ProcessModelController::class, 'edit']);
Route::post('processmodel/{id}/update', [ProcessModelController::class, 'update']);
Route::post('new/processmodel/store', [ProcessModelController::class, 'store']);
