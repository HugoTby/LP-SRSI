<?php 
	session_start();
	include('modele_visiteur.php');

	$titre="perso";
	include('entete.php');
?>

<div id="main">
	<h1>Tu es connecté avec le login : <?php echo $visiteur->pseudo ?></h1>
    <p>Ton secret est : <?php echo $visiteur->secret ?>
</div>

<?php include('pied_de_page.php'); ?>
