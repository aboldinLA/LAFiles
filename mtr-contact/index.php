<?php
    include('lol_common.inc');
    $secthdr = 'Send to a Friend';
    include('lol_header2.inc');
?>
<style type="text/css">
<!--
.style6 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
}
.style7 {
	font-size: 24px;
	font-weight: bold;
}
.style8 {font-size: 14px}
.style9 {font-size: 16px}
.style10 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style12 {
	font-size: 14px;
	font-family: "Times New Roman", Times, serif;
}
-->
</style>

<table width='100%' border='0' cellpadding='5' cellspacing='5'>
    <tr>
        <td>
        
<div align="center"><img width="325" src="https://landscapearchitect.com/lol-logos/MRT-logo-325.jpg" /></div>
<p align="left" class="style6"><strong>Market Trends Report</strong><br />
  <span class="style8">The Market Trends Report from LandscapeOnline.com is a monthly economic forecast letter that connects readers to the latest trends and issues affecting landscape professionals. Using a contact list of experts in the industry who will contribute quotes and perspectives on economic news, the Market Trends Report features topics including:<br />
&bull; Changes in the Housing Market<br />
&bull; Construction Data <br />
&bull; Stock Market<br />
&bull; Mortgage Rates<br />
&bull; Employment and Consumer Price Index<br />
  Legislation affecting the landscape industry and your profession will always be on the forefront of this report along with environmental news, as the industry is going green. Look for these topics along with quotes from voices in the field for different perspectives.</span></p>
<p align="left" class="style6"><a href="https://landscapearchitect.com/research/article.php?id=12103" class="style9">Click here to view the May 2009 edition of the Market Trends Report</a><br />
  <a href="https://landscapearchitect.com/research/article.php?id=12128" class="style9">Click here to view the June 2009 edition of the Market Trends Report</a><br />
    <a href="https://landscapearchitect.com/research/article.php?id=12433" class="style9">Click here to view the August 2009 edition of the Market Trends Report</a></p>

</td>
  </tr>
</table>




<!-- STEP 1: Put the full URL to Tectite FormMail on your website in the 'action' value. -->
<form method="post" action="https://landscapearchitect.com/mtr-email.php" name="MTR-Email">
    <input type="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER" />

    <!-- STEP 2: Put your email address(es) in the 'recipients' value.
                 Note that you also have to allow this email address in the
                 $TARGET_EMAIL setting within formmail.php!
                 If you've set AT_MANGLE in FormMail, you can use it to hide email addresses from bots.
    -->
    <input type="hidden" name="recipients" value="mtr-infoEyYUHG8landscapeonline.com,webmasterEyYUHG8landscapeonline.com" />

    <!-- STEP 3: Specify required fields in the 'required' value -->
    <input type="hidden" name="required" value="name:Your Name,phone:Phone Number,email:Your email" />
    
        <!-- STEP 4: Put your subject line in the 'subject' value. -->
    <input type="hidden" name="subject" value="MTR Contact Info" />

    <!-- STEP 5: Put the URL to the page you want the user to redirect to in
        the 'good_url' value. This is a page that might say "Thanks for your
        submission!"
    -->
    <input type="hidden" name="good_url" value="" />



	<p align="left" class="style12"><span class="style7">Subscription Information:</span><br />
    To subscribe to the Market Trends Report for the introductory rate of $99.00 for 12 monthly issues or for more information, please enter your contact information below, or call (714) 979-5276 Ext. 113:</p>
    <div align="left">
      <span class="style10">Your Name:  </span> 
      <input type="text" name="name" />
      <br />
      <br />
    </div>
  <div align="left">
      <span class="style10">Phone Number:</span>
      <input type="text" name="phone" />
      <br />
      <br />
  </div>
    <div align="left">
      <span class="style10">Email Address:</span> 
      <input type="text" name="email" />
      <br />
      <br />
    </div>    
    <p align="left" class="style12">Thank you for your interest in the Market Trends Report. By submitting your email address a representive will contact you within two (2) working days.</p>
    
  <div align="left">
      <input type="submit" value="Submit" />
    </div>
</form>

<?    
    include('lol_footer.inc');
?>
