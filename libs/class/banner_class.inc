<?
include_once $include_path . "class/common_class.inc";
class banner_Class  extends Common_Class
{
var $company_name;
var $link;
var $represent;
var $first_name;
var $last_name;
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
var $date;


// constructor
function banner_class(&$db)
{	
	$this->db = &$db;
}
   
//*******************************************************************************
function xlist_cate($id)
	{
		$query = "SELECT * FROM xlist WHERE idParent  = 0 ORDER BY name";
		$result = $this->db->query($query);
		if($this->db->num_rows($result))
		{
			while($row=$this->db->fetch_array($result))
			{
				    ?><table><?        
				      echo"<tr colspan=2>";
				      echo "<td><input type=radio name=cates value=".$row['id']." ></td>";  
                      echo "<td align=left>".$row['name']."</td>"; 
                      echo "</tr>";
					  ?></table><?
			 }
	   }

	}

function type_biz($id) {
    $sql = "SELECT * from xlist where id = '$id'";
    $result = $this->db->query($sql);
    if($result)
        $row = $this->db->fetch_array($result);
    return($row['name']);
}
//*************************************************************************************************
function update_banner($id, $comp_name, $first_name, $last_name, $email, $area_code, $phone, $web, $picture, $page, $location,$alttag, $input, $expire, $product="", $open_mode = 1, $search_type='', $state='default')
{
             $query = "UPDATE banner_ups SET comp_name = '$comp_name', first_name = '$first_name', last_name = '$last_name', email = '$email', area_code = '$area_code', phone = '$phone', web = '$web', picture = '$picture', page = '$page', location = '$location', alttag = '$alttag', input = '$input', expire = '$expire', product = '$product', open_mode = $open_mode, search_type='$search_type', state='$state'  WHERE  id = '$id' ";
            $this->db->query($query);	

}
function enter_banner($comp_name, $first_name, $last_name, $email, $area_code, $phone, $web, $picture, $page, $location,$alttag, $input, $expire, $product = "", $open_mode = 1, $search_type='', $state='default')
{

	$query = "SELECT * from banner_ups WHERE page = '$page' AND location = '$location' AND product = '$product' AND search_type='$search_type' AND state='$state'";
	$res = $this->db->query($query);
	if ($res) { 
		$row=$this->db->fetch_array($res);
		if ($row['id']) return $row['id'];
	}

	$query = "INSERT INTO banner_ups  (comp_name,  first_name,  last_name, email, area_code, phone,  web, picture, page, location, alttag, input, expire, product, open_mode, search_type, state) VALUES ('$comp_name', '$first_name', '$last_name', '$email',  '$area_code', '$phone', '$web', '$picture', '$page', '$location', '$alttag', '$input', '$expire', '$product', $open_mode, '$search_type', '$state')";
	$this->db->query($query);	
	
}

function deactivate_banner($id) {
 $query = "UPDATE banner_ups SET active = 'no' WHERE  id = '$id' ";
 $this->db->query($query);
}
function activate_banner($id) {
 $query = "UPDATE banner_ups SET active = 'yes' WHERE  id = '$id' ";
 $this->db->query($query);
}
function delete_banner($id) {
 $query = "DELETE FROM banner_ups WHERE  id = '$id' ";
 $this->db->query($query);
}


//*************************************************************************************************
function show_banner($banner)
{
      $query = "SELECT * from banner WHERE id = $banner";
		$result = $this->db->query($query);
		while($row=$this->db->fetch_array($result))
			{
				      echo "<table>";        
				      echo"<tr>";
				      echo "<td align=center><a href=http://www.".$row['web']."><img src=../../banner/".$row['ad']." WIDTH=468 HEIGHT=60 BORDER=0 alt=".$row['alttag']."></a></td>";  
                      echo "</tr>";
					  echo "</table>";
			 }
		 

}// end  

//*******************************************************************************
function show_banner_ad($banner,$page,$cat)
{   
	  if (is_numeric($cat))
		  {
		      $zit = " AND cates LIKE '%".$cat."%'";
	      } 
      
    	  $query = "SELECT * from banner WHERE places LIKE '%$page%' $zit";
		  $result = $this->db->query($query);
		 		 
	while($row=$this->db->fetch_array($result))
			{     echo "<table align=center width=100 cellspacing=5>";
		           echo "<tr>";
				   echo "<td align=center><a href=http://www.".$row['web']."><img src=../../banner/".$row['ad']." WIDTH=468 HEIGHT=60 BORDER=0  ALT=".$row['alttag']."></a></td>";
				   echo "</tr>";
				   echo "</table>";
           }
}
//*******************************************************************************
function view_banners($query,$last_sort) {
	
	global $srch_altcolor;
	$sortstr="<a href='".$PHP_SELF."?ls=".$last_sort."&sortby=";
	$result = $this->db->query($query); 
	echo"<tr>";
	echo "<td ><b>".$sortstr."comp_name'>Company</a></b></td>";
	echo "<td ><b>".$sortstr."page'>Page | Product</a></b></td> ";
    echo "<td><b>".$sortstr."state'>State</a></b></td>";
	echo "<td align=center><b>".$sortstr."location'>Location</a></b></td> ";
	echo "<td ><b>".$sortstr."active'>Active</a></b></td> ";
	echo "<td ><b>".$sortstr."expire'>Expires</a></b></td> ";
	echo "<td></td> ";
	echo "<td></td> ";
	echo "<td></td> ";
	echo "</tr>";

	$i=1;
	while($row = $this->db->fetch_array($result)) {
		$time = $row['expire'];
		$bg="";
		if ($i++%2) $bg="bgcolor=" .$srch_altcolor;
		echo "<tr $bg>";
		echo "<td>".$row['comp_name']."</td> ";
		if($row['page'] != "") {
            echo "<td>" .  "<a href='javascript:open_window(\"" . $row['page'] ."\",450,450)'>" .  $row['page'] . "</a></td>";
        } else if($row['product'] != "") {
            echo "<td>" . $this->type_biz($row['product']) . "</td>";
        } else {
            echo "<td>" . $row['search_type'] . "</td>";
        }
		echo " <td>".$row['state']."</td>";
		echo " <td align=center>".$this->locName($row['location'])."</td>";
		if ($row['active'] == "no") {
			echo "<td><a href=banner_edit.php?action=edit&enter=Activate&id=".$row['id'].">Not Active</a></td>";
		}	else {
			echo "<td><a href=banner_edit.php?action=edit&enter=Deactivate&id=".$row['id'].">Active</a></td>";
		}
		if ($time < strtotime("today")) {
			$this->deactivate_banner($row['id']);
		}
		if ($time == 0) {
			echo "<td>No info</td>";
		} else {
			echo "<td>".date("M Y ",$time)."</td>";
		}
		echo "<td><a href=banner_edit.php?id=".$row['id']."><IMG SRC=\"/imgz/mod_task.gif\" border=0></a></td>";
		echo "<td><a href=\"javascript:conf_redir('banner_edit.php?action=edit&enter=Delete&id=".$row['id']."','Are you sure you would like to delete the banner from ".$row['comp_name']."?');\"><IMG SRC=\"/imgz/delete_task.gif\"  border=0 alt=delete></a></td>";
		if ($row['page'] != "")
            echo "<td><a href='javascript:open_window(\"" . $row['page'] ."\",450,450)'><IMG SRC=\"/imgz/view.gif\" border=0></a></td>";
        else
            echo "<td><a href='javascript:open_window(\"/products/index.php?banner_product=" . $row['product'] ."\",450,450)'><IMG SRC=\"/imgz/view.gif\" border=0></a></td>";
		echo "</tr>";
	}
	
}// end 

function banner_view($id) {
	$query = "SELECT * FROM banner_ups WHERE id = '$id' ORDER BY page";
	global $srch_altcolor;
	$result = $this->db->query($query); 
	echo"<tr>";
	echo "<td align=center>Company</td> ";
	echo "<td align=center>Page</td> ";
	echo "<td align=center>Location</td> ";
	echo "<td align=center>Expires</td> ";
	echo "<td>Update Banner</td> ";
	echo "<td>Remove Banner</td> ";
	echo "</tr>";
	$i=1;
	while($row = $this->db->fetch_array($result)) {
		$time = $row['expire'];
		$bg="";
		if ($i++%2) $bg="bgcolor=" .$srch_altcolor;
		echo "<tr $bg>";
		echo "<td align=center>".$row['comp_name']."</td> ";?>
				<td align=center>
				<a href='javascript:open_window("<?=$row['page']?>",450,450)'><?=$row['page']?></a></td>
		<?
		echo " <td align=center>".$row['location']."</td>";
		if ($time < strtotime("today")) {
			$this->remove_banner($row['id'],$row['page'],$row['location']);
		}
		if ($time == 0) {
			echo "<td align=center>No info</td>";
		} else {
			echo "<td align=center>".date("M Y ",$time)."</td>";
		}
		echo "<td align=center><a href=banner_edit.php?id=".$row['id'].">Update</a></td>";
		echo "<td align=center><a href=banners.php?action=remove&page=".$row['page']."&location=".$row['location']."&id=".$row['id'].">Remove</a></td>";
		echo "</tr>";
	}
	
}// end 
//******************************************************************************
function delete_ad($id)
{

         $query = "DELETE FROM banner_ups WHERE id = '$id' ";
		 $result = $this->db->query($query);
		


}//end function
//******************************************************************************************


function banner_data($banner)
{
      $query = "SELECT * from banner_ups WHERE id = $banner";
		$result = $this->db->query($query);
		$row=$this->db->fetch_array($result);
		 return $row;

}// end  

function locName($id) {
    switch($id) {
        case 1: return('A');
        case 2: return('C1');
        case 3: return('C2');
        case 4: return('D1');
        case 5: return('D2');
        case 6: return('E1');
        case 7: return('E2');
        case 8: return('E3');
        case 9: return('E4');
        case 10: return('E5');
        case 11: return('B');
        case 12: return('B');
        case 13: return('F');

    }
}

}//end


