<?

session_start();

if (isset($_SESSION['posted']) && $_SESSION['posted']) {
    unset($_SESSION['posted']);

    echo "Your picture has been submitted";
}

?>


 




<h2>Manage Company Products</h2>
<p style="font-family: Helvetica, Arial, 'sans-serif'; font-size: 16px">Change text or image below - Your changes will be reviewed before appearing on your vendor profile.</p>
<hr noshade size='-1' />
<form enctype='multipart/form-data' action='<?= $_SERVER['PHP_SELF'] ?>' method='POST' name='fileForm' runat='vdaemon'>
<input type='hidden' name='intent' value='<?= $intent ?>' />
<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
<input type='hidden' name='record' value='<?= $record ?>' />
<input type='hidden' name='pid' value='<?= $this->id ?>' />
<input type='hidden' name='action' value='products' />



<vlsummary class="errSummary" displaymode='bulletlist' headertext="<h3>Remember:</h3>" />
<table width='100%' border='0'>
    <tbody>
        <tr>
            <td class='formLabel' width='25%'>Product Name<br>(34 characters w/spaces Max)</td>
            <td class='formObject'>
                <input type='text' size='25' name='product_name' id='product_name' maxlength="34" value='<?= stripslashes($this->product_name); ?>' />
                <vlvalidator type='required' name='prodReq' control='product_name' errmsg='A product name is required' />
            </td>
        </tr>
        <tr>
            <td class='formLabel' width='25%'>Description<br>(900 characters w/spaces Max)</td>
            <td class='formObject'>
                <textarea name='description' rows=10 cols=50 maxlength="900"><?= stripslashes($this->description); ?></textarea>
                <vlvalidator type='required' name='descReq' control='description' errmsg='A description is required' />
            </td>
        </tr>
        <tr>
            <td class='formLabel' width='25%'>Web Landing Pages</td>
            <td class='formObject'>
                <input type='text' size='50' name='web' id='web' value='http://<?= preg_replace('#^http?://#', '', $this->web); ?>' />
                <vlvalidator type='required' name='webReq' control='web' errmsg='A Web Landing Page is required' />
            </td>
        </tr>
        <tr>
            <td class='formLabel' width='25%'>Photo Time</td>
            <td class='formObject'>
                <input type='text' size='50' name='photo_time' id='photo_name' value='<?= $this->photo_name = date("Y-m-d H:i:s"); ?>' />
                <vlvalidator type='required' name='photoReq' control='photo_time' errmsg='Photo Time is required' />
            </td>
        </tr>
        
        	<? $coid = $this->id; 
		
			?>
 
        
			<script>
			function myFunction() {
				window.open("https://landscapearchitect.com/vendor/results.php?coid=<? echo $coid ?>", "_blank", "toolbar=no,scrollbars=yes,resizable=yes,top=300,left=400,width=400,height=400");
			}
			</script>  
        
        
        <tr>
            <td class='formLabel' width='25%'>Use This Product for Guides</td>
            <td class='formObject'>
                <button onclick="myFunction()" style="background-color: chartreuse">Click to Pick for Guides</button>&nbsp;Choose to use this product in the LASN Specifiers or<br>
				<span style="padding-left: 148px">LC/DBM Buyer's Guides</span>
            </td>
        </tr>	
        
          <tr>
            <td class='formLabel' width='25%'>Use This Product for Guides</td>
            <td class='formObject'>
                <button onclick="myFunction()" style="background-color: chartreuse">Click to Pick for Guides</button>&nbsp;Choose to use this product in the LASN Specifiers or<br>
				<span style="padding-left: 148px">LC/DBM Buyer's Guides</span>
            </td>
        </tr>	
        
        
		
        
        
        <tr>
            <td class='formLabel' width='25%'>Upload Photo</td>
            <td class='formObject'>
            <? if(isset($this->id)) { ?>
                <? if(isset($this->photo) && strlen($this->photo) > 0) { ?>
                    <input type='radio' name='useold' value='0' checked /> Upload New Photo - Photo is viewed after save
                    <input type='file' name='photo_upload' id='photo_upload' /> <br />
                    <input type='radio' name='useold' value='1' /> Use Previous Photo
                    <center><img src='/products/images/<?= $this->photo ?>' border=1 height=200 /></center>
                <? } else { ?>
                    <input type='radio' name='useold' value='0' checked /> Upload New Photo
                    <input type='file' name='photo_upload' id='photo_upload' /> <br />
                    <input type='radio' name='useold' value='1' /> Use Previous Photo <br />
                <? } ?>
                    <vlgroup name='photo' errmsg='A file is required when uploading a graphic.'>
                        <vlvalidator type='required' control='photo_upload' errmsg='File is Required to Upload.' />
                        <vlvalidator type='compare' control='useold' comparevalue='1' validtype='integer' operator='e' />
                    </vlgroup>
            <? } else { ?>
                    <input type='file' name='photo_upload' id='photo_upload' />
                    <vlvalidator type='required' name='fileReq' control='photo_upload' errmsg='File is Required to Upload.' />
            <? } ?>
            </td>
        </tr>
        
        
 
        
        
        
        
        
 
  <?
		
 //  $to = 'jshort@landscapeonline.com';
  //    $subject = 'Change Time';
    
 //     $mime_boundary = "----LandscapeOnline.com----".md5(time());
 // 	$headers = "From: LandscapeOnline.com <webmaster@landscapeonline.com>\n";
 // 	$headers .= "MIME-Version: 1.0\n";
 // 	$headers .= "Content-Type: multipart/alternative; boundary=\"$mime_boundary\"\n";


 // 	$message .= "--$mime_boundary\n"; 
 // 	$message .= "Content-Type: text/html; charset=UTF-8\n";
 // 	$message .= "Content-Transfer-Encoding: 8bit\n\n";
  //    $message .= '<html><h3>This product needs time needs to be changed!</h3><br>';
  //    $message .= '<h3>Photo: '.$this->photo."</h3><br>";
  //    $message .= '<h3>Product Name: '.$this->photo_name."</h3><br>";
  //    $message .= '<h3>Product ID: '.$this->id."</h3><br>";
    
  //    $message .= '<br><br>';
  //    $message .= '</html>';
    
 // 	$message .= "--$mime_boundary--\n\n";
  //    mail($to,$subject,$message,$headers);	
		
		
		
		
		
		
		
		
											$newTime =  date("Y-m-d H:i:s"); 
											$servername = "localhost";
											$username = "landscap_lol";
											$password = "meow2meow";
											$dbname = "landscap_lollive";
	
											// Create connection
												$conn = mysqli_connect($servername, $username, $password, $dbname);
												// Check connection
												if (!$conn) {
													die("Connection failed: " . mysqli_connect_error());
												}

												$sql = "UPDATE vendor_product SET photo_time='$newTime' WHERE id = '$this->id'";

												if (mysqli_query($conn, $sql)) {
													echo "Time Updated";
													
												} else {
													echo "Error updating record: " . mysqli_error($conn);
												}

												mysqli_close($conn);
		
										// Create connection
		
		
												$newImport =  "1";
		
		
												$conn = mysqli_connect($servername, $username, $password, $dbname);
												// Check connection
												if (!$conn) {
													die("Connection failed: " . mysqli_connect_error());
												}

												$sql2 = "UPDATE vendor_product SET imported='$newImport' WHERE id = '$this->id'";
		

												if (mysqli_query($conn, $sql2)) {
													echo "Time Updated";
													
												} else {
													echo "Error updating record: " . mysqli_error($conn);
												}

												mysqli_close($conn);
		
		?>
          

         
        
    </tbody> 
    <tfoot>
        <tr>
            <td align='left'><a href='<?= (strpos($_SERVER['PHP_SELF'],'private')===false)? '':'/private' ?>/vendor/photo_edit-js.php?company_id=<?= $record ?>'><img src='/imgz/vendor/exit.gif' border='0' /></a></td>
            <td align='right'><input type='submit' src='/imgz/vendor/save.gif' /></td>
        </tr>
    </tfoot>
</table>
</form>
   
 <?php
if (isset($_POST['checkbox1'])) {
	
	
											$servername = "localhost";
											$username = "landscap_lol";
											$password = "meow2meow";
											$dbname = "landscap_lollive";
	
											// Create connection
												$conn = mysqli_connect($servername, $username, $password, $dbname);
												// Check connection
												if (!$conn) {
													die("Connection failed: " . mysqli_connect_error());
												}

												$sql = "UPDATE vendor_product SET xlist='yes' WHERE id = '$this->id'";

												if (mysqli_query($conn, $sql)) {
													echo "Time Updated";
													
												} else {
													echo "Error updating record: " . mysqli_error($conn);
												}

												mysqli_close($conn);	
}
?>   


<?

	

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
	
	if(isset($_GET['action']) && $_GET['action']=='delete'){
		$query = "SELECT photo from vendor_product where id=$product_id and vendor_id=$company_id";
		$photo = query($query);
		$query = "DELETE from vendor_product where id=$product_id and vendor_id=$company_id";

		mysql_query($query);
		unlink('https://landscapearchitect.com/products/images/'.$photo[0]['photo']);
		if(unlink($path)) echo "Deleted file "; 
		header("Location: http://www.landscapeonline.com");
	}
	
	elseif(isset($_GET['action']) && $_GET['action']=='restore'){
	    $query = "UPDATE vendor_product SET marked_for_deletion = 'no' where id=$product_id and vendor_id=$company_id";
	    mysql_query($query);
	    
		header("Location: www.landscapeonline.com"); 
	}
	
	elseif(isset($_GET['action']) && $_GET['action']=='mark'){
	    delete_product_photo($product_id, $company_id);
	    header("Location: https://landscapearchitect.com/vendor/index-vendor-js.php?company_id=$company_id");
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
        $html .="<br><img src='/imgz/vendor/pencil.gif' onclick='window.location=\"/private/vendor/index.php?action=products&intent=edit&record=$company_id&pid=$product[id]\"'> &nbsp;";
        $html .="<br><img src='/imgz/vendor/delete.gif' onclick='window.location=\"/private/vendor/photo_edit_do.php?action=mark&company_id=$company_id&product_id=$product[id]\"'> &nbsp;";
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
								
function get_next_category_selected($product_id,$company_id){
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

function delete_product_photo($product_id, $company_id){

    $query = "UPDATE vendor_product SET marked_for_deletion = 'yes' where id=$product_id";
    mysql_query($query);
    $query = "SELECT * from vendor_product where id=".$product_id;
    $info = query($query);
    
    $to = 'rmoore@landscapeonline.com';
    $subject = 'Delete Product Release';
    
    $mime_boundary = "----LandscapeOnline.com----".md5(time());
	$headers = "From: LandscapeOnline.com <allsales@landscapeonline.com>\n";
	$headers .= "Reply-To: LandscapeOnline.com <allsales@landscapeonline.com>\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-Type: multipart/alternative; boundary=\"$mime_boundary\"\n";


	$message .= "--$mime_boundary\n"; 
	$message .= "Content-Type: text/html; charset=UTF-8\n";
	$message .= "Content-Transfer-Encoding: 8bit\n\n";
    $message .= '<html><h1>This product needs to be deleted!</h1><br>';
    $message .= '<h3>Vendor ID: '.$info[0]['vendor_id']."</h3><br>";
    $message .= '<h3>Product Name: '.$info[0]['product_name']."</h3><br>";
    $message .= "<img src='https://landscapearchitect.com/products/images/".$info[0]['photo']."'> <br>";
    $message .= $info[0]['description']."<br><br>";
    
    $message .= '<br><br>';
    $message .= '<p><a href="https://landscapearchitect.com/vendor/photo_edit_do.php?action=delete&product_id='.$product_id.'&company_id='.$company_id.'">Permanently Delete this Product</a>';
    $message .= '&nbsp;|&nbsp;<a href="www.landscapeonline.com/vendor/photo_edit_do.php?action=restore&product_id='.$product_id.'&company_id='.$company_id.'">Refuse Deletion</a></p>';
    $message .= '</html>';
    
	$message .= "--$mime_boundary--\n\n";
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

<?






?>
