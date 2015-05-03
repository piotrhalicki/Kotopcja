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
		
	}
	
	private function editAd()
	{
	
	}
	
	private function deleteAd()
	{
	
	}
	
	private function editComment()
	{
	
	}
	
	private function deleteComment()
	{
	
	}
	
	private function editUser()
	{
	
	}
	
	private function deleteUser()
	{
	
	}
}
?>