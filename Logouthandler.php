<?php
	session_start(); // Start the session

	if(isset($_POST['logout_btn'])){
		unset($_SESSION['userName']);
		
		$_SESSION['message'] = "Logged Out Successfully";
		header("Location: Home.html");
		exit(0);
	}
?>