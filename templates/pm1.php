<?php
// SQL cherche les infos dans la bdd
$q = 'SELECT title, date, users.login as sender_user, private_messaging.id as id_private_messaging FROM private_messaging, users WHERE recipient_user="'.$_SESSION['id'].'" AND sender_user=users.id ORDER BY date DESC';

// Lancement de la requête
$result = mysql_query($q, $link);
$nb = mysql_num_rows($result);

if ($nb == 0) 
{
	echo 'You don\'t have new message';
}

else 
{
	// Si il y a un message, affiche la date, titre, et expediteur et un lien vers la page read.php
	while ($data = mysql_fetch_array($result)) 
	{
		echo $data['date'] , ' - <a href="index.php?page=pmRead&id_private_messaging=' , $data['id_private_messaging'] , '">' , 
		stripslashes(htmlentities(trim($data['title']))) , '</a> [ Message from ' , 
		stripslashes(htmlentities(trim($data['sender_user']))) , ' ]<br />';
	}
}

mysql_free_result($result);

?>

<br /><a href="index.php?page=pmSend">Send a message</a>