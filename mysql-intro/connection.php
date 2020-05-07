<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$db = "my_first_database";

	// create connection
	$conn = mysqli_connect($server, $username, $password, $db);

	// check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect());
	}

	// echo "Connected successfully!";

?>