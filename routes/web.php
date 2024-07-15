<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
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
Route::get('/home', function () {
    return view('home');
});
Route::get('/home', [homeController::class,'home']);
Route::post('/show', [homeController::class,'show']);
Route::get('/display', [homeController::class,'display']);
Route::get('/edit/{id}', [homeController::class, 'edit']);
Route::post('/edit/{id}', [homeController::class, 'update']);
Route::get('/delete/{id}', [homeController::class, 'delete']);
