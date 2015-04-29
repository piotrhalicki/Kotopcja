<?php
// session_start();
require_once './widoki/header.php'; // w headerze 'connect.php'
require './klasy/user.php'; // klasa user
User::conn($conn);
?>

<?php

if (!isset($_SESSION['user_name'])) {
	require './formularze/user_rejestracja.php';
	echo "<br>";
	require './formularze/user_logowanie.php';
}

?>

<?php 
require_once './widoki/footer.php';
?>