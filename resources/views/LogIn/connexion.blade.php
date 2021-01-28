@extends('layout')

@section('contenu')

<h1>Connexion</h1><br>

<form class="" action="/connexion" method="post">
    <div class="form-group">
        <label>Adresse Email :</label><br>
        <input type="string" name="email" placeholder="adresse email...">
    </div>
    <div class="form-group">
        <label>Mot de passe :</label><br>
        <input type="password" name="mdp" placeholder="Mot de passe...">
    </div>

    <br><div>
        <input type="submit" value="Valider" class="btn btn-outline-success">
    </div>
</form>

@endsection