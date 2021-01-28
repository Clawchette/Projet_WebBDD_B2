@extends('layout')

@section('contenu')
    <div class="principale"> 
        <p>
            {{ $message }} <br>
       </p>
       <a href="/games">Retour aux jeux</a>
    </div>
@endsection