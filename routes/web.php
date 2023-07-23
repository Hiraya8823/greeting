<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/comments/{greet}', [App\Http\Controllers\MessageController::class, 'greet']);

Route::get('/comments/freeword/{msg}', [App\Http\Controllers\MessageController::class, 'freeword']);
