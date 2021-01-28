@extends('layout')



@section('contenu')

    <div class='principale'>
        <h1>{{$game->name}}</h1>
        <div class="super"><img src="{{$game->photo}}"></div>
        <div class="super">{{$game->description}}</div>
        <button type="submit" class="button_buy">ACHETER</button>
    </div>

@endsection