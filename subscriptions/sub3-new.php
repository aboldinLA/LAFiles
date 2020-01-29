
<?php

///print_r($_REQUEST); die;
//include "lol_common.inc";
include $include_path . "class/media_class.inc";

$M = new media_class($db);

$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$emailB = $_GET['email'];
$alt_mail3 = $_GET['alt_mail2'];


if($REQUEST_METHOD=="POST")
{
$error = "";

if (strlen($ylist) < 2 ) $error .= "- Please enter at least one product<br>";
if (!strlen($error)) {  
if ($action == "edit") 		$uid = $media_id;
if (strlen($ebull) < 1)		$ebull = "yes";
//to take check boxes array
if (is_array($ylist)) $ylist = implode(",",$ylist);	
if (is_array($needs)) $needs = implode(",",$needs);
$M->pro_int($ylist, $needs ,$ebull ,$uid);

if ($action == "edit" || $action == "renew") {

$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['email'];	

//die;

$data= $M->get_info_list($media_id);
$goto = $data['pay_link'];

if ($goto == "yes")	{
header("location: /subscriptions/thank_you-sac3.php?firstname2=$fname&lastname2=$lname&emailB2=$email");
} else {
header("location: /subscriptions/thank_you-sac3.php?firstname2=$fname&lname=$lastname&emailB2=$email");
}
}

$firstname = $_GET['firstname'];

$lastname = $_GET['lastname'];

$emailB = $_GET['email'];

$codeB = $_GET['code'];

if ($action == !"edit")

header("location: /subscriptions/thank_you-sac3.php?firstname2=$firstname&lastname2=$lastname&emailB2=$emailB&alt_mail4=$alt_mail3");
}
}	
$subscribe =$_SESSION['subscribe_list'];
$protype=$_SESSION['protype_list'];
$uid=$_SESSION['uid'];
// set values for edit & renew
if ($action == "edit" || $action == "renew") {
$data = $M->get_info_list($uid);
// print_r($data);
$media_id = $data['id'];

$fname = $data['first_name'];
$lname = $data['last_name'];
$email = $data['email'];

$ylist = explode(",", $data['ylist_id']);
$needs = explode(",", $data['needs']);
}



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
<p>If you do not wish to receive product information, check the no product information box and hit the "Next" button at the bottom of the page. If you want to request product information, just check-off the boxes below.</p>

</div> <br><br>
<!-- Reistration Code Start -->
<section>


<form action="https://landscapearchitect.com/subscriptions/thank_you-sac3.php?firstname2=".<? $_GET[fname] ?>."&lname=".<? $_GET[lastname] ?>."&emailB2=".<? $_GET[email] ?>."">

<input type="checkbox" id="none" name="" value="">
<label for="none">Thank you, but no product information at this time.</label><br>

<div class="12u$">
<ul class="actions">
<li><input type="submit" value="No Products at This Time" class="special" /></li>
<li><input type="reset" value="Reset" /></li>
</ul>
</div>
</form> 

      
<form method="post" name="form03" action="<? sub3-sac.php ?>">

<input type="hidden" value="<? echo $fname ?>" name="fname" >
<input type="hidden" value="<? echo $lname ?>" name="lname" >
<input type="hidden" value="<? echo $email ?>" name="email" >

<input type="hidden" value="<? echo $firstname ?>" name="firstname2" >
<input type="hidden" value="<? echo $lastname ?>" name="lastname2" >
<input type="hidden" value="<? echo $addressB ?>" name="addressB2" >
<input type="hidden" value="<? echo $cityB ?>" name="cityB2" >
<input type="hidden" value="<? echo $stateB ?>" name="stateB2" >
<input type="hidden" value="<? echo $zipB ?>" name="zipB2" >
<input type="hidden" value="<? echo $media_id ?>" name="media_id" >
<input type="hidden" value="<? echo $action ?>" name="action" >
<input type="hidden" value="<? echo $protype ?>" name="protype" >                               



<p style="font-size:22px; color:#C60; font-weight:bold" id="BTT">Product Information:<span style="font-size:14px; color:#000"><strong>Choose links below for desired product information</strong></span></p>                                
<center><table width="70%"  CELLPADDING="5" CELLSPACING="10" valign=top style="font-size:13px">
<tr>
<td><a href="#BS">Business Services</a></td>
<td><a href="#LL">Landscape Lighting</a></td>
<td><a href="#SA">Site Amenities</a></td>
</tr>
<tr>
<td width="230"><a href="#DWF">Decorative Water Features</a></td>
<td><a href="#OL">Outdoor Living</a></td>
<td><a href="#SEC">Stormwater/Erosion Control</a></td>
</tr>
<tr>
<td width="230"><a href="#EQI">Equipment - Installation</a></td>
<td><a href="#PR">Park and Recreation</a></td>
<td><a href="#TO">Turf & Ornamental</a></td>
</tr>                
<tr>
<td width="230"><a href="#EQM">Equipment - Maintenance</a></td>
<td><a href="#PMBR">PMBR</a></td>
<td><a href="#WMI">Water Management / Irrigation</a></td>
</tr>                
<tr>
<td width="230"><a href="#EQPR">Equipment - Parts & Repair</a></td>
<td><a href="#PA">Plant Accessories</a></td>
<td>&nbsp;</td>
</tr>                
<tr>
<td width="230"><a href="#GR">Green Roof</a></td>
<td><a href="#PM">Plant Materials</a></td>
<td>&nbsp;</td>
</tr>                
</table> </center> <br>

<p align="left" style="font-size:22px; color:#C60; font-weight:bold" id="BS">Business Services:<span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></p>                                  	
<? 

$con=mysqli_connect("localhost","landscap_lol","meow2meow","landscap_lollive");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM ylist WHERE  idParent = 13725 AND prod_info = 0 ORDER BY name";

if ($result=mysqli_query($con,$sql)) {
// Return the number of rows in result set
$rowcount=mysqli_num_rows($result);
$cols = 3; //number of columns, you can set this to any positive integer
$values = array();
$rows_per_col = ceil($rowcount / $cols);

for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
$c = 1;
$r = 1;

while ($row = mysqli_fetch_assoc($result)) {
	$values['col_'.$c][$r] = stripslashes($row['name']);
	$values2['col_'.$c][$r] = stripslashes($row['sub_number']);
	if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
}
echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
for ($r=1;$r<=$rows_per_col;$r++) {
	echo "<tr>" ;
	for ($c=1;$c<=$cols;$c++) { 
		$sel = '';
		 if( is_array($ylist)){
		 if(  in_array(trim($values2['col_'.$c][$r]), $ylist)){
			$sel = "checked=checked";
		}
		}
		echo "<td valign=top><input type=\"checkbox\" id=\"BS".$values2['col_'.$c][$r]. "\"  "." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" '.$sel.'>
		<label for=\"BS".$values2['col_'.$c][$r]. "\"  style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</label></td>" ; }
	echo "</tr>" ;
}
echo "</table><br>" ;
unset($values);
}
?>  

<p align="left" style="font-size:22px; color:#C60; font-weight:bold" id="DWF">Decorative Water Features:<span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></p>                                  	
<? 

$con=mysqli_connect("localhost","landscap_lol","meow2meow","landscap_lollive");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM ylist WHERE  idParent = 13726 AND prod_info = 0 ORDER BY name";

if ($result=mysqli_query($con,$sql)) {
// Return the number of rows in result set
$rowcount=mysqli_num_rows($result);
$cols = 3; //number of columns, you can set this to any positive integer
$values = array();
$rows_per_col = ceil($rowcount / $cols);

for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
$c = 1;
$r = 1;

while ($row = mysqli_fetch_assoc($result)) {
	$values['col_'.$c][$r] = stripslashes($row['name']);
	$values2['col_'.$c][$r] = stripslashes($row['sub_number']);
	if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
}
echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
for ($r=1;$r<=$rows_per_col;$r++) {
	echo "<tr>" ;
	for ($c=1;$c<=$cols;$c++) { 
		$sel = '';
		 if( is_array($ylist)){
		 if(  in_array(trim($values2['col_'.$c][$r]), $ylist)){
			$sel = "checked=checked";
		}
		}

		echo "<td valign=top><input type=\"checkbox\" id=\"DWF".$values2['col_'.$c][$r]. "\"  "." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ".$sel.">
		<label for=\"DWF".$values2['col_'.$c][$r]. "\"  style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</label></td>" ; }
	echo "</tr>" ;
}
echo "</table><br>" ;
unset($values);
}
?>                                      
               
<p align="left" style="font-size:22px; color:#C60; font-weight:bold" id="EQI">Equipment - Installation:<span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></p>                                  	
<? 

$con=mysqli_connect("localhost","landscap_lol","meow2meow","landscap_lollive");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM ylist WHERE  idParent = 13727 AND prod_info = 0 ORDER BY name";

if ($result=mysqli_query($con,$sql)) {
// Return the number of rows in result set
$rowcount=mysqli_num_rows($result);
$cols = 3; //number of columns, you can set this to any positive integer
$values = array();
$rows_per_col = ceil($rowcount / $cols);

for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
$c = 1;
$r = 1;

while ($row = mysqli_fetch_assoc($result)) {
	$values['col_'.$c][$r] = stripslashes($row['name']);
	$values2['col_'.$c][$r] = stripslashes($row['sub_number']);
	if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
}
echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
for ($r=1;$r<=$rows_per_col;$r++) {
	echo "<tr>" ;
	for ($c=1;$c<=$cols;$c++) { 
		$sel = '';
		 if( is_array($ylist)){
		 if(  in_array(trim($values2['col_'.$c][$r]), $ylist)){
			$sel = "checked=checked";
		}
		}
		echo "<td valign=top><input type=\"checkbox\" id=\"EQI".$values2['col_'.$c][$r]. "\"  "." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ".$sel.">
		<label for=\"EQI".$values2['col_'.$c][$r]. "\"  style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</label></td>" ; }
	echo "</tr>" ;
}
echo "</table><br>" ;
unset($values);
}
?> 

<p align="left" style="font-size:22px; color:#C60; font-weight:bold" id="EQM">Equipment - Maintenance:<span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></p>                                  	
<? 

$con=mysqli_connect("localhost","landscap_lol","meow2meow","landscap_lollive");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM ylist WHERE  idParent = 13728 AND prod_info = 0 ORDER BY name";

if ($result=mysqli_query($con,$sql)) {
// Return the number of rows in result set
$rowcount=mysqli_num_rows($result);
$cols = 3; //number of columns, you can set this to any positive integer
$values = array();
$rows_per_col = ceil($rowcount / $cols);

for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
$c = 1;
$r = 1;

while ($row = mysqli_fetch_assoc($result)) {
	$values['col_'.$c][$r] = stripslashes($row['name']);
	$values2['col_'.$c][$r] = stripslashes($row['sub_number']);
	if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
}
echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
for ($r=1;$r<=$rows_per_col;$r++) {
	echo "<tr>" ;
	for ($c=1;$c<=$cols;$c++) { 

		$sel = '';
		 if( is_array($ylist)){
		 if(  in_array(trim($values2['col_'.$c][$r]), $ylist)){
			$sel = "checked=checked";
		}
		}

		echo "<td valign=top><input type=\"checkbox\" id=\"EQM".$values2['col_'.$c][$r]. "\"  "." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ".$sel.">
		<label for=\"EQM".$values2['col_'.$c][$r]. "\"  style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</label></td>" ; }
	echo "</tr>" ;
}
echo "</table><br>" ;
unset($values);
}
?>

<p align="left" style="font-size:22px; color:#C60; font-weight:bold" id="EQPR">Equipment - Parts & Repair:<span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></p>                                  	
<? 

$con=mysqli_connect("localhost","landscap_lol","meow2meow","landscap_lollive");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM ylist WHERE  idParent = 13729 AND prod_info = 0 ORDER BY name";

if ($result=mysqli_query($con,$sql)) {
// Return the number of rows in result set
$rowcount=mysqli_num_rows($result);
$cols = 3; //number of columns, you can set this to any positive integer
$values = array();
$rows_per_col = ceil($rowcount / $cols);

for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
$c = 1;
$r = 1;

while ($row = mysqli_fetch_assoc($result)) {
	$values['col_'.$c][$r] = stripslashes($row['name']);
	$values2['col_'.$c][$r] = stripslashes($row['sub_number']);
	if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
}
echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
for ($r=1;$r<=$rows_per_col;$r++) {
	echo "<tr>" ;
	for ($c=1;$c<=$cols;$c++) { 
		$sel = '';
	 if( is_array($ylist)){
		 if(  in_array(trim($values2['col_'.$c][$r]), $ylist)){
			$sel = "checked=checked";
		}
		}
		echo "<td valign=top><input type=\"checkbox\" id=\"EQPR".$values2['col_'.$c][$r]. "\"  "." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ".$sel.">
		<label for=\"EQPR".$values2['col_'.$c][$r]. "\"  style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</label></td>" ; }
	echo "</tr>" ;
}
echo "</table><br>" ;
unset($values);
}
?>                                    
                        
<p align="left" style="font-size:22px; color:#C60; font-weight:bold" id="GR">Green Roof:<span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></p>                                  	
<? 

$con=mysqli_connect("localhost","landscap_lol","meow2meow","landscap_lollive");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM ylist WHERE  idParent = 13730 AND prod_info = 0 ORDER BY name";

if ($result=mysqli_query($con,$sql)) {
// Return the number of rows in result set
$rowcount=mysqli_num_rows($result);
$cols = 3; //number of columns, you can set this to any positive integer
$values = array();
$rows_per_col = ceil($rowcount / $cols);

for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
$c = 1;
$r = 1;

while ($row = mysqli_fetch_assoc($result)) {
	$values['col_'.$c][$r] = stripslashes($row['name']);
	$values2['col_'.$c][$r] = stripslashes($row['sub_number']);
	if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
}
echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
for ($r=1;$r<=$rows_per_col;$r++) {
	echo "<tr>" ;
	for ($c=1;$c<=$cols;$c++) { 
		$sel = '';
		 if( is_array($ylist)){
		 if(  in_array(trim($values2['col_'.$c][$r]), $ylist)){
			$sel = "checked=checked";
		}
		}
		echo "<td valign=top><input type=\"checkbox\" id=\"GR".$values2['col_'.$c][$r]. "\"  "." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ".$sel.">
		<label for=\"GR".$values2['col_'.$c][$r]. "\"  style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</label></td>" ; }
	echo "</tr>" ;
}
echo "</table><br>" ;
unset($values);
}
?> 

<p align="left" style="font-size:22px; color:#C60; font-weight:bold" id="LL">Landscape Lighting:<span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></p>                                  	
<? 

$con=mysqli_connect("localhost","landscap_lol","meow2meow","landscap_lollive");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM ylist WHERE  idParent = 13731 AND prod_info = 0 ORDER BY name";

if ($result=mysqli_query($con,$sql)) {
// Return the number of rows in result set
$rowcount=mysqli_num_rows($result);
$cols = 3; //number of columns, you can set this to any positive integer
$values = array();
$rows_per_col = ceil($rowcount / $cols);

for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
$c = 1;
$r = 1;

while ($row = mysqli_fetch_assoc($result)) {
	$values['col_'.$c][$r] = stripslashes($row['name']);
	$values2['col_'.$c][$r] = stripslashes($row['sub_number']);
	if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
}
echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
for ($r=1;$r<=$rows_per_col;$r++) {
	echo "<tr>" ;
	for ($c=1;$c<=$cols;$c++) { 
		$sel = '';
		 if( is_array($ylist)){
		 if(  in_array(trim($values2['col_'.$c][$r]), $ylist)){
			$sel = "checked=checked";
		}
		}
		echo "<td valign=top><input type=\"checkbox\" id=\"LL".$values2['col_'.$c][$r]. "\"  "." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ".$sel." >
		<label for=\"LL".$values2['col_'.$c][$r]. "\"  style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</label></td>" ; }
	echo "</tr>" ;
}
echo "</table><br>" ;
unset($values);
}
?>                                     

<p align="left" style="font-size:22px; color:#C60; font-weight:bold" id="OL">Outdoor Living:<span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></p>                                  	
<? 

$con=mysqli_connect("localhost","landscap_lol","meow2meow","landscap_lollive");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM ylist WHERE  idParent = 13732 AND prod_info = 0 ORDER BY name";

if ($result=mysqli_query($con,$sql)) {
// Return the number of rows in result set
$rowcount=mysqli_num_rows($result);
$cols = 3; //number of columns, you can set this to any positive integer
$values = array();
$rows_per_col = ceil($rowcount / $cols);

for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
$c = 1;
$r = 1;

while ($row = mysqli_fetch_assoc($result)) {
	$values['col_'.$c][$r] = stripslashes($row['name']);
	$values2['col_'.$c][$r] = stripslashes($row['sub_number']);
	if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
}
echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
for ($r=1;$r<=$rows_per_col;$r++) {
	echo "<tr>" ;
	for ($c=1;$c<=$cols;$c++) { 
		$sel = '';
		 if( is_array($ylist)){
		 if(  in_array(trim($values2['col_'.$c][$r]), $ylist)){
			$sel = "checked=checked";
		}
		}
		echo "<td valign=top><input type=\"checkbox\" id=\"OL".$values2['col_'.$c][$r]. "\"  "." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ".$sel.">
		<label for=\"OL".$values2['col_'.$c][$r]. "\"  style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</label></td>" ; }
	echo "</tr>" ;
}
echo "</table><br>" ;
unset($values);
}
?>  

<p align="left" style="font-size:22px; color:#C60; font-weight:bold" id="PR">Park and Recreation:<span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></p>                                  	
<? 

$con=mysqli_connect("localhost","landscap_lol","meow2meow","landscap_lollive");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM ylist WHERE  idParent = 13733 AND prod_info = 0 ORDER BY name";

if ($result=mysqli_query($con,$sql)) {
// Return the number of rows in result set
$rowcount=mysqli_num_rows($result);
$cols = 3; //number of columns, you can set this to any positive integer
$values = array();
$rows_per_col = ceil($rowcount / $cols);

for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
$c = 1;
$r = 1;

while ($row = mysqli_fetch_assoc($result)) {
	$values['col_'.$c][$r] = stripslashes($row['name']);
	$values2['col_'.$c][$r] = stripslashes($row['sub_number']);
	if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
}
echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
for ($r=1;$r<=$rows_per_col;$r++) {
	echo "<tr>" ;
	for ($c=1;$c<=$cols;$c++) { 
		$sel = '';
		 if( is_array($ylist)){
		 if(  in_array(trim($values2['col_'.$c][$r]), $ylist)){
			$sel = "checked=checked";
		}
		}
		echo "<td valign=top><input type=\"checkbox\" id=\"PR".$values2['col_'.$c][$r]. "\"  "." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ".$sel.">
		<label for=\"PR".$values2['col_'.$c][$r]. "\"  style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</label></td>" ; }
	echo "</tr>" ;
}
echo "</table><br>" ;
unset($values);
}
?>                                      

<p align="left" style="font-size:22px; color:#C60; font-weight:bold" id="PMBR">Pavers, Masonry, Blocks & Rocks:<span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></p>                                  	
<? 

$con=mysqli_connect("localhost","landscap_lol","meow2meow","landscap_lollive");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM ylist WHERE  idParent = 13734 AND prod_info = 0 ORDER BY name";

if ($result=mysqli_query($con,$sql)) {
// Return the number of rows in result set
$rowcount=mysqli_num_rows($result);
$cols = 3; //number of columns, you can set this to any positive integer
$values = array();
$rows_per_col = ceil($rowcount / $cols);

for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
$c = 1;
$r = 1;

while ($row = mysqli_fetch_assoc($result)) {
	$values['col_'.$c][$r] = stripslashes($row['name']);
	$values2['col_'.$c][$r] = stripslashes($row['sub_number']);
	if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
}
echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
for ($r=1;$r<=$rows_per_col;$r++) {
	echo "<tr>" ;
	for ($c=1;$c<=$cols;$c++) { 

		$sel = '';
		 if( is_array($ylist)){
		 if(  in_array(trim($values2['col_'.$c][$r]), $ylist)){
			$sel = "checked=checked";
		}
		}
		echo "<td valign=top><input type=\"checkbox\" id=\"PMBR".$values2['col_'.$c][$r]. "\"  "." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ".$sel." >
		<label for=\"PMBR".$values2['col_'.$c][$r]. "\"  style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</label></td>" ; }
	echo "</tr>" ;
}
echo "</table><br>" ;
unset($values);
}
?>             

<p align="left" style="font-size:22px; color:#C60; font-weight:bold" id="PA">Plant Accessories:<span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></p>                                  	
<? 

$con=mysqli_connect("localhost","landscap_lol","meow2meow","landscap_lollive");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM ylist WHERE  idParent = 13735 AND prod_info = 0 ORDER BY name";

if ($result=mysqli_query($con,$sql)) {
// Return the number of rows in result set
$rowcount=mysqli_num_rows($result);
$cols = 3; //number of columns, you can set this to any positive integer
$values = array();
$rows_per_col = ceil($rowcount / $cols);

for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
$c = 1;
$r = 1;

while ($row = mysqli_fetch_assoc($result)) {
	$values['col_'.$c][$r] = stripslashes($row['name']);
	$values2['col_'.$c][$r] = stripslashes($row['sub_number']);
	if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
}
echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
for ($r=1;$r<=$rows_per_col;$r++) {
	echo "<tr>" ;
	for ($c=1;$c<=$cols;$c++) { 
			$sel = '';
		 if( is_array($ylist)){
		 if(  in_array(trim($values2['col_'.$c][$r]), $ylist)){
			$sel = "checked=checked";
		}
		}

		echo "<td valign=top><input type=\"checkbox\" id=\"PA".$values2['col_'.$c][$r]. "\"  "." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ".$sel.">
		<label for=\"PA".$values2['col_'.$c][$r]. "\"  style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</label></td>" ; }
	echo "</tr>" ;
}
echo "</table><br>" ;
unset($values);
}
?>  

<p align="left" style="font-size:22px; color:#C60; font-weight:bold" id="PM">Plant Materials:<span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></p>                                  	
<? 

$con=mysqli_connect("localhost","landscap_lol","meow2meow","landscap_lollive");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM ylist WHERE  idParent = 13736 AND prod_info = 0 ORDER BY name";

if ($result=mysqli_query($con,$sql)) {
// Return the number of rows in result set
$rowcount=mysqli_num_rows($result);
$cols = 3; //number of columns, you can set this to any positive integer
$values = array();
$rows_per_col = ceil($rowcount / $cols);

for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
$c = 1;
$r = 1;

while ($row = mysqli_fetch_assoc($result)) {
	$values['col_'.$c][$r] = stripslashes($row['name']);
	$values2['col_'.$c][$r] = stripslashes($row['sub_number']);
	if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
}
echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
for ($r=1;$r<=$rows_per_col;$r++) {
	echo "<tr>" ;
	for ($c=1;$c<=$cols;$c++) { 
		$sel = '';
		 if( is_array($ylist)){
		 if(  in_array(trim($values2['col_'.$c][$r]), $ylist)){
			$sel = "checked=checked";
		}
		}
		echo "<td valign=top><input type=\"checkbox\" id=\"PM".$values2['col_'.$c][$r]. "\"  "." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ".$sel.">
		<label for=\"PM".$values2['col_'.$c][$r]. "\"  style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</label></td>" ; }
	echo "</tr>" ;
}
echo "</table><br>" ;
unset($values);
}
?>                                      

<p align="left" style="font-size:22px; color:#C60; font-weight:bold" id="SA">Site Amenities:<span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></p>                                  	
<? 

$con=mysqli_connect("localhost","landscap_lol","meow2meow","landscap_lollive");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM ylist WHERE  idParent = 13737 AND prod_info = 0 ORDER BY name";

if ($result=mysqli_query($con,$sql)) {
// Return the number of rows in result set
$rowcount=mysqli_num_rows($result);
$cols = 3; //number of columns, you can set this to any positive integer
$values = array();
$rows_per_col = ceil($rowcount / $cols);

for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
$c = 1;
$r = 1;

while ($row = mysqli_fetch_assoc($result)) {
	$values['col_'.$c][$r] = stripslashes($row['name']);
	$values2['col_'.$c][$r] = stripslashes($row['sub_number']);
	if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
}
echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
for ($r=1;$r<=$rows_per_col;$r++) {
	echo "<tr>" ;
	for ($c=1;$c<=$cols;$c++) { 
		$sel = '';
		 if( is_array($ylist)){
		 if(  in_array(trim($values2['col_'.$c][$r]), $ylist)){
			$sel = "checked=checked";
		}
		}
		echo "<td valign=top><input type=\"checkbox\" id=\"SA".$values2['col_'.$c][$r]. "\"  "." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ".$sel.">
		<label for=\"SA".$values2['col_'.$c][$r]. "\"  style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</label></td>" ; }
	echo "</tr>" ;
}
echo "</table><br>" ;
unset($values);
}
?>                                      
                        
<p align="left" style="font-size:22px; color:#C60; font-weight:bold" id="SEC">Stormwater/Erosion Control:<span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></p>                                  	
<? 

$con=mysqli_connect("localhost","landscap_lol","meow2meow","landscap_lollive");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM ylist WHERE  idParent = 13738 AND prod_info = 0 ORDER BY name";

if ($result=mysqli_query($con,$sql)) {
// Return the number of rows in result set
$rowcount=mysqli_num_rows($result);
$cols = 3; //number of columns, you can set this to any positive integer
$values = array();
$rows_per_col = ceil($rowcount / $cols);

for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
$c = 1;
$r = 1;

while ($row = mysqli_fetch_assoc($result)) {
	$values['col_'.$c][$r] = stripslashes($row['name']);
	$values2['col_'.$c][$r] = stripslashes($row['sub_number']);
	if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
}
echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
for ($r=1;$r<=$rows_per_col;$r++) {
	echo "<tr>" ;
	for ($c=1;$c<=$cols;$c++) {
		$sel = '';
		 if( is_array($ylist)){
		 if(  in_array(trim($values2['col_'.$c][$r]), $ylist)){
			$sel = "checked=checked";
		}
		}
		echo "<td valign=top><input type=\"checkbox\" id=\"SEC".$values2['col_'.$c][$r]. "\"  "." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ".$sel.">
		<label for=\"SEC".$values2['col_'.$c][$r]. "\"  style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</label></td>" ; }
	echo "</tr>" ;
}
echo "</table><br>" ;
unset($values);
}
?>                                       
                                                        
<p align="left" style="font-size:22px; color:#C60; font-weight:bold" id="TO">Turf & Ornamental:<span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></p>                                  	
<? 

$con=mysqli_connect("localhost","landscap_lol","meow2meow","landscap_lollive");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM ylist WHERE  idParent = 13739 AND prod_info = 0 ORDER BY name";

if ($result=mysqli_query($con,$sql)) {
// Return the number of rows in result set
$rowcount=mysqli_num_rows($result);
$cols = 3; //number of columns, you can set this to any positive integer
$values = array();
$rows_per_col = ceil($rowcount / $cols);

for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
$c = 1;
$r = 1;

while ($row = mysqli_fetch_assoc($result)) {
	$values['col_'.$c][$r] = stripslashes($row['name']);
	$values2['col_'.$c][$r] = stripslashes($row['sub_number']);
	if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
}
echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
for ($r=1;$r<=$rows_per_col;$r++) {
	echo "<tr>" ;
	for ($c=1;$c<=$cols;$c++) { 
			$sel = '';
		 if( is_array($ylist)){
		 if(  in_array(trim($values2['col_'.$c][$r]), $ylist)){
			$sel = "checked=checked";
		}
		}
		echo "<td valign=top><input type=\"checkbox\" id=\"TO".$values2['col_'.$c][$r]. "\"  "." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ".$sel.">
		<label for=\"TO".$values2['col_'.$c][$r]. "\"  style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</label></td>" ; }
	echo "</tr>" ;
}
echo "</table><br>" ;
unset($values);
}
?>   

<p align="left" style="font-size:22px; color:#C60; font-weight:bold" id="WMI">Water Management / Irrigation:<span style="font-size:14px; color:#000"><strong>Choose desired product information</strong></p>                                  	
<? 

$con=mysqli_connect("localhost","landscap_lol","meow2meow","landscap_lollive");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM ylist WHERE  idParent = 13740 AND prod_info = 0 ORDER BY name";

if ($result=mysqli_query($con,$sql)) {
// Return the number of rows in result set
$rowcount=mysqli_num_rows($result);
$cols = 3; //number of columns, you can set this to any positive integer
$values = array();
$rows_per_col = ceil($rowcount / $cols);

for ($c=1;$c<=$cols;$c++) { $values['col_'.$c] = array(); }
$c = 1;
$r = 1;

while ($row = mysqli_fetch_assoc($result)) {
	$values['col_'.$c][$r] = stripslashes($row['name']);
	$values2['col_'.$c][$r] = stripslashes($row['sub_number']);
	if ($r == $rows_per_col) { $c++; $r = 1; } else { $r++; }
}
echo "<table CELLPADDING=0 CELLSPACING=5 valign=top>" ;
for ($r=1;$r<=$rows_per_col;$r++) {
	echo "<tr>" ;
	for ($c=1;$c<=$cols;$c++) { 
		$sel = '';
		 if( is_array($ylist)){
		 if(  in_array(trim($values2['col_'.$c][$r]), $ylist)){
			$sel = "checked=checked";
		}
		}
		echo "<td valign=top><input type=\"checkbox\" id=\"WMI".$values2['col_'.$c][$r]. "\"  "." name=\"ylist[]\"  value=\"".$values2['col_'.$c][$r]. "\" ".$sel.">
		<label for=\"WMI".$values2['col_'.$c][$r]. "\"  style=\"font-size:15px; color:#000\">".$values['col_'.$c][$r]."</label></td>" ; }
	echo "</tr>" ;
}
echo "</table><br>" ;
unset($values);
}
?> 

<TABLE CELLPADDING="0" CELLSPACING="0" align="center" style="font-size:14px"> 
<TR> 
    <TD NOWRAP="NOWRAP" ALIGN="LEFT"> 
            <DL> 
        <DT><span style="font-size:22px; color:#C60; font-weight:bold">I need the information for</span> (check all that apply):</DT></br> 
        <?
                
                if (!$action == "edit" || !$error) 
                {$needs[] = "";}


            echo "<DD><input type=checkbox id=\"need01\" name=needs[] value=current_project ".
            (in_array("current_project",$needs)?"checked":"") .
            ">
			<label for=\"need01\">Current Project</label></DD>  ";

            echo "<dd><input type=checkbox id=\"need02\" name=needs[] value=future_project ".
            (in_array("future_project",$needs)?"checked":"") .
            ">
			<label for=\"need02\">Future Project</label></DD>  ";

            echo "<dd><input type=checkbox id=\"need03\" name=needs[] value=college_project ".
            (in_array("college_projectt",$needs)?"checked":"") .
            ">
			<label for=\"need03\">College Project</label></DD> </br> ";
        ?>
        </DL>
    </TD> 
</TR> 
</TABLE>                                    

<div class="12u$">
<ul class="actions">
	<li><input type="submit" value="Continue to Next Page" class="special" /></li>
	<li><input type="reset" value="Reset" /></li>
</ul>
</div>

</form>



</tr> 
</table>                                     


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