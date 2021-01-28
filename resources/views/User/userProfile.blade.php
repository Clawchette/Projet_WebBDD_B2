@extends('layout')

@section('contenu')

<h1>Votre profil 
    <a href="/profil?page=modif">
        @if($_GET==NULL)
            <img class="modif-button" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDQ2OS4zMzYgNDY5LjMzNiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDY5LjMzNiA0NjkuMzM2OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTQ1Ni44MzYsNzYuMTY4bC02NC02NC4wNTRjLTE2LjEyNS0xNi4xMzktNDQuMTc3LTE2LjE3LTYwLjM2NSwwLjAzMUw0NS43NjMsMzAxLjY4Mg0KCQkJYy0xLjI3MSwxLjI4Mi0yLjE4OCwyLjg1Ny0yLjY4OCw0LjU4N0wwLjQwOSw0NTUuNzNjLTEuMDYzLDMuNzIyLTAuMDIxLDcuNzM2LDIuNzE5LDEwLjQ3OGMyLjAzMSwyLjAzMyw0Ljc1LDMuMTI4LDcuNTQyLDMuMTI4DQoJCQljMC45NzksMCwxLjk2OS0wLjEzNiwyLjkyNy0wLjQwN2wxNDkuMzMzLTQyLjcwM2MxLjcyOS0wLjUsMy4zMDItMS40MTgsNC41ODMtMi42OWwyODkuMzIzLTI4Ni45ODMNCgkJCWM4LjA2My04LjA2OSwxMi41LTE4Ljc4NywxMi41LTMwLjE5MlM0NjQuODk5LDg0LjIzNyw0NTYuODM2LDc2LjE2OHogTTI4NS45ODksODkuNzM3bDM5LjI2NCwzOS4yNjRMMTIwLjI1NywzMzMuOTk4DQoJCQlsLTE0LjcxMi0yOS40MzRjLTEuODEzLTMuNjE1LTUuNS01Ljg5Ni05LjU0Mi01Ljg5Nkg3OC45MjFMMjg1Ljk4OSw4OS43Mzd6IE0yNi4yMDEsNDQzLjEzN0w0MC4wOTUsMzk0LjVsMzQuNzQyLDM0Ljc0Mg0KCQkJTDI2LjIwMSw0NDMuMTM3eiBNMTQ5LjMzNiw0MDcuOTZsLTUxLjAzNSwxNC41NzlsLTUxLjUwMy01MS41MDNsMTQuNTc5LTUxLjAzNWgyOC4wMzFsMTguMzg1LDM2Ljc3MQ0KCQkJYzEuMDMxLDIuMDYzLDIuNzA4LDMuNzQsNC43NzEsNC43NzFsMzYuNzcxLDE4LjM4NVY0MDcuOTZ6IE0xNzAuNjcsMzkwLjQxN3YtMTcuMDgyYzAtNC4wNDItMi4yODEtNy43MjktNS44OTYtOS41NDINCgkJCWwtMjkuNDM0LTE0LjcxMmwyMDQuOTk2LTIwNC45OTZsMzkuMjY0LDM5LjI2NEwxNzAuNjcsMzkwLjQxN3ogTTQ0MS43ODQsMTIxLjcybC00Ny4wMzMsNDYuNjEzbC05My43NDctOTMuNzQ3bDQ2LjU4Mi00Ny4wMDENCgkJCWM4LjA2My04LjA2MywyMi4xMDQtOC4wNjMsMzAuMTY3LDBsNjQsNjRjNC4wMzEsNC4wMzEsNi4yNSw5LjM4NSw2LjI1LDE1LjA4M1M0NDUuNzg0LDExNy43Miw0NDEuNzg0LDEyMS43MnoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />
        @endif
    </a>
</h1>
<br>

@if($_GET==NULL)
    <h5>Prénom :</h5>
    <p id="userfirstname">[prénom de l'utilisateur]</p>

    <h5>Nom :</h5>
    <p id="userlastname">[nom de l'utilisateur]</p>

    <h5>Adresse email :</h5>
    <p id="useremail">[email de l'utilisateur]</p>

    <h5>Date de naissance :</h5>
    <p id="userbirthday">[date de naissance de l'utilisateur]</p>

    <h5>Solde :</h5>
    <p id="usermoney">[solde de l'utilisateur]</p>
@elseif($_GET["page"]=="modif")
    <form action="/userProfile" method="post">
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

        <div>
            <label>Solde :</label><br>
            <input type="number" name="usermoney" value="[solde de l'utilisateur]">
        </div><br>

        <br><div>
            <input type="submit" value="Valider" class="btn btn-outline-success">
        </div>
    </form>
@endif

@endsection