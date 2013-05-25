<?php

	$q="SELECT  `password` , `id` FROM `users` WHERE `login`='".$_POST['login']."'";
	$result=mysql_query($q,$link);

	if($result!=null)
	{
		$result=mysql_fetch_assoc($result);
		
		if($_POST['password'] == $result['password'])
		{
		
		}
		else
		{
			$nb_erreurs++;
			$erreurs['password']='Mot de passe éronné.';
		}
	}
	else
	{
		$nb_erreurs++;
		$erreurs['login']="Votre login est inconnu.";
	}
	
	if($nb_erreurs!=0)
	{
		$page='connect';	
	}
	else
	{
		$_GET['page'] = 'home';
		$_GET['action'] = null;
		$_SESSION['id']= $result['id'];
	}

?>
