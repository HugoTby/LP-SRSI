<?php 
	session_start();
	include('modele_visiteur.php');

	$titre="Cookies";
	include('entete.php');
	
	setcookie('mon_cookie', 'coucou');
?>

<div id="main">
	<h1>Les Cookies de noCQ</h1>
</div>



<?php include('pied_de_page.php'); ?>
