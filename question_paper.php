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
		<title>DCTM Library | Question Paper</title>
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
					<h1>Question Papers</h1>
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
										<th>Year</th>
										<th>Subject</th>
										<th>Download</th>
									</tr>
									<tr>
										<td>2010</td>
										<td>DSA</td>
										<td>Download</td>
									</tr>
									<tr>
										<td>2010</td>
										<td>M-3</td>
										<td>Download</td>
									</tr>
									<tr>
										<td>2015</td>
										<td>FCPC</td>
										<td>Download</td>
									</tr>
									<tr>
										<td>2015</td>
										<td>DE</td>
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
										<th>Year</th>
										<th>Subject</th>
										<th>Download</th>
									</tr>
									<tr>
										<td>2010</td>
										<td>DBMS</td>
										<td>Download</td>
									</tr>
									<tr>
										<td>2010</td>
										<td>Economics</td>
										<td>Download</td>
									</tr>
									<tr>
										<td>2015</td>
										<td>Accounts</td>
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
										<th>Year</th>
										<th>Subject</th>
										<th>Download</th>
									</tr>
									<tr>
										<td>2010</td>
										<td>DSA</td>
										<td>Download</td>
									</tr>
									<tr>
										<td>2010</td>
										<td>M-3</td>
										<td>Download</td>
									</tr>
									<tr>
										<td>2015</td>
										<td>FCPC</td>
										<td>Download</td>
									</tr>
									<tr>
										<td>2015</td>
										<td>DE</td>
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
										<th>Year</th>
										<th>Subject</th>
										<th>Download</th>
									</tr>
									<tr>
										<td>2010</td>
										<td>DBMS</td>
										<td>Download</td>
									</tr>
									<tr>
										<td>2010</td>
										<td>Economics</td>
										<td>Download</td>
									</tr>
									<tr>
										<td>2015</td>
										<td>Accounts</td>
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
		</div>
	</body>
</html>