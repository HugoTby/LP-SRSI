<div id="menu">
	<?php // utilisateurs non connectés
	if (empty($_SESSION['pseudo'])) { ?>
		<table>
			<tr>
				<td><a href="connexion_formulaire.php">Connexion</font></td>
				<td><a href="visiteur_creer.php">Créer un compte</a></td>
				<td><a href="https://cours.iut-orsay.fr">Moodle</a></td>
			</tr>
		</table>
	<?php // utilisateurs connectés
		} else { ?>
		<table>
			<tr>
				<td><a href="perso.php">Perso</a></td>
				<td><a href="status.php">Status</a></td>
				<td><a href="bonjour.php">Bonjour</a></td>
				<td><a href="visiteurs_liste.php">Visiteurs</a></td>
				<td><a href="messages_liste.php">Messages</a></td>
				<td><a href="poemes.php">Poèmes</a></td>
				<td><a href="https://cours.iut-orsay.fr">Moodle</a></td>
				<td><a href="deconnexion_controleur.php">Déconnexion</a></td>
			</tr>
		</table>
	<?php } ?>
</div>