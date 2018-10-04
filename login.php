<?php
session_start(); //Start the session

// Connect To The database
include('db.php');

if (isset($_POST["login"])) {
	// Fetch User details sent
	$email=$_POST["eid"];
	$password=$_POST["pass"];
	// Check if user input is blank

	if ($email=="" || $password=="") {
		echo "Empty Details";
		exit();

	} else {
		// Fetch user details
		$result = mysqli_query($bd,"SELECT * FROM registration WHERE email='$email' and password = '$password' LIMIT 1");
		if (mysqli_num_rows($result)>0) {
			// Create Sessions and redirect user to homepage
			$_SESSION["email"] = $email;

			header("Location:store.php");
		} else {
			echo "User Not Found Try Again";
			exit();
		}
		
	}
	

	
} 