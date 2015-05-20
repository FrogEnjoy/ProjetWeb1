<?php 
	include ("PageHaut.php");
?>

<link rel="stylesheet" href="Horreur.css" />

<img id="squelette" src="horreur1.gif"/> <br>
<a id="new" href="NewTextHorreur.php">Transmettre un Essai</a><br>

<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM Horreur INNER JOIN Utilisateur ON Utilisateur_idUtilisateur=idUtilisateur ORDER BY Date_Horreur DESC');


// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>


<center><table cellspacing="0" cellpadding="0" border="0" width="680">
		<tr>
		<td>
			<table cellspacing="0" cellpadding="0" border="1" width="674">
				<tr>
					<td align=center><?php echo $donnees['Pseudo']; ?></td>
					<td align=center><?php echo $donnees['Nom_Horreur']; ?></td>
					<td align=center><?php echo $donnees['Date_Horreur']; ?></td>
					<td align=center><a id="Comm" href="Commentaires.php">Commenter</a><br></td>
				</tr>
			</table>
		</td>
		</tr>
		
		<tr>
		<td>
			<div style="width:700px; height:200px; overflow:auto;">
			<table cellspacing="0" cellpadding="1" border="1" width="674">
				<tr>
					<td colspan=3 align=center style="overflow:auto"><?php echo $donnees['Texte_Horreur']; ?></td>
				<tr>
			</table>
			</div>
		</td>
		</tr>
</table></center>
</br>
	
   
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

<?php 
	include ("PageBas.php");
?>

