<?php

	define("TITLE", "PHP Arrays");

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

		<?php

			// PLAIN VARIABLES
			$username = "johndoe";
			$fullName = "John Doe";
			$age = 32;
			$gender = "male";
			$country = "Mexico";

			// SIMPLE ARRAY
			$user = array(
						"johndoe", // 0
						"John Doe", // 1
						32, // 2
						"male", // 3
						"Mexico" // 4
					);

			// ECHORING THE VALUES OF THE ARRAY
			echo $user[0] ."<br>";
			echo $user[1] ."<br>";
			echo $user[2] ."<br>";
			echo $user[3] ."<br>";
			echo $user[4] ."<br>";

			// ASSOCIATIVE ARRAYS
			$people = array(
						"username" => "johndoe",
						"fullname" => "John Doe",
						"age" => 32,
						"gender" => "male",
						"country" => "Mexico"
					);

			// ECHO THE VALUES OF ASSOCIATIVE ARRAY
			echo $people["username"] ."<br>";
			echo $people["fullname"] ."<br>";
			echo $people["age"] ."<br>";
			echo $people["gender"] ."<br>";
			echo $people["country"] ."<br>";

			// MULTI-DIMENTIONAL ARRAY
			$employees = array(
							array( // index of 0

								"username" => "johndoe",
								"fullname" => "John Doe",
								"age" => 32,
								"gender" => "male",
								"country" => "Mexico"
							),
							array( // index of 1

								"username" => "janedoe",
								"fullname" => "Jane Doe",
								"age" => 32,
								"gender" => "female",
								"country" => "Canada"
							)
						);
			// ECHO THE VALUES OF MULTI-DIMENTIONAL ARRAY
			echo "<hr><br>";
			echo $employees[0]["fullname"] ."<br>";
			echo $employees[1]["fullname"] ."<br>";

		?>

	</div>

	<!-- jquery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>