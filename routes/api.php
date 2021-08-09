<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AgentController;
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
