<?php
	session_start();
	error_reporting(0);	
	require 'server_info.php';
	require 'session_check.php';
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
		<title>DCTM Library | My Profile</title>
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
				<div id="user_info_heading"><h3>Profile</h3></div>
				<div id="user_information_div">
					<div id="user_pic_div">
						<img src="<?php echo $pic ?>" id="user_pic">
					</div>
					<div id="user_information">
						<div>
							<ul>
								<li><b>Name : </b> <?php echo $name ?></li>
								<li><b>Branch : </b> <?php echo $branch ?></li>
								<li><b>Semester : </b> <?php echo $semester ?></li>
								<li><b>Roll No. : </b> <?php echo $roll ?></li>
								<li><b>Penalty : </b> <?php echo $penalty ?></li>
							</ul>
						</div>
						<div id="book_action">
							<a href="book.php">
								<div class="action_type">
									<img src="images/add_book.png" id="add_book_icon" > <span>Add Book</span>
								</div>
							</a>
							<a href="renew.php">
								<div class="action_type">
									<img src="images/renew_book.png" id="add_book_icon" > <span>Renew Book</span>
								</div>
							</a>
						</div> 
					</div>
				</div>
			</section>
			<?php
				require 'footer_content.php';
			?>
			<!--
			<footer>
				<div id="copywrite">© All right reserved 2017</div>
			</footer>
			-->
		</div>
	</body>
</html>