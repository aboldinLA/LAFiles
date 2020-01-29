<?php



# lpphp.php3

# A php CLASS to communicate with

# LinkPoint: LINKPOINT API

# via the LBIN executable binary

# v5.4.1 01may2001



class lpphp

  {

  var $crlf;

  var $lpapi;



  function lpphp()

    {

    //suppress almost all errors & warnings

    $oldv=error_reporting(16);

    $this->crlf="\r\n";

  //  $this->lpapi="../cgi-bin/lbin";		// enter path to your lbin here

  //$this->lpapi="D:\\data\\web\\staging\\landscapeonline\\web\\bin\\linkpoint\\lbin.exe";	// Win32	

	//$this->lpapi="c:\\php\\lbin.exe";

	 $this->lpapi="c:\\winnt\\system32\\inetsrv\\php\\lbin.exe";

	//$this->lpapi="../../web/bin/linkpoint/lbin.exe";

	}



  //translate function for the "EASYFUNCS"

  function forward_trans($myfwdarray)

    {

    $ftranslate["gateway"]="invalid_a";

    $ftranslate["hostname"]="host";

    $ftranslate["port"]="port";

    $ftranslate["storename"]="configfile";

    $ftranslate["orderID"]="oid";

    $ftranslate["amount"]="chargetotal";

    $ftranslate["cardNumber"]="cardnumber";

    $ftranslate["cardExpMonth"]="expmonth";

    $ftranslate["cardExpYear"]="expyear";

    $ftranslate["name"]="bname";

    $ftranslate["address"]="baddr1";

    $ftranslate["city"]="bcity";

    $ftranslate["state"]="bstate";

    $ftranslate["zip"]="bzip";

    $ftranslate["country"]="bcountry";

    $ftranslate["trackingID"]="refrencenumber";

    $ftranslate["backOrdered"]="invalid_b";

    $ftranslate["keyfile"]="keyfile";



    reset($myfwdarray);

    while(list($key, $value) = each ($myfwdarray))

      {

      $checkthis=$ftranslate[$key];

      if(ereg("[A-Za-z0-9]+",$checkthis ) )

        {

        unset($myfwdarray[$key]);

        $myrevarray[$checkthis]=$value;

        }

      else

        {

        $myrevarray["$key"]="$value";

        }

      }





    //make keyfile if none supplied

    $mykeyfile=$myrevarray["keyfile"];

    if(strlen($mykeyfile) < 1)

      {

      $mykeyfile=$myrevarray["configfile"];

      $mykeyfile.=".pem";

      $myrevarray["keyfile"]="$mykeyfile";

      }



    //make addr from baddr1 unless addr supplied

    $myavsaddr=$myrevarray["addr"];

    if(strlen($myavsaddr) < 1)

      {

      $myrevarray["addr"]=$myrevarray["baddr1"];

      }



    //fix up expyear

    $okexpyear=$myrevarray["expyear"];



    if($okexpyear > 1900)

      $okexpyear -=1900;



    if($okexpyear > 100)

      $okexpyear -=100;



    if(strlen($okexpyear) == 1)

      $okexpyear="0$okexpyear";



    $myrevarray["expyear"]=$okexpyear;



    //fix up expmonth

    $okexpmonth=$myrevarray["expmonth"];



    if(strlen($okexpmonth) == 1)

      $okexpymonth="0$okexpmonth";



    $myrevarray["expmonth"]=$okexpmonth;



    return $myrevarray;

    }





###########

# PROCESS #

###########



  function process($pdata,$mycf)

    {

    $crlf=$this->crlf;



    // generate random filename

    // start with date to this second.

    $datearr=getdate();

    $mydatestring=$datearr["year"].$datearr["mon"].$datearr["mday"];

    $mydatestring.=$datearr["hours"].$datearr["minutes"];

    $mydatestring.=$datearr["seconds"];



    // add random number

    // seed with microseconds since last "whole" second

    srand((double)microtime()*1000000);



	$randval=rand(1,30000);



    //add filename prefix

    $myfilename="D:\\data\\web\\staging\\landscapeonline\\sessions\\TEMPFILE_";

    $myfilename.="$mydatestring";

    $myfilename.="_";

    $myfilename.="$randval";



    //filename created - open temp file

    $fp=fopen($myfilename,"w");

    if(!$fp)

      {

      $retarr["approved"]="ERROR";

      $retarr["error"]="Cannot open Temp File!<br>\n";

      return $retarr;

      }



    while (list($pkey, $pval) = each($pdata))

      {

      $myline="$pkey=$pval$crlf";

      fwrite($fp,$myline);

      }

    fclose($fp);



    // make sure file was created

    if (! file_exists ("$myfilename"))

      {

      $retarr["approved"]="ERROR";

      $retarr["error"]="Cannot CREATE Temp File!<br>\n";

      return $retarr;

      }



    //send query to API

    $lpapi=$this->lpapi;

    exec("$lpapi $mycf $myfilename",$myresults,$retval);



    // delete temp file

    $delok=unlink($myfilename);

    // did we delete it OK?

    if($delok==0)

      {

	  print "<br>WARNING!  Unable to delete temp file";

      }



    if($retval!=0)

      {

      $retarr["approved"]="ERROR";

      $retarr["error"]="Error executing LBIN! " . $retval . "<br>\n";

      return $retarr;

      }



    $mycount=count($myresults);

    $myindex=0;

    while($myindex < $mycount)

      {

      $myline=$myresults[$myindex];

      list($good,$junk)=split("\r\n",$myline);

      list($best,$junk)=split("\n",$good);

      list ($execkey,$execval)=split('=',$best);

      $myindex++;

      $retarr["$execkey"]="$execval";

      }



    reset($retarr);

    return $retarr;

    }



###############################

# CAPTURE_PAYMENT (pre-auth)  #

###############################



  function CapturePayment($mydata)

    {

    $mydata["chargetype"]="PREAUTH";



    $mynewdata=$this->forward_trans($mydata);

    $myretv=$this->process($mynewdata,"ALLSTDIN");



    if(ereg("APPROVED", $myretv["approved"]))

      {

      $myrethash["statusCode"]=1;

      $myrethash["statusMessage"]=$myretv["error"];

      $myrethash["AVSCode"]=$myretv["code"];

      $myrethash["trackingID"]=$myretv["ref"];

      $myrethash["orderID"]=$myretv["ordernum"];

      }

    else

      {

      $myrethash["statusCode"]=0;

      $myrethash["statusMessage"]=$myretv["error"];

      }

    return $myrethash;

    }





#################

# RETURN_ORDER  #

#################



  function ReturnOrder($mydata)

    {

    $mydata["chargetype"]="CREDIT";



    $mynewdata=$this->forward_trans($mydata);

    $myretv=$this->process($mynewdata,"ALLSTDIN");



    if(ereg("APPROVED", $myretv["approved"]))

      {

      $myrethash["statusCode"]=1;

      }

    else

      {

      $myrethash["statusCode"]=0;

      $myrethash["statusMessage"]=$myretv["error"];

      }

    return $myrethash;

    }





################

# RETURN_CARD  #

################



  function ReturnCard($mydata)

    {

    $mydata["chargetype"]="CREDIT";



    $mynewdata=$this->forward_trans($mydata);

    $myretv=$this->process($mynewdata,"ALLSTDIN");



    if(ereg("APPROVED", $myretv["approved"]))

      {

      $myrethash["statusCode"]=1;

      $myrethash["statusMessage"]=$myretv["error"];

      $myrethash["trackingID"]=$myretv["ref"];

      }

    else

      {

      $myrethash["statusCode"]=0;

      $myrethash["statusMessage"]=$myretv["error"];

      }

    return $myrethash;

    }





###############

# BILL_ORDERS #

###############



function BillOrders ($myarg)

  {

  $ret=0;

  $idx=0;

  $count=count($myarg["orders"]);



  while ($idx < $count)

    {

	$myarg["orders"][$idx]["invalid_a"] = $myarg["invalid_a"];

	$myarg["orders"][$idx]["host"] = $myarg["host"];

	$myarg["orders"][$idx]["port"] = $myarg["port"];

	$myarg["orders"][$idx]["configfile"] = $myarg["configfile"];

	$myarg["orders"][$idx]["keyfile"] = $myarg["keyfile"];

	$myarg["orders"][$idx]["Ip"] = $myarg["Ip"];

	$myarg["orders"][$idx]["result"] = $myarg["result"];



        $this->BillOrder(&$myarg["orders"][$idx]);



	if($myarg["orders"][$idx]["statusCode"] == 1)

		{

		$ret++;

		}

	$idx++;

    }



  return $ret;

  }



#########################

# BILL_ORDER (postauth) #

#########################



  function BillOrder($mydata)

    {

    //process th eorders

    $mydata["chargetype"]="POSTAUTH";

    $myretv=$this->process($mydata,"ALLSTDIN");



    // show the results

    if(ereg("APPROVED", $myretv["approved"]))

      {

      $mydata["statusCode"]=1;

      }

    else

      {

      $mydata["statusCode"]=0;

      $mydata["statusMessage"]=$myretv["error"];

      print "Declined!<br>\n";

      }

    }





############################

# AUTHORIZE A SALE  (sale) #

############################



  function ApproveSale($mydata)

    {

    $mydata["chargetype"]="SALE";



    $mynewdata=$this->forward_trans($mydata);

    $myretv=$this->process($mynewdata,"ALLSTDIN");



    if(ereg("APPROVED", $myretv["approved"]))

      {

      $myrethash["statusCode"]=1;

      $myrethash["statusMessage"]=$myretv["error"];

      $myrethash["AVSCode"]=$myretv["code"];

      $myrethash["trackingID"]=$myretv["ref"];

      $myrethash["orderID"]=$myretv["ordernum"];

      }

    else

      {

      $myrethash["statusCode"]=0;

      $myrethash["statusMessage"]=$myretv["error"];

      }

    return $myrethash;

    }



######################

# CALCULATE SHIPPING #

######################



  function CalculateShipping($mydata)

    {

    $mydata["chargetype"]="SHIPPING";



    $mynewdata=$this->forward_trans($mydata);

    $myretv=$this->process($mynewdata,"ALLSTDIN");



    if(ereg("APPROVED", $myretv["approved"]))

      {

      $myrethash["statusCode"]=1;

      $myrethash["statusMessage"]=$myretv["error"];

      $myrethash["AVSCode"]=$myretv["code"];

      $myrethash["trackingID"]=$myretv["ref"];

      $myrethash["orderID"]=$myretv["ordernum"];

      $myrethash["shipping"]=$myretv["shipping"];

      }

    else

      {

      $myrethash["statusCode"]=0;

      $myrethash["statusMessage"]=$myretv["error"];

      }

    return $myrethash;

    }



#################

# CALCULATE TAX #

#################



  function CalculateTax($mydata)

    {

    $mydata["chargetype"]="TAX";



    $mynewdata=$this->forward_trans($mydata);

    $myretv=$this->process($mynewdata,"ALLSTDIN");



    if(ereg("APPROVED", $myretv["approved"]))

      {

      $myrethash["statusCode"]=1;

      $myrethash["statusMessage"]=$myretv["error"];

      $myrethash["AVSCode"]=$myretv["code"];

      $myrethash["trackingID"]=$myretv["ref"];

      $myrethash["orderID"]=$myretv["ordernum"];

      $myrethash["tax"]=$myretv["tax"];

      }

    else

      {

      $myrethash["statusCode"]=0;

      $myrethash["statusMessage"]=$myretv["error"];

      }

    return $myrethash;

    }



###########################

# VOID A SALE  (Voidsale) #

###########################



  function VoidSale($mydata)

    {

    $mydata["chargetype"]="VOIDSALE";



    $mynewdata=$this->forward_trans($mydata);

    $myretv=$this->process($mynewdata,"ALLSTDIN");



    if(ereg("APPROVED", $myretv["approved"]))

      {

      $myrethash["statusCode"]=1;

      $myrethash["statusMessage"]=$myretv["error"];

      $myrethash["AVSCode"]=$myretv["code"];

      $myrethash["trackingID"]=$myretv["ref"];

      $myrethash["orderID"]=$myretv["ordernum"];

      }

    else

      {

      $myrethash["statusCode"]=0;

      $myrethash["statusMessage"]=$myretv["error"];

      }

    return $myrethash;

    }



    ############################

    # Create a periodic bill   #

    ############################



  function SetPeriodic ($mydata)

    {

    $mydata["chargetype"]="periodic";



    $mynewdata=$this->forward_trans($mydata);

    $myretv=$this->process($mynewdata,"ALLSTDIN");



    if(ereg("APPROVED", $myretv["approved"]))

      {

      $myrethash["statusCode"]=1;

      $myrethash["statusMessage"]=$myretv["error"];

      $myrethash["AVSCode"]=$myretv["code"];

      $myrethash["trackingID"]=$myretv["ref"];

      $myrethash["orderID"]=$myretv["ordernum"];

      }

    else

      {

      $myrethash["statusCode"]=0;

      $myrethash["statusMessage"]=$myretv["error"];

      }

    return $myrethash;

    }



##################################

# Electronic check authorization #

##################################



  function VirtualCheck ($mydata)

    {

    $mydata["chargetype"]="checkauth";



    $mynewdata=$this->forward_trans($mydata);

    $myretv=$this->process($mynewdata,"ALLSTDIN");



    if(ereg("APPROVED", $myretv["approved"]))

      {

      $myrethash["statusCode"]=1;

      $myrethash["statusMessage"]=$myretv["error"];

      $myrethash["AVSCode"]=$myretv["code"];

      $myrethash["trackingID"]=$myretv["ref"];

      $myrethash["orderID"]=$myretv["ordernum"];

      }

    else

      {

      $myrethash["statusCode"]=0;

      $myrethash["statusMessage"]=$myretv["error"];

      }

    return $myrethash;

    }



  //end of class lpphp

  }



?>

