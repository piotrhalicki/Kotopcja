<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$newUser = new User;
	if ($newUser->logUser($_POST['userLogin'], $_POST['userPassword']) === true) {
		$_SESSION['userId'] = $newUser->get_userId();
		$_SESSION['userFirstName'] = $newUser->get_userFirstName();
		$_SESSION['loggedUserLogin'] = $newUser->get_userLogin();
		header('location: /kotopcja/zalogowany');
	} else {
		echo ("<strong>Zły login lub hasło</strong><br><br>");
	}
}
	
?>

<div style="text-align: center">
<form method='POST' action='#' style="margin-top: 100px;">
<fieldset>
<legend><b>Logowanie</b></legend><br>
<label>Podaj login:<br>
<input type='text' name='userLogin' placeholder='login'><br>
</label>
<label>Podaj hasło:<br>
<input type='password' name='userPassword' placeholder='hasło'><br>
</label><br>
<button type='submit'>Zaloguj się</button><br><br>
<em>Nie masz jeszcze konta?</em>
<a href='/kotopcja/rejestracja'>Załóż konto</a>
</fieldset>
</form>
</div>