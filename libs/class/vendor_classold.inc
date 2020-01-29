<?

include_once $include_path . "class/common_class.inc";

class vendor_class  extends Common_Class

{



function  vendor_class(&$db) {	

	$this->db = &$db;

}





function xlist_cate($id) {

	$query = "SELECT * FROM xlist WHERE idParent  = 0 ORDER BY name";

	$result = $this->db->query($query);

	if($this->db->num_rows($result)) {

		while($row=$this->db->fetch_array($result)) {

			?>

			<table><tr colspan=2>

			<td><input type=radio name=id value="<?=$row['id']?>></td>  

		             <td align=left><?=$row['name']?></td></tr>

			</table>

			<?

		 }

	 }

}



function vendor_xlist_cate_find($find) {

	$query = "SELECT * FROM xlist WHERE idParent  = 0 ORDER BY name";

	$result = $this->db->query($query);

	if ($this->db->num_rows($result)) { 

		while($row=$this->db->fetch_array($result))	{

			$sel = "";

			$id = $row['id'];

			if ($id == $find) $sel = " selected";

			echo "<option value='$id'$sel>" . $row['name'] . "</option>\n";

		} 

	}

}



function search_list($find) {

    $query = "SELECT * FROM xlist WHERE idParent = $find ORDER BY name";

	$result = $this->db->query($query);

	if ($this->db->num_rows($result)) {

		echo "<table cellspacing=0 cellpadding=0><tr><td><table  cellspacing=0 cellpadding=0>";

		$i=0;

		$c=0;

		$ot=$this->db->num_rows($result)/3;

		while($row=$this->db->fetch_array($result))	{  

			if ($i%(int)$ot==0 && $c < 3) { echo "</table></td><td valign=top><table  cellspacing=0 cellpadding=0>"; 

			$c++;}

			echo"<tr><td><input type=checkbox name=find[] value=".$row['id']."></td><td>" . $row['name'] . "<td></tr>";  

			$i++;

		}

		echo "</table></td></tr></table>";

	} 

}



function xlist_names($id) {

		$query = "SELECT * FROM xlist WHERE id  = $id";

		$result = $this->db->query($query);

		while($row= $this->db->fetch_array($result))

		{		 

		 return $row['name'];

        }

}



function ylist_names($id) {

		$query = "SELECT * FROM ylist WHERE id  = $id";

		$result = $this->db->query($query);

		while($row= $this->db->fetch_array($result))

		{		 

		 return $row['name'];

        }

}



function vendor_type($vst){

	if ($vst  < 1) $vst = 0;

	

	$query = "SELECT * FROM vendor_type ORDER BY id";

	$result = $this->db->query($query);

			

	while($row=$this->db->fetch_array($result)) {    			

			 

		if ($vst == $row['id'])  {

			$t = "checked"; 

		} else { $t= ""; }

		

		echo "<input type=radio ".$t." name=vst  value=".$row['id'].">".$row['plural']. "<br>";  

                      			

			 }

}



function vendor_simple($id) {

	$query = "SELECT * FROM vendor WHERE id = '$id'";

	$result = $this->db->query($query);

	$data=$this->db->fetch_array($result);

	//echo $this->db->num_rows($result);

	return $data;

}



function vendor_name($id){

	$query = "SELECT * FROM vendor WHERE id = $id";

	$result = $this->db->query($query);

	while($row=$this->db->fetch_array($result))	{

		echo $row['comp_name'] ;  

	}

}



function edit_who($id){

	$query = "UPDATE vendor SET edit_who = '0' WHERE id = $id";

	$result = $this->db->query($query);

}



function edit_product_info($product_id){

	$query = "SELECT * FROM  vendor_product WHERE id = $product_id";

	$result = $this->db->query($query);

	while($row=$this->db->fetch_array($result))

	{

		return $row;

	}

}



function view_listing($uid) {



	$query = "SELECT * FROM vendor WHERE  id = $uid ";

	$result = $this->db->query($query);

	$data =  $this->db->fetch_array($result);



	echo "<TABLE BORDER=0 align=center width=80% cellpadding=5>";

    echo "<TR>";

    echo "<TD>&nbsp;</TD>"; 

    echo "<TD ROWSPAN=4>"; 

	echo"<TABLE BORDER=1   bordercolor=#3399ff  width=80%>";

	echo"<TR>";

	echo"<TD COLSPAN=3 VALIGN=MIDDLE ALIGN=CENTER><b>Sample Listing<b>";

	echo"</TD>";

	echo"</TR>";

	echo"<TR>";

	echo"<TD VALIGN=MIDDLE ALIGN=CENTER><b>Name<b></TD>";

	echo"<TD VALIGN=MIDDLE ALIGN=CENTER><b>Phone<b></TD>";

	echo"<TD ALIGN=CENTER><b>Categories</b></TD>";

	echo"</TR>";

		

	{  $T = $this->type_bizz($data['xlist']);

		echo "<TD VALIGN=MIDDLE ALIGN=CENTER nowrap><font color=blue><u> ".$data['comp_name']."</font></u></TD>";

		echo "<TD VALIGN=MIDDLE ALIGN=CENTER nowrap>(".$data['area_code'].")".$data['phone']."</TD>";

		echo "<TD ALIGN=CENTER nowrap>".implode("<br>",$T)."</TD>";

		echo "<tr>";

		echo "<TD VALIGN=MIDDLE ALIGN=CENTER nowrap>".$data['comp_name']."</TD>";

		echo "<TD VALIGN=MIDDLE ALIGN=CENTER nowrap>(".$data['area_code'].")".$data['phone']."</TD>";

		echo "<TD ALIGN=CENTER nowrap>".implode("<br>",$T)."</TD>";

		echo "</tr>";

	}

	echo "</TABLE>";

	echo "</TD>"; 

	echo "</TR> ";

	

	echo "<TR> ";

	echo " <TD valign=center ALIGN=right><B>Option 1</B></TD>"; 

	echo "</TR> ";

	echo "<TR> ";

	echo "  <TD  valign=center ALIGN=right ><B>Option 2</B></TD>"; 

	echo "</TR> ";

	echo " </TABLE>";



}



 function type_bizz($id){

	$id = explode(",", $id);

	for($i=0;$i<count($id);$i++)

		$condition[] = " id = ".$id[$i];



	$query = "SELECT * FROM xlist WHERE".implode(" OR ",$condition);

		   

	$result = $this->db->query($query);

	while($row = $this->db->fetch_array($result))

	{				     

		$names[] = $row['name'];

	}

	return $names;

}



function edit_product($product_id,$product,$description) {

	$query = "UPDATE vendor_product SET product_name = '$product', description = '$description' WHERE id = $product_id";

	$result = $this->db->query($query);

}



function delete_product($product_id) {

	$query = "DELETE FROM vendor_product  WHERE id = $product_id";

	$this->db->query($query);

}



function add_new_product($uid,$product,$description){

	$query= "INSERT INTO vendor_product(vendor_id, product_name, description ) VALUES ('$uid', '$product', '$description')";

	$this->db->query($query);

	return  $this->db->insert_id();

}



function find_listings($check,$extra,$vst,$find,$cat_id,$state,$numb) { 

    $refind ="";

	if ($check == "AreaCode") {

		$refind = "AND area_code = " . $numb;

	} 

	if ($check == "State") {

		$refind = "AND state = '" . $state ."'";

	} 

	

	if (is_numeric($vst)) 	$refind .= " AND vendor_type_id = $vst ";

	

	if (count($find) > 0) {

		$input = $find;

		for($i=0;$i<count($input);$i++) $condition[] = " xlist LIKE '%" .$input[$i]. "%'";

		$subclass = implode(" OR ", $condition);

		$sub = "AND (".$subclass.")"; 

	} else {

		$sub = "";



	}

	

	$query ="SELECT * FROM vendor WHERE active = 1 $refind $extra $sub ORDER BY hot Desc";		

	$result = $this->db->query($query);

	echo  $this->db->error;

	if($result) {

		if(!$this->db->num_rows($result)) {

			echo "<tr><td align=center><b>Your Request does not have a match</b></td></tr>";  

	    } else {

			echo "<tr>";

			echo "<TD>Company</TD>";

			echo "<TD align=center>Type</TD>";

			echo "<TD width=20></TD>";

			echo "<TD width=226>Company </TD>";

			echo "<TD align=center >Type</TD>";

			echo "</tr>";

			$i=1;	

			while($row= $this->db->fetch_array($result)) {

				if ($i %2) echo "<tr>";

				if ($row['hot'] == 0)	{

					echo "<TD width=226   bgcolor=#EFEFEF>".$row['comp_name']."<br>(".$row['area_code'].") ".$row['phone']."</TD>";

				} else {

					  echo "<TD width=226   bgcolor=#EFEFEF><a href=listing.php?id=".$row['id'].">".$row['comp_name']."</a><br>(".$row['area_code'].") ".$row['phone']."</TD>"; //."&find=".$find."&conditions=".$conditions."&numb=".$numb."&state=".$state."&vst=".$vst."&cat_id=".$cat_id."&check=".$check

				}

				echo "<td bgcolor=#EFEFEF align=center>";

				if ($row['vendor_type_id'] == 1)

					{$type = "M";}

				if ($row['vendor_type_id'] == 2)

					{$type = "E";}

				if ($row['vendor_type_id'] == 3)

					{$type = "R";}

				if ($row['vendor_type_id'] == 4)

					{$type = "W";}

				if ($row['vendor_type_id'] == 5)

					{$type = "G";}

				echo  $type;

				echo "</td>";

				

				$i++;

				if ($i %2) echo "</tr>";

				else echo "<TD width=30></TD>";



			}

			echo "</tr>";	

		}

	}

}



function vendor_type_name($vst) {  

	$query = "SELECT name FROM vendor_type WHERE id= $vst ";

	$result = $this->db->query($query);

	$data = $this->db->fetch_array($result);

	return $data['name'];

} 



function vendor_type_name_first($vst){  

	$query = "SELECT name FROM vendor_type WHERE id= $vst ";

	$result = $this->db->query($query);

	$data = $this->db->fetch_array($result);

	$name = $data['name'];

	

	echo substr($name, 0 ,1);

}



function subcategory($find) {

	$input = explode(",",$find);

	$condition = array();

	

	for($i=0; $i<count($input); $i++)

		$condition[] = "id=".$input[$i];

	

	$query = "SELECT name FROM xlist WHERE ".implode(" OR ",$condition);

	$result = $this->db->query($query);



	while($data =  $this->db->fetch_array($result))	{

		if($this->db->num_rows($result) == 1) {

			echo  $data['name'];

		} else {

			echo  $data['name']."<br>";

		}

	}

}



function input_values($uid,$idParent,$find) {

	$query = "UPDATE vendor SET xlist = '$find ', xlist_idParent = '$idParent' WHERE id = $uid ";

	$this->db->query($query);

}



function delete_prod($id) {

   $query = "DELETE FROM  vendor_product WHERE id = $id ";

   $this->db->query($query);

}



function show_vendor($uid) {

	$query= "SELECT vendor.*, vendor_type.name FROM vendor, vendor_type  WHERE  vendor.vendor_type_id = vendor_type.id 

	AND vendor.id =  $uid";

	$result = $this->db->query($query);

	$data =  $this->db->fetch_array($result);

		

	return $data;

}



function vendor($id) {

	$query= "SELECT * FROM vendor WHERE  id = $id";

	$result = $this->db->query($query);

	

	$data =  $this->db->fetch_array($result);

	

	return $data;

}



//private edit page

function products($id) {



	$query = "SELECT * FROM vendor_product WHERE vendor_id = $id"; 

	$result = $this->db->query($query);



	echo "<table width=100% >";

	while($row = $this->db->fetch_array($result)) {      

		echo "<tr>";

		echo "<td >".$row['product_name']."<br>".$row['description']."</td>";

		echo "<td><img src='/products/images/".$row['photo']."' height=60 width=60></td>";

		echo "<td align=\"center\"><a href=\"javascript:conf_redir('vendor_add.php?action=delete&id=".$id."&product_id=".$row['id']."','Are you sure you would like to delete ".$row['product_name']."')\"><IMG SRC=\"/imgz/delete_task.gif\"  border=0 alt=delete></a></td>";  

		echo "<td><a href=vendor_prod.php?action=edit&id=".$id."&pic=yes&product_id=".$row['id']."><IMG SRC=\"/imgz/mod_task.gif\" border=0 alt=edit></a></td>";

		echo "</tr>"; 

	}

	echo "</table>";

}



function vendor_prod($id,$admin) {

	$query= "SELECT * FROM vendor_product WHERE vendor_id = $id ";

	$result = $this->db->query($query);

	echo "<table>";

	if ($admin) {

		$size =" height=60 width=60";

	} else {

		$size="";

	}

	while($row =  $this->db->fetch_array($result)) {

		if($this->db->num_rows($result) == 0) {

			echo "<td><b>No Products Listed</B></td>";

		} else {

			echo "<tr>";

			echo "<td><b>".$row['product_name']."</b><br>".$row['description']."</td>";



			echo "<td><img src='/products/images/".$row['photo']."' ". $size ."></td>";

			echo "</tr>";

			echo "<tr>";

			echo "<td colspan=2</td>";

			echo "</tr>";

		}

	}

	echo "</table>";

}



function vendor_image($picture,$uid) {

	$query= "SELECT logo FROM vendor WHERE id = $uid ";

	$result = $this->db->query($query);

	

	$data= $this->db->fetch_array($result);

	$logo = $data['logo'];



	//	if(file_exists("../../customer_images/".$logo))

	//{

	// unlink ("../../customer_images/".$logo);

 	//	}else{



   $query = "UPDATE vendor SET logo = '$picture' WHERE  id = $uid ";

   $this->db->query($query);

		   

}



function product_image($picture,$uid) {

   $query = "UPDATE vendor_product  SET photo  = '$picture' WHERE  id = $uid ";

   $this->db->query($query);

}



function product_show($product_id) {

   $query = "SELECT * FROM vendor_product  WHERE  id = $product_id";

   $data = $this->db->query($query);

   return $data['picture'];

}



function pic_info($product_id){

   

   $query = "SELECT * FROM vendor_product  WHERE  id = $product_id";

   $result = $this->db->query($query);

   $data = $this->db->fetch_array($result);

   return $data;

}



function image_up($picture) {

	$query = "INSERT INTO media_ad (logo) VALUES ('$picture')";

	$this->db->query($query);

	return  $this->db->insert_id();

}   



function image_update($picture,$proof) {

      $query = "UPDATE media_ad SET logo = '$picture' WHERE id = $proof ";

       $this->db->query($query);

}



function proof_up($name,$email,$note,$input,$ads,$id){

      

   $query = "UPDATE media_ad SET name= '$name', email= '$email', note= '$note', stamp = '$input' ,

   ads = '$ads', proof_id = $id WHERE  id = $id ";

   $this->db->query($query);



}



function proof_mail($name,$email,$note,$input,$id)	{

     

	$link = $this->lol_url."/ad_proof/ad_proof.php?proof=".$id;

	$to = $email;

	$from =  "landscapeOnLine.com";

	$subject = "Ad Proof ";



	$body = "To view your AD please click on this link"." \n".$link." \n \n".$note;

		

	$this->send_mail($to, $subject, $body,"From: ".$from."\r\nReply-To: ".$from);

}



function enter_fee($uid,$type) {

   $query = "UPDATE vendor SET fee= $type WHERE  id = $uid ";

   $this->db->query($query);

}



function get_fee($id) {

   $query = "SELECT fee FROM vendor WHERE  id = $id ";

   $result = $this->db->query($query);

   if ($result) {

	   while($data =  $this->db->fetch_array($result)) 	{

	   		$fee = $data['fee'];

	   	}

	}

	return $fee;

}





function vendor_add($vst,$alt_mail,$comp_name,$address, $address2, $city, $state, $zip,$country, $first_name, 

			$last_name, $email, $area_code, $phone, $area_fax, $fax,$website,  $profile, $request,$setup) {



	$notify_credit=0;

	$active=0;



	$query = "INSERT INTO vendor ( alt, vendor_type_id,comp_name,address, address2, city, state, zip,country, ".

	"first_name, last_name, email, area_code, phone, area_fax, fax, website,  profile, request, sign_up, active, notify_credit) VALUES " .

	"('$alt_mail','$vst','$comp_name','$address','$address2','$city','$state', '$zip','$country', '$first_name', '$last_name', ".

	"'$email', '$area_code', '$phone', '$area_fax' , '$fax', '$website',  '$profile', '$request' ,'$setup', '$active', $notify_credit)";

	$this->db->query($query);



	return  $this->db->insert_id();

}





function vendor_add_request($comp_name, $first_name, $last_name, $email) {

	$query = "INSERT INTO vendor (comp_name,first_name,last_name,email) VALUES ('$comp_name', '$first_name', '$last_name', '$email')";

	$this->db->query($query);

	return  $this->db->insert_id();

}



function vendor_request_mail($id,$message,$email){

		

	$link = $this->lol_url."/vendor_user/vendor_add.php?action=edit&uid=".$id;

	

	$to = $email;

	$from =  "Landscaponline.com";

	$subject = "Vendor Sign up form";

	$body = $message."\n CLick on link to fill in form\n".$link;

	

	$this->send_mail($to, $subject, $body,"From: ".$from."\r\nReply-To: ".$from);

}





function vendor_edit($vendor,$alt_mail,$comp_name,$address, $address2, $city, $state, $zip,$country, $first_name, $last_name, 

						$email, $area_code, $phone,$area_fax, $fax, $website, $vst, $profile, $request, $edit) {

	$query = "UPDATE vendor  SET alt = '$alt_mail', comp_name = '$comp_name', address = '$address', address2 = '$address2', city = '$city',

	state = '$state', zip = '$zip',country ='$country', first_name = '$first_name', last_name = '$last_name' , email = '$email',

	area_code = '$area_code', phone = '$phone', area_fax = '$area_code', fax = '$fax' ,website = '$website', vendor_type_id = '$vst',

	profile  = '$profile', request = '$request', edit = '$edit', edit_who = '1' WHERE id = $vendor ";

	

	$this->db->query($query);		 

		       

}





function add_product($id) {



?>

   <FORM METHOD="post" ACTION="<?echo $PHP_SELF ?>"  > 

  <table CELLPADDING="5" CELLSPACING="5" align="center">

  <?



$this->products($id);



} 





function show($product_id) {



	$query = "SELECT * FROM vendor_product WHERE id = $product_id"; 

	$result = $this->db->query($query);



	echo "<table width=100% >";

	while ($row = $this->db->fetch_array($result)) {      

		echo "<tr>";

		echo "<td >".$row['product_name']."<br>".$row['description']."</td>";

		echo "<td><img src=../product_images/".$row['photo']." height=60 width=60></td>";

		echo "</tr>"; 

  	} 

	echo "</table>";

	

} 









function info($product_id) {



  $query = "SELECT * FROM vendor_product WHERE id = $product_id"; 

  $result = $this->db->query($query);

  $data = $this->db->fetch_array($result);



  return $data['vendor_id'];



}



function view_xlist($id,$xlist) {

				 		

		$query = "SELECT * FROM xlist WHERE  idParent = 0  ORDER BY id";

		$result = $this->db->query($query);

		               

		echo "<TABLE align=center width=100%>";

		echo "<tr>";

		echo "<td  valign=top >";	

     			    echo "<TABLE width=100%>";

		echo "<tr>";

		echo "<td  valign=top nowrap>";

						

		while($row= $this->db->fetch_array($result))	{				

			

			if ($row['id'] == 35 ||  $row['id'] == 34 ||  $row['id'] == 36 ||  $row['id'] == 31  ||  $row['id'] == 33  ||  $row['id'] == 30 )

				{  

				       

						echo "<b>".$row['name']."</b><br>";

						echo $this->sub_table($row['id'],$xlist)."<br>";

						

				}

				       

		}

		               echo "</td>";

                       echo "</table>";



        $query = "SELECT * FROM xlist WHERE  idParent = 0 ORDER BY name DESC";

		$result = $this->db->query($query);

		             

						echo "<td  valign=top>";	

         			   echo "<TABLE  valign=top>";

						echo "<tr>";

						echo "<td  valign=top nowrap >";	

      while($row= $this->db->fetch_array($result))

		{	



		   if ($row['id'] == 26 ||  $row['id'] == 27 ||  $row['id'] == 32 ||  $row['id'] == 40 ||  $row['id'] == 41 || $row['id'] == 38)

				{

						

						echo "<b>".$row['name']."</b><br>";

						echo $this->sub_table($row['id'],$xlist)."<br>";

						

				}

         	}

		               echo "</td>";

                      echo "</table>";



		$query = "SELECT * FROM xlist WHERE  idParent = 0 ORDER BY id";

		$result = $this->db->query($query);

                        

						echo "<td  valign=top  nowrap>";	

		                echo "<TABLE  valign=top>";

						echo "<tr>";

						echo "<td  valign=top nowrap>";	

   while($row= $this->db->fetch_array($result))

		{	

		  

		  if ($row['id'] == 28 ||  $row['id'] == 37 ||  $row['id'] == 29 ||  $row['id'] == 39  )

				{

						echo "<b>".$row['name']."</b><br>";

						echo $this->sub_table($row['id'],$xlist)."<br>";

				}

       	}

		  echo "</td>";

          echo "</table>";

		  echo "</td>";

		   echo "</tr>";

          echo "</table>"; 



}



function sub_table($id,$xlist) {

		$query = "SELECT * FROM xlist WHERE idParent = $id ORDER BY name";

		$result = $this->db->query($query);

		

			

		echo "<TABLE WIDTH=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tr><td valign=top><table cellspacing=\"0\" cellpadding=\"0\">";

				$i=0;

		

		while($row = $this->db->fetch_array($result))

		{	  

            

				if (in_array($row['id'] ,$xlist))

				$t = "checked";

				else

				$t = "";               

				

			    echo "<tr><td valign=top><input type=checkbox ".$t. " name= xlist[]  value=".$row['id']. " ></td><td>".$row['name']."</td></tr>\n" ;

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



function view_wh($xlist) {



        $query = "SELECT * FROM xlist WHERE  idParent = 0 ORDER BY id";

		$result = $this->db->query($query);

                        

					

		                echo "<TABLE  valign=top align=center>";

						echo "<tr>";

						echo "<td  valign=top nowrap>";	

   while($row= $this->db->fetch_array($result))

		{	

		  

		  if ($row['id'] == 31 ||  $row['id'] == 36 ||  $row['id'] == 35 ||  $row['id'] == 38 ||  $row['id'] == 39 )

				{

						echo "<b>".$row['name']."</b><br>";

						echo $this->sub_table_wh($row['id'],$xlist)."<br>";

				}

       	}

		  echo "</td>";

          echo "</table>";

		  



}	



function view_grow($xlist)

{



        $query = "SELECT * FROM xlist WHERE  idParent = 0 ORDER BY id";

		$result = $this->db->query($query);

                        

					

		                echo "<TABLE  valign=top align=center>";

						echo "<tr>";

						echo "<td  valign=top nowrap>";	

   while($row= $this->db->fetch_array($result))

		{	

		  

		  if ($row['id'] == 34)

				{

						echo "<b>".$row['name']."</b><br>";

						echo $this->sub_table($row['id'],$xlist)."<br>";

				}

       	}

		  echo "</td>";

          echo "</table>";

		  



}







 function sub_table_wh($id,$xlist) {

		$query = "SELECT * FROM xlist WHERE idParent = $id AND name LIKE '%wholesale%'";

		$result = $this->db->query($query);

		while($row= $this->db->fetch_array($result))

		{	

				if (in_array($row['id'] ,$xlist))

				$t = "checked";

				else

				$t = "";

            

			   

			   echo "<input type=checkbox ".$t." name= xlist[] value=".$row['id']. " >".$row['name']."<br>" ;

        }

}



function vendor_xlist_input($vendor_id) {

	$query = "SELECT * FROM vendor, xlist WHERE  vendor.xlist = xlist.id   AND vendor.id = $vendor_id "; 

	$result = $this->db->query($query);



		  while($row = $this->db->fetch_array($result)) 

         { 

                  $input = explode(",",$row['xlist']);

				   $x_id = $row['xlist_idparent'];

                  		                		   

		   echo "<table align=center cellspacing=3 width=40%>";

		   echo "<tr>";

		   echo "<TD colspan=2><b>The category submitted : </b></td>";

	        echo "</tr>";



		   echo "<tr>";

		   echo "<td>";

		   echo $list = $this->get_vendor_input($input);

		   echo "</td>";

		  echo "</tr>";



		  echo "</table>";

		 

		  

		   

		 }

		   

	

}

//

function request($request) {?>

		  <TR> 

			 <TD VALIGN="top" colspan=2><br>

			 <B>Request Advertising Information</B><BR>

			 To request information so you can enhance your listings and exposure in

			 LandscapeOnline or to the Commercial Landscape Industry click the

appropriate selections below. (check all that apply)

			

			 </TD> 

			 </tr>

			 <tr>

			  <TD VALIGN="top">

			 		 

	<IMG SRC="/imgz/lasn_logo.jpg" BORDER="0" ALT="Landscape Architect & Specifier News">

	<br>

<INPUT TYPE="CHECKBOX" name="request[]" VALUE="LA Media Kit/Rates Package" >Media Kit/Rates Package<BR>

<INPUT TYPE="CHECKBOX" name="request[]" VALUE="LA Card Deck Information Kit" >Card Deck Information Kit<BR>

				  

			 </TD>

			

			 <TD > 

				<IMG SRC="/imgz/lcm_logo.jpg" BORDER="0">

				<br>

				  <INPUT TYPE="CHECKBOX" name="request[]"	VALUE="LC Media Kit/Rates Package"  >Media Kit/Rates Package<BR>

				  <INPUT TYPE="CHECKBOX" name="request[]"  VALUE="LC Card Deck Information"  >Card Deck Information

					 Kit

				</tr>	 

					 <TR> 

			 <TD VALIGN="top" colspan=2><TABLE width=40%  cellpadding="0" cellspacing="0"> <tr><td>

				  <IMG SRC="/imgz/lol_logo_sm.jpg" ALT="Landscape Online" BORDER="0"><br>

				  <INPUT TYPE="CHECKBOX" name="request[]" VALUE="LOL Banner Ad Information" >Banner Ad Information<BR>

				  <INPUT TYPE="CHECKBOX" name="request[]" VALUE="LOL Vendor Profile">Vendor Profile</FONT>

				  </TD> 

		  </TR></table>

				  <br><br>

			</TD> 

		  </TR>

		  <?



}



function xlist_idparent($x_id)

{

	$query = "SELECT * FROM  xlist WHERE  id = $x_id "; 

	$result = $this->db->query($query);

	$data = $this->db->fetch_array($result);

	return $data['name'];



}





function vendor_xlist($id)

{   



	 $id = explode(",",$id);

	$condition = array();

	for($i=0;$i<count($id);$i++)

	$condition[] = " id = ".$id[$i]; 



	$query = "SELECT * FROM  xlist  WHERE".implode(" OR ",$condition) ; 

	$result = $this->db->query($query);

   	

  		   echo "<table  bgcolor=#ffffff>";

		   echo "<tr>";

		   echo "<TD>".$this->vendor_x($id).",</td>";

		   echo "</tr>";

       while($row = $this->db->fetch_array($result)) 

     	{

			  echo "<tr>";

		      echo "<td>".$row['name'];
		      echo "</td>\n";

		      echo "</tr>";

        }

		      echo "</table>";

	   

				 		   

		

}



function vendor_x($id)

{   



	

	$condition = array();

	for($i=0;$i<count($id);$i++)

	$condition[] = " id = ".$id[$i]; 



	$query = "SELECT idParent  FROM  xlist  WHERE".implode(" OR ",$condition) ; 
	$result = $this->db->query($query);

	$row = $this->db->fetch_array($result); 

                       		     

		   

    $query = "SELECT name FROM  xlist  WHERE id = ".$row['idParent']; 

	$result = $this->db->query($query);

	

	$row = $this->db->fetch_array($result);  

	 return $row['name'];

  

	

}     



function vendor_xlist_info($vendor_id)

{

	$query = "SELECT vendor_biz_type.* , xlist.* FROM vendor_biz_type, xlist  WHERE vendor_biz_type.xlist_idparent =  xlist.id AND vendor_biz_type.vendor_id = $vendor_id"; 

	$result = $this->db->query($query);

		  while($row = $this->db->fetch_array($result)) 

         {  

			  $input = explode(",",$row['xlist_id']);
			  $list = $this->get_vendor_input_numberless($input);

              return $list;



         }



}















function get_sub($input)

{

    

	 $input = explode(",",$input);

	 

	$condition = array();

	for($i=0;$i<count($input);$i++)

	$condition[] = "id=".$input[$i]; 

	

   $query = "SELECT name FROM xlist WHERE ".implode(" OR ",$condition);

   $result = $this->db->query($query);

	while($data =  $this->db->fetch_array($result))

	{

		$names = $data['name'];

		

	}

	

	

	

	return $names;



} 



function active_vendor($id,$set) {



   $query = "UPDATE vendor SET active = $set WHERE  id = $id ";

   $this->db->query($query);



}



function delete_vendor($uid) {

   $query = "DELETE FROM  vendor_product WHERE vendor_id = $uid ";

   $this->db->query($query);

 	

   $query = "DELETE FROM  vendor  WHERE id = $uid ";

   $this->db->query($query);

}



function get_vendor_input($id) {

	$input = explode(",",$id);



	$condition = array();

	for($i=0;$i<count($id);$i++)

	$condition[] = "id=".$id[$i]; 



	$query= "SELECT * FROM xlist  WHERE " .implode(" OR ",$condition);

	$result = $this->db->query($query);



	while($row = $this->db->fetch_array($result)) {    

		echo"<tr>";

		echo "<td>".$row['name']."</td><td> ".$row['sub_number']."</td>" ;

		echo"</tr>";

	}

}





function get_vendor_inputs($xlist,$show_num)  {	



	$condition = array();

	for($i=0;$i<count($xlist);$i++)

	$condition[] = "id = ".$xlist[$i]; 



	$query= "SELECT * FROM xlist  WHERE ".implode(" OR ",$condition)." ORDER BY sub_number";

	$result = $this->db->query($query);

	if ($result) {



		while($row = $this->db->fetch_array($result)) {    

					echo   $row['name']."   ";

					if ($show_num) echo $row['sub_number'];

					echo "<br>";

		}

	}

}



function view_vendor_add($vst) {

	if($vst == "4") { 	

		$type = "name LIKE '%wholesale%' ";

	} else { 

		$type = "idParent  =  34 " ;

	}



	$query = "SELECT * FROM xlist WHERE $type";

	$result = $this->db->query($query);

	

	if($this->db->num_rows($result)) {

		while($row=$this->db->fetch_array($result)) {  			

			echo"<tr>";

			echo "<td><input type=checkbox name=cats[] value=".$row['id'].">".$row['name']."<br></td>";  

			echo "<td><input type=hidden name=idParent  value=".$row['idParent']."></td>";  

			echo "</tr>";

		}

	}

}





function update_back($ven_id) {

    $query = "UPDATE vendor SET notify_credit  = 0 WHERE  id = $ven_id ";

    $this->db->query($query);

}



function password($uid,$password,$email,$action) {

   

	//if ($action == "new") {

		$query = "UPDATE vendor SET sentpass = 'yes' WHERE id = '$uid' ";

	//}

	$this->db->query($query);

	$to = $email;

	$from =  "webmaster@landscaponline.com";

	$subject = "Your  Vendor Password";


/*******************************************

To change the text within a message, please adhere to the following guidelines:

- ALL text must be between a $body ="  and a "; tag.

- If you use quotation marks in the body of message, they must be written as \"

- To put new lines use \r\n

********************************************/

	
	$body = "Congratulations!\r\n\r\nAs a value added benefit to advertising in Landscape Architect and Specifier News (LASN) or Landscape Contractor National (LCN), your company profile is now active and viewable at LandscapeOnline.com.\r\n\r\nTo review and/or edit your profile, please go to \"https://landscapearchitect.com/member/login.php?t=v\" and type in the following password: ". $password ."\r\n\r\nThis password is unique to your company so please keep this code for your records. If you ever forget or misplace your password, just call 714-979-5276 and ask for your ad rep.  He or she will more than happy to assist you.\r\n\r\nThank you for advertising with Landscape Architect and Specifier News (LASN) and/or Landscape Contractor National (LCN).\r\n\r\nSincerely,\r\n\r\nGeorge Schmok, Publisher\r\nLandscape Architect and Specifier News (LASN)\r\nLandscape Contractor National (LCN)\r\nLandscapeOnline.com\r\n";


	$this->send_mail($to, $subject, $body);





}



function vendor_mail($uid) {

	$query = "SELECT * FROM vendor WHERE id = $uid ";

	$res =$this->db->query($query);

	$data = $this->db->fetch_array($res);

	

	$to_who =  $data['comp_name'];

	$sign_up = $data['sign_up'];

	$vendor_id = $data['id'];

	$vendor_type = $data['vendor_type_id'];

	$first = $data['first_name'];

	$last = $data['last_name'];

	$com = $data['comp_name'];

	$area_code = $data['area_code'];

	$phone = $data['phone'];

	$email = $data['email'];

	$request  = $data['request'];

	$lists = $data['list'];

	$xlist = $data['xlist'];



	if ($vendor_type  > 2)	{

	      $mail_to = "rlahodny@landscapeonline.com";

	} else {



/*

If a vendor was adding or editing the forms themselves, the form entries will be packaged in the body of 

an email message as shown to the right when the vendor presses their Submit button. The message is sent to 

both webmaster@landscapeonline.com and: 



rlahodny@landscapeonline.com - for all requests where the I am a field is marked Manufacturers Representative, 

Wholesale Facility or Grower



adsalesa-h@landscapeonline.com - for all requests with remaining company names beginning with the letters A through H 



adsalesi-p@landscapeonline.com - for all requests with remaining company names beginning with the letters I through P 



adsalesq-z@landscapeonline.com - for all requests with remaining company names beginning with the letters Q through Z 

*/

	//find first letter for email send   



		$first_letter = substr($to_who, 0 ,1);



		$first_letter = strtolower($first_letter);



		$query = "SELECT *  FROM  lol_contacts  WHERE abbrev = '$first_letter'"; 

		$result = $this->db->query($query);

		$row = $this->db->fetch_array($result);  

		$mail_to = $row['email'];        

	}





	$to = $mail_to;

	$from =  "Landscaponline.com";

	$subject = $com."- Vendor Add ";

	$body = $first." " .$last. "\n"."With : ".$com."\n"."On this date : ".date("M d ",$sign_up)."\n"."Phone: (".$area_code.")".$phone ." \n"."Wants listing status : ".$lists ." \n"."Request  ".$request ." \n"."Xlist Categories ".$biz;

		

	//$this->send_mail($to, $subject, $body,"From: ".$from."\r\nReply-To: ".$from);

}





function vendor_find_all($query,$active,$last_sort="") {

          

	$result = $this->db->query($query);

	global $srch_altcolor, $page;

	$sortstr="<a href='".$PHP_SELF."?ls=".$last_sort."&active=".$active."&sortby=";

	if($this->db->num_rows($result) < 1) {

		echo "<tr><td align=center ><b>" ." Your Request does not have a match " ."</b></td></tr>";  

	} else	{

	

		echo "<tr><td><b>".$sortstr."id'>ID</b></a></td>";

		echo "<td><b>".$sortstr."comp_name'>Company</a></b></td>";

		echo "<td><b>Password</b></td>";

		echo "<td><b>".$sortstr."first_name'>Contact First</a></b></td>";

		echo "<td ><b>".$sortstr."last_name'>Contact Last</a></b></td>";

		echo "<td ><b>".$sortstr."area_code'>Phone</a></b></td>";

		echo "<td><b>".$sortstr."active'>Listing Status</a></b></td>";

		echo "<td><b>".$sortstr."hot'>Hotlink</a></b></td>";

		echo "<td></td>";

		echo "<td></td>";

		echo "<td></td>";

		echo "<td>&nbsp;</td>";

		echo "<td>&nbsp;</td>";

		echo "</tr>";

	

		$i=1;

		while($row=$this->db->fetch_array($result)){ 

			$sent = $row['sentpass'];

			$vp="";

			if ($sent == "yes") $vp = $this->get_v_pass($row['id']);

	

			$bg="bgcolor=#ffffff ";

			if ($i %2) 

			{$bg="bgcolor=" . $srch_altcolor;}

	

			echo "<tr>";

			echo "<td ".$bg." nowrap >".$row['id']."</td>";

			echo "<td ".$bg." nowrap ><a href=vendor_password.php?id=".$row['id']."&page=".$page."> ". $row['comp_name']."</td>";

			echo "<td ".$bg." nowrap >".$vp."</td>";

			echo "<td ".$bg.">". $row['first_name']."</td>";

			echo "<td ".$bg.">". $row['last_name']."</td>";

			echo "<td ".$bg." nowrap > (". $row['area_code'].")". $row['phone']."</td>";

			

			$active=$row['active'];

			if ($active==1)

				echo "<td ".$bg." nowrap ><a href=venall_action.php?active=".$active."&action=active&act=0&id=".$row['id']." >Deactivate</a></td>";

			else

				echo "<td ".$bg." nowrap ><a href=venall_action.php?active=".$active."&action=active&act=1&id=".$row['id']." >Activate</a></td>";	

//hotlink venall.php

			if ( $row['vendor_type_id'] == 1 OR $row['vendor_type_id'] == 2 ){
				if ( $row['hot'] == 0 ){
					echo "<td ".$bg." ><a href=venall_action.php?action=hot&newhot=1&id=".$row['id']." >no*</a></td>";
				} else {
					echo "<td ".$bg."><a href='/private/billing/manage.php?type=ven&id=".$row['id']."'>yes*</a></td>";
				}
			} else {
				if ($row['hot']==1){

				echo "<td ".$bg."><a href='/private/billing/manage.php?type=ven&id=".$row['id']."'>yes</a></td>";

				}else {

				echo "<td ".$bg.">no</td>";

				}
			}
			echo "<td ".$bg." ><a href=\"javascript:conf_redir('venall.php?action=delete&id=".$row['id']." ','Are you sure you would like to delete ".$row['comp_name']."')\"><IMG SRC=\"/imgz/delete_task.gif\"  border=0 alt=delete></a></td>";

			echo "<td ".$bg."><a href=vendor_add.php?action=edit&id=".$row['id']."><IMG SRC=\"/imgz/mod_task.gif\" border=0></a></td>";

			echo "<td ".$bg."><a href=ven_view.php?id=".$row['id']."><IMG SRC=\"/imgz/task_view.gif\" border=0></a></td>";

			echo "</tr>";

			$i++;

			}

		}

}











function changehot($id,$newhot){
	$query = "UPDATE vendor SET hot = $newhot WHERE  id = $id ";

	$this->db->query($query);

}

function get_vendors($sql,$active){

	global $srch_altcolor;

      		

	$query ="SELECT * FROM vendor WHERE  active = $active";

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

		if ($status == 3) { //expired

			echo "<td align=center nowrap>Delete User</td>";

		} else {

			echo "<td align=center>Accept or Reject</td>";

		}



		echo "<td align=center>Name </td>";

		//echo "<td align=center>Password</td>";

		

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

			

			if ($row['status'] == 3)

				echo "<td align=center nowrap><a href='sub_action.php?action=delete&id=".$row['id']."&sub=".$sub2."'>Delete</a></td>";

			else {

				echo "<td align=center nowrap>";

				if ($row['hot']) $cc="&processcc=1";



				echo "<a href=venall_action.php?active=".$active."&action=accept&act=1&id=".$row['id'].$cc." >Accept</a> or ";

				echo "<a href=venall_action.php?active=".$active."&action=reject&act=3&id=".$row['id']." >Reject</a></td>";

			

			}

			echo "<td align=center nowrap>".$row['comp_name']."</td>";

			//echo "<td align=center nowrap>".$this->find_pass($row['id'])."</td>";

			echo "<td align=center >";

			

			if ($row['hot']) 

				echo "yes";

			else 	

				echo "no";

				

			echo "</td><td>".date('m.d.y', $row['sign_up']) . "</td><td align=center><a href=ven_view.php?id=".$row['id']."><IMG SRC=\"/imgz/task_view.gif\" border=0 alt=view></a></td>";





			echo "</tr>";			                



			$i++;



		}

		echo "</table>";

	}	

}

















function listing($id,$act) {

	$query = "UPDATE vendor SET active = $act WHERE id = $id";

	$result = $this->db->query($query);

}



function hot_link($id,$lin) {

	$query = "UPDATE vendor SET hot = $lin WHERE id = $id";

	$result = $this->db->query($query);

}



function vendor_activate($id) {

	global $srch_altcolor;

    $query = "SELECT * FROM vendor WHERE $id ORDER BY comp_name";

	$result = $this->db->query($query);

		

	echo "<TABLE WIDTH=60% align=center> ";

	echo "<tr>";

	echo "<td >Company</td>";

	echo "<td >Wants to be Listed</td>";

	echo "<td >Listed</td>";

	echo "<td >Paid</td>";

	echo "</tr>";

	                 

	$i=1;

	while($row=$this->db->fetch_array($result)) {                            

		$bg="bgcolor=#ffffff ";

		if ($i %2) 	{$bg="bgcolor=" . $srch_altcolor;}

		$L = $row['active'];

		if ($L == 1)	{$show = "yes";}

		if ($L == 0)	{$show = "no";}

		

		$p = $row['paid'];

		if ($pL == 1)	{$shows = "yes";}

		if ($p == 0)	{$shows = "no";}

		

		echo "<tr>";

		echo "<td ".$bg." nowrap >". $row['comp_name']."</td>";

		echo "<td ".$bg." nowrap align=center>". $row['list']."</td>";

		echo "<td ".$bg." nowrap align=center >".$show."</td>";

		echo "<td ".$bg." nowrap align=center >".$shows."</td>";

		echo "<td ".$bg." align=center ><a href=vendor_signup_request.php?active=active&id=".$row['id']."> Activate</td>";

		echo "<td ".$bg." align=center ><a href=vendor_signup_request.php?active=deactivate&id=".$row['id']."> Deactivate</td>";

		echo "</tr>";

		$i++;



	}

	echo "</table></form>";

}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function get_v_pass($uid){

	$query = "SELECT pass FROM vendor_login WHERE uid = '$uid'";

	$result = $this->db->query($query);

	$data = $this->db->fetch_array($result);    

	return $data['pass'];

}



function logoup($user_upload,$image_path,$uid) {

	$upload = substr($user_upload,5,15);

	$image_path = "../../customer_images/".$uid."/";

	

	// if the order pictures are their

	if(!is_dir($image_path))

	if(mkdir($image_path,0775)) 

	// start looking for the directory

	$images = directorylist($image_path);

	$error .="- Failed To Create Directory<br>";

}



function showlogo($id) {

	$query = "SELECT * FROM vendor WHERE id = $id ";

	$result = $this->db->query($query);

	$data = $this->db->fetch_array($result);    

	$path = "../../products/images/".$data['logo'];

	return "<IMG SRC='$path'>";

}



function  list_cate($vst) {

	$query = "SELECT name  FROM vendor_type WHERE type_num = $vst";

	$result = $this->db->query($query);

	$data = $this->db->fetch_array($result); 

	return $data['name'];

}

function uplogo($user_upload_name,$uid) {

	$query = "UPDATE vendor SET logo = '$user_upload_name' WHERE id = $uid";

	$result = $this->db->query($query);



}

// payment.php

function trans_input($trans_id,$hld,$cc_exp,$cc_last,$ven_id) {

	$query = "UPDATE vendor SET trans_id  = '$trans_id' , chld = '$hld',cc_exp = '$cc_exp', cc_last = '$cc_last' WHERE id = $ven_id";

	$result = $this->db->query($query);

}

// vendor_listing.php

function vendor_list($uid,$list) {

	if ($list == "go") {

		$list="yes";

		$pay="hot = '1' ";

	} else {   

		$pay="hot = '0' ";

	}

        
   $query = "UPDATE vendor SET list = '$list', $pay WHERE  id = $uid ";

   $this->db->query($query);

}



function check_i($vst) {

    

	$query = "SELECT * FROM vendor_type ORDER BY id";

	$result = $this->db->query($query);

	while($row=$this->db->fetch_array($result)) { 

		$R = $row['id'];

		if($R ==  $vst)

					 {

				         $checked = "checked = checked";

					  }else{

					   $checked = "";

					  }

				     

					  echo "<input type=radio ".$checked."name=vst  value=".$row['id'].">".$row['name']. "<br>";  

                      			

			 }





}

function vendor_info($uid) {

       $query ="SELECT * FROM vendor WHERE id = '$uid' ";

	   $result = $this->db->query($query);

	  	  

	   $data = $this->db->fetch_array($result);

	   return $data;



 }

 function save_pass($uid,$pass)  {

	$time_start = time();

	$query = "INSERT INTO vendor_login set uid='$uid', pass='$pass', time_start='$time_start'";

	$this->db->query($query);



}



//

function update_pass($uid,$pass)  {

	$time_start = time();

	$query = "UPDATE vendor_login set uid='$uid', pass='$pass', time_start='$time_start'";

	$this->db->query($query);

	echo mysql_error();


}




function mail_vendor($id) {
	$query ="SELECT email FROM vendor WHERE  id = $id ";
	$result =$this->db->query($query);
	$data= $this->db->fetch_array($result);
        $mail_to = $data['email'];
	$mess1 = "Congratulations and welcome to the Landscape Communication, Inc. family of readers!\r\n\r\n";
	$to = $mail_to;
	$from =  "Landscaponline.com";
	$subject = $mag;
	$body = $mess1;

	$this->send_mail($to, $subject, $body);
	return $to;
}

function mail_vendor_no($id) 
{
	$query ="SELECT email FROM vendor WHERE  id = $id ";
	$result =$this->db->query($query);
	$data= $this->db->fetch_array($result);			
	$mail_to = $data['email'];

/*******************************************

To change the text within a message, please adhere to the following guidelines:

- ALL text must be between a $mess1 .="  and a "; tag.

- If you use quotation marks in the body of message, they must be written as \"

- To put new lines use \r\n

********************************************/

	
	$mess1 = "Sorry, we were unable to accept your submission.\r\n\r\n";
  	$to = $mail_to;
	$subject = $mag;
	$body = $mess1."\n\n";
	$this->send_mail($to, $subject, $body);

	return $to;
}

}
