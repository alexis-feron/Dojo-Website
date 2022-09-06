<!doctype html>
<html lang="fr">

<!-- Ajouter le CSS et donne un titre -->
<head>
	<meta charset="utf-8" />
	<title> Inscription au Dojo de Clermont-Ferrand </title>
	<link rel="stylesheet" href="miseEnPage.css"/>
	<link rel="icon" href="logo.ico" />
</head>

<!-- Contenu de la page -->
<body>

	<!-- Barre de navigation (avec les liens vers les autres pages et les boutons pour les réseaux sociaux) sticky -->
	<nav>
    	<ul id="menu">
    		<li><a id="nav" href="index.html">Acceuil</a></li>
        	<li><a id="nav" href="prix.html">Tarifs</a></li>
        	<li><a id="nav" href="planning.html">Planning</a></li>
        	<li><a id="nav" href="formulaire.html">Inscription</a></li>
			<li><a href="#">Médias ▿</a>
				<ul>
					<li><a href="photo.html">Photos</a></li>
					<li><a href="video.html">Vidéo</a></li>
				</ul>
			</li>
			<li><a id="nav" href="http://urlr.me/9tBpg"><img id="reseaux"src="twitter.png"></a></li>
	        <li><a id="nav" href="http://urlr.me/9tBpg"><img id="reseaux"src="facebook.png"></a></li>
   		</ul>
	</nav>

	<!-- Image (logo) et Nom du site -->
	<header>
		<h1>
			<img src="logo.png" alt="Malheureusement l'image n'as pas été trouvée"/>
			<z>  </z>
			<a id="acceuil">Dojo de Clermont-Ferrand </a>
		</h1>
	</header>

	<div>
		<h3>Recapitulatif des informations données :</h3>
		<?php
		if(empty($_POST['nom'])) {
			echo'Le nom doit être renseigné !';
		}
		else{
			echo'Bonjour ' . $_POST['nom'];
		}?>
		<br>
		<?php
		if(empty($_POST['email'])) {
			echo'L\'email doit être renseigné !';
		}
		else{
			if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				echo'Email : ' . $_POST['email'];
			} 
			else {
				echo'L\'email doit être renseigné !';
			}
		}?>
		<br>
		<?php
		if(empty($_POST['act'])) {
			echo'L\'activité doit être renseigné !';
		}
		else{
			echo'L\'Activité : ' . $_POST['act'];
		}?>
		<?php
		if(empty($_POST['horaire'])) {
			echo'L\'horaire doit être renseigné !';
		}
		else{
			echo'à l\'horaire : ' . $_POST['horaire'];
		}?>
		<br>
		<?php
		if(empty($_POST['message'])) {
			echo'Ajoutez un message !';
		}
		else{
			echo'Votre message : ' . $_POST['message'];
		}?>
		<h3>Merci, votre demande à été prise en compte.</h3>
	</div>
    <form action="formulaire.html">
        <button type="submit">Retour</button>
    </form>

	<!-- Bas de page qui contient mes informations -->
	<footer>
		<div> Alexis Feron, Groupe 5 </div>
	</footer>

</body>
</html>
