<?
include_once $include_path . "class/common_class.inc";
class media_Class  extends Common_Class
{
var $current;
var $company_name;
var $website;
var $represent;
var $sal;
var $first_name;
var $last_name;
var $address;
var $address_2;
var $city;
var $state;
var $zip;
var $country;
var $phone;
var $fax;
var $email;
var $how;
var $how_pick;
var $how_other;
var $request;
var $contact_preferences;
var $note;
var $media_id;
var $biz_title;
var $biz_title_other;
var $assoc;
var $other_assoc;
var $reg;
var $type_biz;
var $other_lasn;
var $auth;
var $media_id;
var $date;


// constructor
function media_class(&$db)
{	
	$this->db = &$db;
}

function media_form($current, $comp_name, $website, $represent, $sal, $first_name, $last_name, $address, 
		$address_2, $city, $state, $zip, $country,$area_code, $phone,$area_fax, $fax, $email, $edemail,$how, 
		$how_pick, $how_other, $request, $contact_preferences, $note) {

	$query = "INSERT INTO media (current, comp_name, website, represent, sal, first_name, last_name, ".
	"address, address_2, city, state, zip, country,area_code, phone,area_fax, fax, email, edemail,how, ".
	"how_pick, how_other, request, contact_preferences, note) VALUES('$current', '$comp_name', '$website', ".
	"'$represent', '$sal', '$first_name', '$last_name', '$address', '$address_2', '$city', '$state', '$zip',".
	" '$country' , '$area_code', '$phone', '$area_fax', '$fax', '$email', '$edemail', '$how', '$how_pick', ".
	" '$how_other', '$request', '$contact_preferences', '$note')";

	$this->db->query($query);

	 return $uid = $this->db->insert_id();
}
	
function media_mail($uid) {
	$query = "SELECT * FROM media WHERE id = $uid ";
	$res =$this->db->query($query);
	$data = $this->db->fetch_array($res);
	
	$media_id = $data['id'];
	$by = $data['contact_preferences'];
	
	//find first letter for email send
	
	$mess .= $data['sal']." ".$data['first']." " .$data['last']. "\n";
	$mess .= "Is current ".$data['current']."\n";
	$mess .= "With ".$data['com']."\n";
	$mess .= "Represents".$data['represent']."\n"; 
	$mess .= "Address : ".$data['address'] ." ".$data['address_2']."\n";
	$mess .= $data['city']."," .$data['state'].", ".$data['zip']."\n";
	$mess .= "Phone : (".$data['area_code'].")" .$data['phone']."\n";
	$mess .= "Fax : (".$data['area_fax'].")" .$data['fax']."\n";
	$mess .= "Website : ".$data['website']."\n";
	$mess .= "Email : ".$data['email']."\n";
	$mess .= "Company email : ".$data['edemail']."\n";
	$mess .= "Hear about us : ".$data['how']."\n";
	$mess .= "Request : ".$data['request']."\n";
	$mess .= "By : ". $by."\n" ;
	$mess .= "Note ".$data['note'];
	
	$F = substr($to_who, 0 ,1);
	if($F < 'i'  || $F < 'I')
		$mail_to= "circulation@landscapeonline.com";   
	if($F >'h' &&  $F<'r' || $F > 'H' && $F< 'R') 
		$mail_to= "circulation@landscapeonline.com";
	if ($F > 'q' || $F > 'Q')
		$mail_to= "circulation@landscapeonline.com";
	
	$to = $mail_to;
	$from =  "Landscaponline.com";
	$subject = "Customer I.D $media_id";
	$body = $mess;
	
	$this->send_mail($to, $subject, $body,"From: ".$from."\r\nReply-To: ".$from);
}

function media_info($info) {
		
	$query ="SELECT * FROM media WHERE  $info";
	$result =$this->db->query($query);
	
	if ($result == false ) {		   
		echo "<table align=center>";
		echo "<tr>";
		echo "<td><h3>No Results</h3></td>";
		echo "</tr>";
		echo "</table>";
	   
	} else {	
		
		echo "<table>";
		echo "<tr>";
		echo "<td>";

		while($row= $this->db->fetch_array($result)) {		
			           
			echo "<table><tr><td>".$row['id']."</td></tr>";
			echo "<tr><td>".$row['sal']." ".$row['first_name']." " .$row['last_name']."</td></tr>";
			echo "<tr><td> Is current : ".$row['current']."</td></tr>";
			echo "<tr><td> With : ".$row['comp_name']."</td></tr>";
			echo "<tr><td> Represents : ".$row['represent']."</td></tr>";
			echo "<tr><td> Address : ".$row['address']." ".$row['address_2']."</td></tr>";
			echo "<tr><td>".$row['city'].", " .$row['state'].", ".$row['zip']."</td></tr>";
			echo "<tr><td> Phone : (".$row['area_code'].")" .$row['phone']."</td></tr>";
			echo "<tr><td> Fax : (".$row['area_fax'].")" .$row['fax']."</td></tr>";
			echo "<tr><td> Website : ".$row['website']."</td></tr>";
			echo "<tr><td> Email : ".$row['email']."</td></tr>";
			echo "<tr><td> Company email : ".$row['edemail']."</td></tr>";
			echo "<tr><td> Hear about us : ".$row['how']."</td></tr>";
			echo "<tr><td> Request : ".$row['request']."</td></tr>";
			echo "<tr><td> By :  ". $row['contact_preferences'] ."</td></tr>";
			echo "<tr><td> Note : ".$row['note']."</td></tr>";
			echo "<tr><td><a href=\"javascript:conf_redir('media_view.php?action=delete&id=".
				$row['id']."','Are you sure you would like to delete ".$row['comp_name']."')\">".
				"<IMG SRC=\"/imgz/delete_task.gif\"  border=0 alt=delete></a></td>";
			echo "</tr></table></form>";
			echo "<br>";
			echo "<br>";
		}
		echo "</td>";
		echo "</tr>";
		echo "</table>";
		}
}


function media_delete($id) {
       $query ="DELETE FROM media WHERE id = $id";
	   $result = $this->db->query($query);
}

function check_user($comp_name,$subscribe)
{
        $query ="SELECT * FROM subscribe WHERE comp_name = '$comp_name' AND subscribe = '$subscribe'";
	   
		$result =$this->db->query($query);
		
		
	 $row = $this->db->fetch_array($result);
		if (is_array($row))
			{
			   return $row['id'];
		    }
            else
		         return "no";
		

}	

function subscribtion_form($comp_name, $sal, $first_name, $last_name, $address, $address_2, $city, $state, $zip, $country,
		$mail_to, $alt_mail, $website,$area_code, $phone,$area_code_fax, $fax, $email,$month, $how, $how_other, 
		$subscribe, $note,$status)	{
	$status="0";
	$notify=0;
	$notify_credit=0;
	$query = "INSERT INTO subscribe (comp_name, sal, first_name, last_name, address, address_2, city, state, zip, country,".
		"mail_to, alt, website, area_code, phone,area_code_fax, fax, email, month, how, how_other, subscribe, note, status, notify, ".
		"notify_credit, edited ) VALUES ".
        "('$comp_name', '$sal', '$first_name', '$last_name', '$address', '$address_2', '$city' , '$state', '$zip', '$country', ".
		"'$mail_to', '$alt_mail', '$website','$area_code', '$phone', '$area_code_fax', '$fax', '$email','$month', '$how', '$how_other', ".
		"'$subscribe', '$note', '$status', '$notify', $notify_credit, NULL)";
	$this->db->query($query);
	return $subscribe = $this->db->insert_id();
						  
}
function  subscribtion_form_edit($uid, $comp_name, $sal, $first_name, $last_name, $address, $address_2, 
		$city, $state, $zip, $country,$mail_to, $alt_mail, $website,$area_code, $phone,$area_code_fax, $fax, $email,$month) {

	$query = "UPDATE subscribe SET comp_name = '$comp_name', sal = '$sal', first_name = '$first_name', " .
		"last_name = '$last_name', address = '$address', address_2 = '$address_2', city = '$city', " .
        "state = '$state', zip = '$zip', country = '$country', mail_to = '$mail_to', alt = '$alt_mail', website = " . 
        "'$website', area_code = '$area_code', phone = '$phone'," .
        "area_code_fax = '$area_code_fax',fax ='$fax',email = '$email',month = '$month' WHERE  id = '$uid' ";
	$this->db->query($query);
	return $subscribe = $this->db->error();
}

function  listing_form($comp_name, $sal, $first_name, $last_name, $address, $address_2, $city, $state, $zip, $country,$mail_to,
	$alt_mail, $website,$area_code, $phone,$area_code_fax, $fax, $email,$month, $how, $how_other, $subscribe, $note,$status){
	$status="0";
	$notify=0;
	$notify_credit=0;
	$query = "INSERT INTO subscribe (comp_name, sal, first_name, last_name, address, address_2, city, state, zip, country, mail_to, alt, website, area_code, phone,area_code_fax, fax, email, month, how, how_other, subscribe, note, status, notify, notify_credit ) VALUES ('$comp_name', '$sal', '$first_name', '$last_name', '$address', '$address_2', '$city' , '$state', '$zip', '$country', '$mail_to', '$alt', '$website','$area_code', '$phone', '$area_code_fax', '$fax', '$email','$month', '$how', '$how_other', '$subscribe', '$note', '$status', '$notify', $notify_credit)";
	$this->db->query($query);
	return $subscribe = $this->db->insert_id();
}

function listing_form_edit($media_id, $comp_name, $sal, $first_name, $last_name, $address, $address_2, $city, $state, $zip, 
$country,$mail_to,$alt_mail, $website,$area_code, $phone,$area_code_fax, $fax,$email,$month) {

	$query = "UPDATE subscribe SET comp_name = '$comp_name', sal = '$sal', first_name = '$first_name', last_name = '$last_name', 
		address = '$address', address_2 = '$address_2', city = '$city', state = '$state', zip = '$zip', country = '$country', 
		mail_to = '$mail_to', alt = '$alt_mail', website = '$website', area_code = '$area_code', phone = '$phone',area_code_fax = 
		'$area_code_fax',fax ='$fax',email = '$email',month = '$month' WHERE  id ='$media_id' ";
	$this->db->query($query);
}
function status($id,$status){
	$query = "UPDATE subscribe SET status = $status WHERE id = $id ";  
	$this->db->query($query);
}

function delete_sub($id){
	$query = "DELETE FROM subscribe WHERE id = '$id' ";  
 	$this->db->query($query);
}

function deact_sub($id,$status) {
    $query = "UPDATE subscribe SET status = $status WHERE id = $id ";  
    $this->db->query($query);
}
function mail_subscribe($id) {
	$query ="SELECT * FROM subscribe WHERE  id = $id ";
	$result =$this->db->query($query);
	$data= $this->db->fetch_array($result);
		
		{		
           $mail_to = $data['email'];
		
	    if ($data['protype'] == "d")
			  {
		         $lis = 1;
			  }
            if ($data['protype'] == "c")
			  {
		         $lis = 2;
			  }
		} 
		 
		   if ($lis == 1) {
		        $mag = "Landscape Architect & Specifier News (LASN)";
			   } else {
			 
			      $mag = "Landscape Contractor Magazine (LCM)"; 
			   }

/*******************************************

To change the text within a message, please adhere to the following guidelines:

- ALL text must be between a $mess1 .="  and a "; tag.

- If you use quotation marks in the body of message, they must be written as \"

- To put new lines use \r\n

********************************************/
$mess1 .= "Congratulations and welcome to the Landscape Communication, Inc. family of readers!\r\n\r\nYour free two-year subscription to ".$mag." is approved, and is eligible to be renewed for free at the end of the two years!\r\n\r\nThe only requirement (now comes the fine print) is that at least once each year, you send in a reader response card from a magazine, <a href=\"http://www.landscapeonline.com\">even</a> if you are not requesting product information. This ensures that we have your correct and most current information, as well as demonstrating to our auditors that you are receiving the magazines.\r\n\r\nContinue to check out LandscapeOnLine.com for more information on products, past articles and features, upcoming events for your association, etc. LandscapeOnLine.com can also be used to renew your subscription and make address changes when necessary.\r\n\r\nEnjoy!";

				$to = $mail_to;
				$from =  "Landscaponline.com";
				$subject = $mag;
				$body = $mess1;

				$this->send_mail($to, $subject, $body);
	return $to;
}

function mail_subscribe_no($id) 
{
	global $lol_url_s;
	$query ="SELECT * FROM subscribe WHERE  id = $id ";
	$result =$this->db->query($query);

	$data= $this->db->fetch_array($result);			
		$mail_to = $data['email'];
		//$lis=$data['protype'];
		//$da= $this->find_pass($data['id']);
	if ( $data['subscribe'] == "lol"){
		$mag = "Landscape Online";
		$lis = 3;
	} else if ( $data['subscribe'] == "lcm" OR $data['subscribe'] == "lasn"){
		if ($data['protype'] == "d"){
		        $lis = 1;
		} else if ($data['protype'] == "c"){
			$lis = 2;
		}
	
		if ($lis == 1) {
			$mag = "Landscape Architect & Specifier News (LASN)";
		} else if ($lis == 2) {
			$mag = "Landscape Contractor Magazine (LCM)"; 
		}
	}
	
	$paylink = $lol_url_s . "/bin/linkpoint/payment.php?pt=sub2&id=$id";

/*******************************************

To change the text within a message, please adhere to the following guidelines:

- ALL text must be between a $mess1 .="  and a "; tag.

- If you use quotation marks in the body of message, they must be written as \"

- To put new lines use \r\n

********************************************/
//listing ... a free listing to ..

	if ( $lis == 3 ){
		$mess1  ="We are in receipt of your listing request.  At this time you are not ";
		$mess1 .= "eligible to receive a free listing to ". $mag .".\n\n";
		$mess1 .= "Continue to check out LandscapeOnLine.com for more information on products,";
		$mess1 .= " past articles and features, upcoming events for your association, etc. ";
		$mess1 .= " LandscapeOnLine.com can also be used to make address changes when necessary.";
	} else if ($lis == 1 OR $lis == 2){
		$mess1  ="We are in receipt of your subscription request.  At this time you are not ";
		$mess1 .= "eligible to receive a free subscription to ". $mag .".\n\n";

		$mess1 .= "You are eligible, however, to purchase a subscription to ". $mag ." for the ";
		$mess1 .= "low annual price of $29.95, and can be paid via check or credit card.";
		$mess1 .= "  Payment is required in advance.\n\n";

		$mess1 .= "To pay by credit card, please click the following link ". $paylink ." to";
		$mess1 .= " access our secure server.\n\n";

		$mess1 .= "To pay by check, please print this e-mail and mail it and your check to:\n\n";

		$mess1 .= "    Landscape Communications, Inc.\n";
		$mess1 .= "    Attn: Circulation Department\n";
		$mess1 .= "    14771 Plaza Drive, Suite M\n";
		$mess1 .= "    Tustin, CA  92780\n";
		$mess1 .= "    ID # <insert password here>\n\n";

		$mess1 .= "Continue to check out LandscapeOnLine.com for more information on products,";
		$mess1 .= " past articles and features, upcoming events for your association, etc. ";
		$mess1 .= " LandscapeOnLine.com can also be used to make address changes when necessary.";
	}

  	$to = $mail_to;
	//$from =  "Landscaponline.com";
	$subject = $mag;
	$body = $mess1."\n\n";
		
	$this->send_mail($to, $subject, $body);

	return $to;
}

function view_subscribers($query,$last_sort) {
        
	global $srch_altcolor;
	global $page, $active;
    global $jump_to;

	$result =$this->db->query($query);
	
	$sortstr="<a href='".$PHP_SELF."?active=".$active."&jump_to=".$jump_to."&ls=".$last_sort."&sortby=";
	echo "<form method=post action=sub_action.php?id=".$row['id'].">"; 
	echo "<tr>";
	echo "<td><b>".$sortstr."id'>ID</a></b></td>";
	echo "<td><b>".$sortstr."first_name'>First name</a></b></td>";
	echo "<td><b>".$sortstr."last_name'>Last name</a></b></td>";
	echo "<td><b>".$sortstr."comp_name'>Company</a></b></td>";
	echo "<td><b>".$sortstr."city'>City</a></b></td>";
	echo "<td><b>".$sortstr."state'>State</b></a></td>";
	echo "<td><b>Password</b></td>";
	echo "<td><b>".$sortstr."protype'>Protype</a></b></td>";
	echo "<td><b>".$sortstr."list'>List</a></b></td>";
	echo "<td>Subscription</td>";
	echo "<td><b>".$sortstr."hot'>Hotlink</a></b></td>";
	echo "<td><b>".$sortstr."input'>Entry Date</a></b></td>";
	echo "<td><b>".$sortstr."edited'>Last Edited</a></b></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td></td>";
	echo "<td>&nbsp;</td>";
	echo "<td>&nbsp;</td>";
	echo "</tr>";


	$i=0;

	while($row= $this->db->fetch_array($result)) {		

			$bg="bgcolor=#ffffff ";
			if ($i %2) $bg="bgcolor=" . $srch_altcolor;
	
			echo"<tr ".$bg.">";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['first_name']."</td>";
			echo "<td>".$row['last_name']."</td>";
			echo "<td>".$row['comp_name']."</td>";
			echo "<td>".$row['city']."</td>";
			echo "<td>".$row['state']."</td>";
			echo "<td>".$this->find_pass($row['id'])."</td>";
			echo "<td>".$row['protype']."</td>";
			echo "<td>".$row['list']."</td>";
			$active=$row['active'];
			if ($active)
				echo "<td align=center><a href=listing_action.php?active=1&action=active&accept=Reject&id=".$row['id']."&page=".$page.">Deactivate</a></td>";
			else
				echo "<td align=center><a href=listing_action.php?active=0&action=active&accept=Activate&id=".$row['id']."&page=".$page.">Activate</a></td>";
//hotlink listing.php
		if ($row['hot']==1) {
			//echo "<td><a href='/private/billing/manage.php?type=sub&id=".$row['id']."'>yes</a></td>";
            echo("<td><a href=listing_action.php?action=list&hot=no&id=" . $row['id'] . ">deactivate</a></td>");
		} else {
				echo "<td ".$bg.">activate</td>";
        }
			echo "<td>".date("m.d.y ",$row['input']) ."</td>";

            if($row['edited'] > 0) {
                //$date = date("m/d/Y", strtotime($row['date_edited']));
                echo "<td ".$bg.">". $this->parseDate($row['edited']) ."</td>";
            } else {
                // no valid date
                echo "<td ".$bg.">Never</td>";
            }

			echo "<td><a href=listing_edit.php?action=edit&id=".$row['id']."><IMG SRC=\"/imgz/mod_task.gif\" border=0></a></td>";
			$comp_name = addslashes($row['comp_name']);
			echo "<td><a href=\"javascript:conf_redir('listing_action.php?action=delete&id=".$row['id']."&page=".$page."&active=".$active."','Are you sure you would like to delete ".$comp_name."');\"><IMG SRC=\"/imgz/delete_task.gif\"  border=0 alt=delete></a></td>";
			echo "<td><a href=listing_action.php?action=view&id=".$row['id']."><IMG SRC=\"/imgz/task_view.gif\" border=0 alt=view></a></td>";
			echo "</tr>";
			$i++;
		}
}
//subscriptions.php private
function get_subscribers($sql,$status,$sub){
	global $srch_altcolor;
      		
	$query ="SELECT * FROM subscribe WHERE  status = $status  AND( $sql )";
	$result =$this->db->query($query);


	if ($result == false)	    {		   
		echo "<table align=center>";
		echo "<tr>";
		echo "<td><h3>No Results</h3></td>";
		echo "</tr>";
		echo "</table>";
	} else {	
		echo "<table align=center width=80%>";
		echo "<tr>";
		if ($status == 3 or $status == 2) { //expired
			echo "<td align=center nowrap>Delete User</td>";
		} else {
			echo "<td align=center>Accept or Reject</td>";
		}

		echo "<td align=center>Name </td>";
		echo "<td align=center>Password</td>";
		echo "<td align=center>HotLink</td>";
		echo "<td align=center>Entry Date</td>";
		echo "<td align=center > </td>";
		echo "<td align=center > </td>";
		echo "</tr>";

		$i=1;
		while($row= $this->db->fetch_array($result)) {		
			
			$bg="";
			if ($i %2) $bg="bgcolor=" . $srch_altcolor;
			echo "<tr ".$bg.">";
			
			if ($row['status'] == 3 or $row['status'] == 2)
				echo "<td align=center nowrap><a href='sub_action.php?action=delete&id=".$row['id']."&sub=".$sub2."'>Delete</a></td>";
			else {
				echo "<td align=center nowrap>";
				if ($row['hot']) $cc="&processcc=1";
				else $cc="";

				echo "<a href='sub_action.php?action=accept&id=".$row['id']."&sub=".$sub.$cc."'>Accept</a> ";
				echo "or <a href='sub_action.php?action=reject&id=".$row['id']."&sub=".$sub."'>Reject</a></td>";
			}
			echo "<td align=center nowrap>".$row['sal']." ".$row['first_name']." " .$row['last_name']."</td>";
			echo "<td align=center nowrap>".$this->find_pass($row['id'])."</td>";
			echo "<td align=center >";
			
			if ($row['hot']) 
				echo "yes";
			else 	
				echo "no";
				
			echo "</td><td>".date('m.d.y', $row['input']) . "</td><td align=center><a href='listing_action.php?action=view&id=".$row['id']."'><IMG SRC=\"/imgz/task_view.gif\" border=0 alt=view></a></td>";
			$comp_name = addslashes($row['comp_name']);
			echo "<td align=\"center\"><a href=\"javascript:conf_redir('sub_action.php?action=delete&id=".$row['id']."&sub=".$sub."','Are you sure you would like to delete ".$comp_name."');\"><IMG SRC=\"/imgz/delete_task.gif\"  border=0 alt=delete></a></td>";		

			echo "</tr>";			                

			$i++;

		}
		echo "</table>";
	}	
}


function subscriber($id){
		$query ="SELECT * FROM subscribe WHERE id = $id";
	    $result =$this->db->query($query);
		echo "<table valign=\"top\">";
		while($row= $this->db->fetch_array($result)) {		
			 echo "<form method=post action=".$PHP_SELF."?id=".$row['id']."> 
				<tr><td> Password: </td>
					<td>".$this->find_pass($row['id'])."</td></tr>
				<tr><td> Title: </td>";
			
			if ( $row['biz_title'] == "Other" ){
				$biz_other = $row['biz_title_other'];
				$new_biz_title = "Other - " . $biz_other;
			} else {
				$new_biz_title = $row['biz_title'];
			}
			echo "		<td>".$new_biz_title."</td></tr>
				<tr><td>Name: </td>
					<td>".$row['sal']." ".$row['first_name']." " .$row['last_name']."</td></tr>
				<tr><td> With:  </td>
					<td>".$row['comp_name']."</td></tr>
				<tr><td> Address:  </td>
					<td>".$row['address']." ".		$row['address_2']."</td></tr>
				<tr><td> City, State, Zip: </td>
					<td>".$row['city'].", " . 		$row['state'].", ".$row['zip'] ."</tr>
<tr><td>Alternate Address:</td><td>".$row['alt']."</td></tr>
				<tr><td> Phone: </td>
					<td>(".$row['area_code'].")" .	$row['phone']."</td></tr>
				<tr><td> Fax:  </td>
					<td>(".$row['area_fax'].")" .	$row['fax']."</td></tr>
				<tr><td> Website: </td>
					<td>".$row['website']."</td></tr>
				<tr><td> Email: </td>
					<td>".$row['email']."</td></tr>
				<tr><td> Birthmonth:  </td>
					<td>".$row['month']."</td></tr>
				<tr><td>Business Type: </td><td>";
			if ( ereg(",other", $row['type_biz']) or $row['type_biz'] != "other"){
				echo implode("  ",$this->cate_view($row['type_biz']));
				$bizstart = "yes";
			} 
			if ( $row['type_biz_other'] ) {
				echo $bizintro . "Other - ". $row['type_biz_other'] . "";
			}
			echo "</td></tr>";				
			echo "	<tr><td>Associations: </td>
					<td>";
			$alist=str_replace(",","<br>",$row['assoc']);
			if ( $row['assoc'] == "other" ){
				$alist.=(" - ".$row['assoc_other']);
			}
			echo $alist . "</td></tr>";
			if ( $row['subscribe'] == "lcm" ){
				$cert_thing = "Licensed Landscape Contractor";
			} else {
				$cert_thing = "Registered or Cetified Landscape Architect";
			}
			echo "	<tr><td> ".$cert_thing.": </td>
					<td>".$row['reg']."</td></tr>
				<tr><td> Authority : </td>
					<td>".$row['auth']."</td></tr>
				<tr><td valign=top> Product/Service Interest  : </td>
					<td>".implode("  ",$this->y_view_and_num($row['ylist_id']))."</td></tr>
				<tr><td> need the information for :</td>
					<td>".$row['needs']."</td></tr>
				<tr><td> Expiration  : </td>
					<td>".date("F j, Y, g:i a", $row['expiration'])."</td> </tr>
				<tr><td> Note : </td>
					<td>".$row['note']."</td></tr>
				";
            if($row['hot'] == 1) {
                echo("<tr><td colspan='2'><B>Billing Information</B></td></tr>\n");
                echo("<tr><td>Name:</td><td>");
                echo($row['first_name'] . " " . $row['last_name'] . "</td></tr>\n");
                echo("<tr><td>Order ID:</td><td>");
                echo($row['trans_id'] . "</td></tr>\n");
                echo("<tr><td>Credit Card Number:</td><td>");
                echo("xxxx-xxxx-xxxx-" . $row['cc_last'] . "</td></tr>\n");
                echo("<tr><td>Credit Card Expiration:</td><td>");
                echo(date('m/y', $row['cc_exp']) . "</td></tr>\n");
            }
		}
}
//*****
function set_active($id,$active)
{

         $query = "UPDATE  subscribe SET active = $active WHERE id = $id ";
        $this->db->query($query); 

		
}
//*****
function set_link($id,$stat) {
    $query = "UPDATE  subscribe SET hot = $stat WHERE id = $id ";
    $this->db->query($query); 
}

//******
function find_date($sub,$to,$from)
{
	global $srch_altcolor;
	
	    $query ="SELECT * FROM subscribe WHERE subscribe = '$sub' AND (input between $from AND $to) ORDER BY comp_name";
		$result =$this->db->query($query);
		
			echo "<table  width=100%>" ;
			echo "<tr>";
			echo "<td align=center><b>Dates from ".date("F j, Y ",$from)." to ".date("F j, Y ",$to)."</b></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td width=100%>";
			echo "<table  border=1 width=100% rules=rows>" ;
			echo "<form method=post action=sub_action.php?id=".$row['id'].">"; 
			echo "<tr>";
			echo "<td><b>Name</b></td>";
			echo "<td><b>Company</b></td>";
			echo "<td align=center><b>Listing Date</b></td>";
			echo "<td align=center><b>Expire</b></td>";
			echo "<td>&nbsp;</td>";
			echo "</tr>";
       	$i=1;
        while($row= $this->db->fetch_array($result))
	   {	
			$bg="bgcolor=#ffffff ";
			if ($i %2) 
		{$bg="bgcolor=" . $srch_altcolor;}

			echo"<tr>";
			echo "<td ".$bg.">".$row['first_name']." " .$row['last_name']."</td>";
			echo "<td ".$bg.">".$row['comp_name']."</td>";
			echo "<td ".$bg." align=center >".date("F j, Y ",$row['input'])."</td>";
			echo "<td ".$bg." align=center>".date("F j, Y ",$row['expiration'])."</td>";
			echo "</tr>";
			$i++;
	 }
		           
			echo "</table>";
			echo "</td>";
			echo "</tr>";
			echo "</table>";

}
//******
function birth_list($month,$sub) {
	
	global $srch_altcolor;
	$query ="SELECT * FROM subscribe WHERE subscribe = '$sub' AND month = '$month' AND active=1 ORDER BY comp_name";
	$result =$this->db->query($query);

	echo "<table  border=1 width=100% rules=rows>" ;
	echo "<form method=post action=sub_action.php?id=".$row['id'].">"; 
	echo "<tr>";
	echo "<td><b>Name</b></td>";
	echo "<td><b>Company</b></td>";
	echo "<td align=center><b>Birth Month</b></td>";
	echo "<td align=center><b>E-Mail</b></td>";
	echo "</tr>";
	$i=1;
	while($row= $this->db->fetch_array($result)) {
		$bg="";
		if ($i %2) $bg="bgcolor=" . $srch_altcolor;

		echo"<tr>";
		echo "<td ".$bg.">".$row['first_name']." " .$row['last_name']."</td>";
		echo "<td ".$bg.">".$row['comp_name']."</td>";
		echo "<td ".$bg." align=center >".$row['month']."</td>";
		echo "<td ".$bg." align=center>".$row['email']."</td>";
		echo "</tr>";
		$i++;
	}

	echo "</table>";

}
//******
function   sub2_input($uid, $type_biz, $biz_title, $biz_title_other, $assoc, $assoc_other, $reg,$type_biz_other,$auth,$input,$protype) {
    $check = "select id,input from subscribe WHERE id=$uid AND input IS NOT NULL";
    $this->db->query($check);
    if($this->db->num_rows($this->db->query($check)) > 0) {
        // edit
        $query = "UPDATE subscribe  SET type_biz = '$type_biz', biz_title = '$biz_title', biz_title_other = '$biz_title_other', assoc = '$assoc', assoc_other = '$assoc_other', reg = '$reg',  type_biz_other  = '$type_biz_other', auth = '$auth', protype = '$protype' WHERE  id = '$uid'  ";
    } else {
        // input
        $query = "UPDATE subscribe  SET type_biz = '$type_biz', biz_title = '$biz_title', biz_title_other = '$biz_title_other', assoc = '$assoc', assoc_other = '$assoc_other', reg = '$reg',  type_biz_other  = '$type_biz_other', auth = '$auth', input = '$input' , protype = '$protype' WHERE  id = '$uid'  ";
    }
         
    $this->db->query($query);
								 
	}//end las_1

//******

function   lasn_input_edit($uid,$type_biz,$biz_title, $biz_title_other, $assoc, $assoc_other, $reg, $type_biz,$type_biz_other,$auth,$input)
	{
  $query = "UPDATE subscribe_lasn SET  type_biz  = '$type_biz', biz_title = '$biz_title', biz_title_other ='$biz_title_other', assoc = '$assoc', assoc_other = '$assoc_other', reg = '$reg', type_biz_other = '$type_biz_other', auth = '$auth' ,input = '$input' WHERE subscribe_id = '$uid ' ";
                    
			             $this->db->query($query);
						 
	}//end las_1

function lcm_1_input($uid, $lcm_biz_id, $biz_title, $biz_title_other, $assoc, $assoc_other, $reg,$type_biz_other, $auth,$work_type, $input)
	{
	      $query = "UPDATE subscribe_lcm SET lcm_biz_id  = '$lcm_biz_id', biz_title = '$biz_title', biz_title_other ='$biz_title_other', assoc = '$assoc', assoc_other = '$assoc_other', reg = '$reg', type_biz_other = '$type_biz_other', auth = '$auth' ,input = '$input' WHERE subscribe_id  = '$uid ' ";
                      
			             $this->db->query($query);
						   

   }//end lcm	


//*****
function pro_int($ylist, $needs ,$ebull ,$uid)
	{
  
	 $query = "UPDATE  subscribe SET ylist_id = '$ylist', needs = '$needs' , ebull = '$ebull'  WHERE id = $uid ";
        $this->db->query($query); 
		
					   
					  
}//end pro
//******
function  get_info_list($uid)
	{
     $query ="SELECT * FROM subscribe WHERE id = $uid";
	 $res =$this->db->query($query);
	 $data = $this->db->fetch_array($res);
	 return $data;

 }//end

//******
function get_cat($media_id,$sub)   {
       if ($sub == "LCM")
		   {
              $query ="SELECT type_biz  FROM lcm WHERE media_id = $media_id";
	          $res =$this->db->query($query);
		      $data = $this->db->fetch_array($res);
			  return explode(",",$data['type_biz']);
		   }
	 if ($sub == "LASN") 
		 {
		   $query ="SELECT type_biz  FROM subscribe_lasn WHERE media_id = $media_id";
		  $res =$this->db->query($query);
		  $data = $this->db->fetch_array($res);
		  
		  return explode(",",$data['type_biz']);
		 }

}//end

function find_all($protype,$area_code) {

	$query = "SELECT * FROM subscribe WHERE area_code = $area_code AND status = 1 AND protype = $protype" ;
	$result = $this->db->query($query);
		               
	echo "<TABLE CELLPADDING=9 CELLSPACING=2 valign=top align=center>";
	echo "<tr><td  valign=top align=center colspan=3><b>Search Results Table</b>";
	echo "</td></tr>";
	echo "<tr>";
	echo "<td align=center>Name</td>";
	echo "<td align=center>Phone</td>";
	echo "<td align=center>Categories</td>";
	echo "</tr>";
	$i=1;
	while($row= $this->db->fetch_array($result)) {		
			  $bg="bgcolor=#FFFFFF";
			   if ($i %2) 
			 {$bg="bgcolor=#CBFED3";}
                        $w = $this->cates_view($row['type_biz']);

					echo "<tr ".$bg.">";
					if ($row['pay_link'] == "yes")
			            {
						    echo "<td align=center ><a href=\"javascript:open_window('http://".$row['website']."',450,450)\">".$row['comp_name']."</a></td>";
						}else{
 					echo "<td align=center >".$row['comp_name']."</td>";
						}
					echo "<td align=center>(".$row['area_code'].")".$row['phone']."</td>";
					echo "<td >".implode(" ",$w)."</td>";
					echo "</tr>";
                $i++;
        }	
                   echo "</table>";

}//end function

function find_some($area_code,$type,$conditions,$protype, $reg=FALSE) {
	global $srch_altcolor;
	if ($conditions == 1) {
		$cond = " AND ";
	}
	if ($conditions == 2) {
		$cond = " OR " ;
	}

	for($i=0;$i<count($type);$i++) {
        // eureka
        $condition[] = " find_in_set('" . $type[$i] . "', type_biz) ";
		//$condition[] = " type_biz LIKE '%".$type[$i]."%' ";
	}
	if (count($type)>0) {
		$opts = " AND  (" . implode(" ".$cond." ",$condition) .")";
	} else {
		$opts = "";
	}
	if ($area_code) {
        if(is_array($area_code)) {
            $ac = " area_code IN ( " . implode(", ", $area_code) . " ) AND";
        } else {
            if(is_numeric($area_code)) {
                $ac = "area_code = $area_code  AND";
            } else if(strlen($area_code) == 2) {
                // state search hack
                $ac = " state = '$area_code' AND ";
            }
        }

    }
	$opts .= " AND protype = '" . $protype. "'";
    if($reg) {
        $opts .= " AND reg='yes' ";
    }
	$query = "SELECT * FROM subscribe WHERE ".$ac." active = 1".$opts." ORDER BY hot DESC";
    //echo("Query is: $query.<br>");
	$result = $this->db->query($query);
	
	if (mysql_num_rows($result) == 0 ){    	         
		echo "<table width=100%>";
		echo " <TD align=center><STRONG>No Results Found. Please try again.<br><br></STRONG></TD>";
		echo "</tr>";
		echo "</table>";
		end;
	} else {
		echo "<TABLE width=100% cellpadding=5>";
		echo "<tr>";
		echo " <TD colspan=3 ></TD>";
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><STRONG>Name</STRONG></td>";
		echo "<td><STRONG>Phone</STRONG></td>";
		echo "<td><STRONG>Categories</STRONG></td>";
		echo "</tr>";
           
		$i=1;
		while($row= $this->db->fetch_array($result)){		
			$website=$row['website'];
			$bg="bgcolor=#ffffff ";
			if ($i %2) $bg="bgcolor=" . $srch_altcolor;
			$w = $this->cate_view($row['type_biz']);

			echo "<tr ".$bg.">";
			if ($row['hot'] == 1 && $website) {
				echo "<td align=left ><a href=\"javascript:open_window('http://".$row['website']."',450,450);\">".$row['comp_name']."</a></td>";
			} else {
				echo "<td align=left >".$row['comp_name']."</td>";
			}
			echo "<td align=left>(".$row['area_code'].") ".$row['phone']."</td>";
			echo "<td >".implode("",$w)."</td>";
			echo "</tr>";
			$i++;
        }	
		echo "</table>";
	}
}

function table($ylist, $protype) { 
 	
 	if (strlen($ylist)== 0) $ylist[]="";
	if($protype == "d") {	
	
		$query = "SELECT * FROM ylist WHERE  idParent = 0  ORDER BY id";
		$result = $this->db->query($query);          
		echo "<TABLE CELLPADDING=5 CELLSPACING=2  align=center>";
		echo "<tr>";
		echo "<td  valign=top>";	
		echo "<TABLE CELLPADDING=5 CELLSPACING=2 valign=top>";
		echo "<tr>";
		echo "<td  valign=top>";
						
		while($row= $this->db->fetch_array($result)) {				
			if ($row['id'] == 29 ||  $row['id'] == 32 ||  $row['id'] == 41)	{  
				echo "<b>".$row['name']."</b><br>";
				echo $this->sub_table($row['id'],$ylist)."<br>";
			}
		}
		echo "</td></table>";

        $query = "SELECT * FROM ylist WHERE  idParent = 0 ORDER BY name DESC";
		$result = $this->db->query($query);
		             
		echo "<td  valign=top>";	
		echo "<TABLE CELLPADDING=5 CELLSPACING=2 valign=top>";
		echo "<tr><td valign=top nowrap>";	
     	while($row= $this->db->fetch_array($result)) {	
			if ($row['id'] == 33 ||  $row['id'] == 624 ||  $row['id'] == 27 ||  $row['id'] == 34) {
				echo "<b>".$row['name']."</b><br>";
				echo $this->sub_table($row['id'],$ylist)."<br>";
			}
		}
		echo "</td></table>";

		$query = "SELECT * FROM ylist WHERE  idParent = 0 ORDER BY id";
		$result = $this->db->query($query);
                        
		echo "<td  valign=top>";	
		echo "<TABLE CELLPADDING=5 CELLSPACING=2 valign=top>";
		echo "<tr><td  valign=top>";	
		
		while($row= $this->db->fetch_array($result)) {
			if ($row['id'] == 30 ||  $row['id'] == 31 ||  $row['id'] == 35 )				{
				echo "<b>".$row['name']."</b><br>";
				echo $this->sub_table($row['id'],$ylist)."<br>";
			}
       	}
		echo "</td></table>";
		echo "</td></tr></table>"; 

	} else {
	   
		$query = "SELECT * FROM ylist WHERE  idParent = 0  ORDER BY name";
		$result = $this->db->query($query);
		               
		echo "<TABLE CELLPADDING=5 CELLSPACING=2  align=center>";
		echo "<tr><td valign=top>";	
		echo "<TABLE CELLPADDING=5 CELLSPACING=2 valign=top>";
		echo "<tr><td valign=top>";
						
		while($row= $this->db->fetch_array($result)) {				
			if ($row['id'] == 482 ||  $row['id'] == 35 ||  $row['id'] == 34 ||  $row['id'] == 27) {  
				echo "<b>".$row['name']."</b><br>";
				echo $this->sub_table($row['id'],$ylist)."<br>";
			}
		}
		echo "</td></tr></table>";

        $query = "SELECT * FROM ylist WHERE  idParent = 0 ORDER BY id DESC";
		$result = $this->db->query($query);
		             
		echo "<td  valign=top>";	
		echo "<TABLE CELLPADDING=5 CELLSPACING=2 valign=top>";
		echo "<tr><td  valign=top nowrap>";	
     	while($row= $this->db->fetch_array($result)) {	
			if ($row['id'] == 31 ||  $row['id'] == 30 ||  $row['id'] == 41 ) {
				echo "<b>".$row['name']."</b><br>";
				echo $this->sub_table($row['id'],$ylist)."<br>";
			}
		}
		echo "</td></tr></table>";

		$query = "SELECT * FROM ylist WHERE  idParent = 0 ORDER BY id DESC";
		$result = $this->db->query($query);
                        
		echo "<td valign=top>";	
		echo "<TABLE CELLPADDING=5 CELLSPACING=2 valign=top>";
		echo "<tr><td  valign=top nowrap>";	
   		while($row= $this->db->fetch_array($result)) {	
		  
			if ($row['id'] == 624 ||  $row['id'] == 32 ||  $row['id'] == 29)	{
				echo "<b>".$row['name']."</b><br>";
				echo $this->sub_table($row['id'],$ylist)."<br>";
			}
       	}
		echo "</td></tr></table>";
		echo "</td></tr></table>"; 
	}
}

function sub_table($id,$ylist) {
		$query = "SELECT * FROM ylist WHERE idParent = $id ORDER BY name";
		$result = $this->db->query($query);
		echo "<TABLE WIDTH=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tr><td valign=top><table cellspacing=\"0\" cellpadding=\"0\">";
		$i=0;
		while($row= $this->db->fetch_array($result)){	
		
			if (in_array($row['id'] ,$ylist))
				$t = "checked";
				else
				$t = "";
		
				echo "<tr><td valign=top><input type=\"checkbox\" ".$t." name=\"ylist[]\"  value=\"".$row['id']. "\" ></td><td>".$row['name']. "</td></tr>\n" ;  
    					/*if ($i == 5) {
							echo "<tr><td colspan=3 ><span onclick='return expand(\"list_".$row['name']. "\", this);' style='cursor:hand;text-decoration:underline'>See more choices...</span><div id='list_".$row['name']. "' style='display:none;'>";
							echo "<table>";
							$extra=1;
			}*/
    		$i++;
    	}
    	if ($extra) echo "</table></div></td></tr>";
		echo "</table></td></tr></table>";

}

function types($biz_id,$protype,$split) {
	
	if ($protype == "d")
		$pick = 0;
	else  
		$pick = 1;
	$ct = 0;
	$query = "SELECT * FROM type_biz WHERE idParent = $pick ORDER BY  id";
	$result = $this->db->query($query);
	
	$i=0;
	echo "<TABLE WIDTH=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tr><td valign=top><table cellspacing=\"0\" cellpadding=\"0\">";
		
	while($row= $this->db->fetch_array($result)) {
		if ($i % (10) == 0) {
			echo "</table></td><td></td><td valign=top><table cellspacing=\"0\" cellpadding=\"0\">";
		}
		if (in_array($row['id'] ,$biz_id))
			$t = "checked";
		else
			$t = "";
		if (($ct % $split) == 0) { echo "</td><td valign=top>"; }
		echo "<tr><td valign=top><input type=\"checkbox\" ".$t." name= \"biz_id[]\" value=\"".$row['id']."\"></td><td><font size=-2>".$row['name']. "</font></tr>\n" ;  
		$ct++;$i++;
	}
	echo "</table></td></tr></table>";
}

function assoc($assoc,$protype) {           
	
	if (strlen($assoc)==0)	$assoc[]="";
	 
	if($protype == "d") {
		echo "<input type=checkbox name=assoc[] value=aashto ".
		(in_array("aashto",$assoc)?"checked":"") .
		">AASHTO<br>";

		echo "<input type=checkbox name=assoc[] value=aia ".
		(in_array("aia",$assoc)?"checked":"") .
		">AIA<br>";

		echo "<input type=checkbox name=assoc[] value=apa ".
		(in_array("apa",$assoc)?"checked":"") .
		">APA<br>";

		echo "<input type=checkbox name=assoc[] value=apld ".
		(in_array("apld",$assoc)?"checked":"") .
		">APLD<br>";

		echo "<input type=checkbox name=assoc[] value=asgca ".
		(in_array("asgca",$assoc)?"checked":"") .
		">ASGCA<br>";

		echo "<input type=checkbox name=assoc[] value=asic ".
		(in_array("asic",$assoc)?"checked":"") .
		">ASIC<br>";

		echo "<input type=checkbox name=assoc[] value=asla ".
		(in_array("asla",$assoc)?"checked":"") .
		">ASLA<br>";

		echo "<input type=checkbox name=assoc[] value=aza ".
		(in_array("aza",$assoc)?"checked":"") .
		">AZA<br>";

		echo "<input type=checkbox name=assoc[] value=BIA ".
		(in_array("BIA",$assoc)?"checked":"") .
		">BIA<br>";

		echo "<input type=checkbox name=assoc[] value=boma ".
		(in_array("boma",$assoc)?"checked":"") .
		">BOMA<br>";

		echo "<input type=checkbox name=assoc[] value=class_fund ".
		(in_array("class_fund",$assoc)?"checked":"") .
		">CLASS Fund<br>";

		echo "<input type=checkbox name=assoc[] value=dot ".
		(in_array("dot",$assoc)?"checked":"") .
		">DOT<br>";

		echo "<input type=checkbox name=assoc[] value=iaapa ".
		(in_array("iaapa",$assoc)?"checked":"") .
		">I AAPA<br>";

		echo "<input type=checkbox name=assoc[] value=iald ".
		(in_array("iald",$assoc)?"checked":"") .
		">I ALD<br>";

		echo "<input type=checkbox name=assoc[] value=ieca ".
		(in_array("ieca",$assoc)?"checked":"") .
		">I ECA<br>";

		echo "<input type=checkbox name=assoc[] value=ies ".
		(in_array("ies",$assoc)?"checked":"") .
		">I ES<br>";

		echo "<input type=checkbox name=assoc[] value=nalms ".
		(in_array("nalms",$assoc)?"checked":"") .
		">NALMS<br>";

		echo "<input type=checkbox name=assoc[] value=park_service ".
		(in_array("park_service",$assoc)?"checked":"") .
		">Nat'l Park Service<br>";

		echo "<input type=checkbox name=assoc[] value=forest_service ".
		(in_array("forest_service",$assoc)?"checked":"") .
		">Nat'l Forest Service<br>";

		echo "<input type=checkbox name=assoc[] value= nrpa ".
		(in_array("nrpa",$assoc)?"checked":"") .
		">NRPA<br>";

		echo "<input type=checkbox name=assoc[] value=nwfa ".
		(in_array("nwfa",$assoc)?"checked":"") .
		">NWFA<br>";

		echo "<input type=checkbox name=assoc[] value= tpi ".
		(in_array("tpi",$assoc)?"checked":"") .
		">TPI<br>";

		echo "<input type=checkbox name=assoc[] value= wwa ".
		(in_array("wwa",$assoc)?"checked":"") .
		">WWA<br>";

		echo "<input type=checkbox name=assoc[] value= none ".
		(in_array("none",$assoc)?"checked":"") .
		">None<br>";

		
	} else {

	 	echo "<input type=checkbox name=assoc[] value=stateland ".
		(in_array("stateland",$assoc)?"checked":"") .
		">State Landscape Contractor Assoc.<br>";

		echo "<input type=checkbox name=assoc[] value=statenurse ".
		(in_array("statenurse",$assoc)?"checked":"") .
		">State Nurserymen Assoc.<br>";


		echo "<input type=checkbox name=assoc[] value=stateturf ".
		(in_array("stateturf",$assoc)?"checked":"") .
		">State Turfgrass Assoc.<br>";

		echo "<input type=checkbox name=assoc[] value=alca ".
		(in_array("alca",$assoc)?"checked":"") .
		"> ALCA (Associated Landscape Contractors of America)<br>";

		echo "<input type=checkbox name=assoc[] value=ana ".
		(in_array("ana",$assoc)?"checked":"") .
		">ANA<br>";

		echo "<input type=checkbox name=assoc[] value=apld ".
		(in_array("apld",$assoc)?"checked":"") .
		">APLD<br>";

		echo "<input type=checkbox name=assoc[] value=asic ".
		(in_array("asic",$assoc)?"checked":"") .
		">ASIC<br>";

		echo "<input type=checkbox name=assoc[] value=asla ".
		(in_array("asla",$assoc)?"checked":"") .
		">ASLA<br>";

		echo "<input type=checkbox name=assoc[] value=bia ".
		(in_array("bia",$assoc)?"checked":"") .
		">BIA<br>";

		echo "<input type=checkbox name=assoc[] value=class_fund ".
		(in_array("class_fund",$assoc)?"checked":"") .
		">CLASS Fund<br>";

		echo "<input type=checkbox name=assoc[] value=gcsaa ".
		(in_array("gcsaa",$assoc)?"checked":"") .
		">GCSAA<br>";

		echo "<input type=checkbox name=assoc[] value=ieca ".
		(in_array("ieca",$assoc)?"checked":"") .
		">IECA<br>";

		echo "<input type=checkbox name=assoc[] value=ies ".
		(in_array("ies",$assoc)?"checked":"") .
		">IES<br>";

		echo "<input type=checkbox name=assoc[] value=papa ".
		(in_array("papa",$assoc)?"checked":"") .
		">PAPA<br>";

		echo "<input type=checkbox name=assoc[] value=plcaa ".
		(in_array("plcaa",$assoc)?"checked":"") .
		">PLCAA<br>";

		echo "<input type=checkbox name=assoc[] value=tpi ".
		(in_array("tpi",$assoc)?"checked":"") .
		">TPI<br>";
		
		echo "<input type=checkbox name=assoc[] value= none ".
				(in_array("none",$assoc)?"checked":"") .
		">None<br>";
	}
}

function type_biz($biz_id, $protype="", $format='normal'){
    // warped programmer logic
    if (strlen($biz_id)== 0)    $biz_id[]="";
    // end warp

    switch($protype) {
        case 'd':
            $weight = 6;
            $parent   = '0';
            break;
        case 'c':
            $weight = 6;
            $parent   = '1';
            break;
        default:
            break;
    }
    if($format != 'normal' && $weight > 0) {
        $basequery  = "SELECT id, name FROM type_biz WHERE idParent = $parent";
        $pQuery = $basequery . " AND weight >= $weight ORDER BY weight DESC, id";
        $query  = $basequery . " AND weight <  $weight ORDER BY weight DESC, name";
    } else {
        $query  = "SELECT id, name FROM type_biz ORDER BY name";
    }

    if(isset($pQuery)) {
        // echo("Query is: $pQuery<br>");
        echo('<table width="100%" cellpadding="0" cellspacing="0">');
        $result = $this->db->query($pQuery);
        while($row = $this->db->fetch_array($result)) {
            if(in_array($row['id'], $biz_id))
                $t = 'checked';
            else
                $t = '';
            echo('<tr><td width="10%" align="left"><input type="checkbox" name="biz_id[]" ' . $t);
            echo(' value="' . $row['id'] . '"></td>');
            echo('<td align="left"><strong>' . $row['name'] . '</strong></td></tr>');
        }
        echo('</table><br>');
    }

    $i = 0;
    //echo("Query is: $query<br>");
    echo('<table width="100%" cellpadding="0" cellspacing="0">');
    $result = $this->db->query($query);
    while($row = $this->db->fetch_array($result)) {
        if(in_array($row['id'], $biz_id))
            $t = 'checked';
        else
            $t = '';
        echo('<tr><td width="10%" align="left"><input type="checkbox" name="biz_id[]" ' . $t);
        echo(' value="' . $row['id'] . '"></td>');
        echo('<td align="left">' . $row['name'] . '</td></tr>');
    }
    echo('</table><br>');
}

function authority($auth){
	if ($auth[0]) {	  
	     
		echo "<input type=checkbox name=authority[] value=Purchase ".
		(in_array("Purchase",$auth)?"checked":"") .
		">Purchase<br>";
		  
		echo "<input type=checkbox name=authority[] value=Specify ".
		(in_array("Specify",$auth)?"checked":"") .
		">Specify<br>";
	
		echo "<input type=checkbox name=authority[] value=Resell ".
		(in_array("Resell",$auth)?"checked":"") .
		">Resell<br>";
		
		echo "<input type=checkbox name=authority[] value=Recommend ".
		(in_array("Recommend",$auth)?"checked":"") .
		">Recommend<br>";
		
		echo "<input type=checkbox name=authority[] value=None ".
		(in_array("None",$auth)?"checked":"") .
		">None<br>";
	} else {
		echo "<input type=checkbox name=authority[] value=Purchase>Purchase<br>";
		echo "<input type=checkbox name=authority[] value=Specify>Specify<br>";
		echo "<input type=checkbox name=authority[] value=Resell>Resell<br>";
		echo "<input type=checkbox name=authority[] value=Recommend>Recommend<br>";
		echo "<input type=checkbox name=authority[] value=None>None<br>";
	
	}
}

function update_back($media_id) {
    $query = "UPDATE subscriber SET notify_credit  = 0 WHERE  id = $ven_id ";
    $this->db->query($query);

}

function cate_view($find) {
    	/*
	if ( ereg(",other",$find) ){
		ereg_replace(",other","",$find);
	}
	*/
	$find = explode(",", $find);
	//for($i=0;$i<count($find);$i++)
	//$condition[] = "id=".$find[$i];
	foreach ($find as $id){
	$condition[] = "id='$id'";
	}
	$condition_string = implode(" OR ", $condition);
	$query = "SELECT name FROM type_biz WHERE $condition_string";
	$result = $this->db->query($query);
	$it = array(" ");
	if ($result) {
	while($data =  $this->db->fetch_array($result))	{
		$it[] = $data['name']."<br>";
	}
	}
	return $it;

}

function cates_view($find) {
    
       $find = explode(",", $find);
  
	    for($i=0;$i<count($find);$i++)
		$condition[] = "id=".$find[$i];

	$query = "SELECT name FROM type_biz WHERE ".implode(" OR ",$condition);
	$result = $this->db->query($query);
	
	while($data =  $this->db->fetch_array($result))
	{
		echo $data['name']."<br>";
	}
	
	

}//end fun
function y_view_and_num($find) {
     
	$find = explode(",", $find);
	for($i=0;$i<count($find);$i++)
	$condition[] = "id=".$find[$i];

	$query = "SELECT name,sub_number FROM ylist WHERE ".implode(" OR ",$condition);
	$result = $this->db->query($query);
	$it = array(" ");
	if ($result) {
		while($data =  $this->db->fetch_array($result)){
			$it[] = $data['name']." " . $data['sub_number'] . "<br>";
		}
	}
	return $it;

}

function y_view($find) {
	$find = explode(",", $find);
  
	for($i=0;$i<count($find);$i++)
		$condition[] = "id=".$find[$i];

	$query = "SELECT name FROM ylist WHERE ".implode(" OR ",$condition);
	$result = $this->db->query($query);
	$it = array(" ");
	if ($result) {
		while($data =  $this->db->fetch_array($result)){
			$it[] = $data['name']."<br>";
		}
	}
	return $it;
}

function y_number($find){
	$find = explode(",", $find);
	for($i=0;$i<count($find);$i++)
		$condition[] = "id=".$find[$i];

	$query = "SELECT sub_number FROM ylist WHERE ".implode(" OR ",$condition);
	$result = $this->db->query($query);
	$it = array(" ");
	if ($result) {
		while($data = $this->db->fetch_array($result))	{
			$it[] = $data['sub_number']."<br>";
		}
	}
	return $it;

}

function view_listing($uid) {
	$query ="SELECT * FROM subscribe WHERE id = $uid";
	$result =$this->db->query($query);
                     
	echo "<table  align=center width=80% border=1 rules=rows >";
	echo "<tr><TD align=center></TD>";
	echo "<TD align=center>Name</TD>";
	echo "<TD align=center>Phone</TD>";
	echo "<TD align=center>Categories</TD>";
	echo "</TR>";
	echo "<TR>";
	while($row= $this->db->fetch_array($result)) {	    
		$C = $row['type_biz'];
		$cat = $this->cates_view($C);
	
		echo "<TD>Option 1</TD>"; 
		echo "<td align=center><FONT COLOR=blue><U>".$row['comp_name']."</U></FONT></td>";
		echo "<td align=center>(".$row['area_code'].")".$row['phone']."</td>";
		echo "<td align=center>".implode("",$cat)."</td>";
		echo "<TR>";
		echo "<TD>Option 2</TD>"; 
		echo "<td align=center >".$row['comp_name']."</td>";
		echo "<td align=center>(".$row['area_code'].")".$row['phone']."</td>";
		echo "<td align=center>".implode("",$cat)."</td>";
		echo "</TR>";   
	}
	echo "</TR></table>";
}

function list_media($uid,$list) {
	if ($list == "go") {
		$list="yes";
		$pay="hot = '1' ";
	} else {   
		$pay="hot = '0' ";
	}
        
	$expiration = strtotime("2 years");
	$query = "UPDATE  subscribe SET list = '$list' , expiration = '$expiration', $pay  WHERE id = $uid ";
	$this->db->query($query); 
}
// payment.php
function trans_input($trans_id, $hld, $cc_exp, $cc_last, $uid) {
	$query ="UPDATE subscribe SET trans_id = '$trans_id', chld = '$hld',cc_exp = '$cc_exp', cc_last = '$cc_last' WHERE id = $uid ";
	$result =$this->db->query($query);
}

function subscriber_type($uid) {        
	$query ="SELECT * FROM subscribe WHERE id = $uid";
	$result =$this->db->query($query);
	
	$data= $this->db->fetch_array($result);
	return $data['subscribe'];
}

function find_pass($uid) {        
	$query ="SELECT * FROM subscribe_login WHERE uid = $uid";
	$result =$this->db->query($query);
	$data= $this->db->fetch_array($result);
	return $data['pass'];
}

function stop_subscriber() {
       
	$first =  strtotime("yesterday")."<br>";
	$first2 =  strtotime("+2 weeks")."<br>";	

	$query ="SELECT * FROM subscribe WHERE expiration BETWEEN '$first' AND '$first2' AND notify = 3 ";
	$result =$this->db->query($query);
	
	while($row =  $this->db->fetch_array($result)) {
		   $this->stop_sub($row['id']);
    }
}

function check_subscribers() {       
		
	$first =  strtotime("-4 weeks")."<br>";
	$first2 =  strtotime("-7 weeks")."<br>";	

	$query ="SELECT * FROM subscribe WHERE expiration BETWEEN '$first2' AND '$first' AND notify = 0 ";
	$result =$this->db->query($query);

	while($row =  $this->db->fetch_array($result)) {
		    $email = $row['email'];
			$mess1 = "Please renew your subscription to ".$row['subscribe'];
			$mess2 = $this->lol_url."/advertising/renew.php";
			$mess3=  "Expires ".date("F j, Y",$row['expiration']);
			$this->update_mail($row['id'],1);
    }

	$to = $email;
	$from =  "landscapeOnLine.com";
	$subject = "Renew Reminder";
	$body = $mess1." \n".$mess2." \n" .$mess3." \n\n";

	$this->send_mail($to, $subject, $body,"From: ".$from."\r\nReply-To: ".$from);
}

function check_subscribers2() {       	
		
	$second =  strtotime("-2 weeks")."<br>";
	$second2 =  strtotime("-4 weeks")."<br>";	

	$query ="SELECT * FROM subscribe WHERE expiration BETWEEN '$second2' AND '$second' AND notify = 1";
	$result =$this->db->query($query);
	
	while($row =  $this->db->fetch_array($result)) {
		  
	    $email = $row['email'];
		$mess1 = "You need to renew your subscription to ".$row['subscribe'];
		$mess2 = $this->lol_url."/advertising/renew.php";
		$mess3=  "Expires ".date("F j, Y",$row['expiration']);
		$this->update_mail($row['id'],2);
    }
	$to = $email;
	$from =  "landscapeOnLine.com";
	$subject = "Renew Reminder two";
	$body = $mess1." \n".$mess2." \n" .$mess3." \n\n";
	
	
	$this->send_mail($to, $subject, $body,"From: ".$from."\r\nReply-To: ".$from);
}

function check_subscribers3() {       	
		
	$second =  strtotime("-1 day")."<br>";
	$second2 =  strtotime("-2 weeks")."<br>";	
	
	$query ="SELECT * FROM subscribe WHERE expiration BETWEEN '$second2' AND '$second' AND notify = 2 ";
	$result =$this->db->query($query);
	
	while($row =  $this->db->fetch_array($result)) {
	
		$email = $row['email'];
		$mess1 = "You subscription to ".$row['subscribe']." will be cancelled";
		$mess2 = $this->lol_url."/advertising/renew.php";
		$mess3=  "Expires ".date("F j, Y",$row['expiration']);
		$this->update_mail($row['id'],3);
	}
	
	$to = $email;
	$from =  "landscapeOnLine.com";
	$subject = "Renew Reminder three";
	$body = $mess1." \n".$mess2." \n" .$mess3." \n\n";
	
	$this->send_mail($to, $subject, $body,"From: ".$from."\r\nReply-To: ".$from);
}

function update_mail($id,$notify) {
	$query ="UPDATE subscribe SET notify = $notify WHERE id = $id ";
	$result =$this->db->query($query);
}

function stop_sub($id) {
	$query ="UPDATE subscribe SET status = '3' WHERE id = $id ";
	$result =$this->db->query($query);
}

function renew_up($id){
	$expiration == strtotime("+2 years") ; 
	$query ="UPDATE subscribe SET status = '0' , expiration = '$expiration'  WHERE id = $id ";
	$result =$this->db->query($query);
}

function view_mail() {
	$query ="SELECT * FROM  contact";
	$result =$this->db->query($query);
	echo "<table  align=center width=100%  >";
	echo "<tr>";
	echo "<TD align=center>To</TD>";
	echo "<TD align=center>Name</TD>";
	echo "<TD align=center>Phone</TD>";
	echo "<TD align=center>Reviewed </TD>";
	echo "</TR>";
	echo "<TR>";
	
	while($row=$this->db->fetch_array($result)) {   
		$bg="";
		if ($i %2) {$bg="bgcolor=#969FBE";}

		        echo "<TR ".$bg.">";
				echo "<td align=center>".$row['subscribe']."</td>";
				echo "<td align=center>".$row['first_name']." ".$row['last_name']."</td>";
				echo "<td align=center>(".$row['area_code'].")".$row['phone']."</td>";
				
				if ($row['status'] == 0)
				{
				   echo "<td align=center><a href=review.php?id=".$row['id'].">No</a></td>";
				}else{
				   echo "<td align=center>Yes</td>";
				    echo "<td><a href=\"javascript:conf_redir('mail_action.php?action=delete&id=".$row['id']."','Are you sure you would like to delete ".$row['first_name']."')\"><IMG SRC=\"/imgz/delete_task.gif\"  border=0 alt=delete></a></td>";
				}
			      echo "</TR>";
			 $i ++;
		
    	}
              echo "</table>"; 

}
 
function view_mail_replay($id){

	$query ="SELECT * FROM  contact WHERE id = $id ";
	$result =$this->db->query($query);
	while($row=$this->db->fetch_array($result)) {   

		echo "<table  align=center width=40%  >";
		echo "<tr>";
		echo "<TD align=right>To</TD><TD align=center></TD><td>".$row['subscribe']."</td>";
		echo "</tr><tr>";
		echo "<TD align=right>Name</TD><TD align=center></TD><td >".$row['first_name']." ".$row['last_name']."</td>";
		echo "</tr><tr>";
		echo "<TD align=right>E-mail</TD><TD align=center></TD><td >".$row['email']." ".$row['last_name']."</td>";
		echo "</tr><tr>";
		echo "<TD align=right>Phone</TD><TD align=center></TD><td >(".$row['area_code'].")".$row['phone']."</td>";
		echo "</tr><tr>";
		echo "<TD align=right>Message</TD><TD align=center> </TD><td >".$row['note']."</td>";
		echo "</tr><tr>";
		echo "<TD align=right colspan=3><a href=mail_action.php?action=read&id=".$row['id'].">Mark as read</TD>";
		echo "</TR>";
		echo "</table>"; 

	}

}//end function

function mark_mail($id) {
	
	 $query ="UPDATE contact SET status = 1 WHERE id = $id ";
	 $result =$this->db->query($query);
	
	
}

function delete_mail($id) {
	
	 $query ="DELETE FROM contact  WHERE id = $id ";
	 $result =$this->db->query($query);
	
}

function save_pass($uid,$pass)  {
	$time_start = time();
	$query = "INSERT INTO subscribe_login (uid, pass, time_start) VALUES ('$uid','$pass','$time_start')";
	$this->db->query($query);

}

function get_pass($uid) {        
	$query ="SELECT pass FROM subscribe_login WHERE uid = $uid";
	$result =$this->db->query($query);
	$data= $this->db->fetch_array($result);
	return $data['pass'];
}

function find_by_name($name, $sub) {
	global $srch_altcolor;
    $name = strtolower(mysql_escape_string($name));
	$query  = "SELECT * FROM subscribe WHERE (comp_name LIKE '%$name%' OR last_name LIKE '%$name%')";
    if($sub == "lcm" || $sub == "lasn" || $sub == "lol") {
        $query .= " AND subscribe = '$sub'";
    } 
    $query .= " AND active = 1 ORDER BY comp_name";
    $result = $this->db->query($query);

    echo "<table border=1 width=100% rules=rows>" ;
    echo "<form method=post action=sub_action.php?id=".$row['id'].">";
    echo "<tr>";
    echo "<td><b>Name</b></td>";
    echo "<td><b>Company</b></td>";
    echo "<td><b>Subscribe</b></td>";
    echo "<td align=center><b>E-Mail</b></td>";
    echo "<td>&nbsp;</td>";
    echo "<td>&nbsp;</td>";
    echo "</tr>";
    $i=1;
    while($row= $this->db->fetch_array($result)) {
        $bg="";
        if ($i %2) $bg="bgcolor=" . $srch_altcolor;
                                                                                                                                           
        echo"<tr>";
        echo "<td ".$bg.">".$row['first_name']." " .$row['last_name']."</td>";
        echo "<td ".$bg.">".$row['comp_name']."</td>";
        echo "<td ".$bg.">".$row['subscribe']."</td>";
        echo "<td ".$bg." align=center>".$row['email']."</td>";
        echo "<td ".$bg."><a href=listing_edit.php?action=edit&id=".$row['id']."><IMG SRC=\"/imgz/mod_task.gif\" border=0></a></td>";
        echo "<td ".$bg."><a href=listing_action.php?action=view&id=".$row['id']."><IMG SRC=\"/imgz/task_view.gif\" border=0 alt=view></a></td>";
        echo "</tr>";
        $i++;
    }
                                                                                                                                           
    echo "</table>";
}

function parseDate($var) {
    $year  = substr($var, 0, 4);
    $month = substr($var, 4, 2);
    $day   = substr($var, 6, 2);
    $hour  = substr($var, 8, 2);
    $min   = substr($var, 10, 2);
    $sec   = substr($var, 12, 2);
                                                                                                                                           
    //return("$month/$day/$year@$hour:$min");
    return("$month/$day/$year");
}


}
