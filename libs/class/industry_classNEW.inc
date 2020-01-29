<?

include_once $include_path . "class/common_class.inc";

class industry_Class extends Common_Class

{

var $sec;

var $company_name;

var $website;

var $represent;

var $date;

var $words;

var $choise;

var $id;





// constructor

function industry_class(&$db)

{	

	$this->db=&$db;

}

function save_pass($uid, $pass) {

	$time_start = time();

	$query = "INSERT INTO assoc_login (uid, pass, time_start) VALUES ('$uid','$pass','$time_start')";

	$this->db->query($query);



}



//*****************************************************************************************

function set_data($id)

{

	

	$query ="SELECT * FROM assoc_event WHERE id = $id";

		$result = $this->db->query($query);

	if($this->db->num_rows($result) == 1)

	{

		$data = $this->db->fetch_array($result);

	   

		$this->uid =$data['id']; 

		$this->type_event = $data['type_event'];

	    $this->eta_time = $data['input'];

		$this->active = $data['active'];

		$this->place = $data['place'];

		$this->contact = $data['contact'];

		$this->name = $data['event_name'];

		$this->fee = $data['fee'];

		$this->status = $data['active'];

	}

}



//******************************************************************************************

 function enter_associat($local,$association,$acronym,$address,$city,$state,$zip,$toll,$areafax,$fax,$web,$email,$mkfirst,  

 $mklast,$mkarea,$mkphone,$mkmail,$prfirst,$prlast,$prarea,$prphone,$prmail,$exfirst,$exlast,$exarea, $exphone,$exmail,

 $drfirst,$drlast,$drarea,$drphone,$drmail) {

    $active = "0"; 

	$today = strtotime("today");

	$send = "0";

	

	$query = "INSERT INTO associations (local, association, acronym, address, city, state, zip, toll, area_fax, fax, web, ".

			"email, mkfirst, mklast, mkarea, mkphone, mkmail, prfirst, prlast, prarea, prphone, prmail, " .

			"exfirst, exlast, exarea, exphone,exmail,drfirst,drlast,drarea,drphone,drmail,active,input,send) " .

			"VALUES ('$local', '$association', '$acronym', '$address', '$city', '$state', '$zip', '$toll', " .

			"'$areafax', '$fax', '$web', '$email', '$mkfirst',   '$mklast', '$mkarea', '$mkphone', '$mkmail', ".

			"'$prfirst', '$prlast', '$prarea', '$prphone', '$prmail', '$exfirst', '$exlast', '$exarea',  '$exphone',".

			"'$exmail', '$drfirst', '$drlast', '$drarea', '$drphone', '$drmail', '$active', '$today', '$send')";

		$result = $this->db->query($query);

	   if (!$result) echo $this->db->error();

	 		

	 return $this->db->insert_id();     

 }



 //*****************************************************************************************

 function update_associat($local,$association,$acronym, $address,$city,$state,$zip,$next_zip,$toll ,

 $area_fax,$fax,$web ,$email,$mkfirst,$mklast,$mkarea,$mkphone,$mkmail,$prfirst,$prlast,$prarea,$prphone,

 $prmail,$exfirst,$exlast,$exarea, $exphone,$exmail,$drfirst,$drlast,$drarea,$drphone,$drmail,$publication,$members,$uid){

	 $send = 0;

      $query ="UPDATE associations SET local = '$local', association = '$association', acronym = '$acronym', address = '$address', " .

      "city = '$city', state = '$state', zip = '$zip', next_zip = '$next_zip', toll = '$toll' , area_fax = '$area_fax', fax = '$fax', ".

      "web = '$web', email = '$email', mkfirst = '$mkfirst', mklast = '$mklast', mkarea = '$mkarea', mkphone = '$mkphone', mkmail = '$mkmail', " .

      "prfirst = '$prfirst', prlast = '$prlast', prlast = '$prlast', prarea = '$prarea', prphone = '$prphone', prmail = '$prmail', exfirst= '$exfirst'," .

      "exlast = '$exlast', exarea = '$exarea', exphone = '$exphone', exmail = '$exmail', drfirst= '$drfirst',drlast = '$drlast',drarea = '$drarea', " .

      "drphone = '$drphone', drmail = '$drmail', publication = '$publication', members = '$members', send = '$send'  WHERE id = '$uid' ";

	   $result = $this->db->query($query);

	   if (!$result) echo $this->db->error();

	  

 }

 //*****************************************************************************************

 function association_info($uid)

{

       $query ="SELECT * FROM associations WHERE id = '$uid' ";

	   $result = $this->db->query($query);

	  	  

	   $data = $this->db->fetch_array($result);



	   return $data;

	

	   

 

 }//end function



 //***************************************************************************************

 // to view after input

 function view_meet_input($assoc_id,$set) {

	global $srch_altcolor;

	$query="SELECT * FROM assoc_event WHERE assoc_id = $assoc_id AND type_event = '$set' ";

	$result=$this->db->query($query);

	if ($this->db->num_rows($result)) {



		echo "<table width=80% align=center cellpadding=2><tr>";

		if ($set == "meeting")

			echo "<td colspan=3><b>Annual Meeting";

		else 

			echo "<td><b>Other Events ";



		echo "</td></tr>";

		$i=1;

		while($row = $this->db->fetch_array($result)) {		

		$bg="bgcolor=#ffffff ";

		if ($i %2) $bg="bgcolor=" . $srch_altcolor;

		echo "<tr ".$bg.">";

		if (strlen($event_name) < 1 ) echo "<td><b>".$row['event_name']."</td>";

		echo "<td>".date("F j, Y ",$row['input'])."</td>";

		echo "<td>".$row['place']."</td>";

		echo "<td >".$row['contact']."</td>";

		echo "<td >".$row['fee']."</td>";

		echo "<td ".$bg." align=right><a href="\"javascript:conf_redir('assoc_action.php?action=delete&assoc_id="."

			$assoc_id . "&event_id=".$row['id'].

		"','Are DEFANGED_you DEFANGED_sure DEFANGED_you DEFANGED_would DEFANGED_like DEFANGED_to DEFANGED_delete ".$row['event_name'].

		"')\"><IMG SRC=/imgz/delete_task.gif  border=0 alt=delete></a></td>";

		echo "</tr>";			                

		$i++;

		}

		echo "</table>";

	}

}



//***************************************************************************************

 function view_meetings($id,$total)

{

        $query ="SELECT * FROM assoc_event WHERE uid  = $id ORDER BY input ";

	    $result =$this->db->query($query);

		

                

		

	                             echo "<table width=90% align=center>";

								 echo "<tr>";

								 echo "<td align=center><font color=#000033>Type</font></td>";

								 echo "<td align=center><font color=#000033>Date</font></td>";

								 echo "<td align=center><font color=#000033>Location</font></td>";

                                 echo "<td align=center><font color=#000033>Contact</font></td>";

								 echo "<td align=center><font color=#000033>Fee</font></td>";

								 echo "</td>";

								 echo "</tr>";

								 echo "<TR>"; 

			                      ?><TD COLSPAN="5" HEIGHT="7" BACKGROUND="../imgz/head_mid_up_txt.gif"></TD><? 

		                         echo "</TR>"; 

  

 

		$i=0;

		while($row = $this->db->fetch_array($result))

		     {		

			       

				        $bg="bgcolor=#FFCC66 ";

			            if ($i %2) 

						{

						    $bg= " ";

						

						}

			           

											

									echo "<tr ".$bg.">";

									echo "<td ".$bg." align=center>".ucwords($row['type_event'])."</td>";

								

									if (strlen($event_name) < 1 )

									{

									 

									}else{

										 echo "<td>Not Named</td>";

									}

		                        	echo "<td  align=center>".date("F j, Y ",$row['input'])."</td>";

									echo "<td  align=center>".ucwords($row['place'])."</td>";

									echo "<td  align=center>".ucwords($row['contact'])."</td>";

									echo "<td  align=center >".$row['fee']."</td>";

									echo "</tr>";			                

									$i++;

									if ($i == $total)

									{

									   echo exit;

									}

                		}

		                   echo "</table>";

  }//end function



//***************************************************************************************

 function meet_input($assoc_id,$event_name,$type_event,$input,$place,$contact,$fee)

{

        $time = strtotime($input);  

		

				

		$query ="INSERT INTO assoc_event (assoc_id,event_name,type_event,input,place,contact,fee) ".

		"VALUES ('$assoc_id','$event_name','$type_event','$time','$place','$contact','$fee')";

	    

		

		$this->db->query($query);



}



//****************************************************************************************

function input_members($biz_id,$uid)

{

       $query ="UPDATE associations SET subtype_id = '$biz_id' WHERE id = '$uid' ";

	   $this->db->query($query);

	 

}//function



//*****************************************************************************************

function assoc_pick() {



	$query ="SELECT * FROM associations WHERE active = 1 ";

	$result =$this->db->query($query);

	     

	echo "<DEFANGED_SELECT NAME = acro SIZE=1 >";

	while($row= $this->db->fetch_array($result)) {		

	    echo "<DEFANGED_OPTION VALUE=".$row['id'].">".$row['acronym']."</DEFANGED_OPTION>"; 

	}

	echo "</DEFANGED_SELECT>";

}



//*****************************************************************************************

function vendor_pick()

{	

        $query ="SELECT * FROM vendor WHERE active = 1 ";

	    $result =$this->db->query($query);

                 

				 echo "<DEFANGED_SELECT NAME = product SIZE=1 >";

         while($row= $this->db->fetch_array($result))

		     {		

                echo "<DEFANGED_OPTION VALUE=".$row['id'].">".$row['comp_name']."</DEFANGED_OPTION>"; 

			 }

			    echo "</DEFANGED_SELECT>";

}



//***********************************************************************************

function member_pick() {

		$query ="SELECT * FROM type_biz ";

		$result =$this->db->query($query);

		//$num_rows = mysql_num_rows($result);   

		//echo "<DEFANGED_SELECT NAME= members SIZE=1 >";

		echo "<TABLE DEFANGED_WIDTH="\"100%\"" DEFANGED_cellspacing="\"0\"" DEFANGED_cellpadding="\"0\""><tr><td valign=top><table DEFANGED_cellspacing="\"0\"" DEFANGED_cellpadding="\"0\"">";

		$i=0;

		while($row= $this->db->fetch_array($result)) {		

			if ($i % (18) == 0) {

				echo "</table></td><td></td><td valign=top><table DEFANGED_cellspacing="\"0\"" DEFANGED_cellpadding="\"0\"">";

			}

			echo "<tr><td valign=top><DEFANGED_input type=checkbox name=members VALUE=".$row['id']."></td><td>".$row['name']."</tr>"; 

			$i++;

		}

		echo "</table></td></tr></table>";

		//echo "</DEFANGED_SELECT>";

}



//*************************************************************************************

function assoc_find_all($query,$last_sort) {

	$sortstr="<a href='".$PHP_SELF."?ls=".$last_sort."&sortby=";

	$result = $this->db->query($query);

	global $srch_altcolor;

	if($this->db->num_rows($result) < 1)

		echo "<tr><td align=center ><b>" ." Your Request does not have a match " ."</b></td></tr>";  

	else	{

		



		echo "<tr>";

		echo "<td ><b>".$sortstr."association'>Association</b></a></td>";

		echo "<td ><b>Password</b></td>";

		echo "<td ><b>".$sortstr."acronym'>Acronym</a></b></td>";

		echo "<td ><b>".$sortstr."area_code'>Phone</a></b></td>";

		echo "<td ><b>".$sortstr."active'>Listing</a></b></td>";

		echo "<td colspan=3>&nbsp;</td>";

		echo "</tr>";



 $i=1;

 while($row=$this->db->fetch_array($result))

{         //$p = $this->get_v_pass($row['id']);



	 $bg="";

	if ($i %2) 

	{$bg="bgcolor=" . $srch_altcolor;}



			echo "<tr ".$bg." >";

			echo "<td nowrap ><a href=assoc_password.php?id=".$row['id']."> ". $row['association']."</td>";

			echo "<td nowrap >".$this->get_ass_pass($row['id'])."</td>";

			echo "<td>". $row['acronym']."</td>";



			echo "<td nowrap ></td>";

			if ($row['active']==1)

			echo "<td nowrap ><a href=assoc_action.php?action=active&act=0&id=".$row['id']." >Active</a></td>";

			else

			echo "<td nowrap ><a href=assoc_action.php?action=active&act=1&id=".$row['id']." >Not Active</a></td>";	



			echo "<td align=right><a href="\"javascript:conf_redir('index.php?action=delete&id=".$row['id']."" ','Are DEFANGED_you DEFANGED_sure DEFANGED_you DEFANGED_would DEFANGED_like DEFANGED_to DEFANGED_delete ".$row['comp_name']."')\"><IMG DEFANGED_SRC="\"/imgz/delete_task.gif\""  border=0 alt="delete"></a></td>";

			echo "<td  align=center><a href=associat.php?action=edit&id=".$row['id']."><IMG DEFANGED_SRC="\"/imgz/mod_task.gif\"" border=0></a></td>";



			echo "<td><a href=view_all.php?id=".$row['id']."><IMG DEFANGED_SRC="\"/imgz/view.gif\"" border=0></a></td>";

			echo "</tr>";

		$i++;



   }

}



}

//***************************************************************************************

function delete_assoc($id)

{



   $query = "DELETE FROM associations WHERE id = $id ";

   $this->db->query($query);



   $query = "DELETE FROM assoc_event WHERE uid = $id ";

   $this->db->query($query);



}



//***************************************************************************************

function listing($id,$act)

{

         $query = "UPDATE associations SET active = $act WHERE id = $id";

		  $result = $this->db->query($query);

		 $query = "UPDATE assoc_event SET active = $act WHERE uid = $id";

		  $result = $this->db->query($query);

}





//****************************************************************************************

function password($uid,$password,$email,$action) {

	if ($action == "new") {

		$query1 = "INSERT INTO assoc_login (uid, pass) VALUES ('$uid','$password')";

		$query2 = "UPDATE associations SET email = $email WHERE uid = $uid ";

	} else {

		$query1 = "UPDATE assoc_login SET pass = '$password' WHERE uid = $uid ";

		$query2 = "UPDATE associations SET email = $email WHERE uid = $uid ";

	}

	$this->db->query($query1);

	$this->db->query($query2);

	$to = $email;

	$from =  "Landscaponline.com";

	$subject = "Your Association Password";



/*******************************************



To change the text within a message, please adhere to the following guidelines:



- ALL text must be between a $mess1 .="  and a "; tag.



- If you use quotation marks in the body of message, they must be written as \"



- To put new lines use \r\n



********************************************/

	

	$mess1.= "Thank you for listing your Association at LandscapeOnLine.com! Your listing is now activated. To make changes please store and use the following password: ".$password."\r\n"; 

	$mess1.= "If you have any questions, comments or concerns, please call LandscapeOnLine.com at 714-979-5276.\r\n";

	$mess1.= "Thanks again for choosing LandscapeOnLine.com!\r\n";

	

	$this->send_mail($to, $subject, $mess1,"From: ".$from."\r\nReply-To: ".$from);

}

function get_ass_pass($uid)

{

          $query = "SELECT pass FROM assoc_login WHERE uid = $uid";

		  $result = $this->db->query($query);

		  

		  $data = $this->db->fetch_array($result);    

		  

		  return $data['pass'];

}//

//***********************************************************************************

function check_assoc_dates()

{

     $time1 = strtotime("-53 weeks");

	 $time2 = strtotime("-51 weeks");

     $time = "BETWEEN ".$time1." AND ".$time2;



	$query = "SELECT * FROM associations WHERE input $time AND send = 0";

	$result = $this->db->query($query);

	$data = $this->db->fetch_array($result);    

	

    

    if (strlen($data['email']) > 0)

		{

             $mail_to = $data['email'];

			 $id = $data['id'];



              $query = "UPDATE associations SET send = '1'  WHERE id = $id";

	          $result = $this->db->query($query);



			$to = $mail_to;

			$from =  "Landscaponline.com";

			$subject = "Your Association";



/*******************************************



To change the text within a message, please adhere to the following guidelines:



- ALL text must be between a $mess1 .=" or a $mess2 .=; and a "; tag.



- If you use quotation marks in the body of message, they must be written as \"



- To put new lines use \r\n



********************************************/



			

            $mess1.= "Your Association has been featured at LandscapeOnLine.com for a year now, and we thank you again for making yourself to available to our online visitors. Please review your page at LandscapeOnLine.comto verify that your association is still up to date"; 

			

	 	$mess2.= $this->lol_url."/industry/associat_list.php?t=1&action=edit&id=".$id;

			



			$body = $mess1."\n".$mess2."\n";

			

			$this->send_mail($to, $subject, $body,"From: ".$from."\r\nReply-To: ".$from);

	



	  	}

}//end function

//***********************************************************************************

function check_assoc_dates2()

{

     $time1 = strtotime("-57 weeks");

	 $time2 = strtotime("-55 weeks");

     $time = "BETWEEN ".$time1." AND ".$time2;



	$query = "SELECT * FROM associations WHERE input $time AND send = 1";

	$result = $this->db->query($query);

	$data = $this->db->fetch_array($result); 

  

	

    

    if (strlen($data['email']) > 0)

		{

             $mail_to = $data['email'];

			 $id = $data['id'];



              $query = "UPDATE associations SET send = '2'  WHERE id = $id";

	          $result = $this->db->query($query);



			$to = $mail_to;

			$from =  "Landscaponline.com";

			$subject = "Your Association";

/*******************************************



To change the text within a message, please adhere to the following guidelines:



- ALL text must be between a $mess1 .=" or a $mess2 .="  and a "; tag.



- If you use quotation marks in the body of message, they must be written as \"



- To put new lines use \r\n



********************************************/



			

            $mess1.= "Our records show you still have not visited LandscapeOnLine.com to verify or update your information. Please do so as soon as possible, as we want you to remain current."; 

			

			 $mess2.= $this->lol_url."/industry/associat_list.php?t=1&action=edit&id=".$id;

			



			$body = $mess1."\n".$mess2."\n";

			

			$this->send_mail($to, $subject, $body,"From: ".$from."\r\nReply-To: ".$from);

	



	  	}

		

 





}//end function

//***********************************************************************************

function check_assoc_dates3()

{

     $time1 = strtotime("-61 weeks");

	 $time2 = strtotime("-59 weeks");

     $time = "BETWEEN ".$time1." AND ".$time2;



	$query = "SELECT * FROM associations WHERE input $time AND send = 2";

	$result = $this->db->query($query);

	$data = $this->db->fetch_array($result); 

  

	

    

    if (strlen($data['email']) > 0)

		{

             if ($data['id'] == 0) 

			 {

			       $mail_to = $data['email'];

			       $subject = "This Last Message sent";

			 }

            

            $mail_to = $data['email'];

			 $id = $data['id'];



              $query = "UPDATE associations SET send = '3'  WHERE id = $id";

	          $result = $this->db->query($query);



			$to = $mail_to;

			$from =  "Landscaponline.com";

			$subject = "Your Association";



/*******************************************



To change the text within a message, please adhere to the following guidelines:



- ALL text must be between a $mess1 .=" or a $mess2 .=" or a $mess3 .=" and a "; tag.



- If you use quotation marks in the body of message, they must be written as \"



- To put new lines use \r\n



********************************************/



			

            $mess1.= "This is your last opportunity to visit LandscapeOnLine.com to verify or update your information. Please do so as soon as possible, as we want you to remain current."; 

			$mess2.= $this->lol_url."/industry/associat_list.php?t=1&action=edit&id=".$id;

			$mess3.="Your association will be removed  in 30 days from now. If you have any questions please call us at (714) 979-5276 or email assoclist@landscapeonline.com ";



			$body = $mess1."\n".$mess2."\n";

			

			$this->send_mail($to, $subject, $body,"From: ".$from."\r\nReply-To: ".$from);

	



	  	}

		

 





}//end function

//***********************************************************************************

function event_time()

{

     $time1 = strtotime("-53 weeks");

	 $time2 = strtotime("-51 weeks");

     $time = "BETWEEN ".$time1." AND ".$time2;



	$query = "SELECT * FROM assoc_event WHERE input $time";

	$result = $this->db->query($query);

	$data = $this->db->fetch_array($result);    



	 return $data['id'];



}

//****************************************************************************************

function delete_vent($event_id,$assoc_id)

{



  $query = "DELETE FROM assoc_event WHERE id = $event_id ";

   $this->db->query($query);





}



//***********************************************************************************

function find_ass($local,$area,$cat,$first,$last) {



        $query = "SELECT * FROM associations WHERE active = 1 AND $last $first ORDER BY association";

		$result = $this->db->query($query);

		  		  

		if($this->db->num_rows($result) < 1) {

			echo "<tr><td align=center ><b>" ." Your Request does not have a match " ."</b></td></tr>";  

		} else {

		            	   

			$i=0;

			while($row=$this->db->fetch_array($result)) {                                   

				$bg="bgcolor=#ffffff";

		        if ($i %2) $bg="bgcolor=" . $srch_altcolor;

				?>	

				

				<tr <?=$bg?>>

					<td><?=$row['acronym']?></td>

					<td colspan=2></td>

				</tr>

				<tr <?=$bg?>>

					<td></td>

					<td><?=$row['association']?><br>

					<?=$row['city'] . ', ' . $row['state']?><br>

						Toll Free:<?=$row['toll']?><br>

						Fax:(<?=$row['area_fax']?>)<?=$row['fax']?><br>

						<a href="mailto:<?=$row['email']?>"><?=$row['email']?></a><br>

					<!--<?=$row['web']?>--></td>

					<td align=right valign=bottom>

						<a href = news.php?id=<?=$row['id']?>>News</a> |

						<a href=event.php?id=<?=$row['id']?>>Events</a><br><br>

					</td>

				</tr>

				<tr><td colspan="3"><hr></td></tr>

				

				

				<?

			   	$i++;

			}

		}

}



//******************************************************************************************

function find_cat($cat) {

     	 $query = "SELECT * FROM subscribe_type WHERE id = '$cat' ";

		 $result =$this->db->query($query);

		 $data = $this->db->fetch_array($result);    

		 return $data['name'];

}

//***************************************************************************************

 function view_news($id,$total)

{

    $query ="SELECT * FROM assoc_news WHERE uid  = $id ORDER BY input ";

	$result =$this->db->query($query);

		

    page_span($PHP_SELF,$total, $query, $extra_variables);      

	?>	

     <table width=90% align=center>";

	 <tr>

	 <td align=center><font color=#000033>Date</font></td>

	 <td align=center><font color=#000033>Title</font></td>

     </tr>

	 <TR> 

     <TD COLSPAN="5" HEIGHT="7"></TD></TR><?



	$i=0;

	while($row = $this->db->fetch_array($result)) {		

		$bg="bgcolor=#FFCC66 ";

        if ($i %2) $bg= " "; 

        				

		echo "<tr ".$bg.">";

		echo "<td ".$bg." align=center>".ucwords($row['type_event'])."</td>";

	

		if (strlen($event_name) < 1 ) {

		 

		} else{

			 echo "<td>Not Named</td>";

		}

       	echo "<td  align=center>".date("F j, Y ",$row['input'])."</td>";

		echo "<td  align=center>".ucwords($row['title'])."</td>";

		echo "</tr>";			                

		$i++;

    }

    echo "</table>";

  }



//************************************************************************************

function get_calendar_array($show_mon, $show_year) {

	$d = getdate($this->eta_time);

	

if( ($show_mon == $d['mon']) && ($show_year == $d['year']) && !$this->status == 0  ) { 

		// then should be shown on this calendar

		$day_content_array = array();

		$day_content_array['time'] = $this->eta_time;

	    			

		if(strlen($this->name) > 30)

			$this_name = substr($this->name, 0, 30) . "...";

		else

			$this_name = $this->name;



        $TYPE .=  $data['acronym'] = $this->get_name($this->uid)."&nbsp;"; 

	    $TYPE .= $this->type_event ;

	

		$day_content_array['content'] = $TYPE;

	

		return $day_content_array;

	} else

		return false;



}

//******************************************************************************************

function get_name($id)

{

        $query ="SELECT * FROM associations WHERE id  = $id ";

	    $result =$this->db->query($query);

		    

		while($row = $this->db->fetch_array($result)) {

		       return $row['acronym'];  

		}

}



//*************************************************************************************

function assoc_day($day,$id) {

	  

	$query = "SELECT * FROM assoc_event WHERE input = $day" . (($id) ? " AND id = '$id'" : "");

	

	$result = $this->db->query($query);

	return $this->assoc_listevents($result);





}

//*************************************************************************************

function assoc_viewevents($id) {

	  

	$query = "SELECT * FROM assoc_event WHERE assoc_id = '$id'";

	

	$result = $this->db->query($query);

	return $this->assoc_listevents($result);

}



function assoc_listevents($result) {

	

	if($this->db->num_rows($result) < 1) {

		echo "<tr><td align=center valign=middle>No Events Scheduled.</td></tr>";  

	} else	{		                 

		$i=0;

		while($row=$this->db->fetch_array($result)) {        			       

			if ($i != 0) echo "<tr><td colspan=2><hr></td></tr>"; 

			echo "<tr><td><b>Acronym </b></td>  <td>".$this->get_name($row['assoc_id'])."</td>";

			echo "</tr><tr><td><b>Date </b></td>  <td>".date("F jS, Y ",$row['input'])."</td>";

			echo "</tr><tr>";

			echo "<td><b>Event Name</b></td>  <td>". $row['event_name']."</td>";

			echo "</tr><tr>";

			echo "<td><b>Type of event </b></td>  <td>". $row['type_event']."</td>";

			echo "</tr><tr>";

			echo "<td ><b>Location</b></td>  <td> ". $row['place']."</td>";

			echo "</tr><tr>";

			echo "<td ><b>Contact</b></td>  <td> ".  $row['contact']."</td>";

			echo "</tr><tr>";

			echo "<td><b> Fee </b></td>  <td>". $row['fee']."</td>";

			echo "</tr>";



			$i++;

		}

	}

	

}

//***************************************************************************************

function news_in($acro,$comment,$how,$picture,$input,$ven_or_assoc) {

		$query ="INSERT INTO assoc_news (uid, comment, how_photo,photo, input,type) VALUES ('$acro','$comment','$how','$picture','$input', '$ven_or_assoc' )";

		$this->db->query($query);

}

//***************************************************************************************

function news_note($product_id,$ven_or_assoc) {

	

     if ($ven_or_assoc == 1) {

		$query = "SELECT * FROM vendor WHERE id = $product_id ";

		$result = $this->db->query($query);

		$data=$this->db->fetch_array($result);  

	    $mail_to = $data['email'];

		$state=$data['state'];

		

		$query = "SELECT * FROM lol_contacts WHERE abbrev = '$state'";

		$result = $this->db->query($query);

		$data=$this->db->fetch_array($result);  

	   	$editor = $data['person'];

		$editor_email = $data['email'];

	 }



/*******************************************



To change the text within a message, please adhere to the following guidelines:



- ALL text must be between a $mess1 .="  and a "; tag.



- If you use quotation marks in the body of message, they must be written as \"



- To put new lines use \r\n



********************************************/





	$mess1 = " Thank you for submitting your news at LandscapeOnLine.com. Your information has been forwarded to ".$editor."";

	$mess2 = "Landscape Architiect & Specifier News reaches 30,000 Landscape Architiects monthly in North America. Landscape Contractor Magaine is the fastest growing contractor-based publication in the country, going from 7,000 to 35,000 qualified readers in the last five years. Now  LandscapeOnLine.com is your direct route for contacting both of these top green industry publications. There is no need to reply to this E-mail unless you did not send the original E-mail to us ";

    $mess3 = $editor;

	$mess4 = $editor_email;

	$mess5 ="Landscape Architiect & Specifier News";

	$mess6 ="Landscape Contractor Magaine";

	$mess7 ="LandscapeOnLine.com";





    $body = $mess1."\n".$mess2."\n".$mess3."\n".$mess4."\n".$mess5."\n".$mess6."\n".$mess7."\n";

    $to = "";

 

 	$this->send_mail($to, "News at LandscapeOnLine.com", $body,"From: ".$mess4."\r\nReply-To: ". $mess4);

}



function getUpcomingEvents($time1, $num) {



	$time2 = strtotime("+5 years");

    $time = "BETWEEN ".$time1." AND ".$time2;



	$query = "SELECT * FROM assoc_event WHERE input $time ORDER BY input LIMIT $num ";

	$result = $this->db->query($query);

	$output = "<table>";

	while ($data = $this->db->fetch_array($result)) {

		$dttime = $data['input'];

		$link = "index.php?action=dayevents&day=$dttime&id=" . $data['id'];

		$result1 = $this->db->query("SELECT acronym  FROM associations WHERE id = '" . $data['assoc_id'] . "'");

		$data1 = $this->db->fetch_array($result1);

		$as= $data1['acronym'];

		$evt = '<a href="'.$link.'"><b>' . $data['event_name'] . '</b></a>';

		$dt = date('F jS, Y', $dttime);

		$pl = $data['place'];

		$rs = '<tr><td align=left>';

		$re = '</td></tr>';

		$spacer = $rs . '<img src="/imgz/spacer.gif" width="8" height="3">' . $re;

		$output .=  $rs . $dt . $re;

		$output .=  $rs . $as . " " . $evt . $re;

		$output .=  $rs . $pl . $re;  

		$output .=  $spacer;

	}

	$output .= "</table>";

	return $output;

}



}//end class

?>

