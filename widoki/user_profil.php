<?php

$newUser = new User;
$newUser->showUser($_SESSION['userId']);

?>
<h4 style="text-align: center">&lt;<strong>Twój profil</strong>&gt;</h4>
<div style="text-align: center">
<form method='POST' action='#'>
<fieldset>
	<strong>Imię: </strong> <?php echo $newUser->get_userFirstName(); ?> <br>
	<strong>Nazwisko: </strong> <?php echo $newUser->get_userLastName(); ?> <br>
	<strong>Login: </strong> <?php echo $newUser->get_userLogin(); ?> <br>
	<strong>Email: </strong> <?php echo $newUser->get_userEmail(); ?> <br>
	<strong>Miasto: </strong> <?php echo $newUser->get_userCity(); ?> <br>
	<strong>Ulica: </strong> <?php echo $newUser->get_userStreet(); ?> <br>
	<strong>Kot pocztowy: </strong> <?php echo $newUser->get_userPostal(); ?> <br>
	<strong>Numer telefonu: </strong> <?php echo $newUser->get_userTelephoneNumber(); ?> <br><br>

<button type='submit'>Modyfikuj konto</button><br>
<button type='submit'>Usuń konto</button><br>
</fieldset>
</form>
</div>
<br>

	<h4 style="text-align: center">&lt;<strong>Dodaj ogłoszenie</strong>&gt;</h4>
<div style="text-align: center">
<form method='POST' action='#'>
<fieldset><br>
	<label>Tytuł:<br>
	<input type='text' name='adTitle' placeholder='tytuł ogłoszenia'><br>
	</label>
	<label>Treść:<br>
	<textarea name='post' cols="50" rows="10" placeholder="treść ogłoszenia"></textarea><br>
	</label>
	<label>Lokalizacja:<br>
	</label>
	
	<label>Województwo: <br>
	<select name='wojewodztwo'>
	<option value='0'>--wybierz województwo--</option>
	<option value='mazowieckie'>mazowieckie</option>
	</select>
	</label><br>
	
	<label>Miasto: <br>
	<select name='miasto'>
	<option value='0'>--wybierz miasto--</option>
	<option value='Warszawa'>Warszawa</option>
	</select>
	</label>
	
	<br>
	
	<label>Załaduj zdjęcie:<br>
	(ładowanie zdjęcia - soon...)<br>
	</label>
	<button type='submit'>Dodaj ogłoszenie</button><br><br>
</fieldset>
</form>
</div>

<div style="text-align: center">
<fieldset>
<legend>&lt;<strong>Twoje ogłoszenia</strong>&gt;</legend>
</fieldset>
</div>

