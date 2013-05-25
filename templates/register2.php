			<?php include 'templates/nav1.php' ?>
				
			<div id="register">
			
				<form method="post" action="index.php?page=register&action=register">
					
					<label for="login">Login : </label><br />				
					<input type="text" name="login" id="login" value="<?php if (isset ($_POST['login']) && !isset ($ erreurs['login'])) { echo $_POST['login'];}?>" /><br /><br />
					
					<label for="password">Password : </label><br />				
					<input type="password" name="password" id="password" value="<?php if (isset ($_POST['password']) && !isset ($erreurs['password'])) { echo $_POST['password'];}?>" /><br /><br />
					
					<label for="password_verif">Retype password : </label><br />					
					<input type="password" name="password_verif" id="password_verif" value="<?php if (isset ($_POST['password_verif']) && !isset ($erreurs['password_verif'])) { echo $_POST['password_verif'];}?>" /><br /><br />
					
					<label for="email">Email : </label><br />					
					<input type="text" name="email" id="email" value="<?php if (isset ($_POST['email']) && !isset ($erreurs['email'])) { echo $_POST['email'];}?>" /><br /><br />
					
					<label for="url_avatar">Avatar url : </label><br />					
					<input type="text" name="url_avatar" id="url_avatar" value="<?php if (isset ($_POST['url_avatar']) && !isset ($erreurs['url_avatar'])) { echo $_POST['url_avatar'];}?>" /><br /><br />
					
					<label for="description">Description : </label>	<br />				
					<input type="textarea" name="description" id="description" style="width:450px; height:150px;" value="<?php if (isset ($_POST['description']) && !isset ($erreurs['description'])) { echo $_POST['description'];}?>" /><br /><br />
					
					<div id="registerButton">
						<div class="button">
							<input type="submit" value="Connexion" />
						</div>
					</div>
				
				</form>
				
			</div>
			<div class="clear"></div>