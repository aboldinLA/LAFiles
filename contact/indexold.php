<?
include "lol_common.inc";
include $include_path . "lol_header2.inc";
?>
<div id='pageBody'>
<?

if($REQUEST_METHOD=="POST")
{              
        		 
          $query = "INSERT INTO contact (subscribe, first_name,  last_name, area_code,  phone, email, note) VALUES('$subscribe', '$first_name', '$last_name', '$area_code', '$phone', '$email','$note')";
         $db->query($query);
      
		     $action="good";
	
}

if ($action=="good")
{?>
    <table width="100%" cellspacing="0" cellpadding="0"> 
	<TR> 
		<TD COLSPAN="3">
			<STRONG>Mail Sent Thank You</STRONG>
		</TD> 
	</TR> 
	<TR> 
		<TD ALIGN="center"  VALIGN="top" COLSPAN="3"><a href="contact.php">Back</a></TD> 
	</TR> 

</TABLE> 
<?}else{?>
<h1 id='pageTitle'>Contact LandscapeOnline</h1>
<form method="post"  action="<?echo $PHP_SELF?>" style='padding: 0; margin: 0;'>
 <table width="100%" cellspacing="0" cellpadding="0"> 
<tr><td><table cellspacing="3" cellpadding="0" width="100%">
	<input type="hidden" name="subscribe" value="<? echo $subscribe?>">
	<TR> 
		<td COLSPAN="2">
			Let us direct your question to the appropriate staff person.
			Click on the text link or logo of the division you wish to contact.
			<hr>		</td>
	</tr>
	<TR> 
		<td align="left">
			<a href="contact_mag.php?pub=lasn"><img border="0" src="/imgz/lasn_logo.jpg"></a>		</td>
		<td>
			<a href="contact_mag.php?pub=lasn">Click here to contact the staff at Landscape Architect &amp; Specifier News.</a>		</td>
	</tr>
	<TR> 
	<td colspan="2"><br></td>
	</tr>
	<TR>	
		<td align="left">
			<a href="contact_mag.php?pub=lcn"><img border="0" src="/imgz/lcm_logo.jpg"></a>		</td>
		<td>
			<a href="contact_mag.php?pub=lcn">Click here to contact the staff at Landscape Contractor - Design • Build • Maintain .</a>		</td>
	</tr>


	<TR>
	  <td colspan="2" align="left">&nbsp;</td>
	  </tr>
	<TR> 
		
		<td align="left">
			<a href="contact_lol.php"><img border="0" src="/imgz/lol_logo_sm.jpg"></a>		</td>
		<td>
			<a href="contact_lol.php">Click here to contact the staff at LandscapeOnLine.</a>		</td>
	</tr>

	<TR>
	  <td colspan="2" align="left">&nbsp;</td>
	  </tr>
	<TR> 
    
	<TR> 
		
		<td align="left">
			<a href="contact_lolw.php"><img src="/lol-logos/lol-logo-weekly.jpg" width="210" border="0"></a>		</td>
		<td>
			<a href="contact_lolw.php">Click here to contact the staff at LandscapeOnLine Weekly.</a>		</td>
	</tr>    
    
   	<TR> 
		
		<td align="left">
			<a href="contact_loleb.php"><img src="/lol-logos/eblast-logo2.jpg" height="75" border="0"></a>		</td>
		<td>
			<a href="contact_loleb.php">Click here to contact the staff Eblast Information.</a>		</td>
	</tr> 
    
    
    <TR> 
		
		<td align="left">
			<a href="contact_tle.php"><img border="0" src="/imgz/TLE-2009-blackletter-gold.jpg" width="210"></a>		</td>
		<td>
			<a href="contact_tle.php">Click here to contact the staff at Turfgrass and Landscape Expo.</a>		</td>
	</tr>
	<TR> 
	<td colspan="2"><br></td>
	</tr>
	<TR>	
		<td align="left">
			<a href="contact_mag.php?pub=lcn"><img src="/lol-logos/MRT-logo-325.jpg" width="210" border="0"></a>		</td>
		<td>
			<a href="mailto:mryan@landscapeonline.com">Click here to contact the staff at Market Trends Report.</a>		</td>
	</tr>
        <tr><td colspan='2'> <hr noshade /></td></tr>
    <tr>
        <td align='left' valign='top'><h2>Landscape Communications, Inc</h2></td>
        <td style='padding-left: 20px;' valign='top'>
            14771 Plaza Drive, Suite M <br />
            Tustin, CA 92780<br />
            (714) 979-5276 <br />        </td>
    </tr>
    <TR>
					<TD>
					To "Opt Out" of Faxes or LOL Weekly <strong>Contact Webmaster</strong>:
					<A href="mailto:webmaster@landscapeonline.com">webmaster@landscapeonline.com</A>					</TD>
				</TR>
</table></td></tr>
</TABLE> </form>
</div>
<?}?>
<? include $include_path . "lol_footer.inc"; ?>
