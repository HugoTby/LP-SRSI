<?php 
	session_start();
	require_once("connect_db.php");

	$titre="messages";
	include('entete.php');
?>

	<div id="main">
		<h1>Messages</h1>
		
<?php if (!empty($_GET['motif'])) {echo "mot clé cherché : ${_GET['motif']}";} ?>
		<div>
			<form method='GET' action="messages_liste.php">
				<input type='text' name='motif' size="100" />
				<input type='submit' name='recherche_messages' value='Chercher' />
			</form>
		</div>
<?php 
	$sql = "SELECT * FROM messages INNER JOIN visiteurs ON messages.visiteur_id = visiteurs.id";
	if (!empty($_GET['recherche_messages'])) {
		$sql .= " WHERE message LIKE '%" . $_GET['motif'] . "%'";
	}
	$recordset = $co->query($sql) or die("Problème de récupération des messages");
	
	if(mysqli_num_rows($recordset) == 0) 
	{
?>
			Aucun message trouvé
<?php
	}
	else
	{
?>
		<table>

			<tr>
				<td width="100"><b>pseudo</b></td>
				<td width="500"><b>message</b></td>
			</tr> 
<?php
		while($row = $recordset->fetch_object())
		{
?>
			<tr height="40">
				<td><?php echo $row->pseudo; ?></td>
				<td><?php echo $row->message; ?></td>
			</tr>

<?php          
		}
?>
		</table>
<?php 
	}
	$recordset->close();
	$co->close();
?>


		

		<form action="messages_ajouter.php" method="GET">
		
			<p><label for="message">Message:</label><br />
			<input type="text" id="message" name="message" size="100" autocomplete="off">
			<button type="submit" name="ajouter_messages" value="submit">Ajouter</button>
			</p>

			

		</form>
<?php 
	if (!empty($_GET['message'])) 
		echo "<font color='red'>".$_GET['message']."</font>";
?>
		<br />
	</div>

<?php include('pied_de_page.php'); ?>