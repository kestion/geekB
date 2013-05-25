<?php
// on teste si l'id du message a bien été fourni en argument au script envoyer.php
if (!isset($_GET['id_private_messaging']) || empty($_GET['id_private_messaging'])) {
	header ('Location: index.php');
	exit();
}
else {
	$sql = 'DELETE FROM messages WHERE recipient_user="'.$_SESSION['id'].'" AND id="'.$_GET['id_private_messaging'].'"';
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

	mysql_close();
}
?>