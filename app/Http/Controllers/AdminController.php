<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Games;
use App\Models\User;

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
            'gamepric' =>['required'],
            'gameprice' => ['required'],
            'gamedesc'=>['required'],
            'gamestock' =>['required'],
            'gamecode' =>['required'],
            'gameplateform' =>['required'],

        ]);

        $game = Game::create([ 
            'Name' => request('gamename'),
            'description' => request('gamedesc'), 
            'photos' => request('gamepic'),
            'stock' => request('gamestock'),
            'price' => request('gameprice'), 
            'activation_code' => request('gamecode'),
            'plateform' => request('gameplateform'),
        ]);

    }

    public function formulaireUsers(){

        request()->validate([
            'userfirstname' =>['required'],
            'userlastname' =>['required'],
            'useremail' => ['required'],
            'userbirthday'=>['required'],
            'useradmin' =>['required'],

        ]);

        $user = User::create([ 
            'firstname' => request('userfirstname'),
            'lastname' => request('userlastname'), 
            'email' => request('useremail'),
            'birthday' => request('userbirthday'),
            'admin' => request('useradmin'), 
        ]);

    }
}
