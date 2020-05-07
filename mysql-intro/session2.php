<?php

	session_start();

	echo "Your username is ".$_SESSION['username']."<br>";
	echo "Your email is ".$_SESSION['email']."<br>";

	// print_r($_SESSION);

	$_SESSION['username'] = "johnsnow";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Session - Page 2</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<h1>PHP Session - Page 2</h1>

		<p><a href="logout.php">Log out of your session</a></p>

	</div>

	<!-- jquery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>