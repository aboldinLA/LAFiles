
<?php
include "lol_common-new.inc";
include $include_path . "class/media_class-tle.inc";
include_once $include_path . "base/transaction_class.php";
$cc = new transaction_class();
$M = new media_class($db);

$code_feed = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyv0123456789";
$code_length = 8;  // Set this to be your desired code length
$final_code = "";
$feed_length = strlen($code_feed);

for($i = 0; $i < $code_length; $i ++) {
$feed_selector = rand(0,$feed_length-1);
$final_code .= substr($code_feed,$feed_selector,1);
} 
$code = "TLE016-SAC" . $final_code;
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

$authval = $DISPLAY['auth'];
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
if (strlen($am_id) < 2 )    $error .= "- Please enter what you are<br>";
if (strlen($sites_id) < 2 )   $error .= "- Please enter where you work<br>";
if (strlen($does) < 2 )   $error .= "- Please enter what you do<br>";
if (strlen($type_biz_other) < 2 )   $error .= "- Please enter how you heard about the TLE<br>";
// echo $error; die('dffdfd');
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

$M->subscribtion_form_edit($uid, $brand, $comp_name, $sal, $first_name, $last_name, $address, $address_2, $city, $state, $zip, $country, $authval, $mail_to, $alt_mail,$area_code, $phone,$area_code_fax, $fax, $email,$month, $subscribe, $status, $biz_title, $am_id, $sites_id, $does, $expiration, $type_biz_other, $acresval, $code, 0);

header("location:sub2-new.php?action=".$action."&protype=".$protype);
} else {
$total = $M->check_user($comp_name,$subscribe);
if (is_numeric($total)) { 
header("location:have_listing-tle.php?total=$total");
} else {
$_SESSION['auth'] = $SUBSCRIBE_AUTH;
$code = $acreage_id;

/*echo "auth value===========" .$authval;
echo "<br>accers value======>".$acresval; */

$_SESSION['uid'] = $M->subscribtion_form($brand, $comp_name, $sal, $first_name, $last_name, $address, $address_2, $city, $state, $zip, $country, $authval, $mail_to, $alt_mail,$area_code, $phone,$area_code_fax, $fax, $email,$month, $subscribe, $status, $biz_title, $am_id, $sites_id, $does, $expiration, $type_biz_other, $acresval, $code, 0);

header("location:sub2-new.php?firstname=$first_name&lastname=$last_name&email=$email&alt_mail2=$alt_mail");
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
header("location: ". $lol_url ."/subscriptions/sub2-new.php?action=".$action."&media_id=$uids");  
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

include("lo_mo_top-main-pg-2.inc");

?>

<SCRIPT language="javascript" type="text/javascript">

function validate(){

var len = document.form1.biz_title.length;
// alert(len); return false;
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
    alert("Please select Contractor Type");
    return false;    
  }



var chosen3 = ""
var len_sites_id = document.form1.sites_id.length;

for (i = 0; i <len; i++) {
if (document.form1.sites_id[i].checked) {
chosen3 = document.form1.sites_id[i].value
}
}
if (chosen3 == "") {
alert("Please select I Work At value field");
return false;
}



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




var chosen5 = ""
var len_auth = document.form1.auth.length;

for (i = 0; i <len_auth; i++) {
if (document.form1.auth[i].checked) {
chosen5 = document.form1.auth[i].value
}
}
if (chosen5 == "") {
alert("Please select Authority Type");
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






			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<div class="row 200%">
							<div class="8u 12u(mobile)" id="content">
								<article id="main">
									<section>
									<header>
										<center><h2><a href="#">Subscription Request Center</a></h2></center>
										
									</header> 
                       
                       
<!-- Reistration Code Start -->

<?php
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

?>

<div>

If you have a password: <a href="https://landscapearchitect.com/member/login-tle-sac-js2.php?t=s"><strong>Click Here</strong></a><br />
To register 3 or more attendees, <a href="https://landscapearchitect.com/TLE-SAC/images/TLE-SAC16-Multiple-Attendee-Registration.pdf" target="_blank"><span style="color:#000000">click here</span></a> to download a fax form.<br /><br />
</div>

<div>
<span style="font-family:Arial, Helvetica, sans-serif; font-size:28px; color:#C60; font-weight:bold">Let's Start With Your Contact Information</span><br />
</div>

<div>
Please make sure the following Information is complete. <span>&nbsp;&nbsp;&nbsp;*Required Field</span><br /><br /><br />

</div> 

<section>
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

<div align="left">
      <label for="demo-email2">First Name: (*Required Field)</label>
    <input type="text" name="first_name" id="demo-email2" value="<?=$DISPLAY['first_name']?>" placeholder="First Name" style="background-color:#C2C0C0" />
</div><br>

<div align="left">
      <label for="demo-email3">Last Name: (*Required Field)</label>
    <input type="text" name="last_name" id="demo-email3" value="<?=$DISPLAY['last_name']?>" placeholder="Last Name" style="background-color:#C2C0C0" />
</div><br>

<div align="left">
      <label for="demo-name1">Company Name: (*Required Field)</label>
      <input type="text" name="comp_name" id="demo-name1" value="<?=$DISPLAY['comp_name'] ;?>" placeholder="Company Name" style="background-color:#C2C0C0" />
</div><br>

<div align="left">
      <label for="demo-name4">Company Address: (*Required Field)</label>
    <input type="text" name="address" id="demo-name4" value="<?=$DISPLAY['address']?>" placeholder="Company Address" style="background-color:#C2C0C0" />
</div><br>

<div align="left">
      <label for="demo-name5">City: (*Required Field)</label>
    <input type="text" name="city" id="demo-name5" value="<?=$DISPLAY['city'] ;?>" placeholder="City" style="background-color:#C2C0C0" />
</div><br>

<div align="left">
    <div class="12u$">
      <div class="select-wrapper">
        <label >Choose A State: (*Required Field)</label>
        <select name="state" id="demo-category" style="background-color:#C2C0C0">
          <?
              if (strlen($DISPLAY['state']) > 2)    { ?>
              <OPTION VALUE="<?=$DISPLAY['state']?>"><?=$DISPLAY['state']?></OPTION> 
            <? } else { ?>
            <OPTION VALUE="">Choose A State</OPTION> 
            <? } ?>           
                       <OPTION VALUE="AL" <?php if("AL"==$DISPLAY['state']) echo 'selected="selected"'?> >Alabama</OPTION>
                       <OPTION VALUE="AK" <?php if("AK"==$DISPLAY['state']) echo 'selected="selected"'?> >Alaska</OPTION>
                       <OPTION VALUE= "AB" <?php if("AB"==$DISPLAY['state']) echo 'selected="selected"'?> >Alberta</OPTION>
                       <OPTION VALUE= "AZ" <?php if("AZ"==$DISPLAY['state']) echo 'selected="selected"'?> >Arizona</OPTION>
                       <OPTION VALUE= "AR" <?php if("AR"==$DISPLAY['state']) echo 'selected="selected"'?> >Arkansas</OPTION>
                       <OPTION VALUE= "BC" <?php if("BC"==$DISPLAY['state']) echo 'selected="selected"'?> >British Columbia</OPTION>
                       <OPTION VALUE= "CA" <?php if("CA"==$DISPLAY['state']) echo 'selected="selected"'?> >California</OPTION>
                       <OPTION VALUE= "CO" <?php if("CO"==$DISPLAY['state']) echo 'selected="selected"'?> >Colorado</OPTION>
                        <OPTION VALUE= "CT" <?php if("CT"==$DISPLAY['state']) echo 'selected="selected"'?> >Connecticut</OPTION>
                      <OPTION VALUE= "DE" <?php if("DE"==$DISPLAY['state']) echo 'selected="selected"'?> >Delaware</OPTION>
                      <OPTION VALUE= "DC" <?php if("DC"==$DISPLAY['state']) echo 'selected="selected"'?> >District of Columbia</OPTION>
                      <OPTION VALUE= "FL" <?php if("FL"==$DISPLAY['state']) echo 'selected="selected"'?> >Florida</OPTION>
                      <OPTION VALUE=  "GA" <?php if("GA"==$DISPLAY['state']) echo 'selected="selected"'?> >Georgia</OPTION>
                      <OPTION VALUE=  "HI" <?php if("HI"==$DISPLAY['state']) echo 'selected="selected"'?> >Hawaii</OPTION>
                      <OPTION VALUE=  "ID" <?php if("ID"==$DISPLAY['state']) echo 'selected="selected"'?> >Idaho</OPTION>
                      <OPTION VALUE=  "IL" <?php if("IL"==$DISPLAY['state']) echo 'selected="selected"'?> >Illinois</OPTION>
                      <OPTION VALUE=  "IN" <?php if("IN"==$DISPLAY['state']) echo 'selected="selected"'?> >Indiana</OPTION>
                      <OPTION VALUE=  "IA" <?php if("IA"==$DISPLAY['state']) echo 'selected="selected"'?> >Iowa</OPTION>
                       <OPTION VALUE= "KS" <?php if("KS"==$DISPLAY['state']) echo 'selected="selected"'?> >Kansas</OPTION>
                        <OPTION VALUE="KY" <?php if("KY"==$DISPLAY['state']) echo 'selected="selected"'?> >Kentucky</OPTION>
                        <OPTION VALUE="LA" <?php if("LA"==$DISPLAY['state']) echo 'selected="selected"'?> >Louisiana</OPTION>
                        <OPTION VALUE="ME" <?php if("ME"==$DISPLAY['state']) echo 'selected="selected"'?> >Maine</OPTION>
                       <OPTION VALUE= "MB" <?php if("MB"==$DISPLAY['state']) echo 'selected="selected"'?> >Manitoba</OPTION>
                        <OPTION VALUE="MD" <?php if("MD"==$DISPLAY['state']) echo 'selected="selected"'?> >Maryland</OPTION>
                       <OPTION VALUE= "MA" <?php if("MA"==$DISPLAY['state']) echo 'selected="selected"'?> >Massachusetts</OPTION>
                       <OPTION VALUE= "MI" <?php if("MI"==$DISPLAY['state']) echo 'selected="selected"'?> >Michigan</OPTION>
                       <OPTION VALUE= "MN" <?php if("MN"==$DISPLAY['state']) echo 'selected="selected"'?> >Minnesota</OPTION>
                        <OPTION VALUE="MS" <?php if("MS"==$DISPLAY['state']) echo 'selected="selected"'?> >Mississippi</OPTION>
                       <OPTION VALUE= "MO" <?php if("MO"==$DISPLAY['state']) echo 'selected="selected"'?> >Missouri</OPTION>
                       <OPTION VALUE= "MT" <?php if("MT"==$DISPLAY['state']) echo 'selected="selected"'?> >Montana</OPTION>
                       <OPTION VALUE= "NE" <?php if("NE"==$DISPLAY['state']) echo 'selected="selected"'?> >Nebraska</OPTION>
                        <OPTION VALUE="NV" <?php if("NV"==$DISPLAY['state']) echo 'selected="selected"'?> >Nevada</OPTION>
                        <OPTION VALUE="NB" <?php if("NB"==$DISPLAY['state']) echo 'selected="selected"'?> >New Brunswick</OPTION>
                       <OPTION VALUE= "NF" <?php if("NF"==$DISPLAY['state']) echo 'selected="selected"'?> >Newfoundland</OPTION>
                       <OPTION VALUE= "NH" <?php if("NH"==$DISPLAY['state']) echo 'selected="selected"'?> >New Hampshire</OPTION>
                       <OPTION VALUE= "NJ" <?php if(",J"==$DISPLAY['state']) echo 'selected="selected"'?> >New Jersey</OPTION>
                       <OPTION VALUE= "NM" <?php if("NM"==$DISPLAY['state']) echo 'selected="selected"'?> >New Mexico</OPTION>
                       <OPTION VALUE= "NY" <?php if("NY"==$DISPLAY['state']) echo 'selected="selected"'?> >New York</OPTION>
                       <OPTION VALUE= "NC" <?php if("NC"==$DISPLAY['state']) echo 'selected="selected"'?> >North Carolina</OPTION>
                       <OPTION VALUE= "ND" <?php if("ND"==$DISPLAY['state']) echo 'selected="selected"'?> >North Dakota</OPTION>
                       <OPTION VALUE= "NT" <?php if("NT"==$DISPLAY['state']) echo 'selected="selected"'?> >Northwest Territories</OPTION>
                       <OPTION VALUE= "NS" <?php if("NS"==$DISPLAY['state']) echo 'selected="selected"'?> >Nova Scotia</OPTION>
                       <OPTION VALUE= "OH" <?php if("OH"==$DISPLAY['state']) echo 'selected="selected"'?> >Ohio</OPTION>
                       <OPTION VALUE= "OK" <?php if("OK"==$DISPLAY['state']) echo 'selected="selected"'?> >Oklahoma</OPTION>
                       <OPTION VALUE= "ON" <?php if("ON"==$DISPLAY['state']) echo 'selected="selected"'?> >Ontario</OPTION>
                       <OPTION VALUE= "OR" <?php if("OR"==$DISPLAY['state']) echo 'selected="selected"'?> >Oregon</OPTION>
                        <OPTION VALUE="PA" <?php if("PA"==$DISPLAY['state']) echo 'selected="selected"'?> >Pennsylvania</OPTION>
                        <OPTION VALUE="QC" <?php if("QC"==$DISPLAY['state']) echo 'selected="selected"'?> >Quebec</OPTION>
                        <OPTION VALUE="RI" <?php if("RI"==$DISPLAY['state']) echo 'selected="selected"'?> >Rhode Island</OPTION>
                       <OPTION VALUE= "SK" <?php if("SK"==$DISPLAY['state']) echo 'selected="selected"'?> >Saskatchewan</OPTION>
                        <OPTION VALUE="SC" <?php if("SC"==$DISPLAY['state']) echo 'selected="selected"'?> >South Carolina</OPTION>
                        <OPTION VALUE="SD" <?php if("SD"==$DISPLAY['state']) echo 'selected="selected"'?> >South Dakota</OPTION>
                        <OPTION VALUE="TN" <?php if("TN"==$DISPLAY['state']) echo 'selected="selected"'?> >Tennessee</OPTION>
                       <OPTION VALUE= "TX" <?php if("TX"==$DISPLAY['state']) echo 'selected="selected"'?> >Texas</OPTION>
                      <OPTION VALUE=  "UT" <?php if("UT"==$DISPLAY['state']) echo 'selected="selected"'?> >Utah</OPTION>
                      <OPTION VALUE=  "VT" <?php if("VT"==$DISPLAY['state']) echo 'selected="selected"'?> >Vermont</OPTION>
                      <OPTION VALUE=  "VA" <?php if("VA"==$DISPLAY['state']) echo 'selected="selected"'?> >Virginia</OPTION>
                       <OPTION VALUE= "WA" <?php if("WA"==$DISPLAY['state']) echo 'selected="selected"'?> >Washington</OPTION>
                       <OPTION VALUE= "WV" <?php if("WV"==$DISPLAY['state']) echo 'selected="selected"'?> >West Virginia</OPTION>
                       <OPTION VALUE= "WI" <?php if("WI"==$DISPLAY['state']) echo 'selected="selected"'?> >Wisconsin</OPTION>
                       <OPTION VALUE= "WY" <?php if("WY"==$DISPLAY['state']) echo 'selected="selected"'?> >Wyoming</OPTION>
                       <OPTION VALUE= "YT" <?php if("YT"==$DISPLAY['state']) echo 'selected="selected"'?> >Yukon</OPTION>
        </select>
      </div>
    </div>         
</div><br>

<div align="left">
      <label for="demo-name6">Zip Code: (*Required Field)</label>
    <input type="text" name="zip" id="demo-name6" value="<?=$DISPLAY['zip'] ;?>" placeholder="Zip Code" style="background-color:#C2C0C0" />
</div><br>

<div align="left">
      <label for="demo-name7">Phone Number: (*Required Field)</label>
    <input type="text" name="phone" id="demo-name7" value="<?=$DISPLAY['phone']?>" placeholder="Phone Number (Include Area Code)" style="background-color:#C2C0C0" />
</div><br>

<div align="left">
      <label for="demo-name5">Fax Number:</label>
    <input type="text" name="fax" id="demo-name8" value="<?=$DISPLAY['fax'] ?>" placeholder="Fax Number (Include Area Code)" style="background-color:#C2C0C0" />
</div><br>

<div align="left">
      <label for="demo-name5">Email Address: (*Required Field)</label>
    <input type="text" name="email" id="demo-name9" value="<?=$DISPLAY['email'] ?>" placeholder="Email Address" style="background-color:#C2C0C0" /><br>
    <p>Never Sold or Given to 3rd Party (See Privacy Policy)</p>
</div><br>

<div align="left">
      <h3 id="numralh3">Now We Need A Personal Identifier</h3>
      <p>(It's A Post Office Requirement)</p>
</div>

<div align="left">
      <label for="demo-name1">*What city were you born in: (*Required Field)</label>
      <input type="text" name="comp_name" id="demo-name1" value="<?=$DISPLAY['comp_name'] ;?>" placeholder="Company Name" style="background-color:#C2C0C0" />
</div>

<hr>

<div align="left">
     <center><h3 id="numralh3">Next . . . Choose Your Media</h3></center>
</div>


<div >
      <center><strong>I would like a Free Subscription(s) to:<br>
(If viewing on a mobile device - Table is scrollable):</strong></center></span><br>

<table>
	<tr>
    	<td><center><h3 id="numralh3">Print Version</h3></center>
    <?  
      $sql = "SELECT * FROM type_brand ORDER BY id";
      $result = $conn->query($sql);                 

      $counter = 1;
      
      echo('<div class="table-wrapper">');
      echo('<table width="100%" style="font-size:16px">');
      
      while($row = mysqli_fetch_array($result)) {
          $sel = '';
          if( trim($brand) == trim($row['name']) ){
            $sel = "checked=checked";
          }
          // echo $sel."<br>"; 


  
        echo ('<tr><td><center><img src="'.$row['image'].'"><br><label for="title'.$row['name'].'"><h3>'.$row['name'].'</h3></label>') ;
        echo ('<input type="radio" id="title'.$row['name'].'" name="brand" value="'.$row['name'].'" '.$sel.' ></center><br></td></tr>');
 
      }
      echo('</table>');
      echo('</div>');
     ?> 
     </td>
     <td>
     <center><h3 id="numralh3">And/Or Digital Version</h3></center>
     	<table>
        	<tr>
            	<td><center><img src="https://landscapearchitect.com/lol-logos/lasn-front.jpg"><br><label for="title_brand"><h3>Landscape Architect Digital</h3></label>
                <input type="checkbox" id="title_brand" value=""></center><br></td>
            </tr>
            
        	<tr>
            	<td><center><img src="https://landscapearchitect.com/lol-logos/lcdbm-front.jpg"><br><label for="title_brand"><h3>Landscape Contractor Digital</h3></label>
                <input type="checkbox" id="title_brand" value=""></center><br></td>
            </tr>            
            
         </table>
            
     
     </td>
   </tr>
</table>  

<p>Digital versions are also available online.<br>
Digital versions are available each month up to 10 days in advance of printed magazine(s).
If you would like to be notified when the online version is available, please select the
appropriate box(es) above.</p>     
        
</div><br>









<div>
	









<div>
<table>





                     
</table>                                            
<div class="12u$">
<ul class="actions">
  <li><input type="submit" value="Continue to Next Page" class="special" /></li>
  <li><input type="reset" value="Reset" /></li>
</ul>
</div>
</div>
</form>
</section>          
<!-- Reistration Code End -->                       
                       
                                        
									</section>
								</article>
							</div>
                            
                            
						<!-- Sidebar -->
							<div class="4u 12u(mobile)" id="sidebar">
								<hr class="first" />
	                                  
											<h3 id="numralh3">Advertisers</h3>
                                    
									<?
									
										// Banner Ads Start

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


										// start for the banner add counting and getting from table

											$key = "/research/article.php";

											$sql = "SELECT * FROM banner_ups WHERE page like '%" . $key . "%' ORDER BY RAND()";
											$result = $conn->query($sql);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {
												if ($i <= "2") {
													echo "<section><a href='https://landscapearchitect.com/TLE-LB/transfer/" . $row[web] . "' target='_blank'><img width='80%' src='https://landscapearchitect.com/banner/" . $row[picture] . "' alt='' /></a>
										</section><br>";
										 			$i++;
     											}
											}
									?>                                                                
                                        
										<hr />
                                        
										<section>
											<a href="#" class="image fit"><img src="https://landscapearchitect.com/research/TLE/tle_lb15/DSC_0989.jpg" alt="" /></a>
											<h3 id="numralh3">The Landscape Expo - Long Beach</h3>
											<p>The Landscape Expo website will attract thousands of landscape professionals looking for exhibitors, just click to explore the Expo. </p>
											<footer>
												<ul class="actions">
													<li><a href="#" class="button">Learn More</a></li>
												</ul>
											</footer>
										</section>
                                
								<hr />
								<section>
                                
                                
                                
                       			<!-- Related Stories Section Start -->
                                <?
								
									$key = $_GET[number];
									// $key = '28316';

									include("config.inc2.php"); //include config file								
								
									//Read Article from Database 
									$results = mysqli_query($connecDB,"select * from editorial where id='" . $key . "'");
									
									while($row = mysqli_fetch_array($results)) {
										
										
										
										if (empty($row[keywords])) { 
										
											// the array
											$arrX = array("rock", "asla","paver", "tree", "equipment", "water");
											 
											// get random index from array $arrX
											$randIndex = array_rand($arrX);
											 
											// output the value for the random index
											$keyword = $arrX[$randIndex];
											
										} else {
											
											$keyword = $row[keywords];
											
										}
									}
								
								
									
									include("config.inc2.php"); //include config file								
								
									//Read Article from Database 
									$results = mysqli_query($connecDB,"select * from editorial where ed_text LIKE '%".$keyword."%' ORDER BY rand()");
									
									echo "<header>";
										echo "<h3><a href='#'>Related Stories</a></h3>";
										echo $keyword;
									echo "</header>";
									echo "<p>";
										echo "Other articles you may be interested in.";
									echo "</p>";									
									
									$i = 1;
									
									while($row = mysqli_fetch_array($results) AND $i < 6) {	
									
									
										if (empty($row[images])) { 
										
											$imgext = 'feature.jpg';
											
										} else {
											
											$imgext = $row[images];
											
										}									
									
									
								echo "<div class='row 50%'>";
										echo "<div class='4u'>";
										echo "<a href='https://landscapearchitect.com/responsive/LO-new/article.php?number=".$row[id]."' class='image fit' target='_blank'><img src='https://landscapearchitect.com/research/images/".$imgext."' alt=''  /></a>";
										echo "</div>";
										echo "<div class='8u'>";
										echo iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($row[title])));
										echo "</div>";
										echo "<br>";
										$i ++;

									}	
																		
								 ?>
                       			<!-- Related Stories Section End -->
                                    
									<footer>
										<a href="#" class="button">View Top Articles</a>
									</footer>
								</section>
							</div>
						</div>
						<hr />
						<div class="row">
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="https://landscapearchitect.com/responsive/LO-new/images/news.png" alt="" /></a>
								<header>
									<h3><a href="#">Latest Landscape Industry News</a></h3>
								</header>
								<p>
									Stay up to date with the latest news effecting you and the Landscape Industry. Don't be left in the dark.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="https://landscapearchitect.com/responsive/LO-new/images/association.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Current Association News</a></h3>
								</header>
								<p>
									View the current association news and events. Make sure that your association is noticed.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="https://landscapearchitect.com/responsive/LO-new/images/econo.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Top Economic News</a></h3>
								</header>
								<p>
									Up to date economic new that affects the Landscape Industry and everyone involved in it. Stay on top of the current information.
								</p>
							</article>
						</div>
					</div>

				</div>

<?

include("lo_mo_footer-main2-pg.inc");

?>