<!DOCTYPE html>
<html>
	<head>
		<title>Exericse 4-1</title>

	</head>
	<body>
		<?php
			$Number = 456.6732;
		?>
		
		<p><?php
			echo "<h1> The number is " .$Number. "</h1>";
		?></p>
		
		<?php

			$Number_UP = round($Number);
			$Number_Down = floor($Number);

			
			echo "Round Up is " . $Number_UP . "<br/>";
			echo "Round Down is " . $Number_Down . "<br/>";
		?>
	</body>
</html>
