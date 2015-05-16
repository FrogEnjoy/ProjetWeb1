<?php
	include("PageHaut.php");
?>

		<link rel="stylesheet" href="FAQ.css"/>
		
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script type="text/javascript">
			// Execution de cette fonction lorsque le DOM sera entièrement chargé
			$(document).ready(function() {
			// Masquage des réponses
			$("dd").hide();
			// CSS : curseur pointeur
			$("dt").css("cursor", "pointer");
			// Clic sur la question
			$("dt").click(function() {
				// Actions uniquement si la réponse n'est pas déjà visible
				if($(this).next().is(":visible") == false) {
					// Masquage des réponses
					$("dd").slideUp();
					// Affichage de la réponse placée juste après dans le code HTML
					$(this).next().slideDown();
				}
				// Actions uniquement si la réponse est déjà visible
				else if($(this).next().is(":visible") == true){
				// Masquage des réponses
				$(this).next().slideUp();
				}
			});
		});
</script>

	
		<div id="FAQ">
			<dl>
				<!-- éléments réagissant grâce au code javascript décrit ci-dessus -->
				<!-- élément à définir -->
				<dt id="TitrePartie">Comment pouvons nous nous procurer les oeuvres présentées sur ce site ?</dt>
				<!-- description de l'élément à définir -->
				<dd id="Parties">Toutes les oeuvres présentées sur ce site sont des oeuvres éditées, elles sont donc disponibles en librairie.</dd>
				<dt id="TitrePartie">Pouvons nous utiliser les informations présentées sur le site ?</dt>
				<dd id="Parties">Pour toutes informations s'agissant de ce site, veuillez vous référer aux conditions générales.</dd>
				<dt id="TitrePartie">Pouvons nous vous contacter ?</dt>
				<dd id="Parties">Nos coordonnées sont présentes dans la page <a href="Contact.html">"nous contacter"</a>, nous sommes à votre entière disposition.
				 Mais tout abus de ce priviliège provoquera une mise sur liste noire de vos coordonnées.</dd>
			</dl>
		</div>
		
<?php
	include("PageBas.php");
?>