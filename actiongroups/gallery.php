<?php
if (!empty($_FILES))
{
	require 'includes/classes/im.class.php';
	//print_r($_FILES);
	$img = $_FILES['img'];
	
	//vérifier le post = on prend les 3 dernieres lettres (extention), puis en min(strlower), puis je le place dans une variable.
	$ext = strtolower(substr($img['name'], -3));
	$allow_ext = array("jpg","png","gif");
	
	if (in_array($ext, $allow_ext))
	{
		move_uploaded_file($img['tmp_name'], "images/".$img['name']);//1
		//nom de ma classe
		Img::creerMin("images/".$img['name'], "images/min", $img['name'],213 ,140);
	}
	else {
		$erreur = "This file ain't no image !";
	}
	
	
	
}

?>