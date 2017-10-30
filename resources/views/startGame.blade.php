@extends('app')
@section('title', 'Start Game')
@section('content')
    <div class="jumbotron game-vertical-align">
        <div class="row" >
            <div class="col-sm-12 col-md-6">
                {{$name}} {{$email}} {{$phone}}
            </div>
            <div class="col-sm-12 col-md-6">
                <button id="startGame" name="startGame" class="btn btn-success">Start Game</button>
            </div>
        </div>
    </div>
@endsection