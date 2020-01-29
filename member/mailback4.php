<?
include "lol_common.inc";
include $include_path . "lol_header2.inc";
?>

<p>&nbsp;</p>
<?php
if (isset($_POST['submit'])) {
mysql_connect('localhost', 'landscap_lol', 'meow2meow') or die("Cannot open connection: " . mysql_error());
mysql_select_db("landscap_lollive") or die("Database not found");
$email=$_POST['email'];
$query = mysql_query("SELECT pass FROM associations WHERE email='$email'");
$count=mysql_num_rows($query);
	if($count==1){
		$rows=mysql_fetch_array($query);
		$your_password=$rows['pass'];
	}

if (mysql_num_rows($query) == 0) {
		echo '<div style="width:750px; font-family:Arial, Helvetica, sans-serif; font-size:16px">';
		echo '<center><img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="280" align="top" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG-2.jpg" width="295" align="top" /></center>
    	<center><img src="https://landscapearchitect.com/lol-logos/lolw-logo.jpg" width="300" /></center><br />';
		echo ' <br />';
		echo '<font size="4"><strong>Your email address was not found.</strong></font><br /><br />';
		echo '<a href="https://landscapearchitect.com/industry/associat_list.php"><font size="4">Click Here to Enter a New Profile</font></a><br /><br />';
		echo '<a href="https://landscapearchitect.com/member/login4.php?t=as"><font size="4">Click to Search for a Password using a Different Email Address</font></a><br /><br />';
		echo '<a href="http://www.landscapeonline.com"><font size="4">Click Here to Return to LandscapeOnline.com</font></a><br /><br />';
		echo '</div>';
		exit;
		}
	$name = $_POST['firstname'] . ' ' . $_POST['lastname'];
	$email = $_POST['email'];
	
	$to = $email;
	$subject = 'Lost Password from LandscapeOnline.com';
	$msg = "$name \n" .
	"Thanks for your request. \n" .
	"Here is your password for Landscapeonline.com: \n" .
	"Password: $your_password \n".
	"   \n" .
	"When you login, please take a moment to review and update any information \n" .
	"that has changed on your Personal Member Profile. \n" .
	"   \n" .
	"We encourage you to browse the Product Information Request page and request \n" .
	"any product information you need from our vendors. In order to provide you \n" .
	"with timely service, all product information requests are processed weekly. \n" .
	"   \n" .
	"Thank you for visiting LandscapeOnline.com. \n" .
	"   \n" .
	"The largest landscape oriented database on the web!" ;
	
		
	mail ($to, $subject, $msg, 'From:' . $email);
	echo '<center><img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="280" align="top" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG-2.jpg" width="295" align="top" /></center>
    <center><img src="https://landscapearchitect.com/lol-logos/lolw-logo.jpg" width="300" /></center><br />';
	echo ' <br />';
	echo '<font size="4"><strong>Your password for your account will be sent to your email address on record.</strong></font><br /><br />';
	echo '&nbsp;' . '<br />';
	echo '<a href="http://www.landscapeonline.com"><font size="4">Click here to return to LandscapeOnline.com</font></a>';
	}

?>

<? include $include_path . "lol_footer2.inc"; ?>
