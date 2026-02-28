<!DOCTYPE html>
<html>
	<head>
		<title>Exericse 4-2</title>

	</head>
	<body>
		<?php
			$Number = 343;
		?>
		
		<p><?php
			echo "<h1> The number is " .$Number. "</h1>";
		?></p>
		
		<?php
		if ($Number != floor($Number)) {
 			   echo "$Number has a decimal point. ";
		} else {
 			   echo "$Number is a whole number. ";
		}

		if( $Number % 2 == 0)
		{
			echo "Number is even";
		}else{
			echo "Number is odd";
		}
		?>
	</body>
</html>
