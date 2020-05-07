<?php

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<h1>Profile Page</h1>
		<p class="lead">Welcome <?php $loggedInUser = ""; echo $_SESSION['loggedInUser']; ?></p>

		<p>Your email address is: <?php  $loggedInEmail = ""; echo $_SESSION['loggedInEmail']; ?></p>

		<p><a href="logout.php" class="btn btn-danger btn-sm">Log out</a></p>

	</div>

	<!-- jquery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>