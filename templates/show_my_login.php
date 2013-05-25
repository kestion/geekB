<?php
require_once 'models/fetch_my_login.php';

	if(isset($logins))
	{	
			foreach($logins as $key => $value)
			{	
				echo $value;
			}
	}

?>