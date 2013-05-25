 <?php 
 

 //generateut de cle
function random($car) 
{
	$string = "";
	$chaine = "abcdefghijklmnpqrstuvwxy";
	srand((double)microtime()*1000000);
	
		for($i=0; $i<$car; $i++) 
		{
		$string .= $chaine[rand()%strlen($chaine)];
			}
				return $string;
			}
 $chaine = random(20);
 echo $chaine;
 
//$cle = sha1(microtime(NULL)*1000); 
 //echo $cle; 
 
 //Vérif email et envoi au POST myEmail
 $email=$_POST['myEmail'];
 if (filter_var($email, FILTER_VALIDATE_EMAIL))
 { 
 	 mail('$email', 'Parrainage', '"Nous vous invitons ....blabla tcho ! <br /> Votre clé d\'activation est : ".$chaine', null);
    //echo "Ton Email es : ".$_POST['myEmail']." ... alors TG!";
 }
 else
 {
 	echo "Ton email est moche est pas valide !";
 }

 

 
/*function verif_mail($mail) 
{ 
	$mail = htmlentities($_POST['mail']);
	$syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#'; 
	
   if(preg_match($syntaxe,$mail)) 
      return true; 
   else 
     return false; 
}

//$mail=htmlentities($_POST['mail']); 
if(verif_mail ($mail)) 
  echo '<p>Votre adresse est valide.</p>'; 
else 
  echo '<p>Votre adresse e-mail n\'est pas valide.</p>';
*/
 ?>