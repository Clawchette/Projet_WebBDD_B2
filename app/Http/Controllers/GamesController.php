<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Mail\SignUp;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Exception;


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
        $user = Auth::user();
        // envoie un email a l'acheteur quand il appuie sur le bouton
        $message = 'Vous allez recevoir un email avec votre clé.';
        try {
            Mail::to($user->email)->send(new SignUp($game));
        } catch (Exception $e) {
            $message = "une erreur c'est produite lors de l'envoie d'email";
        }

        return view('game_email_sent', [
            'game' => $game,
            'message' => $message,
            ]);
    }
}
