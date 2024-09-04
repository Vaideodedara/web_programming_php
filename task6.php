<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> php with html example </title>
	</head>
	<body>
	<?php	
		$heading="welcome to my website";
		
		$boldtext="this text is bold";
		
		$italictext="this text is italic";
		?>
				
				<h1><?php echo $heading;?></h1>
				<p><strong><?php echo $boldtext;?></strong></p>
				<p><em><?php echo $italictext; ?> </em></p>
				</body>
				</html>