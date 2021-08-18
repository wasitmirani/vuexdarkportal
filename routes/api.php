<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Backend\AgentController;
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Backend\StripeController;
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

Route::prefix('dashboard')->name('dashboard.')->group(function () {

    Route::post('/stripe/link/generate',[StripeController::class,'generateLink']);
    Route::get('/agents',[AgentController::class,'getAgentsList']);
});

Route::get('users',[UserController::class,'index']);
Route::post('users',[UserController::class,'store']);
Route::post('all/users',[UserController::class,'store']);
Route::post('/delete/user/{id}',[UserController::class,'delete']);
Route::get('user/{id}',[UserController::class,'show']);
Route::post('user/update',[UserController::class,'update']);

Route::get('roles',[RoleController::class,'index']);
Route::post('roles',[RoleController::class,'store']);
Route::post('delete/role/{id}',[RoleController::class,'delete']);
Route::get('role/{id}',[RoleController::class,'show']);
Route::post('role/update',[RoleController::class,'update']);
//Permission Apis
Route::get('/permissions',[PermissionController::class,'index']);
Route::post('/delete/permission/{id}',[PermissionController::class,'delete']);
Route::post('/permissions',[PermissionController::class,'store']);
