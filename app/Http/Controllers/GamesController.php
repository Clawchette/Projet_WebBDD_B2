<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Mail\SignUp;
use Illuminate\Support\Facades\Mail;


class GamesController extends Controller
{
    public function index(){
        $games = Game::all();
        return view('games', [
            'games' => $games,
        ]);
    }

    public function show(Game $game){
        return view('produit' , [
            'game' => $game,
        ]);
    }

    public function sendEmail(Game $game)
    {
        //$user = TODO: Get the user from the auth service;
        // Send an email to the buyer
        Mail::to('tankplasma@gmail.com')->send(new SignUp($game));

        return view('game_email_sent', [
            'game' => $game
            ]);
    }
}
