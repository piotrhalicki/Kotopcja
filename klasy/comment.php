<?php

class Comment {
	
	static public $conn;
	public $commentId;
	public $commentFrom;
	public $commentAdId;
	public $commentContents;
	public $commentDate;
	
	public static function conn($conn)
	{
		Comment::$conn = $conn;
	}
	
	public function __construct()
	{
		$this->commentFrom = "";
		$this->commentAdId = "";
		$this->commentContents = "";
		$this->commentDate = "";
	}
	
	public function get_commentId()
	{
		return $this->commentId;
	}
	
	public function set_commentFrom($commentFrom)
	{
		$this->commentFrom = $commentFrom;
	}
	
	public function get_commentFrom()
	{
		return $this->commentFrom;
	}
	
	public function set_commentAdId($commentAdId)
	{
		$this->commentAdId = $commentAdId;
	}
	
	public function get_commentAdId()
	{
		return $this->commentAdId;
	}
	
	public function set_commentContents($commentContents)
	{
		$this->commentContents = $commentContents;
	}
	
	public function get_commentContents()
	{
		return $this->commentContents;
	}
	
	public function set_commentDate($commentDate)
	{
		$this->commentDate = $commentDate;
	}
	
	public function get_commentDate()
	{
		return $this->commentDate;
	}
	
	public function createComment()
	{
		
	}
	
	public function showComment()
	{
		
	}
}

?>