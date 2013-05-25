<!DOCTYPE HTML>

<html>

	<head>
	
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
		<title>GEEK B</title>
	
		<link rel="stylesheet" type="text/css" href="styles/main2.css" />
	
	</head>

	<body>
	
		<header>
			<?php include  'templates/header2.php' ?>
		</header>
		
		<div id="content">
			
			<?php 
				
				if(isset ($template))
				{
					include $template; 
				}
				
			?>
			
		</div>
		
		<footer>
			// <?php include  'templates/footer2.php' ?>
		</footer>
		
	</body>

</html>