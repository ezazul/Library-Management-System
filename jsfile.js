$(document).ready(function(){
	$("#nav_icon").click(function(){
		if($(this).attr("src") == "images/nav_icon.png")
		{
			$(this).attr("src", "images/open_book.png");
			$("#hidden_bar").animate({
				left: "0em"
			})
		}
		else
		{
			$(this).attr("src", "images/nav_icon.png");
			$("#hidden_bar").animate({
				left: "-11.5em"
			})
		}
	});
});