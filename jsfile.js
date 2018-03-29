$(document).ready(function(){
	var window_height = $(window).height() - 50;
	$("#main_page").css("min-height", window_height);
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

	$(".branch").click(function(){
		if($(this).children(".expand_content").children(".expand_icon").attr("src") == "images/expand_book.png")
		{
			$(this).children(".expand_content").children(".expand_icon").attr("src", "images/expand_book1.png");
		}
		else
		{
			$(this).children(".expand_content").children(".expand_icon").attr("src", "images/expand_book.png");	
		}

		$(this).parent().children("#content_table").slideToggle();
	});

	$("#new_book_tab").click(function(){
		$("#new_book_tab").css("border-bottom-color", "white");
		$("#new_journals_tab").css("border-bottom-color", "#364ea2");
	});

	$("#new_journals_tab").click(function(){
		$("#new_book_tab").css("border-bottom-color", "#364ea2");
		$("#new_journals_tab").css("border-bottom-color", "white");
	});

});