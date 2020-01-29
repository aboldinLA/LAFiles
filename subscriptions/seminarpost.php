<?php

	$name = $_POST['firstname'] . ' ' . $_POST['lastname'];
	$email = $_POST['email'];
	$seminar01 = $_POST['seminar01'];
	$seminar02 = $_POST['seminar02'];
	$seminar03 = $_POST['seminar03'];
	$seminar04 = $_POST['seminar04'];
	$seminar05 = $_POST['seminar05'];
	$seminar06 = $_POST['seminar06'];
	$seminar24 = $_POST['seminar24'];
	$card = $_POST['card'];
	$ccn = $_POST['ccn'];
	$type_biz_other = $_POST['type_biz_other'];
	$type_biz_other2= $_POST['type_biz_other2'];
	$cardname = $_POST['cardname'];
	$billme = $_POST['billme'];
	$billme2 = $_POST['billme2'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zipcode = $_POST['zipcode'];
	$phone = $_POST['phone'];
	$promo = $_POST['promo'];
	$seminarNum = $_POST['seminarNum'];
	$seminarNum2 = $_POST['seminarNum2'];
	$compname = $_POST['compname'];
	$addressB3 = $_POST['addressB3'];
	$cityB3 = $_POST['cityB3'];
	$stateB3 = $_POST['stateB3'];
	$zipB3 = $_POST['zipB3'];	

	
	$to = 'mohalloran@landscapeonline.com';
	$subject = 'TLE Seminars';
	$msg = "$name is requesting the following TLE seminars: \n" .
	"Seminar Oct. 10/9-11 AM: $seminar01 \n" .
	"Seminar Oct. 10/12:15-2:15 PM: $seminar02 \n" .
	"Seminar Oct. 10/3:30-5:30 PM: $seminar03 \n" .
	"Seminar Oct. 11/9-11 AM AM: $seminar04 \n" .
	"Seminar Oct. 11/12:15-2:15 PM: $seminar05 \n" .
	"Seminar Oct. 11/3:30-5:30 PM: $seminar06 \n" .
	"No Seminars Now: $seminar24 \n" .
	"Attendee Name: $name \n" .
	"Company Name: $compname \n" .
	"Number of Seminars: $seminarNum \n" .
	"Seminars Deal: $seminarNum2 \n" .
	"Bill My: $billme \n" .
	"Type of Card: $card \n" .
	"CC Number: $ccn \n" .
	"Card Expiration Month: $type_biz_other \n" .
	"Card Expiration Year: $type_biz_other2 \n" .
	"Name on Card: $cardname \n" .
	"My Billing Address is: $billme2 \n" .
	"Billing Address: $address \n" .
	"City: $city \n" .
	"State: $state \n" .
	"Zip: $zipcode \n" .
	"Contact Phone: $phone \n" .
	"Address Same AS: $addressB3 \n" .
	"City Same AS: $cityB3 \n" .
	"State Same AS: $stateB3 \n" .
	"Zip Same AS: $zipB3 \n" .
	"Promo Code: $promo";
	
mail ($to, $subject, $msg, 'From:' . $email);


	$to = 'cmccarthy@landscapeonline.com';
	$subject = 'TLE Seminars';
	$msg = "$name is requesting the following TLE seminars: \n" .
	"Seminar Oct. 10/9-11 AM: $seminar01 \n" .
	"Seminar Oct. 10/12:15-2:15 PM: $seminar02 \n" .
	"Seminar Oct. 10/3:30-5:30 PM: $seminar03 \n" .
	"Seminar Oct. 11/9-11 AM AM: $seminar04 \n" .
	"Seminar Oct. 11/12:15-2:15 PM: $seminar05 \n" .
	"Seminar Oct. 11/3:30-5:30 PM: $seminar06 \n" .
	"No Seminars Now: $seminar24 \n" .
	"Attendee Name: $name \n" .
	"Company Name: $compname \n" .
	"Number of Seminars: $seminarNum \n" .
	"Seminars Deal: $seminarNum2 \n" .
	"Bill My: $billme \n" .
	"Type of Card: $card \n" .
	"CC Number: $ccn \n" .
	"Card Expiration Month: $type_biz_other \n" .
	"Card Expiration Year: $type_biz_other2 \n" .
	"Name on Card: $cardname \n" .
	"My Billing Address is: $billme2 \n" .
	"Billing Address: $address \n" .
	"City: $city \n" .
	"State: $state \n" .
	"Zip: $zipcode \n" .
	"Contact Phone: $phone \n" .
	"Address Same AS: $addressB3 \n" .
	"City Same AS: $cityB3 \n" .
	"State Same AS: $stateB3 \n" .
	"Zip Same AS: $zipB3 \n" .
	"Promo Code: $promo";
	
mail ($to, $subject, $msg, 'From:' . $email);


?>
<?
    include "lol_common.inc";
    include $include_path . "lol_header2-show-tle.inc";
        $uid=$_SESSION['uid'];

    if ($action == "edit") {
        $subscribe =$_SESSION['subscribe_list'];
        $protype=$_SESSION['protype_list'];
        $uid=$_SESSION['uid'];
    }
    if ($subscribe == "lasn") {	
        $logo = "lasn_logo.jpg";
        $name = "Landscape Architect Magazine ";
    } elseif ($subscribe == "lcm") {
        $logo = "lcm_logo.jpg";	
        $name = "Landscape Contractor Magazine ";
    } else {
        $logo = "main_lol_logo.gif";
        $name = "LandscapeOnLine.com";
    }
?>

</td>
</table>

<p>&nbsp;</p>
<div style="position:absolute; left:180px; top:20px; padding:0px; width:450px">
        <center><img src="https://landscapearchitect.com/lol-logos/TLE-2013-Logo-800.jpg" width="450"></center>
</div>



<div style="position:absolute; left:275px; top:170px; padding:0px; width:625px; font-size:48px; color:#000; font-weight:bold">
	Thank You!
</div>

<div style="position:absolute; left:60px; top:230px; padding:0px; width:700px; font-size:28px; color:#000; font-weight:bold; text-align:center">
	For Pre-Registering for FREE Admission<br />
	to the 2013 Landscape Expo Exhibit Hall!
</div>

<!-- <div style="position:absolute; left:100px; top:230px; padding:0px; width:625px; font-size:18px; color:#000; font-weight:bold; text-align:center">
	Your exhibit hall registration and seminar request<br />
have been accepted and are being processed!
</div> -->
    
<div style="position:absolute; left:150px; top:325px; padding:0px; width:500px; font-size:16px; color:#000" align="center">
	You will begin to  receive regular updates sent to your email address<br />
	and you can pick up your Expo BADGE at the Pre-Registration Booth<br />
	at the TLE Expo in Long Beach
</div>

<div style="position:absolute; left:150px; top:400px; padding:0px; width:500px; font-size:16px; color:#000" align="center">
	<u><strong>If You Also Reserved A Seminar(s)</strong></u> and/or took advantage of<br />
the special Courtyard Marriott Long Beach Hotel rate,<br />
 you will be contacted within 5 working days.
</div>


<div style="position:absolute; left:110px; top:480px; padding:0px; width:600px; font-size:16px; color:#000" align="center">
	If you have not signed up for any seminars, you can do so at anytime<br />
by visiting the <a href="https://landscapearchitect.com/tcart/index.php?main_page=index&cPath=95_96">E-Store</a>, which has a complete listing<br />
of TLE Seminars and Conference Packages. 
</div>



<? include  $include_path . "lol_footer2-show.inc" ?>
