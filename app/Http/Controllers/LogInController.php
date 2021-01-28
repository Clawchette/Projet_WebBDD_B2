<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogInController extends Controller
{
    

    public  function connexion(){
        return view('LogIn/connexion');
    }

    public  function inscription(){
        return view('LogIn/inscription');
    }

}
