<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\geralController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [EventController::class, 'index']);

Route::get('/event/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);
Route::get('/event/{id?}', [EventController::class, 'show']);


Route::get('/contact', [geralController::class, 'contact']);

Route::get('/register', [geralController::class, 'register']);

