/*тупо проверка jQuery*/
$(document).ready(function(){
						   
	$("div").bind("mouseover", function(){
		$(this).css({"background-color":"#00CCFF",cursor:"pointer"});	
		
	}).bind("mouseout", function(){
		$(this).css("background-color", "");		
	});

});
*/