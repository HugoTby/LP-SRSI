<?php

	session_start();

	require_once("connect_db.php");

	if(isset($_POST["connexion"])){
		$pseudo = $_POST["pseudo"];
		$pseudo = mysqli_real_escape_string($co, $pseudo);
		$mot_de_passe = $_POST["mot_de_passe"];

		$sql = "SELECT * FROM visiteurs WHERE pseudo = '" . $pseudo;
		$sql.= "' AND BINARY mot_de_passe = '" . $mot_de_passe . "'";

		$recordset = $co->query($sql) or die("Error: " . $co->error);
		$row = $recordset->fetch_assoc();

		if($row){
			$_SESSION["pseudo"] = $_POST["pseudo"];
			//print_r($_SESSION);
			header("Location: perso.php");
		}

		else {
			header("Location: connexion_formulaire.php?message=".urlencode('identifiants invalides'));
		}
	}
	$co->close();
	exit;
?>
