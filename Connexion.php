<?php 
include ("PageHaut.php");
?>

<link rel="stylesheet" href="Connexion.css" />

		<div>
			<tbody >
				<form method="post" >
				<fieldset>
					<legend>Connexion</legend>
						<table>
						<label>Pseudo     :      </label> <input id="name" type="text" name="pseudo"/><br/>
						<label>Mot de Passe :    </label> <input id="mdp" type="password" name="mdp"/><br/>
						</table>
				</fieldset>
			</form>
			
				<input type=submit value=Connexion> <input type=submit value="Mdp Perdu ?">
				
			<form>	
				<fieldset>
					<legend>Inscription</legend>
						<table>
						<label>Pseudo     :     </label> <input type="text" name="pseudo"/><br/>
						<label>Mot de Passe :   </label> <input type="password" name="mdp"/><br/>
						<label>Adresse Mail:    </label> <input type="text" name="email"/><br/>
						</table>
				</fieldset>
				<br> <input type="submit" name="valider"value="Inscription"/>
			</form>
			</tbody>
			
<?php
  
  if(isset($_POST['valider']))
    {
         // D'abord, je me connecte à la base de données.
     $bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');
    
      
      // Je recupere les infos, plus securité pour le code.
		htmlentities($pseudo = $_POST['pseudo']);
        htmlentities($mdp = $_POST['mdp']);
        htmlentities($email = $_POST['email']);
      
       // empecher les codes php dans la base
      // Je verifie que TOUT les champs sont remplis.
      if(empty($pseudo)||empty($mdp)||empty($email) )
      {
        echo'Vous devez remplir toutes les coordonnées';
      }
      else
      {
          $result = $bdd->query("SELECT email FROM utilisateur WHERE email = $email");
          $result2 = $result -> fetch();
          if (empty($result2['email'])){
              if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $reponse = $bdd->query("INSERT INTO utilisateur VALUES('', '$pseudo','$email', '$mdp')");
                      //affiche un mot gentil, dans le futur on doit changer pour que ceci apparaisse sur une autre.
                      echo "Bonjour $pseudo votre compte est bien enregistré";
                } else {
                  echo 'Votre email n\'est pas valide';
              }
          }
          else{
           echo 'votre email est déjà utilisé.';
          }
      }
    }

?>

		
		
<?php 
include ("PageBas.php");
?>