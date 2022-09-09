<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\EventController;
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

Route::get('/',[BackendController::class,'index']);
Route::get('/allevent',[EventController::class,'allevent']);
Route::get('/addevent',[EventController::class,'addevent']);
Route::get('/guestlist',[EventController::class,'guestlist']);
Route::get('/createticket',[EventController::class,'createticket']);


