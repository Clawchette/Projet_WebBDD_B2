<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public  function adminGames(){
        return view('Admin/adminGames');
    }

    public  function adminUsers(){
        return view('Admin/adminUsers');
    }

    public  function adminDashboard(){
        return view('Admin/adminDashboard');
    }

    public function formulaireGames(){

        request()->validate([
            'gamename' =>['required'],
            'gamepic' =>['required'],
            'gameprice' => ['required'],
            'gamedesc'=>['required'],
            'gamestock' =>['required'],
            'gamecode' =>['required'],

        ]);

        $game = Game::create([ 
            'Name' => request('gamename'),
            'description' => request('gamedesc'), 
            'photos' => request('gamepic'),
            'stock' => request('gamestock'),
            'price' => request('gameprice'), 
            'activation_code' => request('gamecode'),
        ]);

    }
}
