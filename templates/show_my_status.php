<?php
require_once 'models/fetch_my_status.php';

	if(isset($logins) && isset ($articles))
	{	foreach($articles as $key => $v)
		{   echo '<div class="homeStatut">
					<a href="index.php?page=statuts">';
			foreach($logins as $key => $value)
			{	
				echo '<div class="homeUsername">
								<p>';
				echo $value;
				echo '</p>
							</div>';
			}
		
			echo '<div class="statut">
							<p>';
			echo $v;
			echo '</p>
						</div><br />';
			echo '</a>
				</div>';
		}
	}

?>