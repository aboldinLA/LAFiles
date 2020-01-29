<?php include"lpphp.php3";

$mylpphp=new lpphp;



/* The first 5 parameters must be modified to reflect the

** information provided to you for YOUR store

**

** result should be set to LIVE when doing

** live transactions on https://secure.linkpt.net

*/



$myorder["host"]="staging.linkpt.net";

$myorder["port"]="1139";

$myorder["storename"]="000000"; 

$myorder["keyfile"]="./000000.pem"; 

$myorder["result"] = "GOOD";    





/* These parameters are for test purposes only.  In

** your implementation, they will reflect the information

** needed for your specific transactions

**3

** NOTE: setting the test email address to your own email

** address will result in the receipt email being sent

** to you, which will help to know that the script is

** functioning properly.

*/



$myorder["cardNumber"]="4111-1111-1111-1111";

$myorder["cardExpMonth"]="01";

$myorder["cardExpYear"]="03";

$myorder["name"]="Jane Doe";

$myorder["email"]="test@some-corp.com";

$myorder["phone"]="212-555-1212";

$myorder["address"]="123 5th St.";

$myorder["city"]="Los Angeles";

$myorder["state"]="CA";

$myorder["zip"]="90012";

$myorder["country"]="US";

$myorder["Ip"]="127.0.0.1";



$myorder["taxtotal"]="99.99";

$myorder["taxstate"]="CA";

$myorder["taxzip"]="91504";



$myresult=$mylpphp->CalculateTax($myorder);



if ($myresult[statusCode] == 0)		// transaction failed, print the reason

	print "CalculateTax: statusMessage: $myresult[statusMessage]<br>\n";



else {		// success

	print "<pre>\n";

	print "CalculateTax: statusCode: $myresult[statusCode]\n";

	print "CalculateTax: tax: $myresult[tax]\n";

	print "</pre>\n";

	}  



?>