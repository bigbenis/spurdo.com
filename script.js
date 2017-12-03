/*тупо проверка jQuery*/
$(document).ready(function(){
						   
	$("div").bind("mouseover", function(){
		$(this).css({"background-color":"#FF0033",cursor:"pointer"});	
		
	}).bind("mouseout", function(){
		$(this).css("background-color", "");		
	});

});