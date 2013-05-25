<?php
// on teste si notre paramètre existe bien et qu'il n'est pas vide
if (!isset($_GET['id_private_messaging']) || empty($_GET['id_private_messaging'])) {
	echo 'Error message.';
}

else {
    // SQL cherche les infos dans la bdd
    $q = 'SELECT title, date, content, users.login as sender_user FROM private_messaging, users WHERE recipient_user="'.$_SESSION['id'].'" AND sender_user=users.id AND users.id="'.$_GET['id_private_messaging'].'"';
    
    // Lance la requête
    $result = mysql_query($q) or die('Erreur SQL !<br />'.$q.'<br />'.mysql_error());
    $nb = mysql_num_rows($result);

    if ($nb == 0) {
	    echo 'Error message.';
    }
    else {
	    // On affiche le message
	    $data = mysql_fetch_array($result);
	    echo $data['date'] , ' - ' , stripslashes(htmlentities(trim($data['title']))) , '</a> [ Message from ' , stripslashes(htmlentities(trim($data['sender_user']))) , ' ]<br /><br />';
	    echo nl2br(stripslashes(htmlentities(trim($data['content']))));

	    // Lien pour supprimer le message
	    echo '<br /><br /><a href="index.php?page=pmDelete&id_private_messaging=' , $_GET['id_private_messaging'] , '">Delete</a>';
    }
    mysql_free_result($result);

}
?>