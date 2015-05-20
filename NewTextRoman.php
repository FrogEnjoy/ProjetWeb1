<?php
    include("PageHaut.php");
?>

        <link rel="stylesheet" href="NewText.css"/>
      
      
        <div>
            <form method="post">
                <table>
                    <tr><td>Pseudo:
                    <input id="name" type="text" name="Pseudo"/></td></tr>
                    <tr><td>Titre de l'essai:
                    <input id="title" type="text" name="Nom_Roman"/></td></tr>
                    <tr><td colspan="2">Essai:<br>
                    <textarea COLS="100" ROWS="10" name="essai"></textarea>
                    </td></tr>
                </table>
                <!--<table>
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
                </table>-->
                <br> <input type="submit" value="Envoyer" name="valider">
                <input type="submit" value="Annuler" name="retour">
            </form>
        </div>







<?php
if(isset($_POST["Pseudo"])&&
   isset($_POST["essai"])&&
   isset($_POST["Nom_Roman"])
   )

  {
   
    $bdd = new PDO("mysql:host=localhost;dbname=mydb;charset=utf8", "root", "");
   
   
    $essai=htmlentities($_POST["essai"]);
    $Nom_Roman=htmlentities($_POST["Nom_Roman"]);
          

    $reponse = $bdd->query("INSERT INTO `mydb`.`Romantique` (`idRomantique`, `Nom_Roman`, `Date_Roman`, `Texte_Roman`, `Utilisateur_idUtilisateur`, `Com_Roman`) VALUES (NULL, '$Nom_Roman', NULL, '$essai', '', NULL)");
    //affiche un mot gentil, dans le futur on doit changer pour que ceci apparaisse sur une autre.
      echo "Votre histoire " .$_POST["Nom_Roman"]. " est bien enregistré !";

}
   
?>



<?php
    include("PageBas.php");
?>

<!--Je fais un essai pour voir si ça fonctionne bien-->