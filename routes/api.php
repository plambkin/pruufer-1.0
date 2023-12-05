<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PageController;

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
});

Route::get('/getEnrolls24/{token}', [EnrollmentController::class, 'getEnrolls24']);

Route::get('/getEnrolls24Beta/{token}', [EnrollmentController::class, 'getEnrolls24Beta']);

//Route::post('/updatePage', [PageController::class, 'updatePage']);



Route::middleware('auth:sanctum')->group(function () {
    Route::post('/updatePage',[PageController::class, 'updatePage']);
    Route::get('/getEnrolls24Gamma', [EnrollmentController::class, 'getEnrolls24Gamma']);

});
