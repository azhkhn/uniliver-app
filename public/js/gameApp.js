$(document).ready(function() {

    $(function () {
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
        });
    });

    $('#startGame1').click(function(){
        $('#mainContainer').load('/game/d1q1');
        history.pushState(null, null, '/game/d1q1');
    });
    $('#startGame2').click(function(){
        $('#mainContainer').load('/game/d2q1');
        history.pushState(null, null, '/game/d2q1');
    });
    $('#startGame3').click(function(){
        $('#mainContainer').load('/game/d3q1');
        history.pushState(null, null, '/game/d3q1');
    });

    $("#question-form").submit(function(e){
        return false;
    });

    $("#gameSubmitButton").click(function (event) {
        //event.preventSubmit();
        var day = parseInt($("#day").val());
        var question = parseInt($("#question").val());
        var answer = parseInt($(":radio[name='answer']:checked").val());
        if(answer==1 || answer==2 || answer==3) {
            var nextURL = "/game/d" + day + "q" + (question+1);
            console.log("day" + day);
            console.log("question" + question);
            console.log("answer" + answer);
            console.log("nextURL" + nextURL);
            $.ajax({
                url:"/game/answer",
                type: "POST",
                data: {
                    day: day,
                    question: question,
                    answer: answer
                },
                cache:false,
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                success: function (result) {
                    console.log("result" + result);
                    if(result==="true") {
                        $('#mainContainer').fadeOut(500, function () {
                            $('#mainContainer').load(nextURL, function () {
                                $('#mainContainer').fadeIn(500);
                            });
                        })
                        //location.replace(nextURL);
                    } else {
                        location.replace(result);
                    }

                },
                error: function () {

                }
            });
        }

    });
});