<?
include("lo_top-test.inc");
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

<!-- Old Code Start -->

<?php
?>
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

<table width='100%' border='0' cellpadding='5' cellspacing='5' style="font-size:16px">
    <tr>
        <td>
		<div align="center"><img width="250" src="https://landscapearchitect.com/ebull/eblast-logo.jpg" /></div>
		<p><span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:16px; font-weight:bold">Grow with Email Marketing:</span><br />
  		<strong>E-Blasts</strong> from LandscapeOnline.com are an ideal way to distribute targeted e-mail advertisements and product announcements directly into the inbox of thousands of potential Landscape Industry Professionals for just pennies per contact.</p><br>

		<p><span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:16px; font-weight:bold">Ideal for:</span></p>
        <ul style="position:relative; left:25px">
  			<li>New Product Announcements</li>
  			<li>Press Releases</li>
  			<li>Advertisements</li>
  			<li>Connecting with Customers</li>
  			<li>Instant Results</li>
        </ul><br>
  
		<p><span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:16px; font-weight:bold">What makes our E-blasts unique?</span><br />
  		<span class="style1">&bull; <u>No wasted circulation.</u> You select the demographics you would like to target. Demographic selections may be broad or targeted. For example, all Landscape Contractors in CA, AZ and NV.<br /><br>
		&bull; <u>We do not buy or sell our list.</u> LandscapeOnline.com has an in-house subscriptions department which manages our proprietary database of thousands of Landscape Professionals.<br /><br>
		&bull; <u>Custom design.</u> Have our art department produce a professionally formatted E-blast specifically for your E-Blast campaign.</span></p><br>
		<p align="left" class="style1">Simply fill out the form below and a Sales Specialist will contact you.</p><br>
		<p align="left" class="style1 style9">E-Blast Contact Form</p>
        </td>
	</tr>
</table><br>

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
      <td><input type="text" name="realname" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" />
      </td>
    </tr>
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
    <tr>
        <td>
        <p class="style4">Please enter your email address:</p>        </td>
        <td><input type="text" name="email" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" />

        </td>
    </tr>
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr> 
  <tr>
        <td valign="top">
        <p class="style1">Please add any additional information:</p>      </td>
        <td><textarea name="mesg" rows="10" cols="50" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"></textarea>
        </td>
    </tr>
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>    
    <tr>
        <td style="position:relative; left:310px"><input type="submit" value="Submit" style="height:20px; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888" /></td>
        <td></td>
    </tr>
</table>
</form>

<?    
?>


<!-- Old Code End -->

<!-- Spacing added to move footer down Start -->
<table>
	<tr>
    	<td style="line-height:100px">&nbsp;</td>
    </tr>
</table>
<!-- Spacing added to move footer down End -->
    
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
	<div class="bottom1">
	<? include $include_path . "lo_footer-main2.inc"; ?>
	</div>

</div>