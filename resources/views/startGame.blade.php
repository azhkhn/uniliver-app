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
            <div class="col-sm-12" >
                <button id="startGame" name="startGame" class="btn btn-success center-align-element">Start Game</button>
            </div>
        </div>
    </div>
@endsection