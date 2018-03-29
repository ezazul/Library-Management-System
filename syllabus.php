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
		<title>DCTM Library | Syllabus </title>
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
					<h1>Syllabus</h1>
					<hr class="after_heading_hr" id="hrs1" size="5" />
					<hr class="after_heading_hr" id="hrs2" size="5" />
				</div>

				<div id="content_table_section">
					<ul>
						<li >
							<h3 class="branch" ><span class="expand_content"><img src="images/expand_book.png" class="expand_icon"></span>B.Tech</h3>
							<div id="content_table"  class="content_table_class">
								<table>
									<tr>
										<th>Branch</th>
										<th>Semester</th>
										<th>Download</th>
									</tr>
									<tr>
										<td>CSE</td>
										<td>3rd to 8th</td>
										<td>Download</td>
									</tr>
									<tr>
										<td>CE</td>
										<td>3rd to 8th</td>
										<td>Download</td>
									</tr>
									<tr>
										<td>ECE</td>
										<td>3rd to 8th</td>
										<td>Download</td>
									</tr>
									<tr>
										<td>ME</td>
										<td>3rd to 8th</td>
										<td>Download</td>
									</tr>
								</table>
							</div>
						</li>
						<li>
							<h3 class="branch"><span class="expand_content"><img src="images/expand_book.png" class="expand_icon"></span>BBA</h3>
							<div id="content_table"  class="content_table_class">
								<table>
									<tr>
										<th>Branch</th>
										<th>Semester</th>
										<th>Download</th>
									</tr>
									<tr>
										<td>-</td>
										<td>All Semester</td>
										<td>Download</td>
									</tr>
									
								</table>
							</div>
						</li>
						<li>
							<h3 class="branch"><span class="expand_content"><img src="images/expand_book.png" class="expand_icon"></span>M.Tech</h3>
							<div id="content_table"  class="content_table_class">
								<table>
									<tr>
										<th>Branch</th>
										<th>Semester</th>
										<th>Download</th>
									</tr>
									<tr>
										<td>CSE</td>
										<td>3rd to 8th</td>
										<td>Download</td>
									</tr>
									<tr>
										<td>ECE</td>
										<td>3rd to 8th</td>
										<td>Download</td>
									</tr>
									<tr>
										<td>ME</td>
										<td>3rd to 8th</td>
										<td>Download</td>
									</tr>
								</table>
							</div>
						</li>
						<li>
							<h3 class="branch"><span class="expand_content"><img src="images/expand_book.png" class="expand_icon"></span>MBA</h3>
							<div id="content_table" class="content_table_class">
								<table>
									<tr>
										<th>Branch</th>
										<th>Semester</th>
										<th>Download</th>
									</tr>
									<tr>
										<td>-</td>
										<td>All Semester</td>
										<td>Download</td>
									</tr>
									
								</table>
							</div>
						</li>
					</ul>
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