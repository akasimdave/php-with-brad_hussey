<?php

	define("TITLE", "Loops");
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

		// WHILE LOOP
			$startingNum = 50;
			while ($startingNum <= 100) {
				echo "$startingNum &nbsp";

				// increament by 1
				$startingNum++;
			}

			//FOR LOOP


			/* syntax:
			for ($i=0; $i < ; $i++) { 
				# code...
			} */

			// example
			for ($a = 30; $a <= 40; $a++) { 
				echo "Number $a <br>";
			}

			// FOR EACH LOOP

			/* syntax:
			foreach ($variable as $key => $value) {
				# code...
			} */

			// example

			// array
			$friends = array("Jim", "Sandra", "Kyle", "Cassandra");

			foreach ($friends as $friend) {
				// output each individual value in the array
				echo "$friend is my friend! <br>";
			}

			// DO WHILE LOOP

			$foo = 10;

			do{
				// do this code
				echo "Numero $foo <br>";

				// increament by 1
				$foo++;
			}while($foo <= 50);
		?>

	</div>

	<!-- jquery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>