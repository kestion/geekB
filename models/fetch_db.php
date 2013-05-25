<?php

	$q="SELECT `code` FROM `validation`";
	$result=mysql_query($q,$link);
	

	if($result!=null)
	{ 
		$result=mysql_fetch_assoc($result);
		
		if($_POST['activate'] != $result['code'])
		{
			$nb_erreurs++;
			$erreurs['activate']='This activation key does not exist.';
			$rapport='This activation key does not exist.';
		}
		else
		{
			$_GET['page'] = 'register';
			$_GET['action'] = null;
			$rapport='You are now entering Geek B.';
		}
	}
	else
	{
		$nb_erreurs++;
		$erreurs['activate']='This activation key does not exist.';
		$rapport='This activation key does not exist.';
	}


?>