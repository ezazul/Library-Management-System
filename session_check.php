<?php
	session_start();
	if(!$_SESSION['user'])
	{
		die("Please log in first.");
	}
?>