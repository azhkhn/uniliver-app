@extends('app')

@section('title','Game')

@section('content')
<div class="jumbotron game-ques-vertical-align">
    <div class="row">
        <div class="col-sm-12">
            <img class="rounded" src="{{url('img/profile.jpg')}}" alt="">
        </div>
        <div class="col-sm-12">
            Day : {{$day}} , Question: {{$ques}}
        </div>
        <div class="col-sm-12 text-left">
            <form name="gameForm" id="gameForm" novalidate method="post" action="{{$action}}">
                <input type="hidden" name="_token" id="_token" value="{{ Session::token() }}" />
                <input type="hidden" name="day" id="day" value="{{$day}}" />
                <input type="hidden" name="question" id="question" value="{{$ques}}" />
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="1">
                        Answer 1
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="2">
                        Answer 2
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="3">
                        Answer 3
                    </label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg" id="gameSubmitButton">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection