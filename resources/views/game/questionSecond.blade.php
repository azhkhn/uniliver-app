<div class="jumbotron game-ques-vertical-align">
    <div class="row">
        <div class="col-sm-12">
            <img class="rounded" src="{{url('img/profile.jpg')}}" alt="">
        </div>
        <div class="col-sm-12">
            Day : {{$day}} , Question: {{$ques}}
        </div>
        <div class="col-sm-12 text-left">
            <form name="gameForm" id="gameForm" novalidate >
                <input type="hidden" name="_token" id="_token" value="{{ Session::token() }}" />
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                        Answer 1
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Answer 2
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                        Answer 3
                    </label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg" id="gameSubmitButtonFirst">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>