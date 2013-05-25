<?php
	
	if(isset($_POST))
	{
		$nb_erreurs=null;	
				
		if(!isset ($_POST['accepting']))
		{
			$nb_erreurs++;
			$erreurs['email']='Your waiting for your request to be considered.';
		}
		
		if(!isset ($_POST['pending']))
		{
			$nb_erreurs++;
			$erreurs['email']='Your waiting for your request to be considered.';
		}
		
		if($nb_erreurs==null)
		{	
			pending();
			$_GET['page'] = 'friends';
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