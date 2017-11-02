$(document).ready(function() {

    $(function () {
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content') }
        });
    });

    $('#startGame1').click(function(){
        $('#mainContainer').load('/game/d1q1 #load_element');
        history.pushState(null, "", '/game/d1q1');
    });
    $('#startGame2').click(function(){
        $('#mainContainer').load('/game/d2q1 #load_element');
        history.pushState(null, "", '/game/d2q1');
    });
    $('#startGame3').click(function(){
        $('#mainContainer').load('/game/d3q1 #load_element');
        history.pushState(null, "", '/game/d3q1');
    });

    /*$(':radio').click(function () {
        $("#gameSubmitButton").prop('disabled', false);
    });*/

    $("#question-form").submit(function(e){
        return false;
    });

    $("#gameSubmitButton").click(function (event) {
        //event.preventSubmit();
        var day = parseInt($("#day").val());
        var question = parseInt($("#question").val());
        var number = parseInt($("#number").val());
        var answer = $(":radio[name='answer']:checked").val();
        var todo = $("#todo").val().trim();
        var result = "false";
        if(answer===todo) {
            result = "true";
        }
        if(answer==='a' || answer==='b' || answer==='c') {
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
                    number:number,
                    result: result
                },
                cache:false,
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                success: function (result) {
                    console.log("result" + result);
                    if(result==="true") {
                        $('#mainContainer').fadeOut(500, function () {
                            $('#mainContainer').load(nextURL, function () {
                                history.pushState(null, null, nextURL);
                                $('#mainContainer').fadeIn(500);
                            });
                        });
                        //location.replace(nextURL);
                    } else {
                        $('#mainContainer').fadeOut(500, function () {
                            $('#mainContainer').load(result, function () {
                                history.pushState(null, null, result);
                                $('#mainContainer').fadeIn(500);
                            });
                        });
                        //location.replace(result);
                    }

                },
                error: function () {

                }
            });
        }

    });
});