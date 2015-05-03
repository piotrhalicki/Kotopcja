<?php 

class Message {
	
	static public $conn;
	public $messageId; 
	public $messageFrom;
	public $messageTo;
	public $messageContents;
	public $messageDate;
	
	public static function conn($conn)
	{
		Message::$conn = $conn;
	}
	
	public function __construct()
	{
		$this->messageFrom = "";
		$this->messageTo = "";
		$this->messageContents = "";
		$this->messageDate = "";
	}
	
	public function get_messageId()
	{
		return $this->messageId;
	}
	
	public function set_messageFrom($messageFrom)
	{
		$this->messageFrom = $messageFrom;
	}
	
	public function get_messageFrom()
	{
		return $this->messageFrom;
	}
	
	public function set_messageTo($messageTo)
	{
		$this->messageTo = $messageTo;
	}
	
	public function get_messageTo()
	{
		return $this->messageTo;
	}
	
	public function set_messageContents($messageContents)
	{
		$this->messageContents = $messageContents;
	}
	
	public function get_messageContents()
	{
		return $this->messageContents;
	}
	
	public function set_messageDate($messageDate)
	{
		$this->messageData = $messageDate;
	}
	
	public function get_messageDate()
	{
		return $this->messageDate;
	}
	
	
	public function createMessage()
	{
	
	}
	
	public function showMessage()
	{
	
	}
}

?>