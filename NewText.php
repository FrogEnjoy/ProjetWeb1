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
if(!empty($_POST["valider"])){

    
        $bdd = new PDO("mysql:host=localhost;dbname=mydb;charset=utf8", "root", "");
    
    
        $essai=htmlentities($_POST["essai"]);
       

        
         if ($_POST["selecttheme"] == "Fantastique"){
            $reponse = $bdd->query("INSERT INTO `mydb`.`fantastique` (`Texte_Fanta`) VALUES (".$essai.")");

        }else if ($_POST["selecttheme"] == "Thriller"){
            $reponse = $bdd->query("INSERT INTO `mydb`.`thriller` (`Texte_Thriller`) VALUES (".$essai.")");

        }else if ($_POST["selecttheme"] == "Science-Fiction"){
            $reponse = $bdd->query("INSERT INTO `mydb`.`sciencefiction` (`Texte_SciFI`) VALUES (".$essai.")");

        }else if ($_POST["selecttheme"] == "Horreur"){
            $reponse = $bdd->query("INSERT INTO `mydb`.`horreur` (`Texte_Horreur`) VALUES (".$essai.")");
        
        }else if ($_POST["selecttheme"] == "Romantique"){
            $reponse = $bdd->query("INSERT INTO `mydb`.`romantique` (`Texte_Roman`,`Utilisateur_idUtilisateur`) VALUES (".$essai.",1)");
        
        }
        
}

?>





<?php
	include("PageBas.php");
?>

<!--Je fais un essai pour voir si ça fonctionne bien-->