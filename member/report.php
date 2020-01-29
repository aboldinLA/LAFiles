<?php

	$name = $_POST['firstname'] . ' ' . $_POST['lastname'];
	$email = $_POST['email'];
	
	$to = 'subscription_admin@landscapeonline.com';
	$subject = 'Lost Password';
	$msg = "$name needs a lost password \n" .
	"Email Address: $email";
	
	mail ($to, $subject, $msg, 'From:' . $email);
	
	echo 'The password for your account will be sent to your email address on record.<br />';
	echo '&nbsp;' . '<br />';
	echo '<a href="http://www.landscapeonline.com">Click here to return to LandscapeOnline.com</a>';
?> 