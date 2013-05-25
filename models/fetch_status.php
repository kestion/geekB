<?php
		$articles = array();
		$q= mysql_query('SELECT `text` FROM `status` ORDER BY date DESC');
		while($rows=mysql_fetch_assoc($q))
		{
			
			array_push($articles, $rows['text']);
		}

	
	if($articles)
		{}
	else	
		echo "Cette zone est vide.";	
    
?>