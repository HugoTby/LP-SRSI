<?php 
	$titre="connexion";
	include('entete.php');
?>

	<div id="main">
		<h1>Connexion</h1>

		<form action="connexion_controleur.php" method="POST">

			<p><label for="pseudo">Pseudo :</label><br />
			<input type="text" id="pseudo" name="pseudo" size="20" autocomplete="off"></p> 

			<p><label for="mot_de_passe">Mot de passe:</label><br />
			<input type="password" id="mot_de_passe" name="mot_de_passe" size="20" autocomplete="off"></p>

			</p>

			<button type="submit" name="connexion" value="submit">Connexion</button>
			
			<p> Tu peux utiliser ces identifiants : joe / bar
			</p>

		</form>
		<?php 
			if (!empty($_GET['message'])) 
				echo "<font color='red'>".$_GET['message']."</font>";
		?>
		<br />
	</div>

<?php include('pied_de_page.php'); ?>