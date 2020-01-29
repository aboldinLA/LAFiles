
<?
include("lo_top-main2-prod.inc");
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
	    <?
	include $include_path . "lo_header-main2-new.inc";
	?>
 
	</div>

	<!-- Start Content Section -->

	<!-- Start Assoc Search Section -->

<!-- Below used to correct content position need to rewrite to do correct -->
<table>
	<tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
</table>
<!-- Above used to correct content position need to rewrite to do correct -->

<!-- Code Start -->
<div>
	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("lo_top-main2-side3.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
<div style="position: relative; left: 25px">

<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Welcome to the</center></span><br>
	<center><img src="https://landscapearchitect.com/lol-logos/3-logo-new.jpg" width="763" /></center><br />
	<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Association Suggestion Center</center></span>
<div>


<!-- Old Code Start -->

<?
if($REQUEST_METHOD=="POST") {
	
	//$to = "matt@motherway.net";
	$to = "mmedaris@landscapeonline.com";
	$subject = "Suggest an Association";
	$body = "Association Name: $name\nAssociation Acronym: $acro\nAssociation Is A: $type\nAssociation Website: $web\nAssociation email: $email\nAssociation Phone: $phone\n";
	
    // modifying this to prevent spam relaying
	//mail($to, $subject, $body,"From: ".$email."\r\nReply-To: ".$email);
	mail($to, $subject, $body,  'From:' . $email);
					
	$secthdr="Thank You";
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
	//include $include_path . "lol_header2.inc";
?>


<table width="763">
    <tr>
		<td>
		<!-- Horizontal Bar Start -->
		<div style="width:750px; height:2px; background-color:#605b51;"> </div>
		<!-- Horizontal Bar End -->        
		</td>
	</tr>
    <tr>
    	<td style="height:10px"> </td>
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
					<td align=left style="font-size:16px; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Association Name:</td>
					<td align=left><input name="name" size=43 style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"></td>
				</tr>
    			<tr>
    				<td style="height:10px"> </td>
    			</tr>                
				<tr>
					<td align=left style="font-size:16px; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Association Acronym:</td>
					<td align=left><input name="acro" size=43 style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"></td>
				</tr>
    			<tr>
    				<td><br /></td>
    			</tr>    
    			<tr>
					<td valign="top" align=right style="font-size:16px; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Is the Association a:</td>
					<td align=left style="font-size:16px; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif"><input type="radio" name="type" value="National" checked> National Association<br>
						<input type="radio" name="type" value="State" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"> State Association<br>
						<input type="radio" name="type" value="Local" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"> Local Chapter<br><br /></td>
				</tr>    
    			<tr>
    				<td style="font-size:16px; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif"><strong>Contact Information:</strong></td>
    			</tr>
    
				<tr>
					<td align=left style="font-size:16px; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Association Website:</td>
					<td align=left><input name="web" size=43 style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"></td>
				</tr>
    			<tr>
    				<td style="height:10px"> </td>
    			</tr>                     
    			<tr>
					<td align=left style="font-size:16px; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Association Email:</td>
					<td align=left><input name="email" size=43 style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"></td>
				</tr>
    			<tr>
    				<td style="height:10px"> </td>
    			</tr>                     
    			<tr>
					<td align=left style="font-size:16px; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Association Phone Number:</td>
					<td align=left><input name="phone" size=43 style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"></td>
				</tr>

				<tr>
					<td colspan=2 align=center><br><input name="" value="Submit" type=submit  style="height:20px; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888; cursor:pointer"></form></td>
				</tr>

			</table>
		</td>
	</tr>
    <tr>
    	<td style="height:20px"> </td>
    </tr>
    <tr>
    	<td style="font-size:16px; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">LandscapeOnline and our 50,000 + monthly users<br /><br>
        	Thank You!</td>
    </tr>
</table>

<? } ?>
	





	</div>
				
	
			</td>
			
			
			
		</tr>
	</table><br>
	
	<div style="position: relative; left: 250px">
		<? 	include("lo_top-main2-bottom.inc"); ?>
	</div>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
include("lo_footer-main2-new.inc");
?>





