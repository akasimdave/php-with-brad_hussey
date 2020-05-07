<?php

	define("TITLE", "Honest Click Bait Headlines");

	include("functions.php");

	if (isset($_POST["fix_submit"])) {
		// call function
		checkForClickBait();
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo TITLE; ?></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<h1><?php echo TITLE; ?></h1>
		<p class="lead">Hate click bait? Turn those annoying headlines into realistic and honest ones using this simple program.</p>

		<div class="row">
			<form class="col-sm-8 col-sm-offset-2" action="clickbait.php" method="post">
				<textarea placeholder="Paste click bait headline here" class="form-control input-lg" name="clickbait_headline"></textarea><br>
				<button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make honest!</button>
			</form>
		</div>

		<?php
			if (isset($_POST["fix_submit"])) {

				// get the first value in array returned by checkForClickBait() function
				// store it in a variable
				$clickBait = checkForClickBait()[0];

				// get the second value in array returned by checkForClickBait() function
				// store it in a variable
				$honestHeadline = checkForClickBait()[1];

				// call function
				// pass two arguments in the function
				displayHonestHeadline($clickBait, $honestHeadline);
			}
		?>

	</div>

	<!-- jquery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>