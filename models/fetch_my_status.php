<?php
		$articles = array();
		$q= mysql_query('SELECT `text` FROM `status` WHERE `id_user`="'.$_SESSION['id'].'" ORDER BY date DESC');
		while($rows=mysql_fetch_assoc($q))
		{
			
			array_push($articles, $rows['text']);
		}

	
	if($articles)
		{}
	else	
		echo "You didn't publish anything yet.";	
    
?>