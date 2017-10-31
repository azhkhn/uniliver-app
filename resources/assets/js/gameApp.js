
$(document).ready(function() {
    $('#startGame').click(function(){
        $('#mainContainer').load('game/d1q1');
        history.pushState(null, null, 'game/d1q1');
    });

    $("#gameSubmitButton").click(function () {
        var formData = new FormData();
        //formData.append("_token", $("#_token").val());
        var day = parseInt($("#day").val());
        var question = parseInt($("#question").val());
        var answer = parseInt($(":radio[name='optionsRadios']:checked").val());
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
                console.log("result" + result)
                if(result==="true") {
                    location.replace(nextURL);
                } else {
                    location.replace(result);
                }

            },
            error: function () {
                
            }
        });
    });
});