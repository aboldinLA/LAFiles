<?

//$thispath = "d:\\data\\rbdev\\landscapeonlinedev\\";

//define("thispath", "d:\\data\\web\\staging\\landscapeonline\\");

include_once $include_path . "class/common_class.inc";



include($file_path . "web/bin/linkpoint/lpphp.php3");



// include "D:\\Data\\rbdev\\landscapeOnlinedev\\web\\bin\\linkpoint\\lpphp.php3";



class store_Class extends Common_Class {

var $sec;

var $company_name;

var $website;

var $represent;

var $date;

var $words;

var $choise;

var $id;

var $myorder;

var $mylpphp;



// constructor

function store_class(&$db,$lbpath="")

{	

	$this->db=&$db;



	$this->mylpphp=new lpphp($lbpath);



	$this->myorder["host"]="secure.linkpt.net";

	$this->myorder["port"]="1139";

	$this->myorder["storename"]="610742";

	$this->myorder["configfile"]="610742";

	// $this->myorder["keyfile"]="D:\\Data\\rbdev\\landscapeOnlinedev\\includes\\class\\lol.pem";

	$this->myorder["keyfile"]= $file_path . "includes/class/lol.pem";

	//$this->myorder["result"] = "GOOD"; //testing

	$this->myorder["result"] = "";

	$this->myorder["debuglevel"] = "2";

	$this->myorder["userid"] = "web";

	$this->myorder["invalid_a"] = "secure";



}

function set_trasaction_info($myorder) {

	

	foreach ($myorder as $key=>$value) {



		$this->myorder[$key] = $value;	

	}



}

function commit_once($order_id) {

	

	//$pt . $id . "-" . time();	//$_SERVER["REMOTE_ADDR"];

	

	$myorder1["orderID"]="$order_id";

	$myorder1["host"]="secure.linkpt.net";

	$myorder1["port"]="1139";

	$myorder1["storename"]="610742";

	$myorder1["configfile"]="610742";

	// $myorder1["keyfile"]="D:\\Data\\rbdev\\landscapeOnlinedev\\includes\\class\\lol.pem";

	$myorder1["keyfile"]= $file_path . "includes/class/lol.pem";

	$myorder1["result"] = "GOOD";

	$myorder1["userid"] = "web";

	$myorder1["invalid_a"] = "secure";

	//$myorder1["trackingID"] = "12345678";

	$myorder1["Ip"]="63.206.232.206";//$_SERVER["REMOTE_ADDR"];

	//$myorder1["orders"][0]=$myorder_tmp;  

	$myresult=$this->mylpphp->BillOrder($myorder1);

	return $myresult;



}

function capturePayment() {



$myresult=$this->mylpphp->CapturePayment($this->myorder);

if ($myresult[statusCode] == 1) {	

    $datearr=getdate();

    $mydatestring=$datearr["year"].$datearr["mon"].$datearr["mday"];

    $mydatestring.=$datearr["hours"].$datearr["minutes"];

    $mydatestring.=$datearr["seconds"];



    // add random number

    // seed with microseconds since last "whole" second

    srand((double)microtime()*1000000);



	$randval=rand(1,30000);

$crlf="\r\n";

    //add filename prefix

    // $myfilename="D:\\Data\\web\\staging\\landscapeonline\\sessions\\TEMPFILE2_";

    $myfilename= $file_path . "sessions/TEMPFILE2_";

    $myfilename.="$mydatestring";

    $myfilename.="_";

    $myfilename.="$randval";



	

	$fp=fopen($myfilename,"w");

    if(!$fp)

      {

      $retarr["approved"]="ERROR";

      $retarr["error"]="Cannot open Temp File!<br>\n";

      return $retarr;

      }



    while (list($pkey, $pval) = each($this->myorder))

      {

      $myline="$pkey=$pval$crlf";

      fwrite($fp,$myline);

      }

    fclose($fp);	

	}

	

	$myresult['hld']=$mydatestring."_".$randval;

	

	return $myresult;

}

function commit_periodic($order_id,$chld) {

	if(strlen($chld) < 2) {

		echo("There doesn't appear to be a transaction associated with this user!<br>");

		echo("The order id given: $order_id<br>");

		echo("<br>");

		echo("This is likely caused by the vendor not completing the credit card process, or an attempt to repeat a transaction previously posted.  Please make sure this vendor is not listed as hotlink active if you have not verified their credit card billing.<br><br>");

		return(FALSE);

	}



	$myfilename= $file_path . "sessions/TEMPFILE2_" . $chld;

	$fp=fopen($myfilename,"r");



    if(!$fp) {

      $retarr["approved"]="ERROR";

      $retarr["error"]="Cannot open Temp File!<br>\n";

      return $retarr;

    }



  while (! feof($fp) )  {

    $Line =& fgets($fp);



    $Values =& explode('=', $Line);

    $LineArray = array();



    foreach ($Values as $Value)

    {

      $LineArray[] = $Value;

    }



    $this->myorder[$LineArray[0]]= $LineArray[1];

  }



  fclose($fp);

  unlink($myfilename);



	$this->myorder["oid"] = $order_id . "-P";

	$this->myorder["startdate"]= date("Ymd",strtotime("1 month"));//"20000914";

	$this->myorder["periodicity"]="m1";

	$this->myorder["installments"]=24;

	$this->myorder["threshold"]=3;

	$this->myorder["pbcomments"]="No comment for this one";

	$this->myorder["pbordertype"]="PbOrder_Submit";

	return $myresult=$this->mylpphp->SetPeriodic($this->myorder);      // send transaction

	

	



 	// uncomment this block if you want to see all returned output

/*	$cnt = count ($myresult);	

	for ($n = 0; $n < $cnt; $n++)

	{

		$line = each($myresult);	

		print ($line['key'] . "=" . $line['value'] . "<br>\n");	

	}

*/	// set OrderID to result from previous transaction

//$myorder["orderID"]=$myresult[orderID];





}







//**************************************************************************************

function type_class($sec)

{

     $query ="SELECT * FROM class_type WHERE id = $sec ";

	 $res =$this->db->query($query);

	 $data = $this->db->fetch_array($res);

		

	  echo $data['name'];



}//end function



//**************************************************************************************

function type($sec)

{

     $query ="SELECT * FROM class_type WHERE id = $sec ";

	 $res =$this->db->query($query);

	 $data = $this->db->fetch_array($res);

		

	RETURN $data['name'];



}//end function



//**************************************************************************************

function  list_all($sec)

{



       $query ="SELECT * FROM classifieds WHERE type_id = $sec AND active = 1 ORDER BY ad_title ";

	   $res =$this->db->query($query);

   

echo "<table CELLPADDING=5 align=center width=500>";

echo "<tr>";

echo "<td>";

   $i=1;

while($row=$this->db->fetch_array($res)){



    	if ($i %2) 

		{echo "<tr>";}		 

		

		           echo "<td valign=top bgcolor=#EFEFEF width=246 colspan=2 ><b>".$row['ad_title']."</b><br>";

				   echo $row['ad_text']."<br>";

				   	echo "<a href=store_mail.php?id=".$row['id']." >E-mail</a></td>";

			$i++;

			if ($i %2) 

			{echo "</tr>";}

		  }

		  echo "</td>";

	       echo "</tr>";

    	   echo "</table>";

}//end function



//******************************************************************************************

function enter_class($first_name, $last_name, $address, $city, $state, $zip, $email, $type_id, $ad_title, $ad_text)

{



	   $input = strtotime($today);

	   $expire = strtotime("+30 days");

	   $active = "0";



       $query = "INSERT INTO classifieds (first_name, last_name, address, city, state, zip, email, type_id, ad_title, ad_text, input, active, expire) VALUES ('$first_name', '$last_name', '$address', '$city', '$state', '$zip', '$email', '$type_id', '$ad_title', '$ad_text', '$input', '$active', '$expire')";

       $this->db->query($query);

	    return  $this->db->insert_id();





}//end function



//******************************************************************************************

function update_class($class_id,$first_name, $last_name, $address, $city, $state, $zip, $email, $type_id, $ad_title, $ad_text)

{

       $query = "UPDATE classifieds SET first_name = '$first_name', last_name = '$last_name', address = '$address', city = '$city', state = '$state', zip = '$zip', email = '$email', type_id = '$type_id', ad_title = '$ad_title', ad_text = '$ad_text' WHERE id = $class_id";

	    $this->db->query($query);

}// end function



//******************************************************************************************

function trans_input($ecom_trans_id,$class_id)

{

     $query = "UPDATE classifieds SET trans_id = '$ecom_trans_id' WHERE id = $class_id";

	 $this->db->query($query);



}//end function	 

//*******************************************************************************************

function get_info($id)

{

     $query ="SELECT * FROM classifieds  WHERE id = $id ";

	 $res =$this->db->query($query);

	 $data = $this->db->fetch_array($res);

		

	  return $data;





}



//*******************************************************************************************

function words($id)

{

     $query ="SELECT * FROM classifieds  WHERE id = $id ";

	 $res =$this->db->query($query);

	 $data = $this->db->fetch_array($res);

	

		

	 $title = $data['ad_title'];

	 $text = $data['ad_text'];



	   $tit = $title." ".$text;

		

		// Strip multiple whitespaces

		$IndexText = str_replace(".", " ", $tit);

		$IndexText = str_replace(",", " ", $tit) ;

		$IndexText = str_replace("'", " ", $tit);

		$IndexText = str_replace("\"", " ", $tit);



		$IndexText = str_replace("\n", " ", $tit);

		$IndexText = str_replace("\r", " ", $tit);

		$IndexText = preg_replace("(\s+)", " ", $tit);



		// Split text on whitespace

		$indexArray =& split( " ", $tit);



		// Count the total words in index text

		$totalWordCount = count( $indexArray );



		// Count the number of instances of each word

		$wordCountArray = array_count_values( $indexArray );



		// Strip double words

		//$indexArray = array_unique( $indexArray );



		// Count unique words

		$uniqueWordCount = count( $indexArray );

		 

		   

			return $uniqueWordCount;



}

//***********************************************************************************

function cost($id)

{

     $cost = $this->words($id);



   if ($cost < 10)

	   {

           echo $cost = 20;

	   

	   } else{

         

		  $bill = ($cost - 10);

             

           echo ($bill + 20);

	   }



}//end function



//***********************************************************************************

function view($query,$last_sort)

{

     

	 $res =$this->db->query($query);

global $srch_altcolor;

	$sortstr="<a href='".$PHP_SELF."?ls=".$last_sort."&sortby=";

			

				echo "<tr>";

				echo "<td>".$sortstr."expire'>Type of Ad</td>";

				echo "<td align=center>".$sortstr."ad_title'>Ad Title</a></td>";

				echo "<td align=center>".$sortstr."active'>Active</a></td>";

				echo "<td align=center>".$sortstr."trans_id'>Paid</a></td>";

				echo "<td align=center>".$sortstr."expire'>Date Entered</a><br>If in red ad expired</td>";

				echo "<td></td>";

				echo "<td></td>";

				echo "</tr>";

				$today = strtotime("today");

   $i=1;

  while($row=$this->db->fetch_array($res))

	{           $bg = "bgcolor= FFFFFF ";

    	       if ($i %2) 

		      { $bg = "bgcolor=".$srch_altcolor;}		 

		           

				   echo "<tr ".$bg.">";

		           echo "<td>".$this->type($row['type_id'])."</td>";

				   echo "<td align=center><!----<a href=all_ad.php?id=".$row['id'].">--->".$row['ad_title']."</td>";

				   if ($row['active'] == 0)

					   {

				           $ace = "no";

					   }else{

						   $ace ="yes";}

				   echo "<td align=center>".$ace."</td>";

				   if (is_numeric($row['trans_id']))

					   {

					      $pay = "yes";

				       }else{

					     $pay = "no";

					   }

				   echo "<td align=center>".$pay."</td>";

				   if ($row['expire']  < $today)

					{

				      echo "<td align=center><font color=FF0000>".date("M d Y ",$row['input'])."</font></td>";

				    }else{

				     echo "<td align=center>".date("M d Y ",$row['input'])."</td>";

					}

				  if ($row['active'] == 0)

					   {

				          echo "<td align=center><a href=class_action.php?action=act&id=".$row['id'].">Activate</td>";

					   }else{

						 echo "<td align=center><a href=class_action.php?action=deact&id=".$row['id'].">Deactivate</td>";

					  }

echo "<td align=center><a href=class_action.php?action=view&id=".$row['id']."><IMG SRC=\"/imgz/task_view.gif\" border=0 alt=view></a></td>";



	

		            echo "<td align=center><a href=class_action.php?action=delete&id=".$row['id']."><IMG SRC=\"/imgz/delete_task.gif\"  border=0 alt=delete></td>";		    



				   echo "</tr>";			

			

			$i++;

	}		

		



}

//******************************************************************************************

function class_delete($id)

{

       $query ="DELETE FROM classifieds WHERE id = $id ";

	  $res =$this->db->query($query);

}



//******************************************************************************************

function update($id,$choise)

{

	 $query ="UPDATE classifieds SET active = $choise WHERE id = $id ";

	 $res =$this->db->query($query);

       

}



//******************************************************************************************

function end_ad()

{

	$today = strtotime("today");



	$query ="SELECT * FROM classifieds WHERE expire < $today";

	$res =$this->db->query($query);



	 while($row=$this->db->fetch_array($res))

	{ 

       	 $this->update($row['id'],0);

	}  



}//end function





//*****************************************************************************************

function cass_mail($email,$mess,$ad_title) {



	$to = $email;

	$from =  "Landscaponline.com Classifieds";

	$subject = $ad_title;

	$body = $mess."\n".$mess2."\n".$mess3."\n".$mess4."\n".$mess5."\n";

	$this->send_mail($to, $subject, $body,"From: ".$from."\r\nReply-To: ".$from);



}// end







function count_words($ad_text) {

	$word_count = explode(" ",$ad_text);

	$total = count($word_count);

	if ( $total > 20 ) {

		$new_total = $total - 20;

		$amount_total = $new_total + 15;

		// $amount_total .= ".95";

		return $amount_total;

	} else {

		$amount_total = "15.00";

		return $amount_total;

	}

}		





}//end class

