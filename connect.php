<?php

$db = array(
			'serverName' 	=> "localhost",
			'userName'		=> "root",
			'pass' 			=> "pass",
			'dbName' 		=> "Kotopcja"
			);

$conn = new mysqli($db['serverName'], $db['userName'], $db['pass'], $db['dbName']);
	if ($conn->connect_error) {
		die ("Połączenie nieudane.<br>Błąd: ".$conn->connect_error."<br>");
	}
mysqli_set_charset($conn,"utf8");
	
// Ad::conn($conn);
// Admin::conn($conn);
// Comment::conn($conn);
// Location::conn($conn);
// Message::conn($conn);
// User::conn($conn);
	
?>