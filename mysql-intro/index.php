<?php

	include('connection.php');

	$query = "SELECT * FROM users";
	$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MySQL Select</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<h1>MySQL Select</h1>

		<?php
			
			if (mysqli_num_rows($result) > 0) {
				
				// we have data!
				// output the data

				echo "<table class='table table-bordere'><tr><th>ID</th><th>Username</th><th>Email</th></tr>";

				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr><td>". $row["id"] ."</td><td>". $row["username"] ."</td><td>". $row["email"] ."</td></tr>";
				}
			}else{
				echo "Whoops! No results";
			}

			mysqli_close($conn);

		?>

	</div>

	<!-- jquery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>