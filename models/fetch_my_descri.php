<?php
		$descriptions = array();
		$q= mysql_query('SELECT `description` FROM `users` WHERE `id`="'.$_SESSION['id'].'"');
		//var_dump ($q);
		while($rows=mysql_fetch_assoc($q))
		{
			array_push($descriptions, $rows['description']);
		}

	
	if($descriptions)
		{}
	else	
		echo "There's nothing here :/.";	
    
?>