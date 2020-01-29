<?php

	$company = $_POST['company'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$staff = $_POST['staff'];


	
	$to = 'jshort@landscapeonline.com';
	$subject = 'LAX-LB 2015';
	$msg = "$company is requesting the following Exhibitors: \n" .
	"Company Name: $company \n" .
	"Primary Contact: $contact \n" .
	"Primary Contact Email: $email \n" .
	"Primary Contact Phone Number: $telephone \n" .
	"Company Address: $address \n" .
	"City: $city \n" .	
	"State: $state \n" .	
	"Zip Code: $zip \n" .
	"Additional Staff: $staff \n";

	
	
mail ($to, $subject, $msg, 'From:' . $email);

	$to = 'adeane@landscapeonline.com';
	$subject = 'LAX-LB 2015';
	$msg = "$company is requesting the following Exhibitors: \n" .
	"Company Name: $company \n" .
	"Primary Contact: $contact \n" .
	"Primary Contact Email: $email \n" .
	"Primary Contact Phone Number: $telephone \n" .
	"Company Address: $address \n" .
	"City: $city \n" .	
	"State: $state \n" .	
	"Zip Code: $zip \n" .
	"Additional Staff: $staff \n";

	
	
mail ($to, $subject, $msg, 'From:' . $email);

	$to = 'ecook@landscapeonline.com';
	$subject = 'LAX-LB 2015';
	$msg = "$company is requesting the following Exhibitors: \n" .
	"Company Name: $company \n" .
	"Primary Contact: $contact \n" .
	"Primary Contact Email: $email \n" .
	"Primary Contact Phone Number: $telephone \n" .
	"Company Address: $address \n" .
	"City: $city \n" .	
	"State: $state \n" .	
	"Zip Code: $zip \n" .
	"Additional Staff: $staff \n";

	
	
mail ($to, $subject, $msg, 'From:' . $email);


    include "lol_common.inc";
    include $include_path . "lol_header2-show-lax-2015.inc";

?>

 <!-- Add Content Below this line--> 
  <div class="lax-container"> 
  <div class="clear"></div>
  <div align="center">
    
  <div align="left" class="left1">
  
<?
include $include_path . "lax-show-left-panel-2015.inc";
?>
</div>
  
  <div class="center1">
  <div align="center">

 <!-- Add Content Below this line--> 
  
  
<div style="width:600px">
     <center><img src="https://landscapearchitect.com/lol-logos/LDX-LB-2015-w_tag-BIG.jpg" width="450"></center>
</div>



<div style="width:600px; font-size:48px; color:green; font-weight:bold">
	Thank You!
</div>

<div style="width:600px; font-size:28px; color:#000; font-weight:bold; text-align:center">
	For Pre-Registering Your Booth Staff<br /><br />

	<span style=" font-family:'Times New Roman', Times, serif; font-size:16px">Take advantage of extra publicity! we have several different options that will increase the visibility of your brand as well as your booth. Please contact us for details.<br /><br />
    
    <a href="https://landscapearchitect.com/research/LASN-Expo/Sponsor-Opportunities-2015.php">Click here</a> for sponsorship opportunities.<br /><br />
    
    To reserve a space for  product giveaways, the new product showcase <br />
or banner ad marketing, <a href="https://landscapearchitect.com/research/LASN-Expo/New-Marketing-Opportunities-2014.php">Click Here.</a></span>

</div><br />





 <!-- Add Content Above this line --> 
</div>
</div>
    
  <div class="right1">
  <div style=" position:absolute; left:785px; top:10px">
  
  

<?
include $include_path . "lax-show-right-panel-2015.inc";
?>
</div>

</div>    
 
    


  


<? include  $include_path . "lol_footer2-show-lax-2015.inc" ?>
