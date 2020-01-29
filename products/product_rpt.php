<?

// from seminarpost start

	$name = $_POST['name'] ;
	$email = $_POST['email'];
	$comment = $_POST['comment'];
	
	
	$to = 'mohalloran@landscapeonline.com';
	$subject = 'Product Search Comments';
	$msg = "$name has provided the following comments: \n" .
	"Comments: $comment \n" .
	
	"Name: $name \n" .
	"Email: $email \n";
	
mail ($to, $subject, $msg, 'From:' . $email);

?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Comments Mailed</title>
</head>

<body>
<div align="center" style="width:500px; vertical-align:top">
<h2 style="font-family:Arial, Helvetica, sans-serif"><span style="color:#a67d3b">Thank You Again!</span></h2><br>
<span style="font-size:18px; color:#000">We value every comment and appreciate your time and effort.<br><br>
Please feel free to contact LandscapeOnline directly<br>
at 714-979-5276 (ext. 113)<br>
or email <a href="mailto:mohalloran@landscapeonline.com">mohalloran@landscapeonline.com</a>
</span>


</div>

</body>
</html>