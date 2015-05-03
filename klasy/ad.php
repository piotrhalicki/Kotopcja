<?php

class Ad {
	
	static public $conn;
	public $adId;
	public $adTitle;
	public $adFrom;
	public $adContents;
	public $adPicturePath;
	public $adLocation;
	public $adDate;
	
	public static function conn($conn)
	{
		Ad::$conn = $conn;
	}
	
	public function __construct()
	{
		$this->adTitle = "";
		$this->adFrom = "";
		$this->adContents = "";
		$this->adDate = "";
	}
	
	public function get_adId()
	{
		return $this->adId;
	}
	
	public function set_adTitle($adTitle)
	{
		$this->adTitle = $adTitle;
	}
	
	public function get_adTitle()
	{
		return $this->adTitle;
	}
	
	public function set_adFrom($adFrom)
	{
		$this->adFrom = $adFrom;		
	}
	
	public function get_adFrom()
	{
		return $this->adFrom;
	}
	
	public function set_adContents($adContents)
	{
		$this->adContents = $adContents;
	}
	
	public function get_adContents()
	{
		return $this->adContents;
	}
	
	public function set_adPicturePath($adPicturePath)
	{
		$this->adPicturePath = $adPicturePath;
	}
	
	public function get_adPicturePath()
	{
		return $this->adPicturePath;
	}
	
	public function set_adLocation($adLocation)
	{
		$this->adLocation = $adLocation;
	}
	
	public function get_adLocation()
	{
		return $this->adLocation;
	}
		
	public function set_adDate($adDate)
	{
		$this->adDate = $adDate;
	}
	
	public function get_adDate()
	{
		return $this->adDate;
	}
	
	public function createAd($adTitle, $adFrom, $adContents, $adDate)
	{
		$this->adTitle = $adTitle;
		$this->adFrom = $adFrom;
		$this->adContents = $adContents;
		$this->adDate = $adDate;
		
		$sqlQuery = "INSERT INTO Ads('ad_title', 'ad_from', 'ad_contents', 'ad_date') 
					VALUES('$this->adTitle', '$this->adFrom', '$this->adContents', '$this->adDate')";
		
		$result = Ad::$conn->query($sqlQuery);
	}
}

?>