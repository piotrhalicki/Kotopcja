<?php

class User {
	
	static public $conn;
	public $userId;
	public $userFirstName;
	public $userLastName;
	public $userLogin;
	public $userEmail;
	private $userPassword;
	public $userCity;
	public $userStreet;
	public $userPostal;
	public $userTelephoneNumber;
	public $userAds;

	public static function conn($conn)
	{
		User::$conn = $conn;
	}

	public function __construct()
	{
		$this->userFirstName = "";
		$this->userLastName = "";
		$this->userLogin = "";
		$this->userEmail = "";
		$this->userPassword = "";
		$this->userCity = "";
		$this->userStreet = "";
		$this->userPostal = "";
		$this->userTelephoneNumber = "";
		$this->userAds = array();
	}

	public function get_userId()
	{
		return $this->userId;
	}
	
	public function set_userFirstName($userFirstName)
	{
		$this->userFirstName = $userFirstName;
	}
	
	public function get_userFirstName()
	{
		return $this->userFirstName;	
	}
	
	public function set_userLastName($userLastName)
	{
		$this->userLastName = $userLastName;
	}
	
	public function get_userLastName()
	{
		return $this->userLastName;
	}
	
	public function set_userLogin($userLogin)
	{
		$this->userLogin = $userLogin;
	}
	
	public function get_userLogin()
	{
		return $this->userLogin;
	}
	
	public function set_userEmail($userEmail)
	{
		$this->userEmail = $userEmail;
	}
	
	public function get_userEmail()
	{
		return $this->userEmail;
	}
	
	public function set_userCity($userCity)
	{
		$this->userCity = $userCity;
	}
	
	public function get_userCity()
	{
		return $this->userCity;
	}
	
	public function set_userStreet($userStreet)
	{
		$this->userStreet = $userStreet;
	}
	
	public function get_userStreet()
	{
		return $this->userStreet;
	}
	
	public function set_userPostal($userPostal)
	{
		$this->userPostal = $userPostal;		
	}
	
	public function get_userPostal()
	{
		return $this->userPostal;
	}
	
	public function set_userTelephoneNumber($userTelephoneNumber)
	{
		$this->userTelephoneNumber = $userTelephoneNumber;
	}
	
	public function get_userTelephoneNumber()
	{
		return $this->userTelephoneNumber;
	}
	
	public function createUser($userFirstName, $userLastName, $userLogin, $userEmail, $userCity, $userStreet, $userPostal, $userTelephoneNumber, $userPassword)
	{
		$this->userFirstName = $userFirstName;
		$this->userLastName = $userLastName;
		$this->userLogin = $userLogin;
		$this->userEmail = $userEmail;
		$this->userCity = $userCity;
		$this->userStreet = $userStreet;
		$this->userPostal = $userPostal;
		$this->userTelephoneNumber = $userTelephoneNumber;
	
		$options = [
				'cost' => 11,
				'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
		];
		$this->userPassword = password_hash($userPassword, PASSWORD_BCRYPT, $options);
		
		$sqlQuery = "INSERT INTO Users(user_first_name, user_last_name, user_login, 
					user_email, user_password, user_city, 
					user_street, user_postal, user_telephone_number) 
					VALUES('$this->userFirstName', '$this->userLastName', '$this->userLogin', 
					'$this->userEmail', '$this->userPassword', '$this->userCity', 
					'$this->userStreet', '$this->userPostal', '$this->userTelephoneNumber')";
		
		$result = User::$conn->query($sqlQuery);
		$this->userId = User::$conn->insert_id;
	}
	
	public function logUser($userLogin, $userPassword)
	{
		$sqlQuery = "SELECT * FROM Users 
					WHERE user_login='$userLogin'";
		$result = User::$conn->query($sqlQuery);
		//var_dump($result);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$this->userId = $row['user_id'];
			$this->userLogin = $row['user_login'];
			$hashed_pass = $row['user_password'];
			if(password_verify($userPassword, $hashed_pass)){
				return true;
			}
		}
	}
	
	public function showUser($userId) 
	{
		$sqlQuery = "SELECT * FROM Users 
					WHERE user_id=$userId";
		
		$result = User::$conn->query($sqlQuery);

		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			//var_dump($row);
			$this->userFirstName = $row['user_first_name'];
			$this->userLastName = $row['user_last_name']; 
			$this->userLogin = $row['user_login'];
			$this->userEmail = $row['user_email'];
			$this->userCity = $row['user_city'];
			$this->userStreet = $row['user_street'];
			$this->userPostal = $row['user_postal'];
			$this->userTelephoneNumber = $row['user_telephone_number'];
		}
		return null;
	}

	public function deleteUser($userId)
	{
		$sqlQuery = "DELETE FROM Users 
					WHERE user_id=$userId";
		
		$result = User::$conn->query($sqlQuery);
	}
	
	public function updateUser($userId, $userFirstName, $userLastName, $userEmail, $userCity, $userStreet, $userPostal, $userTelephoneNumber)
	{
		$sqlQuery = "UPDATE Users SET 
		user_first_name='$userFirstName', 
		user_last_name='$userLastName', 
		user_email='$userEmail', 
		user_city='$userCity', 
		user_street='$userStreet', 
		user_postal='$userPostal', 
		user_telephone_number='$userTelephoneNumber' 
		WHERE user_id =$userId";
		
		$result = User::$conn->query($sqlQuery);
	}
}
