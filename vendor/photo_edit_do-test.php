<?php
session_start();
// Connect to the database server
$dbcnx = @mysql_connect('localhost', 'landscap_lol', 'meow2meow');
if (!$dbcnx) {
    die( '<p>Unable to connect to the database server at this time.</p>' );
}

// Connect to loldev DB
if (! @mysql_select_db('landscap_lollive') ) {
    die( '<p>Unable to locate the lollive database at this time.</p>' );
}



if($_POST['action'] || $_GET['action'])
    action();
    
function action(){
	$product_id = $_GET['product_id'];
	$company_id = $_GET['company_id'];
	$company_name = $_GET['company_name'];

	
	if(isset($_GET['action']) && $_GET['action']=='delete'){
		$query = "SELECT photo from vendor_product where id=$product_id and vendor_id=$company_id";
		$photo = query($query);
		$query = "DELETE from vendor_product where id=$product_id and vendor_id=$company_id";

		mysql_query($query);
		unlink('/products/images/'.$photo[0]['photo']);
		header("Location: www.landscapeonline.com");
	}
	
	elseif(isset($_GET['action']) && $_GET['action']=='restore'){
	    $query = "UPDATE vendor_product SET marked_for_deletion = 'no' where id=$product_id and vendor_id=$company_id";
	    mysql_query($query);
		header("Location: www.landscapeonline.com"); 
	}
	
	elseif(isset($_GET['action']) && $_GET['action']=='mark'){
	    delete_product_photo($product_id, $company_id);
	    header("Location: photo_edit-test.php?company_id=$company_id");
	}
	
	//else
		//header("Location: profile.php");
}
 
function get_products_list_html($company_id){
 
    $products_list = get_products($company_id);
    $html = "";
    $counter=0;
    foreach($products_list as $product){
        if($counter != 0){
            $html .="<tr>";
            $html .="<td colspan=3><hr></td>";
            $html .="</tr>";
        }
        $html .="<tr>";
        $html .="<td align='left' width='60%'><h3>$product[product_name]</h3>";
        $html .= ($product['marked_for_deletion'] == 'yes')? "<font color=\"#FF0033\">This product has been marked for deletion. Expect it deleted within 48 hours.</font>" : "";
        $html .="<br><br>$product[description]<br>".get_current_category_selected($product['id'],$company_id)."<br></td>";
        $html .="<td>";
        $html .="<img src='/products/images/$product[photo]' align='right'>";
        $html .="</td>";
        $html .="<td>"; 
        //$html .="<br><img src='/imgz/vendor/pencil.gif' onclick='window.location=\"/vendor/profile.php?action=products&intent=edit&record=$company_id&pid=$product[id]\"'> &nbsp;";
        $html .="<br><img src='/imgz/vendor/delete2.jpg' onclick='window.location=\"/vendor/photo_edit-test.php?action=mark&company_id=$company_id&product_id=$product[id]\"'> &nbsp;";
        //$html .="<br><a href = 'photo_edit_categories.php?product_id=$product[id]&company_id=$company_id'>Edit Categories </a>&nbsp;";
        //$html .="<input type='checkbox' name='mark_$product[id]' id='mark_$product[id]'>&nbsp;Delete Product Release";
        $html .="</td>";
        $html .="</tr>";
        $counter=1;
    }
    $html .="<tr>";
    $html .="<td colspan=3><hr></td>";
    $html .="</tr>";
    return $html;
}


function get_current_category_selected($product_id,$company_id){
    $query = "select xlist from vendor_product where id = $product_id";
    $result = query($query);
    $product_types = explode(',',$result[0]['xlist']);

    $str = "";
    $counter = 0;
    
    
    $str = '<br><b>Currently Selected Categories</b>&nbsp;';
    $str .= "(<a href='photo_edit_categories.php?product_id=$product_id&company_id=$company_id'>edit</a>)<br>";
    if(count($product_types) == 0 || $product_types[0] == ''){
    	$str .= 'none - ' . "(<a href='photo_edit_categories.php?product_id=$product_id&company_id=$company_id'>add</a>)<br>";
        return $str;
    }
    foreach($product_types as $category){
        if($counter!=0)
            $str .= '<br>';
        $query = "select sub_number, name from xlist where id = $category order by sub_number";
        $result = query($query);
        $str .= substr($result[0]['sub_number'],1);
        $str .= ' - ';
        $str .= $result[0]['name'];
        $counter=1;
    }
    return $str;
}

function get_products($vendor_id){
    $query = "select * from vendor_product where vendor_id = $vendor_id";
    return query($query);
}


function get_name($company_name){
    $query = "select * from new_vendor where company_name = $company_name";
    return query($query);
}



function delete_product_photo($product_id, $company_id){

    $query = "UPDATE vendor_product SET marked_for_deletion = 'yes' where id=$product_id";
    mysql_query($query);
    $query = "SELECT * from vendor_product where id=".$product_id;
    $info = query($query);
    
    $to = 'jshort@landscapeonline.com';
    $subject = 'Delete Product Release';
    
    $mime_boundary = "----LandscapeOnline.com----".md5(time());
	$headers = "From: LandscapeOnline.com <allsales@landscapeonline.com>\n";
	$headers .= "Reply-To: LandscapeOnline.com <allsales@landscapeonline.com>\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-Type: multipart/alternative; boundary=\"$mime_boundary\"\n";


	$message .= "--$mime_boundary\n"; 
	$message .= "Content-Type: text/html; charset=UTF-8\n";
	$message .= "Content-Transfer-Encoding: 8bit\n\n";
    $message .= '<html><h1>A product is being marked for deletion!</h1><br>';
    $message .= '<h3>Vendor Name: '.$info[0]['company_name']."</h3><br>";
    $message .= '<h3>Vendor ID: '.$info[0]['vendor_id']."</h3><br>";
    $message .= '<h3>Product Name: '.$info[0]['product_name']."</h3><br>";
    $message .= "<img src='https://landscapearchitect.com/products/images/".$info[0]['photo']."'> <br>";
    $message .= $info[0]['description']."<br><br>";
	
    mail($to,$subject,$message,$headers);
}

function update_vendor_product($id, $categories){
    $categories = explode(', ', $categories);
    $cat_number = array();
    foreach($categories as $cat){
          $query = "select * from xlist where sub_number=$cat";
          $result = query($query);

          if(isset($result[0]['name'])){ 
            $number = $result[0]['id'];
            $cat_number[] = $number;
          }
    }
    
    $query = "UPDATE vendor_product SET xlist = '".implode(',',$cat_number)."' WHERE id = $id";
    mysql_query($query);
} 

function query($query){
    $result = mysql_query($query);
    if(!$result){
        return false;
    }
    $results = array();
    while($assoc = mysql_fetch_assoc($result))
        $results[] = $assoc;
    return $results;
}
?>
