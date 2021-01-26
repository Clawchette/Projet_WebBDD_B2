@extends('layout')


@section('contenu')



    <div class="principale"> 

        @foreach($games as $game)
            <div class='jeu_photo'> {{$game->name}} </div>
        @endforeach

    </div>

@endsection