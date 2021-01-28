@extends('layout')

@section('contenu')

<h1>Inscription</h1><br>

<form action="/inscription" method="post">
    <div class="row">
        <div class="col-3 form-group">
            <label>Prénom :</label><br>
            <input type="string" name="userfirstname" placeholder="Prénom..." style="min-width: 250px;">
        </div>
        <div class="col-3 form-group">
            <label>Nom :</label><br>
            <input type="string" name="userlastname" placeholder="Nom..." style="min-width: 250px;">
        </div>
        <div class="col form-group">
            <label>Adresse Email :</label><br>
            <input type="string" name="useremail" placeholder="Adresse email..." style="min-width: 350px;">
        </div>
    </div><br>

    <div class="row">
        <div class="col-3 form-group">
            <label>Mot de passe :</label><br>
            <input type="password" name="usermdp" placeholder="Mot de passe..." style="min-width: 250px;">
        </div>
        <div class="col form-group">
            <label>Confirmation du mot de passe :</label><br>
            <input type="password" name="mdpconf" placeholder="Confirmez le mot de passe..." style="min-width: 250px;">
        </div>
    </div><br>

    <div class="row">
        <div class="col-3 form-group">
            <label>Date de naissance :</label><br>
            <input type="date" name="userbirthday" style="min-width: 250px;">
        </div>
        <div class="col form-group">
            <label>Solde :</label><br>
            <input type="number" name="usermoney" placeholder="Solde..." style="min-width: 250px;">
        </div>
    </div>

    <br><div>
        <input type="submit" value="Valider" class="btn btn-outline-success">
    </div>
</form>

@endsection