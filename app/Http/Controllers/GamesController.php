<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;


class GamesController extends Controller
{
    public function index(){
        $games = Game::all();
        return view('welcome', [
            'games' => $games,
        ] );
    }
}
