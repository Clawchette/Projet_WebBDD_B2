@extends('layout')

@section('contenu')

<h1>Administration des jeux</h1>
<br>

@if($_GET==NULL)
    <button type="button" class="btn btn-info" ><a href="/adminGames?page=addgame" class="no-link-style-white">Ajouter un jeu</a></button> 
    <!-- liste des jeux déjà sur le site -->
@elseif($_GET["page"]=="addgame")
    <h3 style="padding-left: 20px;">Ajouter un jeu</h3>
    <br>
    <form class="" action="/adminGames" method="post" enctype="multipart/form-data">

        {{csrf_field()}}
        <div class="row">
            <div class="col form-group" >
                <label>Nom du jeu :</label><br>
                <input type="string" name="gamename" placeholder="Nom du jeu..." rows="3">
            </div>
            <div class="col form-group">
                <label>Photo du jeu :</label>
                <input type="file" class="form-control-file">
            </div>
            <div class="col form-group">
                <label>Prix du jeu (en euros) :</label><br>
                <input type="number" name="gameprice" placeholder="Prix du jeu (en €)..." rows="3">
            </div>
        </div><br>

        <div>
            <label>Description du jeu :</label><br>
            <textarea name="gamedesc" style="color:grey;" cols="140" rows="3">Description du jeu...</textarea>
        </div><br>

        <div class="row">
            <div class="col-4 form-group">
                <label>Nombre de jeux disponibles :</label><br>
                <input type="number" name="gamestock" placeholder="Quantité en stock..." rows="3">
            </div>

            <div class="col-4 form-group">
                <label>Code d'activation du jeu :</label><br>
                <input type="number" name="gamecode" placeholder="Code du jeu..." rows="3">
            </div>
        </div><br>

        <div>
            <input type="submit" value="Valider" class="btn btn-outline-success">
        </div><br><br>
    </form>
@endif




@endsection