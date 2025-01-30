<?php 
	session_start();
	include('modele_visiteur.php');

	$titre="poemes";
	include('entete.php');
?>

<div id="main">

<!-- -------liste des poèmes----------------------- -->
	<h1>Liste des poèmes</h1>
	<p>
<?php
		$sql = "SELECT * from poemes";
		$resultat = mysqli_query($co,$sql);
		while ($poeme = mysqli_fetch_assoc($resultat)) {	
			echo "<a href='poemes.php?nom=${poeme['nom']}'>".$poeme['nom']."</a></br>";
		}
?>
	</p>
	
	

<!-- -------affichage d'un poème----------------------- -->
<?php
if (isset($_GET['nom'])) {
	echo "<h1>Poème ${_GET['nom']} </h1>";
	echo '<pre>';
	include("poemes/${_GET['nom']}");
	echo '</pre>';

}


?>


<!-- -------ajouter un poème----------------------- -->
	<h1>Ajouter un poème</h1>
	<p>
		<form action='ajouter_poeme.php' method="POST" enctype="multipart/form-data">
			<input name='poeme' type='file'/>
			<input type="submit"/>
		</form>
	</p>
</div>



<?php include('pied_de_page.php'); ?>
