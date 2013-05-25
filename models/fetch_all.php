<?php
		$all_name = array();
		$all_avatar = array();
		$q= mysql_query('SELECT `login`, `url_avatar` FROM `users`') or die(mysql_error());

		while($rows=mysql_fetch_assoc($q))
		{
			array_push($all_name, $rows['login']);
			array_push($all_avatar, $rows['url_avatar']);
		}

	
	if($all_name)
		{}
	else	
		echo "There's nothing here :/.";	
    
?>