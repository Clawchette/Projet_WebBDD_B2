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

        Game::create([ 
            'name' => request('gamename'),
            'description' => request('gamedesc'), 
            'photo' => cloudinary()->upload(request()->file('gamepic')->getRealPath())->getSecurePath(),
            'stock' => request('gamestock'),
            'price' => request('gameprice'), 
            'activation_code' => request('gamecode'),
            'plateform' => request('gameplateform'),
        ]);

        $games = Game::all();
        return view('Admin/adminGames', [
            'games' => $games,
        ] );
    }

    public function formulaireModGames(){

        $game = DB::table('games')->find(request('id'));

        if($game->name != request('gamename')){
            DB::table('games')->where('id', request('id'))->update([
                'name' => request('gamename'),
            ]);
        }
        if($game->description != request('gamedesc')){
            DB::table('games')->where('id', request('id'))->update([
                'description' => request('gamedesc'),
            ]);
        }
        if($game->plateform != request('gameplateform')){
            DB::table('games')->where('id', request('id'))->update([
                'plateform' => request('gameplateform'),
            ]);
        }
        if($game->stock != request('gamestock')){
            DB::table('games')->where('id', request('id'))->update([
                'stock' => request('gamestock'),
            ]);
        }
        if($game->price != request('gameprice')){
            DB::table('games')->where('id', request('id'))->update([
                'price' => request('gameprice'),
            ]);
        }
        if($game->activation_code != request('gamecode')){
            DB::table('games')->where('id', request('id'))->update([
                'activation_code' => request('gamecode'),
            ]);
        }

        if(request('gamepic') != NULL){
            DB::table('games')->where('id', request('id'))->update([
                'photo' => cloudinary()->upload(request()->file('gamepic')->getRealPath())->getSecurePath(),
            ]);
        }

        $games = Game::all();
        return view('Admin/adminGames', [
            'games' => $games,
        ] );
    }

    public function DelGames(){
        DB::table('games')->where('id', request('id'))->delete();
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
