<?php

class Location {
	
	static public $conn;
	public $locationId;
	public $locationProvince;
	Public $locationCity;
	
	public static function conn($conn)
	{
		Location::$conn = $conn;
	}
	
	public function __construct()
	{
		$this->locationProvince = "";
		$this->locationCity = "";
	}
	
	public function get_locationId()
	{
		return $this->Id;
	}
	
	public function set_locationProvince($locationProvince)
	{
		$this->locationProvince = $locationProvince;
	}
	
	public function get_locationProvince()
	{
		return $this->locationProvince;
	}
	
	public function set_locationCity($locationCity)
	{
		$this->locationCity = $locationCity;
	}
	
	public function get_locationCity()
	{
		return $this->locationCity;
	}
	
	public function showLocationCityByProvince($locationProvince) // miasta według województwa
	{
		$sqlQuery = "SELECT location_id, location_city 
					FROM Locations 
					WHERE location_province='$locationProvince'";
		
		$result = Location::$conn->query($sqlQuery);
		
		if ($result->num_rows > 0){
			while ($row = $result->fetch_assoc()){
				echo ("<option value=".$row['location_id'].">".$row['location_city']."</option>");
			}
		}
	}
	
	public function showLocationProvinceByCity($locationCity) // województwo według miasta
	{
		$sqlQuery = "SELECT location_province 
					FROM Locations 
					WHERE location_city='$locationCity'";
		
		$result = Location::$conn->query($sqlQuery);
		
		if ($result->num_rows > 0){
			$row = $result->fetch_assoc();
			$this->locationId = $row['location_id'];
			$this->locationProvince = $row['location_province'];
			$this->locationCity = $row['location_city'];
		}
	}
	
	public function showLocationAllProvinces()	// wszystkie województwa, bez duplikatów
	{
		$sqlQuery = "SELECT DISTINCT location_province 
					FROM Locations";
		
		$result = Location::$conn->query($sqlQuery);
		
		if ($result->num_rows > 0){
			while ($row = $result->fetch_assoc()){
				echo ("<option class='woj_select' value=".$row['location_province'].">".$row['location_province']."</option><br>");
			}
		}
	}
	
	public function showLocationAllCities() // wszystkie miasta
	{
		$sqlQuery = "SELECT location_city 
					FROM Locations";
		
		$result = Location::$conn->query($sqlQuery);
		
		if ($result->num_rows > 0){
			$row = $result->fetch_assoc();
			$this->locationId = $row['location_id'];
			$this->locationProvince = $row['location_province'];
			$this->locationCity = $row['location_city'];
		}
	}
	
// 	public function get_locationIdByCity($locationCity)
// 	{
// 		return $this->Id;
// 	}
	
}

?>