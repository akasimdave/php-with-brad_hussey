<?php

	define("TITLE", "Get &amp; Post");

	$nameError = "";
	$emailError = "";
	$name = "";
	$email = "";

	if (isset($_POST["post_submit"])) {

		// build a function that validates data
		function validateFormData($formData){
			$formData = trim(stripslashes(htmlspecialchars($formData)));
			return $formData;

			// check to see if inputs are empty
			// create variables with form data
			// wrap the data with our function

			if (!$_POST["post_name"]) {
				$nameError = "Please enter your name <br>";
			}else{
				$name = validateFormData($_POST["post_name"]);
			}

			if (!$_POST["post_email"]) {
				$emailError = "Please enter your email <br>";
			}else{
				$email = validateFormData($_POST["post_email"]);
			}
		}
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

		<h4>Submitted via $_GET</h4>
		<form action="form_get.php" method="get">
			<input type="text" placeholder="Name" name="name">
			<input type="text" placeholder="Email" name="email">
			<input type="submit" placeholder="" name="form_submit">
		</form>

		<hr>

		<h4>Submitted via $_POST</h4>
		<form action="form_post.php" method="post">
			<input type="text" placeholder="Name" name="post_name">
			<input type="text" placeholder="Email" name="post_email">
			<input type="submit" placeholder="" name="post_submit">
		</form>

		<hr>

		<h4>Submitted to current page</h4>

		<p class="text-danger">* Required fields
		</p>

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<small class="text-danger">* <?php echo $nameError; ?></small>
			<input type="text" placeholder="Name" name="post_name"><br><br>

			<small class="text-danger">* <?php echo $emailError; ?></small>
			<input type="text" placeholder="Email" name="post_email"><br><br>

			<input type="submit" placeholder="" name="post_submit">
		</form>

		<?php

		if (isset($_POST["post_submit"])) {
			echo "<h4>Your info</h4>";
			echo "$name <br> $email <br>";
		}

		?>

	</div>

	<!-- jquery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>