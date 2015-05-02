<!DOCTYPE html>
<html lang='pl-PL'>
<head>
	<meta charset='UTF-8'>
	<meta name='kotOpcja' content='width=device-width, initial-scale=1'>	
	<title>&lt; kot&copy;pcja &gt;</title>
	<link rel='stylesheet' type='text/css' href='/bootstrap/css/bootstrap.min.css'>
	<link rel='stylesheet' type='text/css' href='/css/style.css'>
	
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/main.js"></script>
	
</head>
<header>


    <nav class="navbar navbar-inverse navbar-fixed-top">
      
      <div class="container-fluid">
      
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <a class="navbar-brand" href="#menu-toggle" id="menu-toggle"><strong>&lt; kot<big>O</big>pcja &gt;</strong></a>
        </div>
        
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            
            <li><a href="/kotopcja/">Strona główna</a></li>
			<?php
			if (!isset($_SESSION['loggedUserLogin'])) {
			echo ("
			<li><a href='/kotopcja/rejestracja'>Zarejestruj</a></li>
		    <li><a href='/kotopcja/logowanie'>Zaloguj</a></li>
		    ");
			} else {
			echo ("
			<li><a href='/kotopcja/profil'>Twój profil</a></li>
		    <li><a href='/kotopcja/wyloguj'>Wyloguj</a></li>
            ");
			}
			?>
            <li class="dropdown">
            
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
             
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
              
            </li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="./">Static top <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul>
        </div>
      
      </div>
      </div>
    </nav>


</header>
<hr>


<?php
if(!isset($_SESSION['viewCounter'])) {
	$_SESSION['viewCounter'] = 1;
} else {
	$_SESSION['viewCounter']++;
};

// if (!isset($_SESSION['loggedUserLogin'])) {
// 	echo ("
// 		<p>
// 		<dl>
// 		<dd><a href='/kotopcja/rejestracja'>Zarejestruj się</a><dd>
// 		<dd><a href='/kotopcja/logowanie'>Zaloguj się</a><dd>
// 		</p>
// 		</dl>
// 		");
// } else {
// 	echo ("
// 		<p>
// 		<dl>
// 		<dd><a href='/kotopcja/profil'>Twój profil</a></dd>
// 		<dd><a href='/kotopcja/wiadomosci'>Wiadomości</a></dd>
// 		<dd><a href='/kotopcja/wyloguj'>Wyloguj</a></dd>
// 		</dl>
// 		</p>
// 		");
// };
?>
