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
	
	public function get_()
	{
		return $this->locationCity;
	}
	
	public function showLocationCityByProvince($locationProvince)
	{
		
	}
	
	public function showLocationProvinceByCity($locationCity)
	{
		
	}
	
	public function showLocationAllProvinces()
	{
		
	}
	
	public function showLocationAllCities()
	{
		
	}
	
}

?>