<!DOCTYPE html>
<html lang="pl-PL">
<head>
	<meta charset="UTF-8">
	<meta name="kotOpcja" content="warsztaty">	
	<title>&lt; kot([])pcja &gt;</title>
</head>
<body>

<?php
session_start();
if(!isset($_SESSION['licznik'])) {
	$_SESSION['licznik'] = 1;
} else {
	$_SESSION['licznik']++;
};

require './funkcje/connect.php';

if (!isset($_SESSION['user_name'])) {
	echo ("
		<p>
		<dl>
		<dd><a href='/formularze/user_rejestracja.php'>Zarejestruj się</a><dd>
		<dd><a href='/formularze/user_logowanie.php'>Zaloguj się</a><dd>
		</p>
		</dl>
		");
} else {
	echo ("
		<p>
		<dl>
		<dd><a href='/widoki/user_profil.php'>Twój profil</a></dd>
		<dd><a href='/widoki/user_wylogowany'>Wyloguj</a></dd>
		</dl>
		</p>
		");
};
?>

<hr>