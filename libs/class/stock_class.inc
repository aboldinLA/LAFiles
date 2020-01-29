<?
include_once $include_path . "class/common_class.inc";
ob_start();
class stock_Class  extends Common_Class
{

var $ticker;
var $price;



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
function update_banner($id, $ticker, $price)
{
             $query = "UPDATE  lcsi SET ticker = '$ticker', price = '$price'  WHERE  id = '$id' ";
            $this->db->query($query);	


}
function enter_banner($ticker, $price)
{
  $today_date = date('Y-m-d H:i:s');
  $new_date = date('Y-m-d', strtotime($today_date));
  $query = "SELECT * from lcsi WHERE ticker= '$ticker' AND DATE(date) ='$new_date'";
  $res = $this->db->query($query);
  $row=$this->db->fetch_array($res);

  if ($row) {
    return true;
  }else{
   $query = "INSERT INTO  lcsi (ticker,  price,batchID) VALUES ('$ticker', '$price',NOW())";
   $this->db->query($query);
   return false;
  }
	
	
}

function deactivate_banner($id) {
die;
 $query = "UPDATE banner_ups SET active = 'no' WHERE  id = '$id' ";
 $this->db->query($query);
}
function activate_banner($id) {
 $query = "UPDATE banner_ups SET active = 'yes' WHERE  id = '$id' ";
 $this->db->query($query);
}
function delete_banner($id) {
 $query = "DELETE FROM lcsi WHERE  id = '$id' "; // die;
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
function view_stock($query,$last_sort) {

//echo $query;
//echo $last_sort;
 	global $srch_altcolor;
	$sortstr="<a href='".$PHP_SELF."?ls=".$last_sort."&sortby=";
	$result = $this->db->query($query); 

        echo"<tr>";
	echo "<td ><b>".$sortstr."batchID'>batchID</a></b></td>";
	echo "<td ><b>".$sortstr."ticker'>Ticker</a></b></td> ";
       echo "<td><b>".$sortstr."price'>Price</a></b></td>";
	echo "<td></td> ";
	echo "<td></td> ";
	echo "</tr>";

	$i=1;
	while($row = $this->db->fetch_array($result)) {

         //  $var=Array(  "ACO", "AERG", "ALG", "AMN","ARTW","AGCO","BGG","BLT","BZH","MMM", "CAT","CENT","CNH", "CMI","CVCO", "CX", "DE", "DD","DOW","EFOI","F","NOBH", "FSHOX", "GM", "GVA","HBPI","HD","IR","JCTCF", "JOE","KBH","LFRGY","LMT", "LOW", "STN", "MKTAY", "MLM","TXI", "NWL", "GRIF", "PHM","POOL","DHI","LEN","SMG","SNA","SWK","SYT","TECUA","TEX","TSCO","TTC","URI","VMC","VOLVY");         

//if (in_array($row['ticker'], $var)) {

	    $bg="";
		if ($i++%2) $bg="bgcolor=" .$srch_altcolor;
		echo "<tr $bg>";
		echo "<td>".$row['batchID']."</td> ";
		echo "<td>".$row['ticker']."</td> ";
		echo " <td>".$row['price']."</td>";
		
		echo "<td><a href=stock_edit.php?id=".$row['id']."><IMG SRC=\"/imgz/mod_task.gif\" border=0></a></td>";
		echo "<td><a href=\"javascript:conf_redir('stock_edit.php?action=edit&enter=Delete&id=".$row['id']."','Are you sure you would like to delete the stock from ".$row['ticker']."?');\"><IMG SRC=\"/imgz/delete_task.gif\"  border=0 alt=delete></a></td>";
		echo "</tr>";
	//  }
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

     $query = "DELETE FROM lcsi WHERE id = '$id' ";
     $result = $this->db->query($query);
		


}//end function
//******************************************************************************************


function banner_data($banner)
{
      $query = "SELECT * from lcsi WHERE id = $banner";
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