<?php

		$q="SELECT `id_user_one`, `id_user_two` FROM `friends` WHERE `id_user_one`='"$_SESSION['login']"'";
		$result=mysql_query($q,$link);
		

		if($result!=null)
		{ 
			$result=mysql_fetch_assoc($result);
			
			if($_SESSION['login'] == $result['id_user_one'])
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
			$_GET['page'] = 'profile_alt';
			$_GET['action'] = null;	
		}
		else
		{
			$_GET['page'] = 'profile';
			$_GET['action'] = null;
		}
		
	
?>