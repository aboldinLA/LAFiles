<?php

	$name2 = $_POST['name'];
	$company2 = $_POST['company'];
	$email2 = $_POST['email'];
	$comment2 = $_POST['message'];
	
	$to = 'bad-tree@landscapeonline.com';
	$subject = 'Hey BT';
	$msg = "$name2 sent a comment \n" .
	"Company Name: $comp_name \n".
	"Name: $name2 \n".
	"E-Mail: $email2 \n".
	"Comment: $comment2 \n";

	mail ($to, $subject, $msg, 'From:' . $email2);


header('Location: https://landscapearchitect.com/bad-tree/index.php');
exit;	
	
?> 