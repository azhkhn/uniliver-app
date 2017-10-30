
$(document).ready(function() {
    $('#startGame').click(function(){
        $('#mainContainer').load('game/d1q1');
        history.pushState(null, null, 'game/d1q1');
    });
});
/*
    $('#gameSubmitButton').submit(function(event) {

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)

        var day = $("input#day").val();
        var question = $("input#question").val();
        var answer = $("input[name='optionsRadios']:checked").val();
        var _token= $("input#_token").val();
        var nextDay = day +1;
        var nextQues = question +1;
        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'game/answer', // the url where we want to POST
            data        : {
                day: day,
                question: question,
                answer: answer,
                _token: _token
            }, // our data object
            dataType    : 'text', // what type of data do we expect back from the server
            encode          : true

        })

        // using the done promise callback
        .done(function(data) {

            $('#mainContainer').load('game/'+ nextDay +'/'+ nextQues);
            history.pushState(null, null, 'game/'+ nextDay +'/'+ nextQues);
            event.preventDefault();
            event.stopPropagation();

            //console.log(data);

            // here we will handle errors and validation messages
        });
        return false;
        // stop the form from submitting the normal way and refreshing the page

    });

});*/
