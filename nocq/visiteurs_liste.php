<?php 
	session_start();
	require_once("connect_db.php");

	$titre="Visiteurs";
	include('entete.php');
?>

	<div id="main">
		<h1>Liste des visiteurs</h1>
		

<?php 
	$sql = "SELECT * FROM visiteurs ";
	$recordset = $co->query($sql) or die("Problème de récupération des visiteurs");
?>
		<table>

			<tr>
				<td width="100"><b>visiteur</b></td>
				<td width="500"><b>status</b></td>
			</tr> 
<?php
		while($row = $recordset->fetch_object())
		{
?>
			<tr height="40">
				<td><?php echo $row->pseudo; ?></td>
				<td><?php echo $row->status; ?></td>
			</tr>

<?php          
		}
?>
		</table>
	</div>
<?php 
	$recordset->close();
	$co->close();
?>

<?php include('pied_de_page.php'); ?>