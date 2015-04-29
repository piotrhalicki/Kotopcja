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
	
//Ad::conn($conn);
//Admin::conn($conn);
//Comment::conn($conn);
//Message::conn($conn);
//Picture::conn($conn);
//User:conn($conn);
	
?>