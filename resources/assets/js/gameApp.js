$(document).ready(function() {


    $(function () {
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content') }
        });
    });

    /*$('#startGame1').click(function(){
        $('#mainContainer').load('/game/d/1/q/1 #load_element');
        //history.pushState(null, '', '/game/d/1/q/1');
    });

    $('#startGame2').click(function(){
        $('#mainContainer').load('/game/d/2/q/1 #load_element');
        //history.pushState(null, '', '/game/d/2/q/1');
    });

    $('#startGame3').click(function(){
        $('#mainContainer').load('/game/d/3/q/1 #load_element');
        //history.pushState(null, '', '/game/d/3/q/1');
    });*/

    /*$("#questionForm").submit(function (event) {
        var day = parseInt($("#day").val());
        var question = parseInt($("#question").val());
        var number = parseInt($("#number").val());
        var answer = $(":radio[name='answer']:checked").val();
        var rindle = $("#rindle").val().trim();
        var result = "false";
        if(answer===rindle) {
            result = "true";
        }
        if(answer==='a' || answer==='b' || answer==='c') {
            var nextURL = "/game/d/" + day + "/q/" + (question+1);
            event.preventDefault();
            $.ajax({
                url:$("#questionForm").attr('action'),
                type: $("#questionForm").attr('method'),
                data: {
                    day: day,
                    question: question,
                    number:number,
                    result: result
                },
                cache:false,
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                success: function (result) {
                    if(result==="true") {
                        $('#mainContainer').fadeOut(500, function () {
                            $('#mainContainer').load(nextURL  + " #load_element", function () {
                                //history.pushState(null, null, nextURL);
                                $('#mainContainer').fadeIn(500);
                            });
                        });
                    } else {
                        $('#mainContainer').fadeOut(500, function () {
                            $('#mainContainer').load(result + " #load_element", function () {
                                //history.pushState(null, null, result);
                                $('#mainContainer').fadeIn(500);
                            });
                        });
                    }

                },
                error: function () {
                    alert("Error posting answer to question number " + question + "of day " + day + ".");
                }
            });
        }
        return false;
    });*/
});