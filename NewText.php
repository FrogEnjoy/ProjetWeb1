<?php
	include("PageHaut.php");
?>

		<link rel="stylesheet" href="NewText.css"/>
		
		
		<div>
			<form>
				<table>
					<tr><td>Pseudo:
					<input id="name" type="text" name="pseudo"/></td></tr>
					<tr><td>Mot de Passe:
					<input id="mdp" type="password" name="mdp"/></td></tr>
					<tr><td colspan=2>Essai:<br>
					<textarea COLS=100 ROWS=10 name=essai></textarea>
					</td></tr>
				</table>
				<table>
					<tr><td>Thème:
						<form method="POST" name="menu" >
							<select name="selecttheme" onChange="">
								<option> </option>
								<option>Thriller</option>
								<option>Fantastique</option>
								<option>Science-Fiction</option>
								<option>Horreur</option>
								<option>Romantique</option>
							</select>
						</form>
					</td></tr>
				</table>
				<br> <input type=submit value=Envoyer><input type=submit value=Annuler>
			</form>
		</div> 



<?php
	include("PageBas.php");
?>