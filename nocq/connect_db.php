<?php

require_once("admin/configuration.php");

// Connects to the server
$co = new mysqli($db_server, $db_username, $db_password, $db_name);

// Checks the connection
if($co->connect_error)
{    
    die("Connection failed: " . $co->connect_error);   
}

?>