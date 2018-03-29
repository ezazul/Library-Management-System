<?php
	session_start();
	error_reporting(0);	
	require 'server_info.php';
	//require 'session_check.php';
	$conn = mysqli_connect($server, $server_username, $server_password, $server_database);
	if(!$conn)
	{
		die("Connection failed to the databases.");
	}

	$sql = "SELECT * FROM users WHERE user_id = '".$_SESSION['user']."';";
	$result = mysqli_query($conn, $sql);
	if(!$result)
	{
		die("Failed to run the query.");
	}
	else
	{
		$row = mysqli_fetch_assoc($result);
		$name = $row['name'];
		$pic = $row['pic'];
		$branch = $row['branch'];
		$semester = $row['semester'];
		$roll = $row['roll_no'];
		$penalty = $row['penalty'];
		if($penalty > 0)
		{
			$penalty = "<span style='color: red;'>-$penalty/-</span>";
		}
		else
		{
			$penalty = "<span style='color: green;'>$penalty/-</span>";
		}

		$i=0;
		while($name[$i] != " ")
		{
			$nick_name = $nick_name.$name[$i];
			$i++;
		}
	}
	

?>
<!DOCTYPE html>
<html>
	<head>
		<title>DCTM Library | Books</title>
		<?php
			require "header_content.php";
		?>
	</head>
	<body>
		<div id="main_page">
			<?php
				require 'navigation_content.php';
			?>
			<section>
				<div id="content_heading">
					<h1>Books</h1>
					<hr class="after_heading_hr" id="hrs1" size="5" />
					<hr class="after_heading_hr" id="hrs2" size="5" />
				</div>

					<div id="search_books_section">
						<form action="" method="GET">
							<input type="text" name="search_books" placeholder="Book Name/Author/Subject/Department" id="search_books"><input type="submit" name="search_books_btn" id="search_books_btn" value="Search">
							<br />
							<label><input type="radio" name="book_search_type" value="book_name"> Book</label>
							<label><input type="radio" name="book_search_type" value="book_name"> Author</label>
							<label><input type="radio" name="book_search_type" value="book_name"> Subject</label>
							<label><input type="radio" name="book_search_type" value="book_name"> Department</label>
						</form>
					</div>
					<div id="new_items">
						<h2 id="new_book_tab" class="new_item_tab">Book</h2>
						<h2 id="new_journals_tab" class="new_item_tab">Journals</h2>
					</div>
					<div id="item_list_wrapper">
							<div id="left_scroll"><</div>
							<div id="right_scroll">></div>
							<div id="item_list">
								<div class="item"></div>
								<div class="item"></div>
								<div class="item"></div>
								<div class="item"></div>
								<div class="item"></div>
							</div>
					</div>
			</section>
			<?php
				require 'footer_content.php';
			?>
		</div>
	</body>
</html>