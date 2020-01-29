<?


	$assoc = $_POST['assocname'];
	$name = $_POST['firstname'] . ' ' . $_POST['lastname'];
	$email = $_POST['email'];
	
	$to = 'mohalloran@landscapeonline.com';
	$subject = 'Lost Association Password';
	$msg = "$name needs a lost password \n" .
	"for Association $assoc \n" .
	"Email Address: $email";
	
	mail ($to, $subject, $msg, 'From:' . $email);
	





include "lol_common.inc";
include $include_path . "lol_header2.inc";
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Association Password Request</title>
<meta http-equiv="Content-Type" content="text/html;CHARSET=utf-8">
<meta name='keywords' content='landscape, landscaping, landscape architecture, landscape contractor, landscape magazine, landscape irrigation, landscaping irrigation, landscape erosion'>
<meta name='description' content='Online resources for Landscape Architects, Designers, Contractors, Superintendents, and Maintenance Managers from the publisher of Landscape Architect and Specifier News, Landscape Contractor / Design &#149; Build &#149; Maintain.'>
</head>

<body>

<!-- Thank You Section -->
<div style="position:absolute; left:0px; top:-20px; padding:0px; width:750px; font-family:Arial, Helvetica, sans-serif font-size:16px">
	<p class="navigation-bar"><font style="font-size:16px"><strong>Thank You for Your Password Request&nbsp;&nbsp;</strong></font></p>
</div>

<div style="position:absolute; left:-40px; top:50px; padding:0px; width:600px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">
	The Password for your Accociation will be sent to the email address on record.</div>



<!-- Do not add any coding below this line -->
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-2956957-1";
urchinTracker();
</script>
</body>
</html>

<? include $include_path . "lol_footer2.inc"; ?>
