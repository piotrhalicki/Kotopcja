<?php

$newUser = new User;
$newUser->showUser($_SESSION['userId']);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if(isset($_POST['addAd'])) {

// 		echo "<br><br><br><pre>";
// 		echo var_dump($_FILES);
// 		echo "</pre>";
// 		echo "<pre>";
// 		echo var_dump($_POST);
// 		echo "</pre>";

 		$adTitle = $_POST['adTitle'];
 		$adFrom = $_SESSION['userId'];
		$adContents = $_POST['adContents'];
				
		if ($_FILES['ladowaniePliku']['type'] !== 'image/jpeg') {
			die("BŁĄD!!!");
		}

		$nazwaPliku = basename($_FILES['ladowaniePliku']['name']);

		$uploaddir = $_SESSION['loggedUserLogin'];

		if(!file_exists($uploaddir)){
			mkdir($uploaddir);
		}

		$uploadfile = $uploaddir.'/'.$nazwaPliku;

		if(!move_uploaded_file($_FILES['ladowaniePliku']['tmp_name'], $uploadfile)) {
			echo "upload pliku - error :(";
		} else {
			echo "upload pliku - ok :)";
		}
		$adPicturePath = $uploaddir.'/'.$nazwaPliku;
		$adLocationId = $_POST['miasto'];
		$adDate = date('Y-m-d H:i:s');
		
		$newAd = new Ad;
		$newAd->createAd($adTitle, $adFrom, $adContents, $adPicturePath, $adLocationId, $adDate);

	}
	

}
$newAd = new Ad;
$advs = $newAd->showAdByUserId($_SESSION['userId']);
// echo "<pre>";
// echo var_dump($advs);
// echo "</pre>";



// array_walk_recursive($advs, function ($item, $key) {
// 	echo ("<pre>$key => $item</pre>");
// });

?>
<div style="text-align: center" style="margin-top: 100px;">
<h4 style="margin-top: 100px;">&lt;<strong>Twój profil</strong>&gt;</h4>

<form method='POST' action='#'>
<fieldset><br>
	<strong>Imię: </strong> <?php echo $newUser->get_userFirstName(); ?> <br>
	<strong>Nazwisko: </strong> <?php echo $newUser->get_userLastName(); ?> <br>
	<strong>Login: </strong> <?php echo $newUser->get_userLogin(); ?> <br>
	<strong>Email: </strong> <?php echo $newUser->get_userEmail(); ?> <br>
	<strong>Miasto: </strong> <?php echo $newUser->get_userCity(); ?> <br>
	<strong>Ulica: </strong> <?php echo $newUser->get_userStreet(); ?> <br>
	<strong>Kot pocztowy: </strong> <?php echo $newUser->get_userPostal(); ?> <br>
	<strong>Numer telefonu: </strong> <?php echo $newUser->get_userTelephoneNumber(); ?> <br><br>

<button type='submit'>Modyfikuj konto</button><br>
<button type='submit'>Usuń konto</button><br><br>
</fieldset>
</form>
</div>
<br>

<!-- DODAWANIE OGŁOSZENIA -->

	<h4 style="text-align: center">&lt;<strong>Dodaj ogłoszenie</strong>&gt;</h4>
<div style="text-align: center">
<form method='POST' action='#' enctype="multipart/form-data">
<fieldset><br>
	<label>Tytuł:</label><br>
	<input type='text' name='adTitle' placeholder='tytuł ogłoszenia'><br>

	<label>Treść:</label><br>
	<textarea name='adContents' cols="50" rows="10" placeholder="treść ogłoszenia"></textarea><br>
	<br>
	
	<label>Lokalizacja:</label><br>
	
	<div class="">
		<label class='wojewodztwo'>Województwo:</label>
		<select id="selectProvince" name='wojewodztwo'>
		<option value='0'>--wybierz województwo--</option>
		<?php 
			$newLocation = new Location(); 
			$newLocation->showLocationAllProvinces();
		?>
		</select>
	</div>
	
	<div class="selectCity" style="display: none;">
		<label class='miasto'>Miasto:</label>
		<select id="selectCity" name='miasto'>
		<option value='0'>--wybierz miasto--</option>
		</select>
	</div>
	<br>
	
		
	<label style="text-align: center">Załaduj zdjęcie:</label><br>
		<div style="text-align:center;">
		<input type="file" name="ladowaniePliku" id="ladowaniePliku">
		</div>
		<br>
	

	<button type='submit' name='addAd'>Dodaj ogłoszenie</button><br><br>
	
</fieldset>
</form>
</div>
<br>
 			
<!--  			<strong>Ścieżka do zdjęcia: </strong><br><img src='/".$value['ad_picture_path']."'><br> -->

<?php
foreach($advs as $key => $value) {
	echo 	("
		<div style='text-align: center'>
		<h4 style='text-align: center'>&lt;<strong>Twoje ogłoszenia</strong>&gt;</h4>
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
			<strong>Numer telefonu: </strong>" .$value['user_telephone_number']. "
			<button type='submit'>Usuń ogłoszenie</button><br>
			<br><br>
			
		</fieldset>
		</div>
		<br>
			");
}
?>