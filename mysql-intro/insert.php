<?php

	$nameError = "";
	$emailError = "";
	$passwordError = "";
	$email = "";

	include('connection.php');

	if (isset($_POST["add"])) {
		
		// build a function that validates data
		function validateFormData($formData){
			$formData = trim(stripcslashes(htmlspecialchars($formData)));
			return $formData;
		}

		// check to see if inputs are empty
		// create variables with form data
		// wrap the data with our function

		// set all variables to empty by default
		$username = $email = $password = "";
		
		if (!$_POST["username"]) {
			$nameError = "Please enter your username <br>";
		}else{
			$username = validateFormData($_POST["username"]);
		}

		if (!$_POST["email"]) {
			$emailError = "Please enter your email <br>";
		}else{
			$email = validateFormData($_POST["email"]);
		}

		if (!$_POST["password"]) {
			$passwordError = "Please enter your password <br>";
		}else{
			$password = validateFormData($_POST["password"]);
		}

		// check to see if each variable has data
		if ($username && $email && $password) {
			$query = "INSERT INTO users (id, username, password, email, signup_date, biograpgy) VALUES (NULL, '$username', '$password', '$email', CURRENT_TIMESTAMP, 'NULL')";

			if (mysqli_query($conn, $query)) {
				echo "<div class='alert alert-success'>New record in database!</div>";
			}else{
				echo "Error: ". $query . "<br>" . mysqli_error($conn);
			}
		}
		 
	}

	mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MySQL Insert</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<h1>MySQL Insert</h1>

		<p class="text-danger">* Required fields</p>

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<small class="text-danger">* <?php echo $nameError; ?></small>
			<input type="text" placeholder="Username" name="username"><br><br>

			<small class="text-danger">* <?php echo $emailError; ?></small>
			<input type="text" placeholder="Email" name="email"><br><br>

			<small class="text-danger">* <?php echo $nameError; ?></small>
			<input type="password" placeholder="Password" name="password"><br><br>

			<input type="submit" name="add" value="Add Entry">
		</form>

	</div>

	<!-- jquery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>