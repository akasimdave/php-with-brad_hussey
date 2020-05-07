<?php

	define("TITLE", "Functions &amp; Arguments");
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

			function myFirstFunction(){
				$a = 0;

				do{
					echo "$a &nbsp;";
					$a++;
				}while ($a <=100);
			}

			// call the function
			myFirstFunction();

			// example 2
			function mySecondFunction($a){
				do{
					echo "$a $nbsp;";
					$a++;
				}while ($a <= 10);
			}

			// call the function
			// pass in argument
			mySecondFunction(5);

			// example 3 function with two parameters
			function addTogether($num1, $num2){
				$newNum = $num1 + $num2;
				echo "$num1 + $num2 = $newNum";
			}

			// call function and pass in arguments
			addTogether(39, 128);

		?>

	</div>

	<!-- jquery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>