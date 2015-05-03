<?php

class Admin {
	
	static public $conn;
	private $adminId;
	private $adminLogin = "admin";
	private $adminPass;
	
	public static function conn($conn)
	{
		Admin::$conn = $conn;
	}
	
	private function __construct()
	{
		$this->adminLogin = $adminLogin;
		$this->adminPass = "";
	}
	
	private function logAdmin()
	{
// 		$sqlQuery = "";
		
// 		$result = Admin::$conn->query($sqlQuery);
	}
	
	private function showAllAds()
	{
// 		$sqlQuery = "";
		
// 		$result = Admin::$conn->query($sqlQuery);
	}
	
	private function editAd()
	{
// 		$sqlQuery = "";
		
// 		$result = Admin::$conn->query($sqlQuery);
	}
	
	private function deleteAd()
	{
// 		$sqlQuery = "";
		
// 		$result = Admin::$conn->query($sqlQuery);
	}
	
	private function showComment()
	{
// 		$sqlQuery = "";
		
// 		$result = Admin::$conn->query($sqlQuery);
	}
	
	private function editComment()
	{
// 		$sqlQuery = "";
		
// 		$result = Admin::$conn->query($sqlQuery);
	}
	
	private function deleteComment()
	{
// 		$sqlQuery = "";
		
// 		$result = Admin::$conn->query($sqlQuery);
	}
	
	private function showAllUsers()
	{
// 		$sqlQuery = "";
		
// 		$result = Admin::$conn->query($sqlQuery);
	}
	
	private function editUser()
	{
// 		$sqlQuery = "";
		
// 		$result = Admin::$conn->query($sqlQuery);	
	}
	
	private function deleteUser()
	{
// 		$sqlQuery = "";
		
// 		$result = Admin::$conn->query($sqlQuery);
	}
}
?>