@extends('layout')

@section('contenu')

<h1>Administration des jeux</h1><br>

<h3 style="padding-left: 20px;">Modifier un jeu</h3><br>

<!--cherche le jeu selon l'ID dans le GET
<?php $game = DB::table('games')->find($_GET['id']);?>
-->

<form action="/adminModGames" method="post" enctype="multipart/form-data">

    {{csrf_field()}}
    <div class="row">
        <div class="col form-group" >
            <label>Nom du jeu :</label><br>
            <input type="string" name="gamename" value="{{$game->name}}">
        </div>
        <div class="col form-group">
            <div class="row">
                <div class="col-2">
                    <img src="{{$game->photo}}" style="height:50px; width:50px;">
                </div>
                <div class="col">
                    <label>Photo du jeu :</label>
                    <input type="file" name="gamepic" class="form-control-file">
                </div>
            </div>
        </div>
        <div class="col form-group">
            <label>Prix du jeu (en euros) :</label><br>
            <input type="number" name="gameprice" value="{{$game->price}}">
        </div>
    </div><br>

    <div>
        <label>Description du jeu :</label><br>
        <textarea name="gamedesc" style="color:grey;" cols="140">{{$game->description}}</textarea>
    </div><br>

    <div class="row">
        <div class="col-4 form-group">
            <label>Nombre de jeux disponibles :</label><br>
            <input type="number" name="gamestock" value="{{$game->stock}}">
        </div>

        <div class="col-4 form-group">
            <label>Code d'activation du jeu :</label><br>
            <input type="number" name="gamecode" value="{{$game->activation_code}}">
        </div>
        <div class="col-4 form-group">
            <label>Plateforme du jeu :</label><br>
            <select name="gameplateform" id="gameplateform">
                @if($game->plateform=="PC")
                    <option value="PC" selected>PC</option>
                    <option value="PS">PlayStation</option>
                    <option value="Xbox">Xbox</option>
                @elseif($game->plateform=="PS")
                    <option value="PC">PC</option>
                    <option value="PS" selected>PlayStation</option>
                    <option value="Xbox">Xbox</option>
                @else
                    <option value="PC">PC</option>
                    <option value="PS">PlayStation</option>
                    <option value="Xbox"selected>Xbox</option>
                @endif
            </select>
        </div>
    </div><br>

    <br>

    <div>
        <input type="hidden" name="id" value="{{$game->id}}">
        <input type="submit" value="Valider" class="btn btn-outline-success">
    </div><br><br>
</form>
@endsection