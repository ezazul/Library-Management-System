<?php
	echo '
	<header>
				<img src="images/logo_DCTM_half.png" id="dctm_logo" />
			</header>
		<div id="navigation_bar">
				<img src="images/nav_icon.png" id="nav_icon" class="icons" />
				<form>
					<input type="submit" name="search_btn" value="Search" id="search_btn" />
					<input type="text"  placeholder="Search Books" name="search" id="search_input">
				</form>
			</div>
			<div id="hidden_bar">
				<h3>Hi '.$nick_name.'</h3>
				<ul id="hidden_bar_list">
					<li><a href="index.php"><h5>Home</h5></a></li>
					<li><a href="myProfile.php"><h5>Profile</h5></a></li>
					<li><a href="logout.php"><h5>Log Out</h5></a></li>
					<li><a href="syllabus.php"><h5>Syllabus</h5></a></li>
					<li><a href="question_paper.php"><h5>Question Paper<h5></a></li>
					<li><a href="books.php"><h5>Books</h5></a></li>
					<li><a href="journals.php"><h5>Journals</h5></a></li>
					<li><a href="photos.php"><h5>Photos</h5></a></li>
				</ul>
			</div>
	';
?>