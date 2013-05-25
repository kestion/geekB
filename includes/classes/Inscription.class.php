<?php
class Inscription
{
	//D�finition des variables de la classe
	private $id;
	private $login;
	private $email;
	private $password;
	private $password_verif;
	private $description;
	private $url_avatar;
	
	//Proc�dure qui affiche et traite le formulaire
	public function formulaire()
	{
		if (isset($_POST) && !empty($_POST))
		{
			//On v�rifie les erreurs s'il y en a
			if ($this->VerifText($_POST('login'))==true)
				$this->erreur[0]='Votre pseudo est incorrect.';
			if ($this->VerifMail($_POST('email'))==true)
				$this->erreur[1]='Votre e-mail est incorrect.';
			if ($this->VerifPswd($_POST('password'))==true)
				$this->erreur[2]='Votre mot de passe est incorrect.';
			if ($_POST('password')==$_POST['password_verif'])
				$this->erreur[3]='Vos deux mot de passe ne concordent pas.';
			//S'il y a des erreurs, on les affichent et on affiche le formulaire
			if (count($this->erreur)!=0)
			{
				for ($this->i=0;$this->i<count($this->erreur);$this->i++)
				{
					echo $this->erreur[$this->i];
				}
				$this->formulaire();
			}
			//S'il n'y a pas d'erreurs, on enregistre dans la base de donn�e et on finit le formualaire
			else
			{
				mysql_query("INSERT INTO user VALUES('','".$this->pseudo."','".$this->mdp."','".$this->mail."','".time()."')") or die(mysql_error());
				$this->finInscription();
			}
		}
		else
		{
			?>
			<form action="" method="post">
			Pseudo : <input type="text" name="pseudo" value="<?php echo $this->pseudo; ?>" /><br />
			E-mail : <input type="text" name="mail" value="<?php echo $this->mail; ?>" /><br />
			Mot de passe : <input type="text" name="mdp" value="<?php echo $this->mdp; ?>" /><br />
			Re-tapez votre mot de passe: <input type="text" name="mdpBis" value="<?php echo $this->mdpBis; ?>" /><br />
			<br />
			<input type="submit" value="M'inscrire" />
			</form>
			<?php
		}
	}
	//Message encoy� � l'utilisateur quand l'inscription est termin�
	public function finInscription()
	{
		return 'Vous vous �tes bien inscrit, vous pouvez d�s � pr�sent vous connecter � votre compte pour jouer.';
	}
	//On v�rifie le pseudo
	private function VerifText($login)
	{
		return false;
	}
	//On v�rifie le mail
	private function VerifMail($email)
	{
		return false;
	}
	//On v�rifie le mot de passe
	private function VerifPswd($password)
	{
		return false;
	}
}
?>