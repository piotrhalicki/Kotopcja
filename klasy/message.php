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
	
	
	public function createMessage($messageFrom, $messageTo, $messageContents, $messageDate)
	{
		$this->messageFrom = $messageFrom; 
		$this->messageTo = $messageTo;
		$this->messageContents = $messageContents;
		$this->messageDate = $messageDate;
		
		$sqlQuery = "INSERT INTO Messages(message_from, message_to, 
					message_contents, message_date) 
					VALUES('$this->messageFrom', '$this->messageTo', 
					'$this->$messageContents', '$this->$messageDate')";
	
		$result = Message::$conn->query($sqlQuery);
	}
	
	public function showMessage()
	{
 		$sqlQuery = "SELECT * FROM Messages 
 					JOIN Users U1 
 					ON Messages.message_from=U1.user_id 
 					JOIN Users U2 
 					ON Messages.message_to=U2.user_id";

		$result = Message::$conn->query($sqlQuery);
	}
}

?>