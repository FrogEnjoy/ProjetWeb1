<?php
	include("PageHaut.php");
?>

		<link rel="stylesheet" href="NewText.css"/>
		
		
		<div>
			<form method="post">
				<table>
					<tr><td>Pseudo:
					<input id="name" type="text" name="pseudo"/></td></tr>
					<tr><td>Mot de Passe:
					<input id="mdp" type="password" name="mdp"/></td></tr>
					<tr><td colspan="2">Essai:<br>
					<textarea COLS="100" ROWS="10" name="essai"></textarea>
					</td></tr>
				</table>
				<table>
					<tr><td>Thème:
						<form method="POST" name="menu" >
							<select name="selecttheme">
								<option> </option>
								<option value="Thriller">Thriller</option>
								<option value="Fantastique">Fantastique</option>
								<option value="Science-Fiction">Science-Fiction</option>
								<option value="Horreur">Horreur</option>
								<option value="Romantique">Romantique</option>
							</select>
						</form>
					</td></tr>
				</table>
				<br> <input type="submit" value="Envoyer" name="valider">
				<input type="submit" value="Annuler" name="retour">
			</form>
		</div> 




<?php

//ne fonctionne pas pour le moment

//fonctionne seulement quand le boutton est activé
if(isset($_POST["valider"]))
	
		$bdd = new PDO("mysql:host=localhost;dbname=zoe;charset=utf8", "root", "");
	
	


	htmlentities($essai=$_POST["essai"]);
       

		if ($_POST["selecttheme"] == "Fantastique"){
			$reponse = $bdd->query("INSERT INTO 'zoe'.'fantastique'('Texte_Fanta') VALUES($essai)");

		}else if ($_POST["selecttheme"] == "Thriller"){
			$reponse = $bdd->query("INSERT INTO 'zoe'.'thriller'('Texte_Thriller') VALUES($essai)");
		}
	
?>



<?php
	include("PageBas.php");
?>

<!--Je fais un essai pour voir si ça fonctionne bien-->