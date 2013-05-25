<?php
		$logins = array();
		$q= mysql_query('SELECT `login` FROM `users` LEFT JOIN `status` ON `users`.`id`=`status`.`id_user`');
		
		while($rows = mysql_fetch_assoc($q))
		{
		$logins[] = $rows['login'];
			//array_push($logins, $login);
		}

		//array_values($logins);
	if($logins)
		{}
	else	
		echo "There's nothing here :/.";	
    
?>