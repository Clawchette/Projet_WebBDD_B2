@extends('layout')

@section('contenu')

<h1>Administration des jeux</h1>
<br>

    <a href="/adminAddGames" class="btn btn-info" style="margin-bottom:20px;">Ajouter un jeu</a><br>
    <!-- liste des jeux déjà sur le site qui seront des boutons pour les modifier -->
    @foreach($games as $game)
        <div class="row" style="margin-bottom:20px; border:solid black 2px; border-radius:5px; width: 400px;">
            <div class="col-5">
                <img src="{{$game->photo}}" style="height:150px; width:150px;">
            </div>
            <div class="col-3">
                <h3 style="margin-bottom:20px;">{{$game->name}}</h5>
                <a href="/adminModGames?id={{$game->id}}" class="btn btn-success" style="margin-bottom:20px;">Modifier</a>

                <form action="/adminGames" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$game->id}}">
                    <input type="submit" value="Supprimer" class="btn btn-danger">
                </form>
            </div>
        </div>
    @endforeach
@endsection