	<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
	

<div style="margin-top:1%;">

	<?php
	if(isset($erreur))
	{
		echo $erreur;
	}
	?>

 	
 	 	<?php 
 	
 	$dos = "images/minFriends";
 	//on ouvre les minFriends
 	$dir = opendir($dos);
 	//on parcours l'ensemble des fichier du dossier
 	while($file = readdir($dir))
 	{
		$allow_ext = array("jpg","png","gif");
		$ext = strtolower(substr($file, -3));
 		if (in_array($ext, $allow_ext))
 		{
 	?>
 	<a href="images/<?php echo $file ?>" rel="lightbox" title="<?php echo $file;?>"><img src="images/minFriends/<?php echo $file ?>" width="213" height="140" alt="<?php echo $file;?>" /></a>
 	<?php
 	
 		}
 	}
 	
 	?>
	
	<a href="index.php?page=home"><p>BACK</p></a>
	</div>
