<?php
session_start();
include('connect.php');

// require('klasy/ad.php');
// require('klasy/admin.php');
// require('klasy/comment.php');
// require('klasy/location.php');
// require('klasy/message.php');
require('klasy/user.php');

// Ad::conn($conn);
// Admin::conn($conn);
// Comment::conn($conn);
// Location::conn($conn);
// Message::conn($conn);
User::conn($conn);
?>

<?php

require 'vendor/autoload.php';

$router = new AltoRouter();
$router->setBasePath('/kotopcja');

if (!isset($_SESSION['loggedUserLogin'])) {
// 	echo ("<br><br><br>nie jesteś zalogowany - content dla niezalogowanych<br>");
	$router->map('GET|POST', '/', './formularze/user_logowanie.php');
} elseif (isset($_SESSION['loggedUserLogin'])) {
// 	echo ("<br><br><br>jesteś zalogowany - content dla zalogowanych<br>");
	$router->map('GET|POST', '/', 'main.php');
} elseif (isset($_SESSION['admin'])) {
// 	echo ("<br><br><br>jesteś zalogowany jako ADMIN - content dla admina<br>");
	$router->map('GET|POST', '/', 'admin.php');
}

//$router->map('GET|POST', '/', 'main.php');
$router->map('GET|POST', '/logowanie', './formularze/user_logowanie.php');
$router->map('GET|POST', '/rejestracja', './formularze/user_rejestracja.php');
// //$router->map('GET|POST', '/connect', './funkcje/connect.php');
// // $router->map('GET|POST', '/header', '.widoki/header.php');
// // $router->map('GET|POST', '/footer', '.widoki/footer.php');
$router->map('GET|POST', '/zarejestrowany', './widoki/user_zarejestrowany.php');
$router->map('GET|POST', '/zalogowany', './widoki/user_zalogowany.php');
$router->map('GET|POST', '/wyloguj', './funkcje/user_wyloguj.php');
$router->map('GET|POST', '/profil', './widoki/user_profil.php');
$router->map('GET|POST', '/wiadomosci', './widoki/user_wiadomosci.php');

$match = $router->match();

require('header.php');

// echo ("<strong>Dane routera: </strong><pre>");
// var_dump($match);
// echo ("</pre>");
?>
<div id="wrapper">
<!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        </div>
<?php 
if ($match) {
	require $match['target'];
};

require('footer.php');
?>
<body>
</body>