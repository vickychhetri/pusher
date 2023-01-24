<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PushController;

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
    return view('m');
});

Route::get('/sender', function () {
    return view('m1');
});
Route::get('/test', [PushController::class,'index']);

