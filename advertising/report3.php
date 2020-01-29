<?php

		//in your php ignore any submissions that inlcude this field
		if(!empty($_POST['website'])) die();


	$name2 = $_POST['fullname'];
	$phonenum = $_POST['phone'];
	$comp_name = $_POST['coname'];
	$email2 = $_POST['email'];
	$request1 = $_POST['request1'];
	$request2 = $_POST['request2'];
	$request4 = $_POST['request4'];
	$request6 = $_POST['request6'];
	$request7 = $_POST['request7'];
	$request8 = $_POST['request8'];
	$request8 = $_POST['request9'];
	$request8 = $_POST['request10'];
	$request8 = $_POST['request11'];
	$contact_preferences1 = $_POST['contact_preferences1'];
	$note = $_POST['note'];
	
	$to = 'jshort@landscapeonline.com';
	$subject = 'Media Kit Request';
	$msg = "$name2 needs a Media Kit \n" .
	"Company Name: $comp_name \n".
	"Name: $name2 \n".
	"Phone: $phonenum \n".
	"E-Mail: $email2 \n".
	"Request Material: $request1 \n".
	"Request Material: $request2 \n".
	"Request Material: $request4 \n".
	"Request Material: $request6 \n".
	"Request Material: $request7 \n".
	"Request Material: $request8 \n".
	"Request Material: $request9 \n".
	"Request Material: $request10 \n".
	"Request Material: $request11 \n".
	"Contact Preferences: $contact_preferences1 \n".
	"Comments: $note";



	mail ($to, $subject, $msg, 'From:' . $email2);
	
	$to = 'all.sales@landscapeonline.com';
	$subject = 'Media Kit Request';
	$msg = "$name2 needs a Media Kit \n" .
	"Company Name: $comp_name \n".
	"Name: $name2 \n".
	"Phone: $phonenum \n".
	"E-Mail: $email2 \n".
	"Request Material: $request1 \n".
	"Request Material: $request2 \n".
	"Request Material: $request4 \n".
	"Request Material: $request6 \n".
	"Request Material: $request7 \n".
	"Request Material: $request8 \n".
	"Request Material: $request9 \n".
	"Request Material: $request10 \n".
	"Request Material: $request11 \n".
	"Contact Preferences: $contact_preferences1 \n".
	"Comments: $note";



	mail ($to, $subject, $msg, 'From:' . $email2);	
	
	
	
	
	
	echo '<center><img src="https://landscapearchitect.com/lol-logos/LCI-Logo-2013.jpg" width="700"><br />';
	echo ' <br />';
	
	
	echo '<font size="5" ><b>Thank you for your Advertising Request Submission.</b></font><br />';
	echo '&nbsp;' . '<br />';
	echo '<font size="3" >An advertising representative 
will respond to your request within one business day.</font><br />';
	echo '&nbsp;' . '<br />';
	echo '<a href="http://www.landscapeonline.com">Click here to return to LandscapeOnline.com</a>';
?> 