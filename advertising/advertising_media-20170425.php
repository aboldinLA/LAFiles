<?
include("lo_top-main2-js.inc");
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

	<!-- Start Advertising Section -->
    
    <?
include "lol_common-main2.inc";
include $include_path . "class/media_class.inc";
//include $include_path . "base/vendor_listing.php";

//$V = new vendor();
$M = new media_class($db);

if($REQUEST_METHOD=="POST")	{
	$error = "";

	if(strlen($comp_name) < 5)	$error .= "- Please enter your Company Name<br>";
	if(strlen($first_name) < 2)	$error .= "- Please enter your First Name<br>";
	if(strlen($last_name) < 2)	$error .= "- Please enter your Last Name<br>";
	if(strlen($state) < 2)		$error .= "- Please enter your State<br>";
	if(strlen($phone) < 7)		$error .= "- Please enter your Phone Number<br>";
	if(strlen($email) < 7)		$error .= "- Please enter your Email<br>";

	
	if(!strlen($error)) {  

		//to take check boxes array
		if(is_array($how))  $how = implode(",",$how);
		if(is_array($request))  $request=implode(",",$request);
		if(is_array($contact_preferences)) 	 $contact_preferences = implode(",",$contact_preferences);
	 		
		 //input info
		$uid = $M->media_form($current, $comp_name, $website, $represent, $sal, $first_name, $last_name, $address, $address_2, $city, $state, $zip, $country,$area_code, $phone,$area_fax, $fax, $email, $edemail,$how, $how_pick, $how_other, $request, $contact_preferences, $note);

		$M->media_mail($uid);
		header("location:report2.php");
	 } 
}

?>

<div style="position:absolute; left:5px; top:100px; padding:0px; width:700px">

								<script type="text/javascript">
                                
                                  function checkForm(form)
                                  {
                                
                                    if(!form.captcha.value.match(/^\d{5}$/)) {
                                      alert('Please enter the CAPTCHA digits in the box provided');
                                      form.captcha.focus();
                                      return false;
                                    }
                                
                                
                                    return true;
                                  }
                                
                                </script>


<form method="post" action="report2.php" onsubmit="return checkForm(this);">
<input type="hidden" name="uid" value="<?echo $uid?>">
<table WIDTH="95%" align=center cellpadding="0" cellspacing="0"> 
	<TR> 
		<TD COLSPAN="3" align="center">
		<? if ($error){ $C->errors($error);	}?>
		</TD> 
	</TR>
    <tr>
    	<td colspan="3">
        	<br /><br /><br />
       	  <center><strong><font size="6" >Welcome to </font></center><br />
          	<center><img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="280" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG.png" width="295" /></center>
    <center><img src="https://landscapearchitect.com/lol-logos/lolw-logo.jpg" width="300" /></center><br />
    
          <center><font size="5" >Advertising Information Request Center!</font></strong></center><center><br />
          
          <p><font size="3"><i>Since 1985 Landscape Communications, Inc (LCI) has had one simple goal . . . Entertain and educate landscape professionals, and connect them to vendors and service providers. With highly focused readership groups and specifically titled media and events, LCI brings you together with your target market better than any other resource in the industry.</font></p>
            </i></center><br />
            <center><font size="2">Please complete this short form and an advertising representative will respond to your request within <br />
            one business day, or for immediate information call (714) 979-5276 ext. 113.</font>
            </center>
        </td>
    </tr>
    <tr>
        <td colspan="3"><p></p></td>
    </tr>     
	<TR>
		<td align="center"  COLSPAN="3">
			<FONT SIZE="2">Fields in <B><font COLOR="#ff0000">red</B></font> are required </FONT>
		</TD> 
	</TR> 
    <tr>
        <td colspan="3"><p></p></td>
    </tr> 
	<TR>  
    	<TD align=center colspan=2>
			<TABLE WIDTH="70%" cellpadding="0" cellspacing="0"> 
		  		<!-- <TR>
					<TD ALIGN="RIGHT" NOWRAP="NOWRAP"><B>Current Advertiser</B>:</TD> 
					<TD>&nbsp; </TD> 
					<TD>
						<INPUT TYPE="RADIO" NAME="current" VALUE="yes">Yes 
						<INPUT TYPE="RADIO" NAME="current" VALUE="no">No 
						<INPUT TYPE="RADIO" NAME="current" VALUE="unknown">Unknown
					</TD> 
				</TR> -->
    			<tr>
        			<td colspan="3" style="height:10px"> </td>
    			</tr> 
				<TR> 
					<TD ALIGN="right" NOWRAP="NOWRAP"><FONT COLOR="#ff0000"><B>Your Name</B>: </FONT></TD> 
					<TD></TD> 
					<TD> 
						<INPUT NAME="first_name" SIZE="20" VALUE="<? echo ucwords($first_name) ?>" STYLE="font-size: 14px; height:20px; width:100px; padding-left:5px; background-color:#CCC; box-shadow: 5px 5px 5px #888888" placeholder="First Name">
						<INPUT NAME="last_name" SIZE="30" VALUE="<? echo ucwords($last_name) ?>" STYLE="font-size: 14px; height:20px; width:100px; padding-left:5px; background-color:#CCC; box-shadow: 5px 5px 5px #888888" placeholder="Last Name">
					</TD> 
				</TR> 
    			<tr>
        			<td colspan="3" style="height:10px"> </td>
    			</tr>       
				<TR> 
					<TD ALIGN="right">
						<FONT COLOR="#ff0000"><B>Company Name</B>:</FONT>
					</TD> 
					<TD></TD> 
					<TD>
						<INPUT NAME="comp_name" SIZE="54" VALUE="<? echo ucwords($comp_name) ?>" STYLE="font-size: 14px; height:20px; width:205px; padding-left:5px; background-color:#CCC; box-shadow: 5px 5px 5px #888888" placeholder="Company Name">
					</TD> 
				</TR>
    			<tr>
        			<td colspan="3" style="height:10px"> </td>
    			</tr>     
				<TR> 
					<TD ALIGN="right" NOWRAP="NOWRAP"><FONT COLOR="#ff0000"><B>Your E-Mail</B></FONT>:</TD> 
					<TD></TD> 
					<TD>
						<INPUT NAME="email" SIZE="54" VALUE="<? echo $email ?>" STYLE="font-size: 14px; height:20px; width:205px; padding-left:5px; background-color:#CCC; box-shadow: 5px 5px 5px #888888" placeholder="Email Address">
					</TD> 
				</TR>
    			<tr>
        			<td colspan="3" style="height:10px"> </td>
    			</tr>      
				<TR> 
					<TD ALIGN="right" NOWRAP="NOWRAP"><FONT COLOR="#ff0000"><B>Phone</B>:</FONT></font></TD> 
					<TD></TD> 
					<TD>
						<INPUT NAME="phone" SIZE="54" VALUE="<? echo $phone ?>"  MAXLENGTH="12" STYLE="font-size: 14px; height:20px; width:205px; padding-left:5px; background-color:#CCC; box-shadow: 5px 5px 5px #888888" placeholder="Phone Number" ><br>
						<span style="font-size:8px; font-style:italic">&nbsp;&nbsp;&nbsp;(Please include Area Code)</span>
					</TD> 
				</TR>
    
                </table>
			</TD>
        </tr>
 </table>    
  
<?
if ($request == Null){$request[] = ""; }
//$V->request($request);
?> 

<table>
          <TR>
             <TD VALIGN="top" colspan=2><br>
             <center><font size="5" ><b>Which media are you interested in?</b></font> <br /><font size="2">Click on the appropriate 'Yes' box below to request the media information you are interested in.</font></center>
             </TD>
          </tr>
          <tr>
          	<td colspan="2"><center><br />&nbsp;</center><br /> </td>
          </tr>
             <tr>
              <TD VALIGN="top"><center>
    <IMG SRC="/lol-logos/LASN_BLUE_500.jpg" width="310" BORDER="0" ALT="Landscape Architect & Specifier News"></center><br />
    <center><font size="2">Reaching Virtually Every Registered Landscape <br />
    Architect Nationwide</font></center><br><br />
<center><INPUT TYPE="CHECKBOX" style="width:16px;height:16px" name="request1" VALUE="LA Media Kit/Rates Package" ><font size="3"><b>&nbsp;Yes!</b></font></b> <br /><font size="2">Send me the LASN Media Kit and Rates Packet!</font></center>
             </TD>
             <TD VALIGN="top"> <center>                                                                     
                <IMG SRC="/lol-logos/lcdbms-logo-NEW-BIG-2.jpg" width="310" BORDER="0"></center><br />
                <center><font size="2">Reaching 40,000 Landscape Installation and <br />Maintenance Business Owners & Superintendents</font></center><br /><br />                                                                    
                  <center><INPUT TYPE="CHECKBOX" style="width:16px;height:16px" name="request2"   VALUE="LC Media Kit/Rates Package"  ><font size="3"><b>&nbsp;Yes!</b></font> <br /><font size="2">Send me the LCDBM Media Kit and Rates Packet!</font></center>
                </tr>                                                                   
                     <TR>                                                               
             <TD VALIGN="top">
	<br></br>
                  <center><IMG SRC="/lol-logos/lo-DBMS-logo-800.jpg" width="310" ALT="Landscape Online" BORDER="0"></center><br>
                  <center><font size="2">The Largest Landscape Database on the Internet</font></center><br /><br /><br />
                  <center><INPUT TYPE="CHECKBOX" style="width:16px;height:16px" name="request4" VALUE="LO Media Kit/Rates Package"><font size="3
                  "><b>&nbsp;Yes!</b> <br /><font size="2">Send me the LandscapeOnine Media Kit <br />and Rates Packet!</font></center>
            </TD>                                                                       
            <td>
	<br></br>
              <center><IMG SRC="/lol-logos/lolw-logo.jpg" width="310" ALT="LandscapeOnline Weekly" BORDER="0" /></center><br />
              <center>
                <font size="2">Reaching 65,000 Commercial Landscape <br />Professionals Every Week</font></center><br /><br />
                  <center><INPUT TYPE="CHECKBOX" style="width:16px;height:16px" name="request6" VALUE="LOW Media Kit/Rates Package" ><font size="3"><b>&nbsp;Yes!</b></font> <br /><font size="2">Send me the LandscapeOnline Weekly Media Kit <br />and Rates Packet!</font></center>
            </td>
          </TR>
          
          <TR>                                                               
             <TD VALIGN="top">
             	  <br /><br />
                  <center><a href="https://landscapearchitect.com/research/TLE/index-tle-2013.php" target="_blank"><IMG SRC="/lol-logos/TLE-Logo-BLANK.jpg" width="310" ALT="TLE" BORDER="0"></a></center><br><br />
                  <center><font size="2">The #1 Regional Trade Show and Educational 
<br />Conference for Landscape Decision Makers in <br />
Long Beach and San Mateo, California</font></center><br /><br />
                  <center><INPUT TYPE="CHECKBOX" style="width:16px;height:16px" name="request7" VALUE="TLE Exhibitor Prospectus" ><font size="3"><b>&nbsp;Yes!</b> </font><br /><font size="2">Send me the Landscape Expo Media Kit <br />and Rates Packet!</font></center>
            </TD>                                                                       
            <td align="top">
			<br>
   			 <center>
          <IMG SRC="/imgz/eblast_logo_sm.jpg" width="225" ALT="Landscape Superintendent &amp; Maintenance Professional" BORDER="0" /></center><br />
          <center><font size="2">Demographic and/or Geographically Targeted <br />Email Marketing</font></center><br /><br />
                  <center><INPUT TYPE="CHECKBOX" style="width:16px;height:16px" name="request8" VALUE="LOL Media Kit/Rates Package" ><font size="3"><b>&nbsp;Yes!</b> </font><br /><font size="2">Send me the E-Blast Media Kit and Rates Packet!</font></center>
            </td>
          </TR>
          
          <TR>                                                               
            <td align="top">
	
            </td>
            <td>
            
            <br /><br /><br /><br /><br />
            <table width="350" border="0">
  <tr>
  	<td colspan="2"><font size="4"><center><B>Contact Preferences</B>:</center></font><br />
    </td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td><font size="2"><INPUT TYPE="CHECKBOX" style="width:16px;height:16px" NAME="contact_preferences1" VALUE="Media Kit in Mail">&nbsp;Send Media Kit in Mail<BR>
    	<INPUT TYPE="CHECKBOX" style="width:16px;height:16px" NAME="contact_preferences1" VALUE="Media Kit in Email">&nbsp;Email Media Kit<BR>
			<INPUT TYPE="CHECKBOX" style="width:15px;height:15px" NAME="contact_preferences2" VALUE="Call Me">&nbsp;Call Me</font></td>
  </tr>
  <tr>
    <td align="right"><font size="2"><B>Comments</B>:&nbsp;</font></td>
    <td><TEXTAREA COLS="36" NAME="note" ROWS="5" value="<? echo $note; ?>" style="background-color:#A5A4A4"><?echo $note;?></TEXTAREA></td>
  </tr>
  <tr>
	  <td style="line-height: 10px">&nbsp;</td>
	</tr>
  <tr>
  	<td colspan="2">
  	
                                            <h3><p><img src="https://landscapearchitect.com/products/captcha-form.php" width="150" height="30" border="1" alt="CAPTCHA"></p>
                                            <p><input type="text" size="3" maxlength="5" name="captcha" value="" style="width:125px; height:40px; background-color:#BFBFBF; border:solid; border-color:#000000; color:#000000; padding-left:5px; font-size: 14px" placeholder="Input Numbers"><br>
                                            <small>Copy the digits from the image<br>
											into this box, then hit submit.</small></p><br />
											
  	<INPUT type="submit" value="Submit Advertising Request" style="height:20px; width:250px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888; position: relative; left: -50px" >
    </td>
  </tr>
</table>
            
            </td>
	</TR>                                                                                                
    		<tr>
        		
    	 </tr
         ><TR>
	</TR> 
	<TR> 
		<TD height="40">
		</TD>
	</TR>
	<TR> 
		<TD ALIGN="center" colspan="3">&nbsp;</TD>
	</TR>	 

</TABLE> </FORM>
</div>
    

    


	<!-- End Advertising Section -->
    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  
<!-- Start Banner Section -->  

	<!-- Start - Divs is here to move the ads for the articles in correct position -->
	<div>
    	<?
		include $include_path . "banner-unvers-js2.inc";
		?>
	</div> <br>
        
        
<!-- End Banner Section --> 
 
<!-- Start Footer Section -->  
	<div style="position:relative; left:-700px; top: 1500px">
	<center><? include $include_path . "lo_footer-main2.inc"; ?><br><br></center>
	</div>

</div>