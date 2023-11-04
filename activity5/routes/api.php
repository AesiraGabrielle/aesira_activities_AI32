<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

    Route::group(['prefix' => '/registrations'], function() {
        Route::get('/', [RegistrationController::class, 'index']);
        Route::delete('/{id}', [RegistrationController::class, 'delete']);
        Route::get('/{id}', [RegistrationController::class,'get']);
        Route::post('/update/{id}', [RegistrationController::class,'update']);
        Route::post('/create', [RegistrationController::class, 'create']);
        });
});
