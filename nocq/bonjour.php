<?php 
	session_start();
	include('modele_visiteur.php');

	$titre="bonjour";
	include('entete.php');
	
?>
	<div id="main">
		<h1>Bonjour</h1>
	
		<p>Comment t'appelles-tu ?</p> 
		
		<form action="bonjour.php" method=>
			<input type=text name="nom" size="150"/>
			<input type=submit />
		</form>
		
<?php if (!empty($_GET['nom'])) { ?>
		<p>
			Bonjour <?php echo $_GET['nom'] ?> !
		</p>
<?php } ?>




	</div>
		
<?php include('pied_de_page.php'); ?>