<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PushController;

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

Route::get('/product/{id}', [PushController::class,'product']);

Route::get('/product-update/{id}', [PushController::class,'update']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
