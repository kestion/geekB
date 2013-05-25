<?php
require_once 'models/fetch_friends.php';

	if(isset($friends_name))
	{	foreach($friends_name as $key => $v)
		{ 
			echo '<div>';
				foreach($friends_avatar as $key => $value)
			{
				echo '<img src="';
				echo $value;
				echo '" style="height:100px;" />';
			}
			echo '<p>';
			echo $v;
			echo '</p>';
			
			echo	' </div><br />';
			
		}
	}

?>