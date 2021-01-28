@extends('layout')


@section('contenu')



    <div class="principale"> 

        @foreach($games as $game)
            <a href="/game/{{$game->id}}"><div class='jeu_photo'> {{$game->name}} <img src=""></div></a>
        @endforeach

    </div>

@endsection