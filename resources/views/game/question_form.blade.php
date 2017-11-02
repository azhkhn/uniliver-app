@extends('app')

@section('title','Game Questions')

@section('content')
<div id="load_element">
<div class="game-ques-vertical-align">
    <div class="row">
        <div class="col-sm-12">
            <img class="rounded" src="{{url('img/profile.jpg')}}" alt="">
        </div>
        <div class="col-sm-12">
            Question 1 : {{$set->question}}
        </div>
        <div class="col-sm-12 text-left">
            <form name="question-form" id="question-form">
                <input type="hidden" name="_token" id="_token" value="{{ Session::token() }}" />
                <input type="hidden" name="day" id="day" value="{{$day}}" />
                <input type="hidden" name="question" id="question" value="{{$ques}}" />
                <input type="hidden" name="number" id="number" value="{{$set->number}}" />
                <input type="hidden" name="todo" id="todo" value="{{$set->answer}}" />
                @foreach($set->choices as $choice => $value)
                <div class="radio">
                    <label>
                        <input type="radio" name="answer" id="optionsRadios{{$choice}}" value="{{$choice}}" required>
                        {{$value}}
                    </label>
                </div>
                @endforeach
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg" id="gameSubmitButton">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection