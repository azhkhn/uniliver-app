@extends('app')

@section('title','Login to play')

@section('content')
    <div class="row login-center-align-vertical">
        <div class="col-xs-12 col-sm-4">
            <img class="rounded" src="img/profile.jpg" alt="">
        </div>
        <div class="col-xs-12 col-sm-8 center-align-element">
            <div class="intro-text">
                <span class="skills">Please login to play the game.</span>
            </div>
            <form name="loginForm" id="loginForm" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">Email or Phone</label>
                        <input class="form-control" id="email" name="email" type="text" placeholder="Email or Phone"
                               required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-2">
                        <button type="submit" class="btn btn-primary btn-lg" id="LoginButton">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection