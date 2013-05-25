			<?php include 'templates/navProfile1.php'; ?>
			
			<div class="left">
			
				<div id="avatar"> 
					<?php // paradigme MVC non-respecté -> get -> SMARTY + OBJET. and following. 
					include 'show_my_avatar.php'; ?>
				</div>
				
			</div>
			
			<div class="left">
				
				<div id="description">
				
					<h1><?php include 'show_my_login.php'; ?></h1>
					
					<p>
						<?php include 'show_my_descri.php'; ?>
					</p>
				
				</div>
				
				<div id="friends">
				
					<?php include 'show_avatar.php'; ?>
					<br />
				<a href="index.php?page=friends"><h3>&nbsp;Sterling</h3></a>
					
					<div class="clear"></div>
					
				</div>
			
			</div>
			
			<div class="left">
				
				<div id="modif">
				
					<img src="images/default_modif.png" alt="image par défaut" />
				
				</div>
			
			</div>
			
			<div class="clear"></div>
			
			<div class="left">
							
				<div id="gallery">
						<a href="index.php?page=gallery"><h3>&nbsp;Image Gallery</h3></a><br />
						<?php //paradigme MVC non-respecté : actiongroups
 	
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
 <a href="images/<?php echo $file ?>" rel="lightbox" title="<?php echo $file ?>"><img src="images/min/<?php echo $file ?>" width="280" height="180" alt="<?php echo $file ?>" /></a><br />
 <?php
 	
 		}
 	}
 	
 	?>

					
				</div>
			
			</div>
			
							<div id="my_stats">
				
					<?php include 'show_my_status.php'; ?>

	
					
					<div class="clear"></div>
					
				</div>
			
			<div class="clear"></div>
			