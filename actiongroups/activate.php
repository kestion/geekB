<?php

	if(isset($_POST['activate']))
	{
		$nb_erreurs=null;	
		
		if(ctype_alpha($_POST['activate']) || !strlen($_POST['activate'])==9)
		{
			$nb_erreurs++;
			$erreurs['activate']='This activation key does not exist.';
		}
		
		if($nb_erreurs==null)
		{	
			include 'models/fetch_db.php';		
		}
		else 
		{
			$_GET['page'] = 'activate';
			$_GET['action'] = null;
		}
		
	}
	else
	{
		echo 'not';
	}
	
?>