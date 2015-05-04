<?php
include '../connect.php';
require '../klasy/location.php';
Location::conn($conn);

$newLocation = new Location();
echo $newLocation->showLocationCityByProvince($_GET['woj']);

?>