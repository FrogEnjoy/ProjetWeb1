<?php 
	include ("PageHaut.php");
?>

<link rel="stylesheet" href="Commentaires.css" />
	<div>
		<form method="post">
			<table>
				<tr><td>Pseudo:
				<input id="name" type="text" name="pseudo"/></td></tr>
				<tr><td colspan="2">Commentaires:<br>
				<textarea COLS="100" ROWS="10" name="Commentaires"></textarea>
				</td></tr>
			</table>
			<br> <input type="submit" value="Envoyer" name="valider">
			<input type="submit" value="Annuler" name="retour">
		</form>
	</div> 

<?php 
	include ("PageBas.php");
?>
