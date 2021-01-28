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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

//ADMIN PAGES
//Administration jeux
Route::get('/adminGames', 'App\Http\Controllers\AdminController@adminGames')->middleware('auth');
Route::post('/adminGames', 'App\Http\Controllers\AdminController@DelGames')->middleware('auth');
Route::get('/adminAddGames', 'App\Http\Controllers\AdminController@adminAddGames')->middleware('auth');
Route::post('/adminAddGames', 'App\Http\Controllers\AdminController@formulaireAddGames')->middleware('auth');
Route::get('/adminModGames', 'App\Http\Controllers\AdminController@adminModGames')->middleware('auth');
Route::post('/adminModGames', 'App\Http\Controllers\AdminController@formulaireModGames')->middleware('auth');

//Administrations utilisateurs
Route::get('/adminUsers', 'App\Http\Controllers\AdminController@adminUsers')->middleware('auth');
Route::post('/adminUsers', 'App\Http\Controllers\AdminController@formulaireUsers')->middleware('auth');

//Administration dashboard
Route::get('/adminDashboard', 'App\Http\Controllers\AdminController@adminDashboard')->middleware('auth');



//LOGIN PAGES
//Connexion
Route::get('/connexion', 'App\Http\Controllers\LogInController@connexion');

//Inscription
Route::get('/inscription', 'App\Http\Controllers\LogInController@inscription');



//USER PAGES
//Panier de l'utilisateur
Route::get('panier', 'App\Http\Controllers\UsersController@userPanier')->middleware('auth');

//Profil de l'utilisateur
Route::get('profile', 'App\Http\Controllers\UsersController@userProfile')->middleware('auth');



//route Games
Route::get('games', 'App\Http\Controllers\GamesController@index');

//route du detaille du jeu avec l'id
Route::get('game/{game}' , 'App\Http\Controllers\GamesController@show');
Route::get('send-email/{game}' , 'App\Http\Controllers\GamesController@sendEmail')->middleware('auth');

