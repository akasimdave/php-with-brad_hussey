<?php

	$loginError = "";

	if (isset($_POST['login'])) {
		
		// build a function to validate data
		function validateFormData($formData){
			$formData = trim(stripcslashes(htmlspecialchars($formData)));
			return $formData;
		}

		// create variables
		// wrap the data with our function
		$formUser = validateFormData($_POST['username']);
		$formPass = validateFormData($_POST['password']);

		// connect to database
		include('connection.php');

		//create SQL query
		$query = "SELECT username, email, password FROM users WHERE username = '$formUser'";

		// store the result
		$result = mysqli_query($conn, $query);

		// verify if result is returned
		if (mysqli_num_rows($result) > 0) {
			
			//store basic user data in variables
			while ($row = mysqli_fetch_assoc($result)) {
				$user = $row['username'];
				$email = $row['email'];
				$hashedPass = $row['password'];
			}

			// verify hashed password with the typed password
			if (password_verify($formPass, $hashedPass)) {
				
				// correct login details!
				// start the session
				session_start();

				// store data in SESSION variables
				$_SESSION['loggedInUser'] = $user;
				$_SESSION['loggedInEmail'] = $email;

				header("Location: profile.php");
			}else{ // hashed password didn't verify

				//error message
				$loginError = "<div class='alert alert-danger'>Wrong username / password combination. Try again.</div>";
			}
		}else{// there are no results in database

				$loginError = "<div class='alert alert-danger'>No such user in database. Please try again. <a class='close' data-dismiss='alert'>&times</a></div>";
		}

		//close the mysql connection
		mysqli_close($conn);
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<h1>Login</h1>
		<p class="lead">Use this form to log in to your account</p>

		<?php echo $loginError; ?>

		<form class="form-inline" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			
			<div class="form-group">
				<label for="login-username" class="sr-only">Username</label>
				<input type="text" class="form-control" id="login-username" placeholder="username" name="username">
			</div>
			<div class="form-group">
				<label for="login-password" class="sr-only">Password</label>
				<input type="password" class="form-control" id="login-password" placeholder="password" name="password">
			</div>
			<button type="submit" class="btn btn-default" name="login">Login!</button>
		</form>

	</div>

	<!-- jquery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>