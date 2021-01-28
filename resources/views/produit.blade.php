@extends('layout')



@section('contenu')
    <div class='principale'>
        <h1>{{$game->name}}</h1>
        <div class='row'>
            <div class="col"><img class="img-fluid" src="{{$game->photo}}"></div>
            <div class="col">{{$game->description}}</div>
            <div class="col-12" >Stock : {{$game->stock}}</div>
        </div>
        <button type="submit" class="button_buy">ACHETER pour seulement {{ $game->price}}€</button>
    </div>
@endsection