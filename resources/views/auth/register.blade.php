@extends('app')

@section('title','Register to play')

@section('content')
        <div class="row login-center-align-vertical">
            <div class="col-xs-12 col-sm-4">
                <img class="rounded" src="img/profile.jpg" alt="">
            </div>
            <div class="col-xs-12 col-sm-8 center-align-element">
                <div class="intro-text">
                    <span class="skills">Please register to play the game.</span>
                </div>
                <form name="registrationForm" id="registrationForm" method="POST" action="{{ route('register') }}" >
                    {{ csrf_field() }}
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">Name</label>
                            <input class="form-control" id="name" name="name" type="text" placeholder="Name" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">Email Address</label>
                            <input class="form-control" id="email" name="email" type="email" placeholder="Email Address" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls {{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="control-label">Phone Number</label>
                            <input class="form-control" id="phone" name="phone" type="tel" placeholder="Phone Number" >
                            @if ($errors->has('phone'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg" id="registerButton">Register</button>
                    </div>
                </form>
            </div>
        </div>
@endsection