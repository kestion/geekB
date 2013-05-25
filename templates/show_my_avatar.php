<?php
require_once 'models/fetch_my_avatar.php';

	if(isset($avatars))
	{	
			foreach($avatars as $key => $value)
			{	
				echo '<img src="';
				echo $value;
				echo '" alt="';
				echo $value;
				echo '" />';
			}
	}

?>