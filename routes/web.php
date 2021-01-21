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

<<<<<<< HEAD
=======
Route::get('/adminGames', 'App\Http\Controllers\AdminController@adminGames');
Route::post('/adminGames', 'App\Http\Controllers\AdminController@formulaire');
>>>>>>> 413cb0a175b9e4b6c472e83275bf2545ab3597e6
