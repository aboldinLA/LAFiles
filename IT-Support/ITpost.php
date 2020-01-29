<?php

	$name = $_POST['firstname'];
	$email2 = $_POST['email2'];
	$Problem01 = $_POST['Problem01'];
	$Priority = $_POST['Priority'];
	$name = $_POST['name'];
	$description = $_POST['description'];


	
	$to = 'mohalloran@landscapeonline.com';
	$subject = "IT - $Problem01";
	$msg = "$name is requesting the following IT work: \n" .
	"Type of Problem: $Problem01 \n" .
	"Priority: $Priority \n" .
	"Description: $description \n";
	
mail ($to, $subject, $msg, 'From:' . $email2);
	
	$to = 'sroe@landscapeonline.com';
	$subject = "IT - $Problem01";
	$msg = "$name is requesting the following IT work: \n" .
	"Type of Problem: $Problem01 \n" .
	"Priority: $Priority \n" .
	"Description: $description \n";
	
	
	
mail ($to, $subject, $msg, 'From:' . $email2);



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


<div style="position:absolute; left:125px; top:0px; padding:0px; width:625px; font-size:36px; color:#000; font-weight:bold">
	Your request has been sent.
</div>



<div style="position:absolute; left:75px; top:60px; padding:0px; width:650px; font-size:16px; color:#000" align="center">
	I will contact you with the time that I will be able to preform the task you have requested.<br />
	This will be dependent on the current IT schedule and priority of the request.<br /><br />
    <font style="font-size:18px; font-weight:bold"><a href="/IT-Support/calendar-jerry.php" target="_blank">View the IT schedule here.</a></font>
</div>



<? include  $include_path . "lol_footer2.inc" ?>
