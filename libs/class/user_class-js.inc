<?
// used for printing out common user info & form elements
class User_Class {

	var $db;
	var $uid;
	var $key;
	var $name;
	var $pass;

	function User_Class($db) {
		$this->db = $db;
	}

	function forgot_password($login,$npage) {
		global $lol_url;
		$query = "SELECT uid FROM accounts WHERE login = '$login'";
		$result = $this->db->query($query);
		$data = $this->db->fetch_array($result);    
		if (!$data) return "invalid";
		$uid=$data['uid'];
		srand((double)time()*1000000); 
		$randID = rand(0,999999); 
		$password = "lol" . $randID;
		$query = "UPDATE accounts SET pass = '$password' WHERE uid = $uid ";
		$this->db->query($query);
		$to = $login;
		$from =  "Landscaponline.com";
		$subject = "Account Info";

/*******************************************

To change the text within a message, please adhere to the following guidelines:

- ALL text must be between a $mess1 .="  and a "; tag.

- If you use quotation marks in the body of message, they must be written as \"

- To put new lines use \r\n

********************************************/

		
		$mess1.= 
				"Thank you for using LandscapeOnLine.com! You have been assigned a temporary password. " .
				"1. Please click the link below to create a new password. If the link is not clickable," .
				" you can copy and paste the address into your Web browser's Address window.\n\t" . $lol_url . 
				"member/info.php?action=passchg&login=" . $login . "&tmp=".$password."&npage=". $npage; 
		$mess2.= "\n\n2. Follow the instructions on the screen to choose a new password.  " .
				"After you have chosen a password you will automatically enter LandscapeOnLine.com where " .
				" you last left off. If you have any questions, comments or concerns, please call " .
				"LandscapeOnLine.com at 714-979-5276. or reply to this email";
		$mess3.= "\n\nThanks again for choosing LandscapeOnLine.com!";
		$body = $mess1."\n".$mess2."\n".$mess3."\n";
		$this->send_mail($to, $subject, $body,"From: ".$from."\r\nReply-To: ".$from);
		return "valid";
	}
	function password_change($login,$password) {
		$query = "UPDATE accounts SET pass = '$password' WHERE login = '$login' ";
		$this->db->query($query);
		if ($this->db->error()) return 0;
		else return $this->db->error();
	}
	
	function login_admin($name,$password) {
	    $query ="SELECT * FROM private_login WHERE name = '$name' AND pass = '$password' ";
    	$result = $this->db->query($query);
		$data = $this->db->fetch_array($result);
		return $data['uid'];
	}
	
	function login_association($password) {
		//login_association($login,$password) 
		//$query = "SELECT uid,pass,type FROM accounts WHERE login = '$login'"; 
		//if ($password == $data['pass']) {
		$query = "SELECT id FROM associations WHERE pass = '$password' ";
		$result = $this->db->query($query);
		$data = $this->db->fetch_array($result);
		return $data['id'];
	}
	
	function login_vendor($password)	{
	    $query ="SELECT * FROM new_vendor WHERE  pass = '$password' ";
	   	$result = $this->db->query($query);
		$data = $this->db->fetch_array($result);
		return $data['id'];
	}
	
	function login_subscriber($password) {
		$query ="SELECT * FROM subscribe WHERE  pass = '$password' ";
		$result = $this->db->query($query);
		$row = $this->db->fetch_array($result);
		return $row['id'];
	}
}
