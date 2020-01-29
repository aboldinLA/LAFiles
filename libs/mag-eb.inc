<style type="text/css">
<!--
.style1 {
	font-family: "Times New Roman", Times, serif;
	font-size: 16px;
}
.style4 {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	font-size: 16px;
}
.style6 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
}
.style7 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 18px;
}
.style8 {font-size: 18px}
.style9 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 36px;
	font-weight: bold;
}
-->
</style>

<table width='100%' border='0' cellpadding='5' cellspacing='5'>
    <tr>
        <td>
        
<div align="center"><img width="250" src="https://landscapearchitect.com/ebull/eblast-logo.jpg" /></div>
<p class="style1" align="left"><strong><span class="style7">Grow with Email Marketing:</span><br />
  E-Blasts</strong> from LandscapeOnline.com are an ideal way to distribute targeted e-mail advertisements and product announcements directly into the inbox of thousands of potential Landscape Industry Professionals for just pennies per contact.</p>

<p align="left"><span class="style7">Ideal for:</span><br />
  <span class="style1"> <span class="style8">&bull;</span> New Product Announcements<br />
  <span class="style8">&bull;</span> Press Releases<br />
  <span class="style8">&bull;</span> Advertisements<br />
  <span class="style8">&bull;</span> Connecting with Customers</span><br />
  <span class="style1"><span class="style8">&bull;</span> Instant Results</span></p>
<p align="left" class="style6"><strong>What makes our E-blasts unique?</strong><br />
  <span class="style1">&bull; <u>No wasted circulation.</u> You select the demographics you would like to target. Demographic selections may be broad or targeted. For example, all Landscape Contractors in CA, AZ and NV.<br />
&bull; <u>We do not buy or sell our list.</u> LandscapeOnline.com has an in-house subscriptions department which manages our proprietary database of thousands of Landscape Professionals.<br />
&bull; <u>Custom design.</u> Have our art department produce a professionally formatted E-blast specifically for your E-Blast campaign.</span></p>
<p align="left" class="style1">Simply fill out the form below and a Sales Specialist will contact you.</p>
<p align="left" class="style1 style9">E-Blast Contact Form</p></td>
  </tr>
</table>




<!-- STEP 1: Put the full URL to Tectite FormMail on your website in the 'action' value. -->
<form method="post" action="https://landscapearchitect.com/eblast.php" name="SampleForm">
    <input type="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER" />

    <!-- STEP 2: Put your email address(es) in the 'recipients' value.
                 Note that you also have to allow this email address in the
                 $TARGET_EMAIL setting within formmail.php!
                 If you've set AT_MANGLE in FormMail, you can use it to hide email addresses from bots.
    -->
    <input type="hidden" name="recipients" value="ebullEyYUHG8landscapeonline.com,webmasterEyYUHG8landscapeonline.com" />

    <!-- STEP 3: Specify required fields in the 'required' value -->
    <input type="hidden" name="required" value="email:Your email address,realname:Your name" />

    <!-- STEP 4: Put your subject line in the 'subject' value. -->
    <input type="hidden" name="subject" value="Sample FormMail Testing" />

    <!-- STEP 5: Put the URL to the page you want the user to redirect to in
        the 'good_url' value. This is a page that might say "Thanks for your
        submission!"
    -->
    <input type="hidden" name="good_url" value="" />

<table width='100%' border='0' cellpadding='5' cellspacing='5'>
    <tr>
        <td>
        <p class="style4">Please enter your name:</p>        </td>
      <td><input type="text" name="realname" />
      </td>
    </tr>
    <tr>
        <td>
        <p class="style4">Please enter your email address:</p>        </td>
        <td><input type="text" name="email" />

        </td>
    </tr>

 
  <tr>
        <td valign="top">
        <p class="style1">Please add any additional information:</p>      </td>
        <td><textarea name="mesg" rows="10" cols="50"></textarea>
        </td>
    </tr>
    <tr>
        <td><input type="submit" value="Submit" /></td>
        <td></td>
    </tr>
</table>
</form>

<br>

 <!-- Social Links -->
	<table width="175">
    	<tr>
        	<td><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold">Follow us: </span></td>
        	<td><a href="<? echo $fbook ?>" target="_blank"><img src="https://landscapearchitect.com/lo-logo-s/facbook-logo.jpg" width="25" /></a></td>
            <td><a href="<? echo $twitter ?>" target="_blank"><img src="https://landscapearchitect.com/lo-logo-s/Twitter_logo_blue.jpg" width="25" /></a></td>
            <td><a href="<? echo $link ?>" target="_blank"><img src="https://landscapearchitect.com/lo-logo-s/linkedinicon.jpg" width="25" /></a></td>
    	</tr>
 	</table>  

<?    
    include('lol_footer.inc');
?>
     
