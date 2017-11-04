@extends('app')
@section('title', 'Start Game')
@section('content')
    <div class="container">
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
                    Please tap on start when you are ready
                </p>
            </div>
            <div class="col-sm-12" >
                <p>
                    <div class="col-sm-4 well">
                        <h4>Day 1</h4>
                    <a href="/game/d/1/q/1"><button id="startGame1" name="startGame1" class="btn btn-primary center-align-element" >Start Game</button></a>
                    </div>
                    <div class="col-sm-4 well" >
                        <h4>Day 2</h4>
                        <a href="/game/d/2/q/1"><button id="startGame2" name="startGame2" class="btn btn-warning center-align-element" >Start Game</button></a>
                    </div>
                    <div class="col-sm-4 well" >
                        <h4>Day 3</h4>
                        <a href="/game/d/3/q/1"><button id="startGame3" name="startGame3" class="btn btn-danger center-align-element" >Start Game</button></a>
                    </div>
                </p>
            </div>
        </div>
    </div>
@endsection