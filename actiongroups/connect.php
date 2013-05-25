<?php

	if(isset($_POST['login']) && isset($_POST['password']))
	{
		$nb_erreurs=null;	
		
		if(!ctype_alpha($_POST['login']) || !strlen($_POST['login'])>5)
		{
			$nb_erreurs++;
			$erreurs['login']='Your login is not valid.';
		}
		
		if(!isset($_POST['password']) || !ctype_alnum($_POST['password']) )
		{
			$nb_erreurs++;
			$erreurs['password']="Your password isn't valid.";
		}
		
		if($nb_erreurs==null)
		{
			include 'models/fetch_db_connect.php';
		}
		else 
		{
			echo 'not';
		}
		
	}
	else
	{
		echo 'not';
	}
	
?>