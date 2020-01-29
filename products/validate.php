<?php
#######################################################################
#				PHP Simple Captcha Script
#	Script Url: http://toolspot.org/php-simple-captcha.php
#	Author: Sunny Verma
#	Website: http://toolspot.org
#	License: GPL 2.0, @see http://www.gnu.org/licenses/gpl-2.0.html
########################################################################
session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
	
	$fname3 = $_POST['fname'];
	$lname3 = $_POST['lname'];
	$coname3 = $_POST['coname'];
	$zip3 = $_POST['zip'];
	$state3 = $_POST['state'];
	$email3 = $_POST['email'];
	$phone3 = $_POST['phone'];
	$comment3 = $_POST['comment'];
	$mainco3 = $_POST['mainco2'];
	$mainem3 = $_POST['mainem2'];
	$mainid3 = $_POST['mainid2'];
	
	header("location:https://landscapearchitect.com/products/prod-request-mail.php?fname4=" . $fname3 ."&lname4=". $lname3."&coname4=". $coname3."&zip4=". $zip3."&state4=". $state3."&email4=". $email3."&phone4=". $phone3."&comment4=". $comment3."&mainco4=". $mainco3."&mainem4=". $mainem3."&mainid4=". $mainid3);	

}
else
{
die("Wrong Code Entered");
}
?>