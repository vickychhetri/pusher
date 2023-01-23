<?php

use Illuminate\Support\Facades\Route;
use App\Events\PushEvent;
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
Route::get('/test', function () {
    event(new PushEvent('hello world'));
});

//Route::get('/', function () {
//    return view('welcome');
//});
