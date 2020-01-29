<?
include "lol_common.inc";
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
include  $include_path . "lol_header2.inc";
?>

<div style="position:absolute; left:5px; top:-40px; padding:0px; width:700px">

<form method="post" action="report2.php">
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
       	  <center><b><font size="6" >Welcome to <br /><IMG SRC="/lol-logos/LCI-Logo-2013.jpg" width="510" BORDER="0" /></font><br /> <font size="5" >Advertising Information Request Center!</font></b></center><br />
            <center>
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
        			<td colspan="3"><p></p></td>
    			</tr>
				<TR> 
					<TD ALIGN="right" NOWRAP="NOWRAP"><FONT COLOR="#ff0000"><B>Your Name</B>:</FONT></TD> 
					<TD></TD> 
					<TD> 
						<INPUT NAME="first_name" SIZE="20" VALUE="<?echo ucwords($first_name)?>">
						<INPUT NAME="last_name" SIZE="30" VALUE="<?echo ucwords($last_name)?>">
					</TD> 
				</TR> 
    			<tr>
        			<td colspan="3"><p></p></td>
    			</tr>       
				<TR> 
					<TD ALIGN="right">
						<FONT COLOR="#ff0000"><B>Company Name</B>:</FONT>
					</TD> 
					<TD></TD> 
					<TD>
						<INPUT NAME="comp_name" SIZE="54" VALUE="<?echo ucwords($comp_name) ?>">
					</TD> 
				</TR>
    			<tr>
        			<td colspan="3"><p></p></td>
    			</tr>     
				<TR> 
					<TD ALIGN="right" NOWRAP="NOWRAP"><FONT COLOR="#ff0000"><B>Your E-Mail</B></FONT>:</TD> 
					<TD></TD> 
					<TD>
						<INPUT NAME="email" SIZE="54" VALUE="<?echo $email?>">
					</TD> 
				</TR>
    			<tr>
        			<td colspan="3"><p></p></td>
    			</tr>     
				<TR> 
					<TD ALIGN="right" NOWRAP="NOWRAP"><FONT COLOR="#ff0000"><B>Phone</B>:</FONT></font></TD> 
					<TD></TD> 
					<TD>
						<INPUT NAME="area_code" SIZE="3" VALUE="<?echo $area_code?>"  MAXLENGTH="3" ><INPUT NAME="phone" SIZE="15" VALUE="<?echo $phone?>"  MAXLENGTH="8" >
					</TD> 
				</TR>
    			<!-- <tr>
        			<td colspan="3"><p></p></td>
    			</tr>         
				<TR> 
					<TD ALIGN="right" NOWRAP="NOWRAP"><B>Website</B>:</TD> 
					<TD></TD> 
					<TD>
						<INPUT NAME="website" SIZE="54" VALUE="<?echo $website?>">
					</TD> 
				</TR>
    			<tr>
        			<td colspan="3"><p></p></td>
    			</tr>    
    			<? $C->pro_state2($state) ?>
    			<tr>
        			<td colspan="3"><p></p></td>
    			</tr>                
				<TR> 
					<TD ALIGN="RIGHT" NOWRAP="NOWRAP" VALIGN="TOP"><B>Companies Represented</B>:<BR>(if you're an ad agency)
					</TD> 
					<TD></TD> 
					<TD><TEXTAREA COLS="54" NAME="represent" ROWS="3" WRAP="Physical" value="<?echo ucwords($represent)?>"><?echo $represent?></TEXTAREA>
					</TD> 
				</TR> 
    			<tr>
        			<td colspan="3"><p></p></td>
    			</tr> -->
                <!-- <TR> 
					<TD ALIGN="right" NOWRAP="NOWRAP" VALIGN="top"><FONT COLOR="#ff0000"><B>Address</B>:</FONT></TD> 
					<TD></TD> 
					<TD><INPUT NAME="address" SIZE="34" VALUE="<?echo $address?>"><BR><INPUT NAME="address_2" SIZE="34" VALUE="<?echo $address_2?>">
					</TD> 
				</TR> -->
				<!-- <TR> 
					<TD ALIGN="right" NOWRAP="NOWRAP"><B>FAX</B>:
					</TD> 
					<TD></TD> 
					<TD>
						<INPUT NAME="area_fax" SIZE="3" VALUE="<?echo $area_fax;?>"  MAXLENGTH="3"><INPUT NAME="fax" SIZE="15" VALUE="<?echo $fax;?>"  MAXLENGTH="8">
					</TD> 
				</TR> --> 
				<!-- <TR> 
					<TD ALIGN="right" NOWRAP="NOWRAP"><B>Corporate Info E-Mail</B>:
					</TD> 
					<TD></TD> 
					<TD>
						<INPUT NAME="edemail" SIZE="34" VALUE="<?echo $edemail?>">
					</TD> 
				</TR>
				<TR> 
					<TD ALIGN="right" NOWRAP="NOWRAP" VALIGN="TOP"> </TD> 
					<TD></TD> 
					<TD> 
						<b><br />
						How did you hear about us?</b><br>
				
			  			<SELECT NAME="how" SIZE="1"> 
						<OPTION VALUE="">Select How you Heard of Us</OPTION> 
						<OPTION VALUE="Referral by Peer">Referral by Peer</OPTION> 
						<OPTION VALUE="LandscapeOnLine.com">LandscapeOnLine.com</OPTION> 
						</SELECT>
						<br />
						<br>   
                             
						<b>Saw you at the following Trade Show</b><br>
				
						<SELECT NAME="how_pick" SIZE="1"> 
						<OPTION VALUE="">Select Trade Show Name</OPTION> 
						<OPTION VALUE="Trade Show Alsa">ALSA</OPTION> 
						<OPTION VALUE="Trade Show CLCA">CLCA</OPTION> 
						<OPTION VALUE="Trade Show Denver Pro-Green">Denver Pro-Green</OPTION> 
						<OPTION VALUE="Trade Show GIE">GIE</OPTION> 
						<OPTION VALUE="Trade Show IAAPA">IAAPA</OPTION> 
						<OPTION VALUE="Trade Show Irrigation Association">Irrigation Association</OPTION> 
						<OPTION VALUE="Trade Show IECA">IECA</OPTION> 
						<OPTION VALUE="Trade Show Lightfair">Lightfair</OPTION> 
						<OPTION VALUE="Trade Show NRPA">NRPA</OPTION> 
						<OPTION VALUE="Trade Show SCTC">SCTC</OPTION> 
						<OPTION VALUE="Trade Show TNLA">TNLA</OPTION> 
						<OPTION VALUE="Trade Show WNGE">WNGE</OPTION> 
						<OPTION VALUE="Trade Show World of Concrete">World of Concrete</OPTION> 
						</SELECT><br>
						<b>Other:</b>&nbsp;<INPUT type=text NAME="how_other" SIZE="15"> 
					
					</TD> 
				</TR> -->
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
          	<td colspan="2"><center><br /><INPUT type="submit" value="Submit Advertising Request" ></center><br /> </td>
          </tr>
             <tr>
              <TD VALIGN="top"><br /><center>
    <IMG SRC="/lol-logos/LASN_BLUE_500.jpg" width="310" BORDER="0" ALT="Landscape Architect & Specifier News"></center><br /><br />
    <center><font size="2">Reaching Virtually Every Registered Landscape <br />
    Architect Nationwide</font></center><br><br />
<center><INPUT TYPE="CHECKBOX" style="width:16px;height:16px" name="request1" VALUE="LA Media Kit/Rates Package" ><font size="3"><b>&nbsp;Yes!</b></font></b> <br /><font size="2">Send me the LASN Media Kit and Rates Packet!</font></center>
             </TD>
             <TD > <center>                                                                     
                <IMG SRC="/lol-logos/lcdbms-logo-NEW-BIG.png" width="310" BORDER="0"></center><br /><br><br />
                <center><font size="2">Reaching 47,000 Landscape Installation and <br />Maintenance Business Owners & Superintendents</font></center><br /><br />                                                                    
                  <center><INPUT TYPE="CHECKBOX" style="width:16px;height:16px" name="request2"   VALUE="LC Media Kit/Rates Package"  ><font size="3"><b>&nbsp;Yes!</b></font> <br /><font size="2">Send me the LCDBM Media Kit and Rates Packet!</font></center>
                </tr>                                                                   
                     <TR>                                                               
             <TD VALIGN="top">
	<br></br>
                  <center><br /><IMG SRC="/lol-logos/lo-DBMS-logo-800.jpg" width="310" ALT="Landscape Online" BORDER="0"></center><br><br />
                  <center><font size="2">The Largest Landscape Database on the Internet</font></center><br /><br /><br />
                  <center><INPUT TYPE="CHECKBOX" style="width:16px;height:16px" name="request4" VALUE="LO Media Kit/Rates Package"><font size="3
                  "><b>&nbsp;Yes!</b> <br /><font size="2">Send me the LandscapeOnine Media Kit <br />and Rates Packet!</font></center>
            </TD>                                                                       
            <td>
	<br></br>
              <center><IMG SRC="/lol-logos/lolw-logo.jpg" width="310" ALT="LandscapeOnline Weekly" BORDER="0" /></center><br /><br />
              <center><font size="2">Reaching 50,000 Commercial Landscape <br />Professionals Every Week</font></center><br /><br />
                  <center><INPUT TYPE="CHECKBOX" style="width:16px;height:16px" name="request6" VALUE="LOW Media Kit/Rates Package" ><font size="3"><b>&nbsp;Yes!</b></font> <br /><font size="2">Send me the LandscapeOnline Weekly Media Kit <br />and Rates Packet!</font></center>
            </td>
          </TR>
          
          <TR>                                                               
             <TD VALIGN="top">
	<br></br>
                  <center><IMG SRC="/lol-logos/TLE-2013-Logo-800.jpg" width="310" ALT="TLE" BORDER="0"></center><br><br />
                  <center><font size="2">The #1 Regional Trade Show and Educational 
<br />Conference for Landscape Decision Makers in <br />the South West</font></center><br /><br />
                  <center><INPUT TYPE="CHECKBOX" style="width:16px;height:16px" name="request7" VALUE="TLE Exhibitor Prospectus" ><font size="3"><b>&nbsp;Yes!</b> </font><br /><font size="2">Send me the Landscape Expo Media Kit <br />and Rates Packet!</font></center>
            </TD>                                                                       
            <td>
	<br></br>
          <center><IMG SRC="/lol-logos/LA-Expo-2014-GOLD.jpg" width="175" ALT="LAX" BORDER="0" /></center><br /><br />
          <center><font size="2">the western trade 
show and educational <br />conference 
for landscape architects, <br />specifiers & design 
professionals</font></center><br /><br />
                  <center><INPUT TYPE="CHECKBOX" style="width:16px;height:16px" name="request8" VALUE="LAX Exhibitor Prospectus" ><font size="3"><b>&nbsp;Yes!</b> </font><br /><font size="2">Send me the Landscape Architects' Expo Media Kit <br />and Rates Packet!</font></center>
            </td>
          </TR>
          
          <TR>                                                               
            <td align="top">
	<br></br>
    <center>
          <IMG SRC="/imgz/eblast_logo_sm.jpg" width="225" ALT="Landscape Superintendent &amp; Maintenance Professional" BORDER="0" /></center><br /><br />
          <center><font size="2">Demographic and/or Geographically Targeted <br />Email Marketing</font></center><br /><br />
                  <center><INPUT TYPE="CHECKBOX" style="width:16px;height:16px" name="request8" VALUE="LOL Media Kit/Rates Package" ><font size="3"><b>&nbsp;Yes!</b> </font><br /><font size="2">Send me the E-Blast Media Kit and Rates Packet!</font></center>
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
    <td><TEXTAREA COLS="36" NAME="note" ROWS="5" value="<?echo $note;?>"><?echo $note;?></TEXTAREA></td>
  </tr>
  <tr>
  	<td colspan="2"><br /><center><INPUT type="submit" value="Submit Advertising Request" ></center>
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
<?
include $include_path . "lol_footer2.inc";?>
