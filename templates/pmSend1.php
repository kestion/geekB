<?php
// on teste si le formulaire a bien été soumis
if (isset($_POST['send']) && $_POST['send'] == 'Send') { 
	if (empty($_POST['recipient_user']) || empty($_POST['title']) || empty($_POST['content'])) {
		$erreur = 'All fields are required';
	}
	else {
	// si tout a été bien rempli, on insère le message dans notre table SQL
	$q = 'INSERT INTO private_messaging VALUES("", "'.$_SESSION['id'].'", "'.$_POST['recipient_user'].'", "'.date("Y-m-d H:i:s").'", "'.mysql_escape_string($_POST['title']).'", "'.mysql_escape_string($_POST['content']).'")';
	mysql_query($q) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
	}
}

// SQL selection du prenom des membres à afficher dans le menu déroulant
$q = 'SELECT users.login as name_recipient_user, users.id as recipient_user FROM users WHERE id <> "'.$_SESSION['id'].'" ORDER BY login ASC';

// Lance la requête
$result = mysql_query($q, $link) or die('Erreur SQL !<br />'.$q.'<br />'.mysql_error());
$nb = mysql_num_rows ($result);

if ($nb == 0) {
	echo 'You are the only member of Geek B. :\'(';
}
else {
	?>
	<form action="index.php?page=pm" method="post">
	For : <select name="recipient_user">
	<?php
	// Menu déroulant avec le first_name des membres
	while ($data = mysql_fetch_array($result)) {
		echo '<option value="' , $data['recipient_user'] , '">' , stripslashes(htmlentities(trim($data['name_recipient_user']))) , '</option>';
	}
	?>
	</select><br />
	Title : <input type="text" name="title" value="<?php if (isset($_POST['title'])) echo stripslashes(htmlentities(trim($_POST['title']))); ?>"><br />
	Message : <textarea name="content"><?php if (isset($_POST['content'])) echo stripslashes(htmlentities(trim($_POST['content']))); ?></textarea><br />
	<input type="submit" name="send" value="Send">
	</form>
	<?php
}
mysql_free_result($result);

?>
</select>

<?php
// Si erreur lors de la soumission du formulaire, on l'affiche
if (isset($erreur)) echo '<br /><br />',$erreur;
?>