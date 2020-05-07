<?php

	define("TITLE", "If, Else &amp; Elseif Statments");
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
		
			// IF
			// IF expression is TRUE, do something
			// IF expression is FALSE, don't do anything

			$foo = 99;
			$bar = 79;

			if ($foo > $bar) {
				echo "$foo is greater than $bar <br>";
			}

			// ELSE

			$currentlyListenningTo = "Barenaked Ladies";

			if ($currentlyListenningTo == "The Tragically Hip") {
				echo "You are listening to $currentlyListenningTo";
			}else{
				echo "Taking a wild guess here, you're listening to $currentlyListenningTo";
			}

			// ELSEIF

			$favProgrammingLang == "PHP";

			if ($favProgrammingLang == "C++") {
				// code to execute if expression is TRUE
				echo "Your favourite prpogramming language is $favProgrammingLang";
			}elseif ($favProgrammingLang == "PHP") {
				// code to execute if original expression is FALSE
				// AND the ELSEIF expression is TRUE
				echo "Good one! You dig $favProgrammingLang";
			}else{
				// code to execute if both previous expressions are FALSE
			 	echo "Guess you don't like PHP or C++.";
			}


		?>

	</div>

	<!-- jquery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>