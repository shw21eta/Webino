$(document).ready(function(){
/*********************CLICK****************************************/
	$('button#clk1').click(function () {
		$("p#clk").hide();
	});
	$('button#clk2').click(function () {
		$("p#clk").show();
	});
/**********************DOUBLE CLICK*********************************/
	$('button').dblclick(function () {
		$("p#dblclk").css("background-color","aqua");
	});
/********************MOUSE ENTER*******************************/
    $("#p1").mouseenter(function(){
        alert("You entered paragraph!");
    });
/********************MOUSE ENTER*******************************/
    $("#p2").mousedown(function(){
        alert("Mouse down event occurred!");
    });
/*******************FOCUS and BLUR**************************/
	$("input").focus(function(){
        $(this).css("background-color", "#cccccc");
    });
    $("input").blur(function(){
        $(this).css("background-color", "aqua");
    });

/********************hover***********************************/
	$("#p3").hover(function(){
        alert("You entered paragraph!");
    },
    function(){
        alert("Bye! You now leave paragraph!");
    });
/*****************ON event**************************************/
	 $("#p4").on("click", function(){
        $(this).hide();
    });
});