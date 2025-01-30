<?php
	 
	session_start();
	include('modele_visiteur.php');
	
	$fichier = $_FILES["poeme"];
	$nom = $fichier['name'];
    
    // enregistre le nom du fichier dans la base de données
	$visiteur_id = mysqli_real_escape_string($co, $visiteur->id);
	$sql = "INSERT INTO poemes VALUES(NULL, '$nom',$visiteur_id)";
	echo $sql;	
	mysqli_query($co,$sql) or die(" <<<< erreur SQL");

	// Copie le fichier dans le répertoire "poemes". 
	move_uploaded_file($fichier['tmp_name'], 'poemes/'.$nom);
	
	// redirection vers poemes.php
	header("location: poemes.php?nom=$nom");
?>