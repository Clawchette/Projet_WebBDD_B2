@extends('layout')

@section('contenu')

<h1>Profil de l'utilisateur #[ID de l'utilisateur]</h1>

<form action="/adminUsers" method="post">
    <div>
        <label>Prénom :</label><br>
        <input type="string" name="userfirstname" value="[prénom de l'utilisateur]">
    </div><br>

    <div>
        <label>Nom :</label><br>
        <input type="string" name="userlastname" value="[nom de l'utilisateur]">
    </div><br>

    <div>
        <label>Adresse email :</label><br>
        <input type="string" name="useremail" value="[email de l'utilisateur]">
    </div><br>

    <div>
        <label>Date de naissance :</label><br>
        <input type="date" name="userbirthday" value="[date de naissance de l'utilisateur]">
    </div><br>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="useradmin">
        <label class="form-check-label" for="useradmin"> Administrateur</label>
    </div><br>

    <br><div>
        <input type="submit" value="Valider" class="btn btn-outline-success">
    </div>
</form>

@endsection