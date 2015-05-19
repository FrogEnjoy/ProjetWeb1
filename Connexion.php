<?php 
include ("PageHaut.php");
?>

<link rel="stylesheet" href="Connexion.css" />

		<div>
			<tbody >
				<!--<form method="post" >
				<fieldset>
					<legend>Connexion</legend>
						<table>
						<label>Pseudo     :      </label> <input id="name" type="text" name="pseudo"/><br/>
						<label>Mot de Passe :    </label> <input id="mdp" type="password" name="mdp"/><br/>
						</table>
				</fieldset>
			</form>
			
				<input type=submit value=Connexion> <input type=submit value="Mdp Perdu ?">-->
				
  			<form action="" method="POST">	
  				<fieldset>
  					<legend>Inscription</legend>
  						<table>
  						<p>   Pseudo     :      <input type="text" name="Pseudo"/><br/>
  						      Mot de Passe :    <input type="password" name="Mdp"/><br/>
  						      Adresse Mail:     <input type="text" name="email"/><br/>
              </p>
  						</table>
  				</fieldset>
  				<br> <input type="submit" name="valider"value="Inscription"/>
        </form>
      </tbody>
			
			
<?php
  //vérifie que tout soit remplis afin de faire la requete
  if(isset($_POST["Pseudo"])&& 
    isset($_POST["Mdp"])&& 
    isset($_POST["email"])
    )
  {

    // D'abord, je me connecte à la base de données.
   try{     
    $bdd = new PDO("mysql:host=localhost;dbname=mydb;charset=utf8", "root", "");
    //donne ma requete SQL
    $sql = "INSERT INTO `mydb`.`utilisateur` (`Pseudo`,`Mdp`, `email`) VALUES (:Pseudo, :Mdp, :email)";
    //prépare la requete
    $request = $bdd->prepare($sql);

    //o met dans un tableau les variables
    $request->execute(array(
    "Pseudo" => $_POST["Pseudo"],
    "Mdp" => $_POST["Mdp"],
    "email" => $_POST["email"]
    ));
    }
    catch(PDOException $e) {echo $e->getMessage();}


      
      //affiche un mot gentil, dans le futur on doit changer pour que ceci apparaisse sur une autre.
      echo "Bonjour " .$_POST["Pseudo"]. " votre compte est bien enregistré !";
  } 
  

?>
		
		
<?php 
include ("PageBas.php");
?>
