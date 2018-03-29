<?php
	session_start();
	error_reporting(0);
	require 'server_info.php';
	$conn = mysqli_connect($server, $server_username, $server_password, $server_database);
	if(!$conn)
	{
		die("Connection failed to the databases.");
	}

	if($_REQUEST['login'])
	{
		$userid = $_POST['username'];
		$password = $_POST['login_password'];
		$user_type = $_POST['user_type'];
		if($user_type == "admin")
		{
			$table = "admin";
		}
		else
		{
			$table = "users";
		}
		$sql = "SELECT * FROM $table WHERE user_id = '$userid' AND password = '$password'";
		$result = mysqli_query($conn, $sql);
		if(!$result)
		{
			die("Failed to log in.");
		}
		else
		{
			$row = mysqli_num_rows($result);
			if($row == 1)
			{
				$_SESSION['user'] = $userid;
				header ("location: myProfile.php");
			}
			else
			{
				$msg = "***Invalid user ID or password***";
			}
		}
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>DCTM Library | Home Page</title>
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
			
				<div id="log_in_section">
					<div id="log_in">
						<div id="log_in_heading" >
							<h2>Log In</h2>
						</div>
						<br/>
						<div id="login_table_section">
							<div id="login_error_msg">
								<?php
									echo $msg;
								?>
							</div>
							<form action="index.php" method="post">
								<table id="login_table">
									<tr>
										<td>
											<input type="text" name="username" id="username" placeholder="Username" required="Enter the user ID">
										</td>
									</tr>
									<tr>
										<td>
											<input type="password" name="login_password" placeholder="Password" id="login_password" required="Enter your password">
										</td>
									</tr>
									<tr>
										<td><label><input type="radio" name="user_type" value="admin" required="Choose type of access"> Admin</label> <label><input type="radio" name="user_type" value="student" required="Choose type of access"> Student</label></td>
									</tr>
									<tr>
										<td>
											<input type="submit" name="login" value="Log In" id="login_btn">
										</td>
									</tr>
								</table>
							</form>
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