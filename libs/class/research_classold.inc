<?

include_once $include_path . "class/common_class.inc";

class research_Class extends Common_Class

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

function research_class(&$db) {	

	$this->db=&$db;

}



//******************************************************************************************

// input letter into DB

function input_letter($first_name,$last_name,$email,$city,$state,$zip,$company,$title,$area_code,$phone,$response, $input ,$title_text,$comment,$uid)

{

    $active = "0"; 

	$gen_active = "0";

	$active_day = "not yet";

	$proofed = "no";

		

	$query = "INSERT INTO research (first_name,last_name,email,city,state,zip,company,title,area_code,phone,response,input ,title_text,comment,active,proofed)".

	" VALUES ('$first_name', '$last_name', '$email', '$city', '$state', '$zip', '$company', '$title', '$area_code', '$phone', '$response', '$input ', '$title_text', '$comment', '$active','$proofed')";

	$this->db->query($query);



	return $letter_id = $this->db->insert_id(); 

}

//******************************************************************************************

// input editorial into DB

function input_editorial($id,$images,$title,$subtitle,$ed_text,$is_html,$author,$issue,$source,$keywords,$uid,$active,$subject) {

   	if ($id) {

		$query = "DELETE FROM editorial WHERE id = $id ";

		$this->db->query($query);

		$query = "INSERT INTO editorial (id,images,title,subtitle,ed_text,is_html,author,issue,source,keywords,uid,active,subject)" .

	" VALUES ('$id', '$images','$title', '$subtitle', '$ed_text', '$is_html', '$author', '$issue', '$source', '$keywords', '$uid', '$active','$subject')";

	

	} else {

	

		$query = "INSERT INTO editorial (title,images,subtitle,ed_text,is_html,author,issue,source,keywords,uid,active,subject)" .

	" VALUES ('$title', '$images', '$subtitle', '$ed_text', '$is_html', '$author', '$issue', '$source', '$keywords', '$uid', '$active','$subject')";

	}

	$this->db->query($query);

	$letter_id = $this->db->insert_id();

	if ($letter_id)	return $letter_id;

	return  $this->db->error();

 }



 //******************************************************************************************

// editor 4 mail

function update_letter($art_id,$id,$first_name, $last_name,$email,$city,$state,$zip,$company,$title,$area_code,$phone,$title_text,$comment){

    		

	$query = "UPDATE  research SET art_id = '$art_id', first_name = '$first_name', last_name = '$last_name', email = '$email', city = '$city', state = '$state', zip = '$zip', company = '$company', title = '$title', area_code = '$area_code', phone = '$phone', title_text = '$title_text', comment = '$comment' WHERE id =$id  ";

	$this->db->query($query);



 }

//******************************************************************************************

//send email to person who posts a letter 

function send_conf($letter_id) {

    

$query = "SELECT * FROM research WHERE id = $letter_id ";

$res =$this->db->query($query);

$data = $this->db->fetch_array($res);

$mail_to =  $data['email'];

$response =  $data['response'];



if ($response == "article_lcm") {

//$froms = "jfultz@landscapeonline.com";

	$froms="jfultz@landscapeonline.com";						

} else {

//$froms = "dnagler@landscapeonline.com";

	$froms="dnagler@landscapeonline.com";

}



/*******************************************



To change the text within a message, please adhere to the following guidelines:



- ALL text must be between a $mess .="  and a "; tag.



- If you use quotation marks in the body of message, they must be written as \"



- To put new lines use \r\n



********************************************/





$mess .= "Dear Reader ";

$mess .= "<br>";

$mess .= "Thie is anacknowledges receipt of your recent letter to the editors of Landscape " .

		"Contractor Magazine or Landscape Architect and Specifier News Magazine, or " .

		"LandscapeOnLine.com. We are always interested in hearing the thoughts and opinions " .

		"of our readers. Thank you again for your input and readership." ;



$to = $mail_to;

$from =  $froms;

$subject = "Landscaponline.com";

$body = $mess;



$this->send_mail($to, $subject, $body,"From: ".$from."\r\nReply-To: ".$from);

}



//*******************************************************************************************

// private letter edit switchboard

function list_letters($art_id,$admin =0 ) {

	global $srch_altcolor;

	

	$query = "SELECT * FROM research" . (($art_id) ? " WHERE art_id = '$art_id' " : "");

	$res =$this->db->query($query);

	//$data = $this->db->fetch_array($res);

	if ($admin) {

		echo "<tr> 

				<td><b>Article ID</b></td>	

				<td><b>Name</b></td>		

				<td align=center><b>Title</b></td>

				<td align=center ><b>E-mail</b></td>

				<td align=center ><b>Proofed</b></td>";

		

		if ($data['proofed'] == "yes")	{

			echo "<td align=center><b>Verify Activation</b></td>	

					<td align=center><b>General Activation</b></td>

					<td>Delete</td>

					<td>Edit</td>	

					<td>View</td>";

		}

		

		echo "</tr>";

	    $i=1;

		while($row= $this->db->fetch_array($res)) {

	  		$bg="bgcolor=#ffffff ";

	       	if ($i %2) $bg="bgcolor=" . $srch_altcolor;

			$ctitle = $row['title_text'];

			if (strlen($ctitle) > 20) $ctitle = substr($ctitle, 0, 20) . "...";

			echo"<tr>

					<td ".$bg.">".$row['art_id']."</td>

					<td ".$bg.">".$row['first_name']." " .$row['last_name']."</td>

					<td ".$bg.">".$ctitle."</td>

					<td ".$bg." align=center>".$row['email']."</td>

					<td ".$bg." align=center>".$row['proofed']."</td>";

	

			if ($row['proofed'] == "yes") {

					

				if ($row['active'] == 1)

				echo "<td ".$bg." align=center><a href=listing_action.php?action=list&list=0&id=".$row['id'].">Active</a></td>";

				if ($row['active'] == 0)

				echo "<td ".$bg." align=center><a href=listing_action.php?action=list&list=1&id=".$row['id'].">Not active</a></td>";

		

				if ($row['gen_active'] == 1)

				echo "<td ".$bg." align=center><a href=listing_action.php?action=gen_list&list=0&id=".$row['id'].">Active</a></td>";

				if ($row['gen_active'] == 0)

				echo "<td ".$bg." align=center><a href=listing_action.php?action=gen_list&list=1&id=".$row['id'].">Not active</a></td>";

		

				echo "<td align=center><a href=\"javascript:conf_redir('listing_action.php?action=delete&id=".$row['id']."','Are you sure you would like to delete ".$row['comp_name']."')\"><IMG SRC=\"/imgz/delete_task.gif\"  border=0 alt=delete></a></td>";

				echo "<td align=center><a href=letter_edit.php?action=edit&id=".$row['id']."><IMG SRC=\"/imgz/mod_task.gif\" border=0 alt=view></a></td>";

		

				echo "<td align=center><a href=letter_edit.php?action=view&id=".$row['id']."><IMG SRC=\"/imgz/view.gif\" border=0 alt=view></a></td>";

				echo "</tr>";

			} else {

				echo "<td ".$bg." align=center></td>";

				echo "<td ".$bg." align=center></td>";

				echo "<td align=center></td>";

				echo "<td align=center><a href=letter_edit.php?action=edit&id=".$row['id']."><IMG SRC=\"/imgz/mod_task.gif\" border=0 alt=view></a></td>";

				echo "<td align=center><a href=letter_edit.php?action=view&id=".$row['id']."><IMG SRC=\"/imgz/view.gif\" border=0 alt=view></a></td>";

			}

			echo "</tr>";

			$i++;

	

		}

	} else {

		echo "<tr>

			<td><b>Name</b></td>		

			<td align=center><b>Title</b></td>

			<td align=center ><b>E-mail</b></td></tr>";

	    $i=1;

		while($row= $this->db->fetch_array($res)) {

			if ($row['proofed'] == "yes") {

  				$bg="bgcolor=#ffffff ";

       			if ($i %2) $bg="bgcolor=" . $srch_altcolor;

				$ctitle = $row['title_text'];

				if (strlen($ctitle) > 60) $ctitle = substr($ctitle, 0, 60)  . "...";

				echo"<tr> 

					<td ".$bg.">".$row['first_name']." " .$row['last_name']."</td>

					<td ".$bg."><a href=comment.php?action=view&id=".$row['id'].">". $ctitle."</a></td>

					<td ".$bg." align=center>".$row['email']."</td></tr>";

			}

			$i++;

		}

	}

}



//*******************************************************************************************

// delete the letter form DB

function delete_mess($id)

{



	 $query = "DELETE FROM research WHERE id = $id ";

	 $res =$this->db->query($query);

	 

}	



//*******************************************************************************************

// to activate it has two options and this will set only one 

function active($ver,$gen,$id)

{



	 $query = "UPDATE research SET $ver $gen WHERE id = $id ";

	 $res =$this->db->query($query);

	

	 

}

//*******************************************************************************************

// selects all information from the research DB

function view_comment($id)

{

        $query = "SELECT * FROM research WHERE id = $id";

		$result =$this->db->query($query);

		$data = $this->db->fetch_array($result);



          return $data;



}

function letter_view($id){

	return $this->view_comment($id);

}



//*******************************************************************************************

// selects all information from the research DB

function editorial_view($id,$preview)

{

        $query = "SELECT * FROM editorial WHERE id = $id";

		$result =$this->db->query($query);

		$data = $this->db->fetch_array($result);

		if($preview || $data['active']==1) {

          return $data;

		 }



}





//*******************************************************************************************

// After LOL emplo reviews letter must set to proof b4 set active

function proofed($id)

{

	  $active_day = strtotime($today);

     

	  $query = "UPDATE research SET proofed = 'yes' , active_day = '$active_day' WHERE id = $id ";

	  $res =$this->db->query($query);



}



//*******************************************************************************************

// editor search subjects

function subjects($admin=0){



            $query = "SELECT * FROM editorial_subject ORDER BY sub_number";

            $result = $this->db->query($query);

            $num_rows =  $this->db->num_rows($result);                             

            echo "<form method=post action=".$PHP_SELF." >";

            

            echo "<TABLE WIDTH=\"80%\"><tr><td valign=top>";

			$i=0;

			while($row = $this->db->fetch_array($result))

			{

				if ($row['idParent'] == 1) {

				

					if ($i % 8 == 0) {

						echo "</td><td></td><td valign=top>";

					}

					if (!$admin) {

						echo "<a href=\"/research/search.php?subj=".$row['id']."\">".$row['name']."</a><br>";

					} else {

						echo "<a href=\"/private/research/search.php?adv=1&subj=".$row['id']."\">".$row['name']."</a><br>";

					}

					$i++;

				}

				

			}

			//$row['idParent'] == 3;

			if (!$admin) {

									echo "<a href=\"/research/search.php?cat=3\">Projects</a><br>";

								} else {

									echo "<a href=\"/private/research/search.php?adv=1&cat=3\">Projects</a><br>";

					}

				

			/*$query = "SELECT * FROM subject_editorial WHERE sub_number = 2 ";

			$result =$this->db->query($query);

			while($row= $this->db->fetch_array($result)) {

			

			   echo "<input type=radio name=subject value=".$row['id']." >".$row['name']." <br>";

			}*/

            echo "</td></tr></table>";

            echo "</form>";



}

function subjects_dd($subj) {

	$query = "SELECT * FROM editorial_subject";

	$result =$this->db->query($query);

	echo "<select name=subject>";

	if ($subj) {

		echo "<option value=\"$subj\">". $this->subject_name($subj) . "</option>";

	} else {

		echo "<option value=\"\">All Subjects</option>";

	}

	while($row= $this->db->fetch_array($result)) {

		

		echo "<option value=".$row['id']." >".$row['name']."</option>";

	}

	echo "</select>";

}

function subject_name($id) {

	$query = "SELECT * FROM editorial_subject WHERE id = $id";

	$result =$this->db->query($query);

	$sub = $this->db->fetch_array($result);

	return $sub['name'];

}



function update_subjects($post) {

	foreach ($post as $directory => $name) {

		$query = "UPDATE editorial_subject SET name = '$name' WHERE dir_name = '$directory'";

		//echo "$directory => $name<br>";

		$result =$this->db->query($query);

	}

}



function list_editorials($sql) {

	global $srch_altcolor;

	$result = $this->db->query($sql);

	

	if($result){

		$i=1;

		while($row = $this->db->fetch_array($result)) {

			//if (strlen($row['title']) > 0 ) {	

				$bg="";

				if ($i%2) $bg="bgcolor=" .$srch_altcolor;		

				echo "<tr $bg>";

				echo "<td width=100% class=srch><a href=\"article.php?id=" 

					 . $row['id'] . "\" class=srch_t>" .ucwords($row['title'])."</a><br>";

				if ($row['subtitle']) { echo $row['subtitle'] ."<br>"; }

				if ($row['author'] != "nobody") { echo $row['author']. "<br>"; }

				if ($row['issue'] > 1) { 

					echo $row['source']. " - Vol. ".$row['vol']. " No. " . $row['num']. " - ";

					echo date("F j, Y ",$row['issue'])." &nbsp;&nbsp;";

				}

				echo "<a href='view_comments.php?art_id=" . $row['id']  . "'>View Comments</a></td>"				

					 . "</tr>";			                

				$i++;

	 		//}

	 	}

	}



}

}//end class

?>

