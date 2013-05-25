<?php

	require_once'includes/classes/MyDataObject.class.php';
	require_once'includes/classes/Users.class.php';
	require_once'includes/classes/Validation.class.php';
	require_once'includes/classes/Status.class.php';
	require_once'includes/classes/PrivateMessaging.class.php';
	require_once'includes/classes/Gallery.class.php';
	require_once'includes/classes/Friends.class.php';
	require_once 'includes/config.php';
	require_once 'models/functions.php';
	
	session_start();

	
	//var_dump($_SESSION['design']);
		if(isset ($_GET['action'])&& array_key_exists($_GET['action'], $actions))
		{
			$action='actiongroups/'.$actions[$_GET['action']].'.php';
			include $action;
		}
	
	if(isset($_GET['page']) && ($_GET['page'] != null))
	{
		//if(isset($_SESSION['design']) && ($_SESSION['design'] == 2))
		//{
			//$template= 'templates/'.$pages[$_GET['page']].'2.php';
			//include 'views/main2.php';
		//}
		//elseif(isset($_SESSION['design']) && ($_SESSION['design'] == 1))
		//{		
			$template= '/templates/'.$pages[$_GET['page']].'1.php';
			include 'views/main1.php';	
		//}
	}
	else
	{
		//if(isset($_SESSION['design']) && ($_SESSION['design'] == 1))
		//{
			$template= 'templates/enter1.php';
			include 'views/main1.php';
		//}
		//else
		//{
			//$template= 'templates/enter2.php';
			//include 'views/main2.php';
		//}
	}

		

		
	

?>