<?php

class User {
	
	static public $conn;
	public $userId;
	public $userFirstName;
	public $userLastName;
	public $userLogin;
	public $userEmail;
	public $userPassword;
	public $userCity;
	public $userStreet;
	public $userPostal;
	public $userTelephoneNumber;

	public static function conn($conn)
	{
		User::$conn = $conn;
	}

	public function __construct()
	{
		$this->userFirstName = "";
		$this->userLastName = "";
		$this->userEmail = "";
		$this->userPassword = "";
		$this->userCity = "";
		$this->userStreet = "";
		$this->userPostal = "";
		$this->userTelephoneNumber = "";
	}
	
}