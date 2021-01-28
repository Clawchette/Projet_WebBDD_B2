@extends('layout')

@section('contenu')
    <div class="principale"> 
        <div class="row">
            @foreach($games as $game)
                <div class="col-4">
                    <a href="/game/{{$game->id}}">
                        <img  class='img-fluid' src="{{$game->photo}}" />
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection