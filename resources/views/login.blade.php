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
                <form name="registrationForm" id="registrationForm" novalidate >
                    <input type="hidden" name="_token" id="_token" value="{{ Session::token() }}" />
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Name</label>
                            <input class="form-control" id="name" type="text" placeholder="Name"  data-validation-required-message="Please enter your name.">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Email Address</label>
                            <input class="form-control" id="email" type="email" placeholder="Email Address" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Phone Number</label>
                            <input class="form-control" id="phone" type="tel" placeholder="Phone Number" >
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg" id="registerButton">Register</button>
                    </div>
                </form>
            </div>
        </div>
@endsection