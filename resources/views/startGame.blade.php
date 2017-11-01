@extends('app')
@section('title', 'Start Game')
@section('content')
    <div class="jumbotron">
        <div class="row" >
            <div class="col-sm-12">
                <p>
                    Dear {{$name}}, you have been successfully registered with the
                    @if($email != "")
                        email address {{$email}}
                    @endif
                    @if($phone != "")
                        and the phone number {{$phone}}.
                    @endif
                </p>
                <p>
                    Please tap on start when you are ready. You will get only 1 (ONE) minute to complete the game.
                </p>
            </div>
            <div class="row" >
                <div class="col-sm-4" >
                    <div>Day 1</div>
                    <button id="startGame1" name="startGame1" class="btn btn-primary center-align-element">Start Game</button>
                </div>
                <div class="col-sm-4" >
                    <div>Day 2</div>
                    <button id="startGame2" name="startGame2" class="btn btn-warning center-align-element" disabled>Start Game</button>
                </div>
                <div class="col-sm-4" >
                    <div>Day 3</div>
                    <button id="startGame3" name="startGame3" class="btn btn-danger center-align-element" disabled>Start Game</button>
                </div>
            </div>
        </div>
    </div>
@endsection