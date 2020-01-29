<?php

	$name = $_POST['firstname'] . ' ' . $_POST['lastname'];
	$email = $_POST['email'];
	$seminar01 = $_POST['seminar01'];
	$seminar02 = $_POST['seminar02'];
	$seminar03 = $_POST['seminar03'];
	$seminar04 = $_POST['seminar04'];
	$seminar05 = $_POST['seminar05'];
	$seminar06 = $_POST['seminar06'];
	$seminar07 = $_POST['seminar07'];
	$seminar08 = $_POST['seminar08'];
	$seminar09 = $_POST['seminar09'];
	$seminar10 = $_POST['seminar10'];
	$seminar11 = $_POST['seminar11'];
	$seminar12 = $_POST['seminar12'];
	$seminar13 = $_POST['seminar13'];
	$seminar14 = $_POST['seminar14'];
	$seminar15 = $_POST['seminar15'];
	$seminar15A = $_POST['seminar15A'];
	$seminar16 = $_POST['seminar16'];
	$seminar17 = $_POST['seminar17'];
	$seminar18 = $_POST['seminar18'];
	$seminar19 = $_POST['seminar19'];
	$seminar20 = $_POST['seminar20'];
	$seminar21 = $_POST['seminar21'];
	$seminar22 = $_POST['seminar22'];
	$seminar23 = $_POST['seminar23'];
	$seminar24 = $_POST['seminar24'];
	$card = $_POST['card'];
	$ccn = $_POST['ccn'];
	$type_biz_other = $_POST['type_biz_other'];
	$type_biz_other2= $_POST['type_biz_other2'];
	$cardname = $_POST['cardname'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zipcode = $_POST['zipcode'];
	$phone = $_POST['phone'];
	$seminarNum = $_POST['seminarNum'];
	$compname = $_POST['compname'];

	
	$to = 'mohalloran@landscapeonline.com';
	$subject = 'TLE Seminars';
	$msg = "$name is requesting the following TLE seminars: \n" .
	"Seminar 10-12/8-9:30 AM: $seminar01 \n" .
	"Seminar 10-12/9-10:30 AM: $seminar02 \n" .
	"Seminar 10-12/9-11 AM: $seminar03 \n" .
	"Seminar 10-12/9:30-11 AM: $seminar04 \n" .
	"Seminar 10-12/11-12:30 PM: $seminar05 \n" .
	"Seminar 10-12/11:30-1 PM: $seminar06 \n" .
	"Seminar 10-12/12-2 PM: $seminar07 \n" .
	"Seminar 10-12/12:30-2 PM: $seminar08 \n" .
	"Seminar 10-12/1-2:30 PM: $seminar09 \n" .
	"Seminar 10-12/1-3 PM: $seminar10 \n" .
	"Seminar 10-12/2-3:30 PM: $seminar11 \n" .
	"Seminar 10-13/8-9:30 AM: $seminar12 \n" .
	"Seminar 10-13/9-10:30 AM: $seminar13 \n" .
	"Seminar 10-13/9-11 AM: $seminar14 \n" .
	"Seminar 10-13/9:30-11 AM: $seminar15 \n" .
	"Seminar 10-13/9:30-11:30 AM: $seminar15A \n" .
	"Seminar 10-13/11-12:30 PM: $seminar16 \n" .
	"Seminar 10-13/11:30-1:30 PM: $seminar17 \n" .
	"Seminar 10-13/12-1:30 PM: $seminar18 \n" .
	"Seminar 10-13/12:30-2 PM: $seminar19 \n" .
	"Seminar 10-13/1-2:30 PM: $seminar20 \n" .
	"Seminar 10-13/1-3 PM: $seminar21 \n" .
	"Seminar 10-13/1:30-3 PM: $seminar22 \n" .
	"Seminar 10-13/2-3:30 PM: $seminar23 \n" .
	"No Seminars Now: $seminar24 \n" .
	"Attendee Name: $name \n" .
	"Company Name: $compname \n" .
	"Number of Seminars: $seminarNum \n" .
	"Type of Card: $card \n" .
	"CC Number: $ccn \n" .
	"Card Expiration Month: $type_biz_other \n" .
	"Card Expiration Year: $type_biz_other2 \n" .
	"Name on Card: $cardname \n" .
	"Billing Address: $address \n" .
	"City: $city \n" .
	"State: $state \n" .
	"Zip: $zipcode \n" .
	"Contact Email: $email \n" .
	"Contact Phone: $phone";
	
mail ($to, $subject, $msg, 'From:' . $email);


	$to = 'cmccarthy@landscapeonline.com';
	$subject = 'TLE Seminars';
	$msg = "$name is requesting the following TLE seminars: \n" .
	"Seminar 10-12/8-9:30 AM: $seminar01 \n" .
	"Seminar 10-12/9-10:30 AM: $seminar02 \n" .
	"Seminar 10-12/9-11 AM: $seminar03 \n" .
	"Seminar 10-12/9:30-11 AM: $seminar04 \n" .
	"Seminar 10-12/11-12:30 PM: $seminar05 \n" .
	"Seminar 10-12/11:30-1 PM: $seminar06 \n" .
	"Seminar 10-12/12-2 PM: $seminar07 \n" .
	"Seminar 10-12/12:30-2 PM: $seminar08 \n" .
	"Seminar 10-12/1-2:30 PM: $seminar09 \n" .
	"Seminar 10-12/1-3 PM: $seminar10 \n" .
	"Seminar 10-12/2-3:30 PM: $seminar11 \n" .
	"Seminar 10-13/8-9:30 AM: $seminar12 \n" .
	"Seminar 10-13/9-10:30 AM: $seminar13 \n" .
	"Seminar 10-13/9-11 AM: $seminar14 \n" .
	"Seminar 10-13/9:30-11 AM: $seminar15 \n" .
	"Seminar 10-13/11-12:30 PM: $seminar16 \n" .
	"Seminar 10-13/11:30-1:30 PM: $seminar17 \n" .
	"Seminar 10-13/12-1:30 PM: $seminar18 \n" .
	"Seminar 10-13/12:30-2 PM: $seminar19 \n" .
	"Seminar 10-13/1-2:30 PM: $seminar20 \n" .
	"Seminar 10-13/1-3 PM: $seminar21 \n" .
	"Seminar 10-13/1:30-3 PM: $seminar22 \n" .
	"Seminar 10-13/2-3:30 PM: $seminar23 \n" .
	"No Seminars Now: $seminar24 \n" .
	"Attendee Name: $name \n" .
	"Company Name: $compname \n" .
	"Number of Seminars: $seminarNum \n" .
	"Type of Card: $card \n" .
	"CC Number: $ccn \n" .
	"Card Expiration Month: $type_biz_other \n" .
	"Card Expiration Year: $type_biz_other2 \n" .
	"Name on Card: $cardname \n" .
	"Billing Address: $address \n" .
	"City: $city \n" .
	"State: $state \n" .
	"Zip: $zipcode \n" .
	"Contact Email: $email \n" .
	"Contact Phone: $phone";
	
mail ($to, $subject, $msg, 'From:' . $email);


?>
<?
    include "lol_common.inc";
    include $include_path . "lol_header2.inc";
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

<div style="position:absolute; left:135px; top:0px; padding:0px; width:475px">
        <img src="https://landscapearchitect.com/subscriptions/images/list-back-tle3.jpg">
</div>


<div style="position:absolute; left:400px; top:170px; padding:0px; width:625px; font-size:48px; color:#000; font-weight:bold">
	Thank You!
</div>

<div style="position:absolute; left:185px; top:230px; padding:0px; width:700px; font-size:28px; color:#000; font-weight:bold; text-align:center">
	For Registering for the 2011 Landscape Expo Seminars!
</div>

<div style="position:absolute; left:225px; top:275px; padding:0px; width:625px; font-size:18px; color:#000; font-weight:bold; text-align:center">
	Your seminar request have been accepted and are being processed!
</div>
    
<div style="position:absolute; left:350px; top:350px; padding:0px; width:450px; font-size:16px; color:#000">
	You will receive a confirmation email within 10 days.
</div>

<div style="position:absolute; left:235px; top:400px; padding:0px; width:600px; font-size:16px; color:#000; text-align:center">
	If you have not signed up for any seminars, you can do so at anytime,<br />
by visiting our E-Store, which has a complete listing of the TLE Seminars. 
</div>



<? include  $include_path . "lol_footer.inc" ?>
