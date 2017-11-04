@extends('app')
@section('title', 'Welcome to Game')
@section('content')
    <div class="container">
        <div class="row" >
            <div class="col-md-6 col-sm-12">
                <img src="/img/pureit.png" width="300px" height="300px">
            </div>
            <div class="col-md-6 col-sm-12">
                <p>Welcome to the game.</p>
                <p>Let's continue to the game.</p>
                <a href="/game"><button id="startGame3" name="startGame3" class="btn btn-primary center-align-element" >Game Page</button></a>

            </div>
        </div>
    </div>
@endsection