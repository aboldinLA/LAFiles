<?
include("lo_top-main2.inc");
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px">
	    <?
	include $include_path . "lo_header-main2-js.inc";
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

<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Welcome to the</center></span><br>
	<center><img src="https://landscapearchitect.com/lol-logos/3-logo-new.jpg" width="763" /></center><br />
	<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Opt-Out Center</center></span>
<div>


<!-- Old Code Start -->

<?
if($REQUEST_METHOD=="POST") {
	
	//$to = "matt@motherway.net";
	$to = "mohalloran@landscapeonline.com";
	$subject = "Opt-Out $opt1, $opt2, $opt3, $opt4";
	$body = "Opt-Out: $opt1\nOpt-Out: $opt2\nOpt-Out: $opt3\nOpt-Out: $opt4\nName: $first_name $last_name\nEmail: $email\nComment: $problem\n";
	
    // modifying this to prevent spam relaying
	//mail($to, $subject, $body,"From: ".$email."\r\nReply-To: ".$email);
	mail($to, $subject, $body,  'From:' . $email);
					
	$secthdr="Thank You";
?>
<br><br>
<center><span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:18px">Thank you for submitting your comments to LandscapOnLine.com</span></center> 
	 

<div style="position:absolute; left:5px; top:-10px; padding:0px">    					
    
<?
} else {
	//include $include_path . "lol_header2.inc";
?>


<table align="center" width="763">
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
		<td align="center" colspan=2 style="font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#C60">
		<strong>Please choose the option(s) you wish to opt-out</strong><br><br>
		</td>
	</tr>
    <form method=post action="<?=$PP_SELF?>">
    <tr>
    	<td>
        	<table width="500" style="position:relative; left:100px">
				<tr>
					<td width="100" align="right" style="font-size:16px; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Name:&nbsp;&nbsp;</td>
                    
                    <? 
						$action = $_GET[action];
						$type2 = $_GET[type];
						
						if ($action == 'edit') {
					?>
					<td width="150"><input name="first_name" value="<? echo $_GET[first_name] ?>" size=17 style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888">
                    </td>
					<td width="200" align="left"><input name="last_name" value="<? echo $_GET[last_name] ?>" size=17 style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888">
                    </td>
				</tr>
    			<tr>
    				<td style="height:10px"> </td>
    			</tr>                
				<tr>
					<td width="150" align="right" style="font-size:16px; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Email:&nbsp;&nbsp;</td>
					<td colspan="2"><input name="email" value="<? echo $_GET[email] ?>" size=47 style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"></td>
				</tr> 
    			<tr>
    				<td style="height:10px"> </td>
    			</tr>
				<tr>
					<td width="100" align="right" style="font-size:16px; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Please&nbsp;&nbsp;<br>Choose:&nbsp;&nbsp;</td>

					<td colspan="2">  <input type="checkbox" name="opt1" value="LO Weekly" <? if ($type2=="lo") echo "checked";?>> LO Weekly<br>
  									 <input type="checkbox" name="opt2" value="TLE Promo" <? if ($type2=="tle") echo "checked";?>> TLE Promotions<br>
  									 <input type="checkbox" name="opt3" value="Sales Promo" <? if ($type2=="sa") echo "checked";?>> Sales Promotions<br>
  									 <input type="checkbox" name="opt4" value="Editoral Promo" <? if ($type2=="ed") echo "checked";?>> Editoral Promotions<br>
                    </td>
				</tr>                               
                
                    <?
						}else{
					?>
					<td width="150"><input name="first_name" size=20 style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="First Name">
                    </td>
					<td width="150"><input name="last_name" size=20 style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Last Name">
				</tr>
    			<tr>
    				<td style="height:10px"> </td>
    			</tr>                
				<tr>
					<td width="150" align="right" style="font-size:16px; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Email:&nbsp;&nbsp;</td>
					<td colspan="2"><input name="email" size=47 style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Email Address"></td>
				</tr> 
    			<tr>
    				<td style="height:10px"> </td>
    			</tr>
				<tr>
					<td width="100" align="right" style="font-size:16px; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Please&nbsp;&nbsp;<br>Choose:&nbsp;&nbsp;</td>

					<td colspan="2">  <input type="checkbox" name="opt1" value="LO Weekly"> LO Weekly<br>
  									 <input type="checkbox" name="opt2" value="TLE Promo"> TLE Promotions<br>
  									 <input type="checkbox" name="opt3" value="Sales Promo"> Sales Promotions<br>
  									 <input type="checkbox" name="opt4" value="Editoral Promo"> Editoral Promotions<br>
                    </td>
				</tr>                               
                
                    <?
						}
					?>                    


    			<tr>
    				<td style="height:10px"> </td>
    			</tr>                                     
				<tr>
					<td width="100" valign="top" align="right" style="font-size:16px; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">Comments:&nbsp;&nbsp;</td>
					<td colspan="2" valign="top" align=left><textarea name="problem" rows="6" cols="49" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; text-align:start; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Enter Your Comments"></textarea></td>
				</tr>
    			<tr>
    				<td style="height:10px"> </td>
    			</tr>                     
				<tr>
					<td colspan=3 align="center"><br><input name="" value="Submit" type=submit  style="height:20px; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888"></form></td>
				</tr>

			</table>
		</td>
	</tr>
 
</table>

<? } ?>
	


<!-- Old Code End -->

    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  
<!-- Start Banner Section -->  
<div class="banner2">

	<!-- Start - Divs is here to move the ads for the articles in correct position -->
	<div style="position:relative; left:258px; top:-550px">
    	<?
		include $include_path . "banner-pages.inc";
		?>
	</div>       
        
</div>
<!-- End Banner Section --> 
 
<!-- Start Footer Section -->  
	<div class="bottom1" style="position:relative; left:-130px">
	<? include $include_path . "lo_footer-main2.inc"; ?>
	</div>

</div>