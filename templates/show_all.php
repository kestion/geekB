<?php
require_once 'models/fetch_all.php';

	if(isset($all_name))
	{	foreach($all_name as $key => $v)
		{ 
			echo '<div>';
				foreach($all_avatar as $key => $value)
			{
				echo '<img src="';
				echo $value;
				echo '" style="height:100px;" />';
			}
			echo '<p><a href="index.php?page=friends&action=add">Add ';
			echo $v;
			echo '? </a></p>';
			
			echo	' </div><br />';
			
		}
	}

?>