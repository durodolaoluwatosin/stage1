<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles.css">
	<title>	hng</title>
</head>
<body>
	<div class="bg">
			<div id="me">
				<?php
					$date = new DateTime("now", new DateTimeZone('Africa/Lagos') );
					echo $date->format('h:i:a');
	 
				?>
			</div>
	</div>

</body>
</html>