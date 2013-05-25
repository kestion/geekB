<?php
require_once 'models/fetch_my_descri.php';

	if(isset($descriptions))
	{	
			foreach($descriptions as $key => $value)
			{	
				echo $value;
			}
	}


?>