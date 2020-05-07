<?php

	include('connection.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Password Hashing</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<h1>Password Hashing</h1>

		<?php

			// $password = password_hash("mypassword", PASSWORD_DEFAULT);
			// echo $password;

		$hashedPassword = '$2y$10$BcpkFa0GzfOpe6DHyQNA6uzzhIwrSUtRDhiHOtBWQhNngiEko4ryu';

		if (isset($_POST['login'])) {
			
			if (password_verify($_POST['password'], $hashedPassword)) {
				echo "Password is correct!";
			}else{
				echo "Incorrect password!";
			}

		}


		?>

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

			<label>* Password</label>
			<input type="password" placeholder="Password" name="password"><br><br>

			<input type="submit" name="login" value="Log in" class="btn btn-default">
		</form>

	</div>

	<!-- jquery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>