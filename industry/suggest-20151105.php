<?
include "lol_common.inc";
if($REQUEST_METHOD=="POST") {
	
	//$to = "matt@motherway.net";
	$to = "mmedaris@landscapeonline.com";
	$subject = "Suggest an Association";
	$body = "Association Name: $name\nAssociation Acronym: $acro\nAssociation Is A: $type\nAssociation Website: $web\nAssociation email: $email\nAssociation Phone: $phone\n";
	
    // modifying this to prevent spam relaying
	//mail($to, $subject, $body,"From: ".$email."\r\nReply-To: ".$email);
	mail($to, $subject, $body,  'From:' . $email);
					
	$secthdr="Thank You";
	include $include_path . "lol_header2.inc";
?>
<br>Thank you for submitting your comments to LandscapOnLine.com 
	We will verify your submission by sending you an E-mail within seven (7) business days,
	 which will include a private password and direct link to your association page. 
	 This will allow you to make updates and change to your information at any time. 
	<br><br>
	<A href="/index.php">
	<IMG src="/imgz/main_lol_logo.gif" width="270" height="60" border="0" alt="LandscapeOnline.com"></A>
	
<div style="position:absolute; left:5px; top:-10px; padding:0px">    					
    
<?
} else {
	include $include_path . "lol_header2.inc";
?>


<div style="position:absolute; left:5px; top:-10px; padding:0px">
<table width="763">
	<tr>
    	<TD COLSPAN="2">
        <span style="font-size:32px; font-weight:bold"><center>Welcome to the</center></span><br>
	<center><img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="280" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG.png" width="295" /></center>
    <center><img src="https://landscapearchitect.com/lol-logos/lolw-logo.jpg" width="300" /></center><br />
	<span style="font-size:32px; font-weight:bold"><center>Association Suggestion Center</center></span><br></TD> 
	</tr>
    <tr>
		<td><div>
    	<hr />
    </div>
		</td>
	</tr>
	<tr>
		<td colspan=2 style="font-family:Arial, Helvetica, sans-serif; font-size:22px; color:#C60">
		<strong>Is there an association that you think is a good fit for LandscapeOnline? <br />If so, please let us know by completing the form below.</strong><br><br>
		</td>
	</tr>
    <form method=post action="<?=$PP_SELF?>">
    <tr>
    	<td>
        <table>
	<tr>
		<td align=left style="font-size:14px">Association Name:</td>
		<td align=left><input name="name" size=43></td>
	</tr>
	<tr>
		<td align=left style="font-size:14px">Association Acronym:</td>
		<td align=left><input name="acro" size=43></td>
	</tr>
    <tr>
    	<td><br /></td>
    </tr>    
    <tr>
		<td valign="top" align=right style="font-size:14px">Is the Association a:</td>
		<td align=left style="font-size:14px"><input type="radio" name="type" value="National" checked> National Association<br>
						<input type="radio" name="type" value="State"> State Association<br>
						<input type="radio" name="type" value="Local"> Local Chapter<br><br /></td>
	</tr>    
    <tr>
    	<td style="font-size:14px"><strong>Contact Information:</strong></td>
    </tr>
    
	<tr>
		<td align=left style="font-size:14px">Association Website:</td>
		<td align=left><input name="web" size=43></td>
	</tr>
    	<tr>
		<td align=left style="font-size:14px">Association Email:</td>
		<td align=left><input name="email" size=43></td>
	</tr>
    	<tr>
		<td align=left style="font-size:14px">Association Phone Number:</td>
		<td align=left><input name="phone" size=43></td>
	</tr>

	<tr>
		<td colspan=2 align=center><br><input name="" value="Submit" type=submit></form></td>
	</tr>

</table>
</td>
</tr>
    <tr>
    	<td><br /></td>
    </tr> 
    <tr>
    	<td>LandscapeOnline and our 50,000 + monthly users<br />
        	Thank You!</td>
    </tr>
</table>
</div>

<? } ?>
<? include $include_path . "lol_footer2.inc"; ?>
	
