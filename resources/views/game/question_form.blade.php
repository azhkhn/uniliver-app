<div class="game-ques-vertical-align">
    <div class="row">
        <div class="col-sm-12">
            <img class="rounded" src="{{url('img/profile.jpg')}}" alt="">
        </div>
        <div class="col-sm-12">
            Day : {{$day}} , Question: {{$ques}}
        </div>
        <div class="col-sm-12 text-left">
            <form name="question-form" id="question-form">
                <input type="hidden" name="_token" id="_token" value="{{ Session::token() }}" />
                <input type="hidden" name="day" id="day" value="{{$day}}" />
                <input type="hidden" name="question" id="question" value="{{$ques}}" />
                <div class="radio">
                    <label>
                        <input type="radio" name="answer" id="optionsRadios1" value="1" required>
                        Answer 1
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="answer" id="optionsRadios2" value="2" required>
                        Answer 2
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="answer" id="optionsRadios3" value="3" required>
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