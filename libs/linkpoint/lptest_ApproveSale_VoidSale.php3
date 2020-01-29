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

**

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





// If orderID param is empty or missing

// a CSI order number will be assigned



$myorder["orderID"]="11223349";

$myorder["subtotal"]="20.99";

$myorder["tax"]="3.50";

$myorder["shipping"]="5.00";

$myorder["amount"]="29.49";



/****************    ApproveSale    *************************

**

**      This function performs a sale and marks it as

**      as shipped, thus physically transferring funds. Its

**      purpose is for transactions where the customer has

**      received the goods or services and the charge is

**      to be made immediately.

*************************************************************/





$myresult=$mylpphp->ApproveSale($myorder);	// send transaction



if ($myresult[statusCode] == 0)		// transaction failed, print the reason

	print "ApproveSale: statusMessage: $myresult[statusMessage]<br>\n";



else {		// success

	print "<pre>\n";

	print "ApproveSale: statusCode: $myresult[statusCode]\n";	

	print "ApproveSale: AVSCode: $myresult[AVSCode]\n";		

	print "ApproveSale: trackingID: $myresult[trackingID]\n";

	print "ApproveSale: orderID: $myresult[orderID]\n";	print "</pre>\n";

	}



 	// uncomment this block if you want to see all returned output

/*	$cnt = count ($myresult);	

	for ($n = 0; $n < $cnt; $n++)

	{

		$line = each($myresult);	

		print ($line['key'] . "=" . $line['value'] . "<br>\n");	

	}

*/	







// set OrderID to result from previous transaction

$myorder["orderID"]=$myresult[orderID];



	

/**********	Void Sale   *********************

**	Undoes the previous transaction. 

** 	(If the previous was unsuccessful,       

**	this plainly will not succeed)

**

*************************************************/



$myresult=$mylpphp->VoidSale($myorder);



if ($myresult[statusCode] == 0)		// transaction failed, print the reason

	print "<br><br>VoidSale: statusMessage: $myresult[statusMessage]\n";



else {		// success

	print "<pre><br><br>\n";

  	print "VoidSale: statusCode: $myresult[statusCode]\n";

	print "</pre>\n";

	}



?>