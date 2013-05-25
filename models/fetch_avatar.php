<?php
		$avatars = array();
		$q= mysql_query('SELECT `url_avatar` FROM `users` WHERE `id`!="'.$_SESSION['id'].'"');
		
		while($rows=mysql_fetch_assoc($q))
		{
			array_push($avatars, $rows['url_avatar']);
		}

	
	if($avatars)
		{}
	else	
		echo "There's nothing here :/.";	
    
?>