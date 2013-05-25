<?php
	
	if(isset($_POST))
	{
		$nb_erreurs=null;	
		
		if(!ctype_alpha($_POST['login']))
		{
			$nb_erreurs++;
			$erreurs['login']='A login must only contain letters.';
		}
		
		if(!ctype_alnum($_POST['password']))
		{
			$nb_erreurs++;
			$erreurs['password']='A password must only contain letters and numbers.';
		}
		
		if($_POST['password'] != $_POST['password_verif'])
		{
			$nb_erreurs++;
			$erreurs['password_verif']='The passwords don\'t match.';
		}
		
		if(!isset ($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			$nb_erreurs++;
			$erreurs['email']='Your e-mail must look like this one : bob@example.com.';
		}
		
		if($nb_erreurs==null)
		{	
			insert_user();
			$_GET['page'] = 'enter';
			$_GET['action'] = null;
		}
		else 
		{
			
		}
		
	}
	else
	{
		
	}
	
?>