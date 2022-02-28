<?php

use App\Http\Controllers\TreeController;
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

Route::get('/index', [TreeController::class, 'index']);
Route::get('/create', [TreeController::class, 'create']);
Route::get('/show/{id}', [TreeController::class, 'show']);
Route::post('/store', [TreeController::class, 'store']);
Route::delete('/delete/{id}', [TreeController::class, 'destroy']);



