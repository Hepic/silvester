$(document).ready(function()
{
	$('input[type="text"]').focus(function()
	{
		$(this).addClass("focus_input").addClass("border_input");
	});
	
	$('input[type="text"]').blur(function()
	{
		$(this).removeClass("focus_input").removeClass("border_input");
	});

});