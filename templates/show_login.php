<?php
require_once 'models/fetch_login.php';

	if(isset($logins))
	{	
			foreach($logins as $key => $value)
			{	
				echo '<div class="homeUsername">
								<p>';
				echo $value;
				echo '</p>
							</div>';
			}
	}

?>