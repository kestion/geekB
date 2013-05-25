<?php
		$friends_name = array();
		$friends_avatar = array();
		$q= mysql_query('SELECT `login`, `url_avatar` FROM `users` LEFT JOIN `friends` ON `friends`.`id_user_two`=`users`.`id`');
		//AND clause
		
		while($rows=mysql_fetch_assoc($q))
		{
			array_push($friends_name, $rows['login']);
			array_push($friends_avatar, $rows['url_avatar']);
		}

	
	if($friends_name)
		{}
	else	
		echo "There's nothing here :/.";	
    
?>