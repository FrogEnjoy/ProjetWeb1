<?php
	include("PageHaut.php");
?>

		<link rel="stylesheet" href="NewText.css"/>
		
		
		<div>
			<form method="post">
				<table>
					<tr><td>Pseudo:
					<input id="name" type="text" name="Pseudo"/></td></tr>
					<!--<tr><td>Mot de Passe:
					<input id="mdp" type="password" name="mdp"/></td></tr>-->
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
	if(isset($_POST["Pseudo"])&& 
    isset($_POST["essai"])&& 
    isset($_POST["selecttheme"])
    )
  {


// D'abord, je me connecte à la base de données.
   try{     
    $bdd = new PDO("mysql:host=localhost;dbname=mydb;charset=utf8", "root", "");
    
    //donne ma requete SQL
    if ($_POST["selecttheme"] == "Fantastique"){
            $sql = "INSERT INTO `mydb`.`fantastique` (`Texte_Fanta`) VALUES (".$essai.")";

    }else if ($_POST["selecttheme"] == "Thriller"){
            $sql = "INSERT INTO `mydb`.`thriller` (`Texte_Thriller`) VALUES (".$essai.")";

    }else if ($_POST["selecttheme"] == "Science-Fiction"){
            $sql = "INSERT INTO `mydb`.`sciencefiction` (`Texte_SciFI`) VALUES (".$essai.")";

    }else if ($_POST["selecttheme"] == "Horreur"){
            $sql = "INSERT INTO `mydb`.`horreur` (`Texte_Horreur`) VALUES (".$essai.")";
        
    }else if ($_POST["selecttheme"] == "Romantique"){
            $sql = "INSERT INTO `mydb`.`romantique` (`Texte_Roman`) VALUES (".$essai.")";
        
    }

    //prépare la requete
    $request = $bdd->prepare($sql);

    //o met dans un tableau les variables
    $request->execute(array(
    "Pseudo" => $_POST["Pseudo"],
    "essai" => $_POST["essai"],
    "selecttheme" => $_POST["selecttheme"]
    ));
    }
    catch(PDOException $e) {echo $e->getMessage();}


      
      //affiche un mot gentil, dans le futur on doit changer pour que ceci apparaisse sur une autre.
      echo "Votre histoire " .$_POST["selecttheme"]. " est bien enregistré !";
  } 

?>





<?php
	include("PageBas.php");
?>

<!--Je fais un essai pour voir si ça fonctionne bien-->