<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (($_POST['userPassword']) != ($_POST['userPassword2'])) {
		echo ("Podane przez Ciebie hasła się różnią<br><a href='index.php'>Wróć na stronę główną</a>");
	} else {
		$newUser = new User;
		$newUser->createUser($_POST['userFirstName'], $_POST['userLastName'], $_POST['userLogin'], $_POST['userEmail'], $_POST['userCity'], $_POST['userStreet'], $_POST['userPostal'], $_POST['userTelephoneNumber'], $_POST['userPassword']);
		$_SESSION['userId'] = $newUser->get_userId();
		$_SESSION['userLogin'] = $newUser->get_userLogin();
		header('location: /kotopcja/zarejestrowany');
	}
}

?>

<div style="text-align: center">
<form method='POST' action='#'>
<fieldset>
<legend><strong>Rejestracja</strong></legend><br>
<label>Imię:<br>
<input type='text' name='userFirstName' placeholder='imię'><br>
</label>
<label>Nazwisko:<br>
<input type='text' name='userLastName' placeholder='nazwisko'><br>
</label>
<label>Login:<br>
<input type='text' name='userLogin' placeholder='login'><br>
</label>
<label>E-mail:<br>
<input type='text' name='userEmail' placeholder='email'><br>
</label>
<label>Hasło:<br>
<input type='password' name='userPassword' placeholder='hasło'><br>
</label>
<label>Powtórz hasło:<br>
<input type='password' name='userPassword2' placeholder='powtórz hasło'><br>
</label>
<label>Miasto:<br>
<input type='text' name='userCity' placeholder='miasto'><br>
</label>
<label>Ulica:<br>
<input type='text' name='userStreet' placeholder='ulica'><br>
</label>
<label>Kot pocztowy:<br>
<input type='text' name='userPostal' placeholder='kot pocztowy'><br>
</label>
<label>Numer telefonu:<br>
<input type='text' name='userTelephoneNumber' placeholder='numer telefonu'><br>
</label><br>
<button type='submit'>Zarejestruj się</button><br><br>
</fieldset>
</form>
</div>