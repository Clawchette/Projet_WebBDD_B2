<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public  function userPanier(){
        return view('User/userPanier');
    }

    public  function userProfile(){
        return view('User/userProfile');
    }
}
