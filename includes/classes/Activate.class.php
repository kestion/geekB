<?php
class Activate
{
	//D�finition des variables de la classe
	
	public $erreurs;
	
	//Proc�dure qui affiche et traite le formulaire
	public function activate()
	{ echo ' in classe';
		
		
			$nb_erreurs=null;	
			echo $_POST['activate'];
			if(ctype_alpha($_POST['activate']))
			{echo 'is';
				$nb_erreurs++;
				$erreurs['activate']='This activation key does not exist.';
			}
		
	} 
		
}
?>