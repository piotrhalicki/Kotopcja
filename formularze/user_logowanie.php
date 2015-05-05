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
<br>
<br>

<?php

$newAd = new Ad;
$advs = $newAd->showAllAds();

foreach($advs as $key => $value) {
	echo 	("
		<div style='text-align: center'>
		<h4 style='text-align: center'>&lt; <strong>Ogłoszenie numer ".$value['ad_id']."</strong> &gt;</h4>
		<fieldset><br>
			<strong>Tytuł ogłoszenia: </strong>" .$value['ad_title']. "<br>
			<strong>Autor ogłoszenia: </strong>" .$value['user_login']. "<br>
			<strong>Treść ogłoszenia: </strong>" .$value['ad_contents']. "<br>
			<strong>Zdjęcie: </strong><br>
			<a href='#' class='thumbnail'><img src='/".$value['ad_picture_path']."'></a>
			<strong>Data dodania: </strong>" .$value['ad_date']. "<br>
			<strong>Ulica: </strong>" .$value['user_street']. "<br>
			<strong>Kot pocztowy: </strong>" .$value['user_postal']. "<br>
			<strong>Miasto: </strong>" .$value['location_city']. "<br>
			<strong>Województwo: </strong>" .$value['location_province']. "<br>
			<strong>Numer telefonu: </strong>" .$value['user_telephone_number']. "<br><br>
		</fieldset>
		</div>
		<br>
			");
}

?>