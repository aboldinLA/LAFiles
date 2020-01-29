<?php include"lpphp.php3";

$mylpphp=new lpphp;



$myorder["host"]="staging.linkpt.net";

$myorder["port"]="1139";

$myorder["storename"]="000000"; 

$myorder["keyfile"]="./00000.pem"; 

$myorder["result"] = "GOOD";   



$myorder["cardNumber"]="4111-1111-1111-1111";

$myorder["cardExpMonth"]="01";

$myorder["cardExpYear"]="03";

$myorder["amount"]="9.99";



$myresult=$mylpphp->ApproveSale($myorder);	// send transaction



if ($myresult[statusCode] == 0)				// transaction failed, print the reason

	print "ApproveSale: statusMessage: $myresult[statusMessage]<br>\n";



else {									// success

	print "<pre>\n";

	print "ApproveSale: statusCode: $myresult[statusCode]\n";	

	print "ApproveSale: AVSCode: $myresult[AVSCode]\n";		

	print "ApproveSale: trackingID: $myresult[trackingID]\n";

	print "ApproveSale: orderID: $myresult[orderID]\n";	print "</pre>\n";

	}

?>