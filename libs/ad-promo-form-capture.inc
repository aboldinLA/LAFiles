<?php 

$pageName = substr($_SERVER['PHP_SELF'], 0, -4);
$pageName = substr($pageName, 10); 

$salesOne = ["Mark Pack", "111", "mpack@landscapearchitect.com"];
$salesTwo = ["Clint Phipps", "114", "cphipps@landscapearchitect.com"];


if(isset($_POST['submitButton'])){
	$pageName = substr($_SERVER['PHP_SELF'], 0, -4);
	$pageName = substr($pageName, 10); 

	$email = $_POST['email'];
	$to = 'all.sales@landscapeonline.com';
	$subject = 'Promo Info Request - ' . $pageName;
	$name = $_POST['firstName'] . ' ' . $_POST['lastName'];
	$company = $_POST['company'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$itemPurchased = $_POST['itemSelection'];
	$message = $_POST['message'];
	$msg = "$name is requesting information on the " . $pageName . ": \n\n".
				 "Name: $name \n".
				 "Company: $company \n".
				 "Email: $email \n".
				 "Phone: $phone \n\n".
				 "Item Selected: $itemPurchased \n\n".
				 "Message: $message";


	mail ($to, $subject, $msg, 'From:' . $email);
	
}


?>