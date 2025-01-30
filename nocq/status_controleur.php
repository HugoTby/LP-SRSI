<?php
	session_start();
	require_once("connect_db.php");
	require_once("modele_visiteur.php");
	
	if (!empty($_GET['status'])) { 
		$status = $_GET["status"];
		
		if ($_SESSION['jeton'] != $_GET['jeton'])
		{ 
			echo "Jeton incorrect. Attaque CSRF ?"; exit();
		}
		else 
		{ 
			$sql =  "UPDATE visiteurs SET status = '${status}' where id = '".$visiteur->id."' ";
			$co->query($sql) or die("Error: " . $co->error);
		}
	}
	
	header("Location: status.php");
	$co->close();
	exit;
		
?>