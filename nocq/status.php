<?php 
	session_start();
	include('modele_visiteur.php');

	$titre="status";
	include('entete.php');
	
	$jeton = rand(); 
	$_SESSION['jeton'] = $jeton;
?>
	<div id="main">
		<h1>Mon status</h1>
		<p><?php echo $visiteur->status; ?></p>
		
		<form action="status_controleur.php" method='GET'>
			<input type=text name="status"/>
			<input type=submit value="Modifier"/>
			<input type="hidden" name='jeton' value="<?php echo $jeton ?>" />
		</form>

		
	</div>
		
<?php include('pied_de_page.php'); ?>