<?php

	session_start();

	require_once("connect_db.php");
	require_once("modele_visiteur.php");

	if (isset($_GET["ajouter_messages"])){
		
		$message = $_GET["message"];
		
		$sql =  "INSERT INTO messages (visiteur_id, message) VALUES ('" . $visiteur->id . "','" . $message . "')";
		$co->query($sql) or die("Error: " . $co->error);
		
		header("Location: messages_liste.php?message=".urlencode('Le message a été ajouté'));
	}
	else 
	{
		header("Location: messages_liste.php");
	}
	$co->close();
	exit;
?>
