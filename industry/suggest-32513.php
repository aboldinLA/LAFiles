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
    	<TD COLSPAN="2" class="cellhead">Suggest an Association</TD> 
	</tr>
	<tr>
		<td colspan=2>
		<br />Is there an association that you think is a good fit for LandscapeOnline? If so, please let us know by completing the form below.<br><br>
		</td>
	</tr>
    <form method=post action="<?=$PP_SELF?>">
    <tr>
    	<td><table>
	<tr>
		<td align=left>Association Name:</td>
		<td align=left><input name="name" size=43></td>
	</tr>
	<tr>
		<td align=left>Association Acronym:</td>
		<td align=left><input name="acro" size=43></td>
	</tr>
    <tr>
    	<td><br /></td>
    </tr>    
    <tr>
		<td valign="top" align=right>Is the Association a:</td>
		<td align=left><input type="radio" name="type" value="National" checked> National Association<br>
						<input type="radio" name="type" value="State"> State Association<br>
						<input type="radio" name="type" value="Local"> Local Chapter<br><br /></td>
	</tr>    
    <tr>
    	<td><strong>Contact Information:</strong></td>
    </tr>
    
	<tr>
		<td align=left>Association Website:</td>
		<td align=left><input name="web" size=43></td>
	</tr>
    	<tr>
		<td align=left>Association Email:</td>
		<td align=left><input name="email" size=43></td>
	</tr>
    	<tr>
		<td align=left>Association Phone Number:</td>
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
<? include $include_path . "lol_footer.inc"; ?>
	
