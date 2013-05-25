<?php include 'templates/navHome1.php'; ?>


	<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
	

	<?php
	if(isset($erreur))
	{
		echo $erreur;
	}
	?>
	
 	<form method="post" action="index.php?page=gallery&action=gallery" enctype="multipart/form-data">
 		
 		<input type="file" name="img"/>
 		<input type="submit" name="Envoyer"/>
 	
 	</form>
 	
 	 	<?php 
 	
 	$dos = "images/min";
 	//on ouvre les min
 	$dir = opendir($dos);
 	//on parcours l'ensemble des fichier du dossier
 	while($file = readdir($dir))
 	{
		$allow_ext = array("jpg","png","gif");
		$ext = strtolower(substr($file, -3));
 		if (in_array($ext, $allow_ext))
 		{
 	?>
 <a href="images/<?php echo $file ?>" rel="lightbox" title="<?php echo $file ?>"><img src="images/min/<?php echo $file ?>" width="213" height="140" alt="<?php echo $file ?>" /></a>
 	<p>Les vacances en famille</p><?php
 	
 		}
 	}
 	
 	?>
