<?php

	require_once("connect_db.php");
	
	class visiteur {
		
		public $pseudo, $id, $secret, $status;
		
		public function __construct($co,$pseudo)
		{
			$sql = "SELECT * FROM visiteurs WHERE pseudo = '" . $pseudo ."'";
			$recordset = $co->query($sql) or die("Error: " . $co->error);
			$row = $recordset->fetch_object();
			
			$this->pseudo = $pseudo;
			$this->id = $row->id;
			$this->secret = $row->secret;
			$this->status = $row->status;
		}
		
		
	}
	
	$visiteur = new Visiteur($co, $_SESSION['pseudo'])

?>