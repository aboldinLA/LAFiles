<?php
$to      = 'jshort@landscapeonline.com';
$subject = 'Delete Product Release';
	$headers = "From: LandscapeOnline.com <jshort@landscapeonline.com>\r\n";
	$headers .= "Reply-To: LandscapeOnline.com <jshort@landscapeonline.com>\r\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$message = '
<html>
<head>
  <title>A product is being marked for deletion!</title>
</head>
<body>
  <p>Hi There</p>
</body>
</html>';

mail($to, $subject, $message, $headers);
?>
