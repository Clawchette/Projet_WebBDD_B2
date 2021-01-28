<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\User;
use DB;

class AdminController extends Controller
{
    public  function adminGames(){
        $games = Game::all();
        return view('Admin/adminGames', [
            'games' => $games,
        ] );
    }
    public  function adminAddGames(){
        return view('Admin/adminAddGames');
    }
    public  function adminModGames(){
        return view('Admin/adminModGames');
    }

    public function formulaireAddGames(){

        request()->validate([
            'gamename' =>['required'],
            'gamepic' =>['required'],
            'gameprice' => ['required'],
            'gamedesc'=>['required'],
            'gamestock' =>['required'],
            'gamecode' =>['required'],
            'gameplateform' =>['required'],

        ]);

        $game = Game::create([ 
            'name' => request('gamename'),
            'description' => request('gamedesc'), 
            'photo' => cloudinary()->upload(request()->file('gamepic')->getRealPath())->getSecurePath(),
            'stock' => request('gamestock'),
            'price' => request('gameprice'), 
            'activation_code' => request('gamecode'),
            'plateform' => request('gameplateform'),
        ]);

        return view('Admin/adminGames');
    }

    public function formulaireModGames(){

        request()->validate([
            'gamename' =>['required'],
            'gamepic' =>['required'],
            'gameprice' => ['required'],
            'gamedesc'=>['required'],
            'gamestock' =>['required'],
            'gamecode' =>['required'],
            'gameplateform' =>['required'],

        ]);

        $update = DB::table('games')->where('id', request('id'))->update([
            'name' => request('gamename'),
            'description' => request('gamedesc'),
            'photo' => cloudinary()->upload(request()->file('gamepic')->getRealPath())->getSecurePath(),
            'plateform' => request('gameplateform'),
            'stock' => request('gamestock'),
            'price' => request('gameprice'),
            'activation_code' => request('gamecode'),
        ]);

        return view('Admin/adminGames');
    }

    public function DelGames(){
        $delete = DB::table('games')->where('id', request('id'))->delete();
        return view('Admin/adminGames');
    }



    public  function adminUsers(){
        return view('Admin/adminUsers');
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


    public  function adminDashboard(){
        return view('Admin/adminDashboard');
    }
}
