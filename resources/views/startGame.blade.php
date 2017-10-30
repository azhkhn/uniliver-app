@extends('app')
@section('title', 'Start Game')
@section('content')
        <div class="row">
            <div class="col-sm-12 text-center">
                {{$name}} {{$email}} {{$phone}}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <button id="startGame" name="startGame" class="btn btn-success">Start Game</button>
            </div>
        </div>
@endsection