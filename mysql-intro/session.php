<?php

	session_start();

	$_SESSION['username'] = "bradhussey";
	$_SESSION['email'] = "brad@email.com";

	echo "session is active";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Session</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<h1>PHP Session</h1>



	</div>

	<!-- jquery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>