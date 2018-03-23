<?php
	error_reporting(0);
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
							<form>
								<table id="login_table">
									<tr>
										<td>
											<input type="text" name="username" id="username" placeholder="Username">
										</td>
									</tr>
									<tr>
										<td>
											<input type="password" name="login_password" placeholder="Password" id="login_password">
										</td>
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