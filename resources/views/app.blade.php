<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>

@include('template.css')

<body id="page-top">
<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Game</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(isset($email))
                    @if($email != null && $email != "")
                        <li class="active"><a href="#">Hello {{$name}}<span class="sr-only">(current)</span></a></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    @endif
                @else
                    @if (str_contains(url()->current(),"login"))
                        <li class="active"><a href="{{ route('login') }}">Login <span class="sr-only">(current)</span></a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li class="active"><a href="{{ route('register') }}">Register <span class="sr-only">(current)</span></a></li>
                    @endif
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<!-- Header -->
<div class="masthead">
    <div class="container" id="mainContainer">
        @yield('content')
    </div>
</div>

@include('template.js-footer')