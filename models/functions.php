<?php

	function insert_user()
	{
		global $link;
	
		$q="INSERT INTO `users` VALUES ('', 1, '".mysql_real_escape_string($_POST['login'])."',
			'".mysql_real_escape_string($_POST['email'])."',
			'".mysql_real_escape_string($_POST['password'])."',
			'".mysql_real_escape_string($_POST['description'])."',
			'".mysql_real_escape_string($_POST['url_avatar'])."')";
		
		$result=mysql_query($q,$link);
			
		if (!$result) 
		{
			die('PROBLEME : ' . mysql_error());
		}
		
		return $result;
	}

	function pending()
	{
		global $link;
	
		$q="INSERT INTO `friends` VALUES ('".mysql_real_escape_string($_POST['pending'])."','".mysql_real_escape_string($_POST['accepting'])."')";
		
		$result=mysql_query($q,$link);
			
		if (!$result) 
		{
			die('PROBLEME : ' . mysql_error());
		}
		
		return $result;
	}

?>