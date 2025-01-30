<?php 
	// redirige vers la page d'accueil si la page est réservée aux utilisateurs connectés, et que l'utilisateur ne l'est pas..
	$script_name = preg_replace('/\/noCQ.[^\/]*\//i','', $_SERVER['SCRIPT_NAME']);
	if (empty($_SESSION['pseudo']) && in_array($script_name, ['perso.php','messages_liste.php','bonjour.php'])) {
		header("Location: connexion_formulaire.php?message='Merci de vous authentifier'");
	}
?>

<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css" />

		<title><?php echo $titre ?></title>

	</head>

	<body>
		<header>
			<h1>NoCQ</h1>
			<h2>Attention aux failles !</h2>
			<img src="iut-orsay.gif" />	
		</header>
		<?php 
			include('menu.php');
		?>