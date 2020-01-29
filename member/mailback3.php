<?php
if (isset($_POST['submit'])) {
mysql_connect('localhost', 'landscap_lol', 'meow2meow') or die("Cannot open connection: " . mysql_error());
mysql_select_db("landscap_lollive") or die("Database not found");
$email=$_POST['email2'];
$query = mysql_query("SELECT pass FROM new_vendor WHERE email='$email'");
$count=mysql_num_rows($query);
	if($count==1){
		$rows=mysql_fetch_array($query);
		$your_password=$rows['pass'];
	}

if (mysql_num_rows($query) == 0) {
		echo '<img src="https://landscapearchitect.com/lol-logos/lol-logo.png"><br />';
		echo ' <br />';
		echo '<font size="4"><strong>Your email address was not found.</strong></font><br /><br />';
		echo '<a href="https://landscapearchitect.com/vendor/signup/index2.php"><font size="4">Click Here to Begin a New Vendor Profile</font></a><br /><br />';
		echo '<a href="https://landscapearchitect.com/member/login2.php?t=v"><font size="4">Click to Search for a Password using a Different Email Address</font></a><br /><br />';
		echo '<a href="http://www.landscapeonline.com"><font size="4">Click Here to Return to LandscapeOnline.com</font></a><br /><br />';
		echo '<font size="4">For More Information Contact Your Advertising Sales Representative:</font><br><br> ';
		echo '<table border="0" cellpadding="" cellspacing="3">';
		echo '<tr>';
		echo '<td  align="center" width="132">If Your Company Name Begins With:</td>';
		echo '<td width="266"  align="center" valign="bottom">Your Representative</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td align="center"><strong>A-H</strong></td>';
		echo '<td><center><a href="mailto:kongstad@landscapeonline.com?subject=Vendor Profile Password Request">Kip Ongstad  - (714) 979-5276 x126</a></center></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td align="center"><strong>I-P</strong></td>';
		echo '<td><center><a href="mailto:vchavira@landscapeonline.com?subject=Vendor Profile Password Request">Vince Chavira  - (714) 979-5276 x111</a></center></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td align="center"><strong>Q-Z</strong></td>';
		echo '<td><center><a href="mailto:mhenderson@landscapeonline.com?subject=Vendor Profile Password Request">Matt Henderson  - (714) 979-5276 x114</a></center></td>';
		echo '</tr>';
		echo '</table>';		
		exit;
		}
	$name = $_POST['firstname'] . ' ' . $_POST['lastname'];
	$email = $_POST['email2'];
	
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
	
		echo '<img src="https://landscapearchitect.com/lol-logos/lol-logo.png"><br />';
		echo ' <br />';
		echo '<font size="4"><strong>Your password for your account will be sent to your email address on record.</strong></font><br /><br />';
		echo '&nbsp;' . '<br />';
		echo '<a href="http://www.landscapeonline.com"><font size="4">Click here to return to LandscapeOnline.com</font></a><br>';
		echo '<font size="4">For More Information Contact Your Advertising Sales Representative:</font><br><br> ';
		echo '<table border="0" cellpadding="" cellspacing="3">';
		echo '<tr>';
		echo '<td  align="center" width="132">If Your Company Name Begins With:</td>';
		echo '<td width="266"  align="center" valign="bottom">Your Representative</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td align="center"><strong>A-H</strong></td>';
		echo '<td><center><a href="mailto:kongstad@landscapeonline.com?subject=Vendor Comment">Kip Ongstad  - (714) 979-5276 x126</a></center></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td align="center"><strong>I-P</strong></td>';
		echo '<td><center><a href="mailto:vchavira@landscapeonline.com?subject=Vendor Comment">Vince Chavira  - (714) 979-5276 x111</a></center></td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td align="center"><strong>Q-Z</strong></td>';
		echo '<td><center><a href="mailto:mhenderson@landscapeonline.com?subject=Vendor Comment">Matt Henderson  - (714) 979-5276 x114</a></center></td>';
		echo '</tr>';
		echo '</table>';		
	
	
	
		}

?>
