

<?
include("lo_top-main2-prod-js3.inc");
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
	    <?
	include $include_path . "lo_header-main2-new.inc";
	?>
 
	</div>

	<!-- Start Content Section -->

	<!-- Start Assoc Search Section -->

<!-- Below used to correct content position need to rewrite to do correct -->
<table>
	<tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
</table>
<!-- Above used to correct content position need to rewrite to do correct -->

<!-- Code Start -->
<div>
	
		<?
			include("lo_top-main2-side2-js50.inc");
		?>

		<?
//			include("lo_top-main2-side2-js50.inc");
		?>


	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("lo_top-main2-side2-js-banner.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
	
				
<table>
	<tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
</table>
<!-- Above used to correct content position need to rewrite to do correct -->
				


	
<?php
include "lol_common.inc";
include $include_path . "class/media_class-tle.inc";
include_once $include_path . "base/transaction_class.php";
$cc = new transaction_class();
$M = new media_class($db);
$expiration = "TLE-LB 18";

$code_feed = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyv0123456789";
$code_length = 8;  // Set this to be your desired code length
$final_code = "";
$feed_length = strlen($code_feed);

for($i = 0; $i < $code_length; $i ++) {
$feed_selector = rand(0,$feed_length-1);
$final_code .= substr($code_feed,$feed_selector,1);
} 
$code = "TLE018-LB" . $final_code;
// $alt_mail = $code;

if(isset($_REQUEST['hot'])) {
	$_SESSION['shot'] = $_REQUEST['hot'];
}

// echo $REQUEST_METHOD; die;
if($REQUEST_METHOD=="POST") {
$DISPLAY= $_POST;
// error check
// print_r($DISPLAY);
// die;

//$authval = $auth = implode(",",$auth);
$authval = $DISPLAY['auth'];
if (is_array($authval))  $authval = implode(",",$authval);
$acresval = $DISPLAY['acres'];
 $media_id = $DISPLAY['id'];
//$doesval = $DISPLAY['does'];
// print_r($doesval);
// $doesval = implode(",",$doesval);
$error = "";
if ($action == "edit") $uid = $media_id; //die; //  $uid = $media_id;
if (strlen($biz_title_other) == 0)  $biz_title_other = "";  
if (strlen($does_other) == 0)   $does_other = "";
if (strlen($am_other) == 0) $am_other = "";
if (strlen($sites_other) == 0)  $sites_other = "";
if (strlen($biz_title) < 2 )    $error .= "- Please enter your Title<br>";
if (count($am_id) < 1 )    $error .= "- Please enter what you are<br>";
if (strlen($sites_id) < 2 )   $error .= "- Please enter where you work<br>";
if (count($does) < 1 )   $error .= "- Please enter what you do<br>";
if (strlen($type_biz_other) < 2 )   $error .= "- Please enter how you heard about the TLE<br>";
#echo $error; die('dffdfd');
if(!strlen($error))  {
//to take check boxes array
if (is_array($does))  $does = implode(",",$does);
if (is_array($am_id))   $am_id = implode(",",$am_id);
if (is_array($sites_id))  $sites_id = implode(",",$sites_id);

//set listing to number in data base
if (strlen($website) > 0 ) {
if (strpos($website,"http://") != 0) $website = "http://" . $website;
}
if ($action == "renew" ||  $action == "edit" ) {
 //  die('dfsdfsd');

// print_r($doesval);
$code = "TLE017-LB" . $final_code;
	

$M->subscribtion_form_edit($uid, $brand, $comp_name, $sal, $first_name, $last_name, $address, $address_2, $city, $state, $zip, $country, $authval, $mail_to, $alt_mail,$area_code, $phone,$area_code_fax, $fax, $email,$month, $subscribe, $status, $biz_title, $am_id, $sites_id, $does, $expiration, $type_biz_other, $acresval, $code, 0);

				header("location:sub3.php?action=".$action."&media_id=$media_id");
} else {
$total = $M->check_user($comp_name,$subscribe);
if (is_numeric($total)) { 
header("location:sub3.php");
} else {
$_SESSION['auth'] = $SUBSCRIBE_AUTH;
// $code = $acreage_id;

/*echo "auth value===========" .$authval;
echo "<br>accers value======>".$acresval; */

$_SESSION['uid'] = $M->subscribtion_form($brand, $comp_name, $sal, $first_name, $last_name, $address, $address_2, $city, $state, $zip, $country, $authval, $mail_to, $alt_mail,$area_code, $phone,$area_code_fax, $fax, $email,$month, $subscribe, $status, $biz_title, $am_id, $sites_id, $does, $expiration, $type_biz_other, $acresval, $code, 0);

	
				header("location:sub3.php");
	
}
}
}
}

$subscribe=$_SESSION['subscribe_list'];
$protype=$_SESSION['protype_list'];
$uid=$_SESSION['uid'];


// Handle login for edit
if($action == "edit") {
$uid = $_SESSION['uid'];
$auth = $_SESSION['auth'];
$uids = $DISPLAY['uid'];

if (!$uid || $auth != $SUBSCRIBE_AUTH) {
session_register("np");
$_SESSION['np'] = $PHP_SELF . "?action=edit";
header("location: ". $lol_url ."/subscriptions/sub3-lb-18.php?action=".$action."&media_id=$uids&firstname=$first_name&lastname=$last_name&email=$email&comp_nam2=$comp_name&address2=$address&city2=$city&state2=$state&zip2=$zip&phone2=$phone&fax2=$fax&code2=$code");  
} else {
if ($uid && $auth == $SUBSCRIBE_AUTH) $DISPLAY = $M->get_info_list($uid);
}
} else { 
$DISPLAY = $_POST;
if ($is_staging) $DISPLAY = $M->get_info_list(204); 
}

if ($action == "edit") { //grab from db
$subscribe = $DISPLAY['subscribe'];
$protype = $DISPLAY['protype'];
$brand = explode(",", $DISPLAY['brand']);
$data = $M->get_info_list($uid);
$biz_title = $data['biz_title'];
$does = explode(",",$data['type_biz']);
$country = $data['country'];
$am_id = explode(",", $data['am_id']);
// echo "sdddd";  print_r($am_id); die;
// $sites_id = explode(",", $data['sites_id']);
$sites_id = $data['sites_id'];
// $acres = explode(",", $data['acres']);
$acres =  $data['acres'];
// $auth = explode(",",$authority);
$authselect = $data['auth'];
$auth = explode(",",$data['auth']);
$expiration = "TLE";

} else { // sign up
if ($action == "list") {
$subscribe = "lol";
} else {
if ($protype == "d")  $subscribe = "lasn";
if ($protype == "c")  $subscribe = "lcm";
if ($protype == "s")  $subscribe = "lsmp";
}
}
$_SESSION['subscribe_list'] = $subscribe;
$_SESSION['protype_list'] = $protype;


// Malay - this also needs to write in everytime for action=new or edit
$expiration = "TLE-LB 17";




?>

<SCRIPT language="javascript" type="text/javascript">

function validate(){
  

var len = document.form1.biz_title.length;
// alert(len); return false;
if (document.form1.comp_name.value.length < 1 && document.form1.first_name.value.length < 2 && document.form1.last_name.value.length < 2 && document.form1.address.value.length < 3 && document.form1.city.value.length < 3 && document.form1.state.value.length < 1 && document.form1.zip.value.length < 3 && document.form1.phone.value.length < 3 && document.form1.email.value.length < 3) {
alert("Please enter your company name.\nPlease enter your first name.\nPlease enter your last name.\nPlease enter your company address.\nPlease enter your city.\nPlease enter your state\nPlease enter your zip code.\nPlease enter your phone number.\nPlease enter your email address.");
return false;
}
if (document.form1.comp_name.value.length < 1) {
alert("Please enter your company name.");
return false;
}
if (document.form1.first_name.value.length < 2) {
alert("Please enter your first name.");
return false;
}
if (document.form1.last_name.value.length < 2) {
alert("Please enter your last name.");
return false;
}
if (document.form1.address.value.length < 3) {
alert("Please enter your company address.");
return false;
} 
if (document.form1.city.value.length < 3) {
alert("Please enter your city.");
return false;
} 
if (document.form1.state.value.length < 1) {
alert("Please enter your state.");
return false;
}
if (document.form1.zip.value.length < 3) {
alert("Please enter your zip code.");
return false;
} 
if (document.form1.phone.value.length < 3) {
alert("Please enter your phone number.");
return false;
}
if (document.form1.email.value.length < 3) {
alert("Please enter your email address.");
return false;
}
//else {
//alert('sdfsdfsd'); return false;

var chosen = ""
var len = document.form1.biz_title.length;

for (i = 0; i <len; i++) {
if (document.form1.biz_title[i].checked) {
chosen = document.form1.biz_title[i].value
}
}
if (chosen == "") {
alert("Please select title");
return false;
}

var checked=false;
  var elements = document.getElementsByName("am_id[]");
  for(var i=0; i < elements.length; i++){
    if(elements[i].checked) {
//   alert('checked');
      checked = true;
    }
  } 
  if (!checked) { 
    alert("Please select I Am A");
    return false;    
  }


var chosen3 = ""
var len_sites_id = document.form1.sites_id.length;

for (i = 0; i <len; i++) {
if (document.form1.sites_id[i].checked) {
chosen3 = document.form1.sites_id[i].value
}
}

/*if (chosen3 == "") {
alert("Please select I Work At value field");
return false;
}*/

var checked2=false;
  var elements = document.getElementsByName("does[]");
  for(var i=0; i < elements.length; i++){
    if(elements[i].checked) {
//   alert('checked');
      checked2 = true;
    }
  } 
  if (!checked2) { 
    alert("Please select I am Involved in the Following");
    return false;    
  } 


var checked3=false;
  var elements = document.getElementsByName("auth[]");
  for(var i=0; i < elements.length; i++){
    if(elements[i].checked) {
//   alert('checked');
      checked3 = true;
    }
  } 
  if (!checked3) { 
    alert("Please select My Authority Allows Me To");
    return false;    
  }


var chosen6 = ""
var len_acres = document.form1.acres.length;

for (i = 0; i <len_acres; i++) {
if (document.form1.acres[i].checked) {
chosen6 = document.form1.acres[i].value
}
}
if (chosen6 == "") {
alert("Please select Annual Acreage My Company");
return false;
}

}
</script>

				<form name="form1" method="post" action="<? echo $PHP_SELF ?>" onSubmit="return validate();">
<input type="hidden" name="action" value="<?=$action ?>">
<? if ($action == "edit") { ?>
<input type="hidden" name="id" value="<?=$DISPLAY['id']?>">
<input type="hidden" name="protype" value="<?=$DISPLAY['protype']?>">
<input type="hidden" name="subscribe" value="<?=$DISPLAY['subscribe']?>">
<? } else { ?>
<input type="hidden" name="protype" value="<?=$protype ?>">
<input type="hidden" name="subscribe" value="<?=$subscribe ?>">
<input type="hidden" name="code" value="<?=$DISPLAY['code'] ?>">
<? } ?>
					
					
					

<div style="position:relative; top:-15px">
	
	
	
	
<div align="left" style="padding-bottom:3px" style="color#000000">
    <span style="font-size:36px; font-weight:bold">Welcome to the Landscape Expo Registration Center</span><br><br>
    <span style="font-size:28px;">Inside you can:<br>

    <?  
// Login for Reistration

$servername = "localhost";
$username = "landscap_lol";
$password = "meow2meow";
$dbname = "landscap_lollive";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} 
  
  
  
  
      $sql = "SELECT * FROM type_title_2 ORDER BY sub_number";
      $result = $conn->query($sql);                 

      $counter = 1;
      
      echo('<div>');
      echo('<table style="font-size:14px; line-height: 20px; width: 700px">');
      
      while($row = mysqli_fetch_array($result)) {
          $sel = '';
          if( trim($biz_title) == trim($row['name']) ){
            $sel = "checked=checked";
          }
          // echo $sel."<br>"; 
        if ($counter == 1 | $counter == 4 | $counter == 7 | $counter == 10 ) {

        echo ('<tr><td><input type="radio" id="title'.$row['name'].'" name="biz_title" value="'.$row['name'].'" '.$sel.' >') ;
        echo ('&nbsp;&nbsp;<label for="title'.$row['name'].'" style="font-weight:400">'.$row['name'].'</label></td>');
         $counter++;
        } elseif ($counter == 3 | $counter == 6 | $counter == 9 | $counter == 12 ) {
        echo ('<td><input type="radio" id="title'.$row['name'].'" name="biz_title" value="'.$row['name'].'" '.$sel.' >') ;
        echo ('&nbsp;&nbsp;<label for="title'.$row['name'].'" style="font-weight:400">'.$row['name'].'</label></td></tr>');
         $counter++;
        } else {
        echo ('<td><input type="radio" id="title'.$row['name'].'" name="biz_title" value="'.$row['name'].'" '.$sel.'>') ;
        echo ('&nbsp;&nbsp;<label for="title'.$row['name'].'" style="font-weight:400">'.$row['name'].'</label></td>');  
         $counter++;
        }
      }
      echo('</table>');
      echo('</div>');
     ?>        
        
</div><br>

<div align="left" style="padding-bottom:3px">
      <span style="font-family:Arial, Helvetica, sans-serif; font-size:28px; color:#C60; font-weight:bold">I Am A: </span><strong><span style="color:#FF0004; font-weight:bold">*</span></strong><span style="font-size:12px"><strong>&nbsp;&nbsp;&nbsp;(Select all that apply)</strong></span>
    <?  
      $sql = "SELECT * FROM type_iam_tle2 ORDER BY idAccount";
      $result = $conn->query($sql);                 

      $counter = 1;
                                    
      echo('<div>');
      echo('<table style="font-size:14px; line-height: 20px; width: 700px">');

      while($row = mysqli_fetch_array($result)) {
        $sel = '';  
       if( is_array($am_id)){
       if(  in_array(trim($row['name']), $am_id)){
            $sel = "checked=checked";
          }
        }
        if ($counter == 1 || $counter == 4 || $counter == 7 || $counter == 10 || $counter == 13 || $counter == 16 || $counter == 19 || $counter == 22 || $counter == 25 || $counter == 28 || $counter == 31 || $counter == 34 || $counter == 37 || $counter == 40 || $counter == 43 || $counter == 46 || $counter == 49 || $counter == 52 || $counter == 55) {
        if (stristr($row['name'],"---")) {  
          echo ('<tr><td>') ;
        echo ('<strong><label for="'.ltrim($row['name'],"---").'">'.ltrim($row['name'],"---").'</label></strong></td>');
         $counter++;
        } else {
          echo ('<tr><td><input type="checkbox" id="'.$row['name'].'" name="am_id[]" value="'.$row['name'].'" '.$sel.'>') ;
        echo ('&nbsp;&nbsp;<label for="'.$row['name'].'" style="font-weight:400">'.$row['name'].'</label></td>');
         $counter++;
        }
         
        } elseif ($counter == 3 || $counter == 6 || $counter == 9 || $counter == 12 || $counter == 15 || $counter == 18 || $counter == 21 || $counter == 24 || $counter == 27 || $counter == 30 || $counter == 33 || $counter == 36 || $counter == 39 || $counter == 42 || $counter == 45 || $counter == 48 || $counter == 51 || $counter == 54 || $counter == 57) {
        if (stristr($row['name'],"---")) {  
          echo ('<td>') ;
        echo ('<strong><label for="'.ltrim($row['name'],"---").'">'.ltrim($row['name'],"---").'</label></strong></td></tr>');
         $counter++;
        } else {                                  
        echo ('<td><input type="checkbox" id="'.$row['name'].'" name="am_id[]" value="'.$row['name'].'" '.$sel.'>') ;
        echo ('&nbsp;&nbsp;<label for="'.$row['name'].'" style="font-weight:400">'.$row['name'].'</label></td></tr>');
         $counter++;
        }
        } else {
        if (stristr($row['name'],"---")) {  
        echo ('<td>') ;
        echo ('<strong><label for="'.ltrim($row['name'],"---").'">'.ltrim($row['name'],"---").'</label></strong></td>'); 
         $counter++;
        } else {                                  
        echo ('<td><input type="checkbox" id="'.$row['name'].'" name="am_id[]" value="'.$row['name'].'" '.$sel.'>') ;
        echo ('&nbsp;&nbsp;<label for="'.$row['name'].'" style="font-weight:400">'.$row['name'].'</label></td>'); 
         $counter++;
        }
        }
      }
      echo('</table>');
      echo('</div>');
     ?>
        
</div><br>

<div align="left" style="padding-bottom:3px">

      <span style="font-family:Arial, Helvetica, sans-serif; font-size:28px; color:#C60; font-weight:bold">I Work At: </span><strong><span style="color:#FF0004; font-weight:bold">*</span></strong><span style="font-size:12px"><strong>&nbsp;&nbsp;&nbsp;(Please Choose One)</strong></span>
    <?  
      $sql = "SELECT * FROM type_sites ORDER BY sub_number";
      $result = $conn->query($sql);                 

      $counter = 1;
                                    
      echo('<div>');
      echo('<table style="font-size:14px; line-height: 20px; width: 700px">');

      while($row = mysqli_fetch_array($result)) {
          $sel = '';
      if( trim($sites_id) == trim($row['name']) ){
            $sel = "checked=checked";
          }

        if ($counter == 1 || $counter == 4 || $counter == 7 || $counter == 10 || $counter == 13 || $counter == 16 || $counter == 19 || $counter == 22 || $counter == 25 || $counter == 28 || $counter == 31 || $counter == 34 || $counter == 37 || $counter == 40 || $counter == 43 || $counter == 46 || $counter == 49 || $counter == 52 || $counter == 55) {
        echo ('<tr><td><input type="radio" id="work'.$row['name'].'" name="sites_id" value="'.$row['name'].'" '.$sel.' required>') ;
        echo ('&nbsp;&nbsp;<label for="work'.$row['name'].'" style="font-weight:400">'.$row['name'].'</label></td>');
         $counter++;
        } elseif ($counter == 3 || $counter == 6 || $counter == 9 || $counter == 12 || $counter == 15 || $counter == 18 || $counter == 21 || $counter == 24 || $counter == 27 || $counter == 30 || $counter == 33 || $counter == 36 || $counter == 39 || $counter == 42 || $counter == 45 || $counter == 48 || $counter == 51 || $counter == 54 || $counter == 57) {
        echo ('<td><input type="radio" id="work'.$row['name'].'" name="sites_id" value="'.$row['name'].'" '.$sel.' required>') ;
        echo ('&nbsp;&nbsp;<label for="work'.$row['name'].'" style="font-weight:400">'.$row['name'].'</label></td></tr>');
         $counter++;
        } else {
        echo ('<td><input type="radio" id="work'.$row['name'].'" name="sites_id" value="'.$row['name'].'" '.$sel.' required>') ;
        echo ('&nbsp;&nbsp;<label for="work'.$row['name'].'" style="font-weight:400">'.$row['name'].'</label></td>'); 
         $counter++;
        }
      }
      echo('</table>');
      echo('</div>');
     ?>


</div><br>

<div align="left" style="padding-bottom:3px">

      <span style="font-family:Arial, Helvetica, sans-serif; font-size:28px; color:#C60; font-weight:bold">I am Involved in the Following: </span><strong><span style="color:#FF0004; font-weight:bold">*</span></strong><span style="font-size:12px"><strong>&nbsp;&nbsp;&nbsp;(Select all that apply)</strong></span>
    <?  
      $sql = "SELECT * FROM type_does_tle ORDER BY idAccount";
      $result = $conn->query($sql);                 

      $counter = 1;
                                    
      echo('<div>');
      echo('<table style="font-size:14px; line-height: 20px; width: 700px">');

      while($row = mysqli_fetch_array($result)) {
        $sel = ''; 
         if( is_array($does)){
        if( in_array(trim($row['name']), $does)){
            $sel = "checked";
          }
         } 
        if ($counter == 1 || $counter == 4 || $counter == 7 || $counter == 10 || $counter == 13 || $counter == 16 || $counter == 19 || $counter == 22 || $counter == 25 || $counter == 28 || $counter == 31 || $counter == 34 || $counter == 37 || $counter == 40 || $counter == 43 || $counter == 46 || $counter == 49 || $counter == 52 || $counter == 55 || $counter == 58 || $counter == 61 || $counter == 64 || $counter == 67 || $counter == 70 || $counter == 73 || $counter == 76 || $counter == 79 || $counter == 82) {
        if (stristr($row['name'],"---")) {  
          echo ('<tr><td style="font-weight:bold; font-size:15px">') ;
        echo ('<strong><label for="'.ltrim($row['name'],"--- ").'">'.ltrim($row['name'],"--- ").'</label></strong></td>');
         $counter++;
        } else {
          echo ('<tr><td><input type="checkbox" id="'.$row['name'].'" value="'.$row['name'].'" name="does[]" '.$sel.'>') ;
        echo ('&nbsp;&nbsp;<label for="'.$row['name'].'" style="font-weight:400">'.$row['name'].'</label></td>');
         $counter++;
        }
         
        } elseif ($counter == 3 || $counter == 6 || $counter == 9 || $counter == 12 || $counter == 15 || $counter == 18 || $counter == 21 || $counter == 24 || $counter == 27 || $counter == 30 || $counter == 33 || $counter == 36 || $counter == 39 || $counter == 42 || $counter == 45 || $counter == 48 || $counter == 51 || $counter == 54 || $counter == 57 || $counter == 60 || $counter == 63 || $counter == 66 || $counter == 69 || $counter == 72 || $counter == 75 || $counter == 78 || $counter == 81 || $counter == 83) {
        if (stristr($row['name'],"---")) {  
          echo ('<td>') ;
        echo ('<strong><label for="'.ltrim($row['name'],"--- ").'">'.ltrim($row['name'],"--- ").'</label></strong></td></tr>');
         $counter++;
        } else {                                  
        echo ('<td><input type="checkbox" id="'.$row['name'].'" value="'.$row['name'].'" name="does[]" '.$sel.'>') ;
        echo ('&nbsp;&nbsp;<label for="'.$row['name'].'" style="font-weight:400">'.$row['name'].'</label></td></tr>');
         $counter++;
        }
        } else {
        if (stristr($row['name'],"---")) {  
        echo ('<td>') ;
        echo ('<strong><label for="'.ltrim($row['name'],"--- ").'">'.ltrim($row['name'],"--- ").'</label></strong></td>'); 
         $counter++;
        } else {                                  
        echo ('<td><input type="checkbox" id="'.$row['name'].'"value="'.$row['name'].'"  name="does[]" '.$sel.'>') ;
        echo ('&nbsp;&nbsp;<label for="'.$row['name'].'" style="font-weight:400">'.$row['name'].'</label></td>'); 
         $counter++;
        }
        }
      }
      echo('</table>');
      echo('</div>');
     ?>

</div><br>

<div align="left" style="padding-bottom:3px">

      <span style="font-family:Arial, Helvetica, sans-serif; font-size:28px; color:#C60; font-weight:bold">My Authority Allows Me To: </span><strong><span style="color:#FF0004; font-weight:bold">*</span></strong><span style="font-size:12px"><strong>&nbsp;&nbsp;&nbsp;(Please Choose All That Apply)</strong></span>
    <?  
      $sql = "SELECT * FROM type_authority ORDER BY sub_number";
      $result = $conn->query($sql);                 

      $counter = 1;
                                    
      echo('<div>');
      echo('<table style="font-size:14px; line-height: 20px; width: 700px">');

      while($row = mysqli_fetch_array($result)) {
        $sel = ''; 
        if( is_array($auth)){
        if( in_array(trim($row['name']), $auth)){
            $sel = "checked";
          }
         } 
        
        
        if ($counter == 1 | $counter == 4 | $counter == 7 | $counter == 10 ) {
        if (stristr($row['name'],"---")) {  
          echo ('<tr><td>') ;
        echo ('<label for="'.ltrim($row['name'],"--- ").'">'.ltrim($row['name'],"--- ").'</label></td>');
         $counter++;
        } else {
          echo ('<tr><td><input type="checkbox" id="'.$row['name'].'" value="'.$row['name'].'" name="auth[]" '.$sel.'>') ;
        echo ('&nbsp;&nbsp;<label for="'.$row['name'].'" style="font-weight:400">'.$row['name'].'</label></td>');
         $counter++;
        }

        } elseif ($counter == 3 | $counter == 6 | $counter == 9 | $counter == 12 ) {
        if (stristr($row['name'],"---")) {  
          echo ('<td>') ;
        echo ('&nbsp;&nbsp;<label for="'.ltrim($row['name'],"--- ").'">'.ltrim($row['name'],"--- ").'</label></td></tr>');
         $counter++;
        } else {                                  
        echo ('<td><input type="checkbox" id="'.$row['name'].'" value="'.$row['name'].'" name="auth[]" '.$sel.'>') ;
        echo ('&nbsp;&nbsp;<label for="'.$row['name'].'" style="font-weight:400">'.$row['name'].'</label></td></tr>');
         $counter++;
        }
        } else {
        if (stristr($row['name'],"---")) {  
        echo ('<td>') ;
        echo ('&nbsp;&nbsp;<label for="'.ltrim($row['name'],"--- ").'">'.ltrim($row['name'],"--- ").'</label></td>'); 
         $counter++;
        } else {                                  
        echo ('<td><input type="checkbox" id="'.$row['name'].'"value="'.$row['name'].'"  name="auth[]" '.$sel.'>') ;
        echo ('<label for="'.$row['name'].'" style="font-weight:400">'.$row['name'].'</label></td>'); 
         $counter++;
        }

        }
      }
      echo('</table>');
      echo('</div>');
     ?>

</div><br>

<div align="left" style="padding-bottom:3px">

      <span style="font-family:Arial, Helvetica, sans-serif; font-size:28px; color:#C60; font-weight:bold">The Annual Acreage My Company or Departments Works On is: </span><strong><span style="color:#FF0004; font-weight:bold">*</span></strong><span style="font-size:12px"><strong>&nbsp;&nbsp;(Please Choose One)</strong></span>
    <?  
      $sql = "SELECT * FROM type_acreage ORDER BY sub_number";
      $result = $conn->query($sql);                 

      $counter = 1;
                                    
      echo('<div>');
      echo('<table style="font-size:14px; line-height: 20px; width: 700px">');

      while($row = mysqli_fetch_array($result)) {
        $sel = '';
        if( trim($acres) == trim($row['name']) ){
            $sel = "checked";
          }

        if ($counter == 1 | $counter == 4 | $counter == 7 | $counter == 10 ) {
        echo ('<tr><td><input type="radio" id="acre'.$row['name'].'" name="acres" value="'.$row['name'].'" '.$sel.'>') ;
        echo ('&nbsp;&nbsp;<label for="acre'.$row['name'].'" style="font-weight:400">'.$row['name'].'</label></td>');
         $counter++;
        } elseif ($counter == 3 | $counter == 6 | $counter == 9 | $counter == 12 ) {
        echo ('<td><input type="radio" id="acre'.$row['name'].'" name="acres" value="'.$row['name'].'" '.$sel.'>') ;
        echo ('&nbsp;&nbsp;<label for="acre'.$row['name'].'" style="font-weight:400">'.$row['name'].'</label></td></tr>');
         $counter++;
        } else {
        echo ('<td><input type="radio" id="acre'.$row['name'].'" name="acres" value="'.$row['name'].'" '.$sel.'>') ;
        echo ('&nbsp;&nbsp;<label for="acre'.$row['name'].'" style="font-weight:400">'.$row['name'].'</label></td>'); 
         $counter++;
        }
      }
      echo('</table>');
      echo('</div>');
     ?>

</div><br>

<div align="left" style="padding-bottom:3px">
    <div class="12u$">
      <div class="select-wrapper">
              <span style="font-family:Arial, Helvetica, sans-serif; font-size:28px; color:#C60; font-weight:bold">Select How You Heard about the Show: </span><strong><span style="color:#FF0004; font-weight:bold">*</span></strong><br><span style="font-size:12px"><strong>&nbsp;&nbsp;&nbsp;(Pick from choices to the right)</strong></span>
        <select name="type_biz_other" id="how" VALUE="<?=$DISPLAY['type_biz_other']?>" style="color:#000000" required>
          <? if (strlen($DISPLAY['type_biz_other']) > 2)    {?>
              <OPTION VALUE="<?=$DISPLAY['type_biz_other']?>"><?=$DISPLAY['type_biz_other']?></OPTION> 
            <? } else {?>
            <OPTION VALUE="">Choose How You Heard about the show</OPTION>
            <? }?>
                       <OPTION VALUE= "Returning Attendee" <?php if("LandscapeOnline.com"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Returning Attendee</OPTION>
                       <OPTION VALUE= "LandscapeOnline.com" <?php if("LandscapeOnline.com"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >LandscapeOnline.com</OPTION>
                       <OPTION VALUE= "Email" <?php if("Email"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Email</OPTION>
                      <OPTION VALUE= "Free Pass" <?php if("Free Pass"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Free Pass</OPTION>
                      <OPTION VALUE= "Phone Call" <?php if("Phone Call"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Phone Call</OPTION>
					  <OPTION VALUE= "LinkedIn" <?php if("LinkedIn"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >LinkedIn</OPTION>
                      <OPTION VALUE= "Instagram" <?php if("Instagram"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Instagram</OPTION>
                      <OPTION VALUE= "Mailer" <?php if("Mailer"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Seminar Brochure</OPTION>
                      <OPTION VALUE= "Postcard" <?php if("Postcard"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Postcard</OPTION>
                       <OPTION VALUE= "Magazine/Newsletter" <?php if("Magazine/Newsletter"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Advertisement Magazine/Newsletter</OPTION>
                      <OPTION VALUE=  "Show Exhibitor" <?php if("Show Exhibitor"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Show Exhibitor</OPTION>
                       <OPTION VALUE="Co-Worker" <?php if("Co-Worker"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Co-Worker</OPTION>
                       <OPTION VALUE= "Facebook" <?php if("Facebook"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Facebook</OPTION>
                       <OPTION VALUE= "Press Release" <?php if("Press Release"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Press Release</OPTION>
        </select>
      </div>
    </div>                               
</div><br>
<div class="12u$">
<ul class="actions">
  <li><input type="submit" value="Continue to Next Page" class="special" /></li><br>
  <li><input type="reset" value="Reset" /></li>
</ul>
</div>

</form>                        																

				
			

				
			
			</td>
			
			
			
		</tr>
	</table><br>
	
	<div style="position: relative; left: 250px; top: 2400px">
		<? 	include("lo_top-main2-bottom.inc"); ?>
	</div>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
include("lo_footer-main2-new.inc");
?>





