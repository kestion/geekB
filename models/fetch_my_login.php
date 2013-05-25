<?php
		$logins = array();
		$q= mysql_query('SELECT `login` FROM `users` WHERE `id`="'.$_SESSION['id'].'"');
		
		while($rows=mysql_fetch_assoc($q))
		{
			array_push($logins, $rows['login']);
		}

	
	if($logins)
		{}
	else	
		echo "There's nothing here :/.";	
    
?>