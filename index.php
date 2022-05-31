<html lang="en-ca">
	<head>
		<!-- Meta Data -->
		<meta charset="utf-8" />
	    <meta name="description" content="Factorial" />
	    <meta name="keywords" content="immaculata, ics2o" />
	    <meta name="author" content="Graeme" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Favicon -->
	    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
	    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
	    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
	    <link rel="manifest" href="./fav_index/site.webmanifest" />
		<!-- Css style sheet -->
		<link rel="stylesheet" href="./css/style.css" />
		<title>Factorial in PHP</title>
	</head>
	<body>
		
		<!-- Title, Info and image -->
		<center> <?php 
			echo '<center><h1>Factorial in PHP</h1></center>';
			echo '<img src=./images/zeroFactorial.webp width="35%">';
			echo "<center><p><br>Enter your number and the webpage will display the factorial</p";
		?>

		<!-- Textfield -->
		<form method = "post">
			<label for="factorial"><p>Enter your number: </p>
			<input type="number" id="factorial" min="0" step="1" placeholder="Ex: 5" >   
			<br><br><br>
			<input type = "submit" name = "submit">
		</form>
		<br>
			
		<!-- Variables and Calculations -->
		<?php  
			if(isset($_POST['submit'])) {  
				$numb = intval($_POST['factorial']);
				$display = "";
				$counter = 1; 
				$sum = 1; 

				if ($numb != 0 and $numb != 1) {
					do {
						$sum *= $counter;
						$counter ++;
					} while ($counter <= $numb);
					$display = "The answer is " + $sum;
				} else {
					$display = "The answer is 1";
				}

				echo "<br>" .$display;
			}
		?>
	</body>
</html>