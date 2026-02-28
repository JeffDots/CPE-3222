<!DOCTYPE html>
<html>
	<head>
		<title>Exercise 4-3</title>
	</head>
	<body>
		<h2> Price context of number_format</h2>
		<?php
			$Number = 456.6732; // This is your variable name
		?>
		
		<p>
			<?php
				// Change $price to $Number so they match!
				echo "Price: $" . number_format($Number, 2);
			?>
		</p>
	</body>
</html>