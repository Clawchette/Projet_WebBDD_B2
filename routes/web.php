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

//ADMIN PAGES
//Administration jeux
Route::get('/adminGames', 'App\Http\Controllers\AdminController@adminGames');
Route::post('/adminGames', 'App\Http\Controllers\AdminController@formulaireGames');
//Administrations utilisateurs
Route::get('/adminUsers', 'App\Http\Controllers\AdminController@adminUsers');
Route::post('/adminUsers', 'App\Http\Controllers\AdminController@formulaireUsers');
//Administration dashboard
Route::get('/adminDashboard', 'App\Http\Controllers\AdminController@adminDashboard');

//LOGIN PAGES
//Connexion
Route::get('/connexion', 'App\Http\Controllers\LogInController@connexion');
//Inscription
Route::get('/inscription', 'App\Http\Controllers\LogInController@inscription');

//USER PAGES
//Panier de l'utilisateur
Route::get('/panier', 'App\Http\Controllers\UsersController@userPanier');
//Profil de l'utilisateur
Route::get('/profil', 'App\Http\Controllers\UsersController@userProfile');

//route Games
Route::get('games', 'App\Http\Controllers\GamesController@index');


Route::get('/game/{game}' , 'App\Http\Controllers\GamesController@show');


