

<?
include "lol_common.inc";
/*ini_set('display_errors', 1);
error_reporting(-1);*/
?>


<?
include("lo_top-main2-prod-js3.inc");
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
	    <?
		include $include_path . "lo_header-main2-new-js2.inc";
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




	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("lo_top-main2-side-new.inc");
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
				
<div style="position: relative; left: 10px; top: 0px">				

<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Welcome to the</center></span><br>
	<center><img src="https://landscapearchitect.com/lol-logos/3-logo-new.jpg" width="763" /></center>
	<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Subscription Request Center</center></span>
	<center><h4>Forgot Your Password?  Click Here</h4></center><br><br>
	<!-- <center><img width="90%" src="images/prog-reg-button01.jpg"></center><br> -->
</div>
	
<div>


<!-- Old Code Start -->

<?php

include $include_path . "class/media_class.inc";
include_once $include_path . "base/transaction_class.php";
$cc = new transaction_class();
$M = new media_class($db);

if(isset($_REQUEST['hot'])) {
    $_SESSION['shot'] = $_REQUEST['hot'];
}

if($REQUEST_METHOD=="POST")	{
	$DISPLAY= $_POST;


	
	//error check
 	$error = "";

 	if (is_array($brand)) 	$brand = implode(",",$brand);
	
	if(strlen(empty($brand)))	$error .= "<table><tr><td>&nbsp;</td></tr><tr><td> - Please enter your Media choice</td></tr></table>";
	
	
	if(!strlen($error))	 {
		
			//set listing to number in data base
       		 if (strlen($website) > 0 ) {
           			 if (strpos($website,"http://") != 0) $website = "http://" . $website;
       		 }
	
		//to take check boxes array
		if (is_array($how)) $how = implode(",",$how);
		if ($action == "edit" ||  $action == "renew" ) {
			$M->subscribtion_form_edit($id, $brand, $comp_name, $sal, $first_name, 
				$last_name, $address, $address_2, $city, $state, $zip, $country,
				$mail_to,$alt_mail, $area_code, $phone, $area_code_fax, 
				$fax, $email, $month, $list);
				echo '<META HTTP-EQUIV="Refresh" Content="0; URL=https://landscapearchitect.com/subscriptions/sub2.php?action=edit">';    
		} else {
			
			$total = $M->check_user($comp_name,$subscribe);
			if (is_numeric($total)) { 
				# echo "errors1====>" .$error; die;
				#header("location:have_listing.php?total=$total");
				#echo '<META HTTP-EQUIV="Refresh" Content="0; URL="http://67.222.144.12/subscriptions/have_listing.php?total="'.$total.'"">'; ?> 
				<meta http-equiv="refresh" content="0; URL=http://67.222.144.12/subscriptions/sub2.php?action=new">  
				<?php	
				exit;
			} else {
						#		echo "errors2====>" .$error; die;
				$_SESSION['auth'] = $SUBSCRIBE_AUTH;
				$_SESSION['uid'] = $M->subscribtion_form($brand, $comp_name, $sal, $first_name, $last_name, $address, $address_2, $city, $state, $zip, $country,
				                    $mail_to,$alt_mail, $area_code, $phone, $area_code_fax, $fax, $email, $month,
				                    $subscribe, $note, $list, 0);
				echo '<META HTTP-EQUIV="Refresh" Content="0; URL=http://67.222.144.12/subscriptions/sub2.php?action=new">';    
				exit;
			}
		}
	}
}

// Handle login for edit
if($action == "edit") {
	$uid = $_SESSION['uid'];
	$auth = $_SESSION['auth'];
	if (!$uid || $auth != $SUBSCRIBE_AUTH) {
		session_register("np");
	  	$_SESSION['np'] = $PHP_SELF . "?action=edit"; 
		header("location: ". $lol_url ."/member/login3.php?t=s");	
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
} else { // sign up
	if ($action == "list") {
		$subscribe = "lol";
	} else {
		if ($protype == "d")	$subscribe = "lasn";
		if ($protype == "c") 	$subscribe = "lcm";
		if ($protype == "s") 	$subscribe = "lsmp";
	}
}
$_SESSION['subscribe_list'] = $subscribe;
$_SESSION['protype_list'] = $protype;




?>


<SCRIPT language="javascript" type="text/javascript">
function validate(){
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
	if (document.form1.area_code.value.length < 3) {
		alert("Please enter your area code.");
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
	if (document.form1.month.value.length < 1) {
		alert("Please enter the city you were born in.");
		return false;
	}
	if (document.form1.brand.value.length < 1) {
		alert("Please enter the city you were born in.");
		return false;
	}	
	return true;
}
</script>




<form NAME="form1" method="post" action="<?echo $PHP_SELF?>" onSubmit="return validate();">
<input type="hidden" name="action" value="<?=$action ?>">
<? if ($action == "edit") { ?>
<input type="hidden" name="id" value="<?=$DISPLAY['id']?>">
<input type="hidden" name="protype" value="<?=$DISPLAY['protype']?>">
<input type="hidden" name="subscribe" value="<?=$DISPLAY['subscribe']?>">
<? } else { ?>
<input type="hidden" name="protype" value="<?=$protype ?>">
<input type="hidden" name="subscribe" value="<?=$subscribe ?>">
<? } ?>
<!-- <div align="left" style="position: absolute; left:5px; top:35px"> -->
<div align="left" style="position: absolute; left:5px; top:0px"> 

<? if ($action == "new") {
	$sub_type = "Subscription Request Center <br> <a href=\"https://landscapearchitect.com/member/login3.php?t=s\"><span style=\"font-size:14px\">If you already have a password click here</span></a>";
	} else {
	$sub_type = "Subscription Management Center";
	}?>
 


    
  <div>


<? if ($error) $C->errors($error); ?>
<? if ($action == "edit" || $action == "renew") { ?>

    
	<? } ?>
 <div style="position:absolute; left: 260px; top:415px">   
<!-- Horizontal Bar Start -->
<div style="position:relitive; left:0px; top:150px; padding:0px; width:750px; height:2px; background-color:#605b51;"> </div>
<!-- Horizontal Bar End -->
    
    <div style="position:absolute; left:0px; top:20px; width:750px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:22px; color:#C60">
		<strong>Next . . . Please Provide Your Business Information</strong><br />
	</div>
    
    <div style="position:absolute; left:0px; top:50px; width:750px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
		Please make sure the following Information is complete.
        <span style="font-size:14px; font-weight:bold; color:#F00">&nbsp;&nbsp;&nbsp;*Required Field</span>
	</div>
</div>    

 <div style="position:absolute; left: 260px; top:100px">   
	<div style="position:absolute; left:0px; top:400px; padding:0px; font-size:16px; width:750px; height:30px">
		<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*Your Name:</span>
		<INPUT NAME="first_name" SIZE="20" VALUE="<?=$DISPLAY['first_name']?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="First Name">
		<INPUT NAME="last_name" SIZE="30" VALUE="<?=$DISPLAY['last_name']?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Last Name">    
	</div>        
        
	<div style="position:absolute; left:0px; top:430px; padding:0px; font-size:16px; width:750px; height:30px">
		<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*Company Name:</span>
		<INPUT NAME="comp_name" SIZE="34"  VALUE="<?=$DISPLAY['comp_name'] ;?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Company Name">
	</div>
	<div style="position:absolute; left:0px; top:460px; padding:0px; font-size:16px; width:750px; height:30px">
			<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*Company Address:</span>	
			<INPUT NAME="address" SIZE="50"  VALUE="<?=$DISPLAY['address']?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Company Address">
    </div>
    
	<div style="position:absolute; left:69px; top:490px; padding:0px; font-size:16px; width:750px; height:30px">
			<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*City:</span>
		  	<INPUT NAME="city" SIZE="34"  VALUE="<?=$DISPLAY['city'] ;?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="City">
	</div>
    
    
	<div style="position:absolute; left:62px; top:520px; padding:0px; font-size:16px; width:750px; height:30px">
		<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*State:</span>
				   <SELECT NAME="state" SIZE="1" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"> 
		<?
          if (strlen($DISPLAY['state']) > 2)    {?>
		           <OPTION VALUE="<?=$DISPLAY['state']?>"><?=$DISPLAY['state']?></OPTION> 
		  <?} else {?>
					<OPTION VALUE="">Choose State</OPTION> 
		 <?}?>						
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
						</SELECT>
	</div>
 
	<div style="position:absolute; left:34px; top:550px; padding:0px; font-size:16px; width:750px; height:30px">
            <span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*Zip Code:</span>
		  	<INPUT NAME="zip" SIZE="34"  VALUE="<?=$DISPLAY['zip'] ;?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Zip Code">
	</div>
    
    	<div style="position:absolute; left:52px; top:580px; padding:0px; font-size:16px; width:750px; height:30px">
		<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold">Mail To:</span>
		<? if ($DISPLAY['mail_to'] == "alt") {
				$altchk="checked";
			} else {
				$compchk="checked";
			}?>
		   <INPUT TYPE="radio" value="comp" name="mail_to" <?=$compchk?>>&nbsp;Company address above
           </div>
		   <div style="position:absolute; left:110px; top:610px; padding:0px; font-size:16px; width:500px; height:30px">
				<INPUT TYPE="radio" value="alt" name="mail_to" <?=$altchk?>>&nbsp;Alternate address below:
           </div>
			<div style="position:absolute; left:119px; top:630px; padding:0px; width:500px; height:30px">
				<TEXTAREA COLS="50" NAME="alt_mail" ROWS="3" value="<?=$DISPLAY['alt'];?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Optional Address"><?=$DISPLAY['alt'];?></TEXTAREA>
			</div>

	<div style="position:absolute; left:47px; top:660px; padding:0px; font-size:16px; width:750px; height:30px">
				<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*Phone:</span>
		<INPUT NAME="phone" SIZE="15" VALUE="<?=$DISPLAY['phone']?>" MAXLENGTH="12" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Phone Number" ><span style="font-size:12px; font-style:italic">&nbsp;&nbsp;&nbsp;(Please include Area Code)</span>
	</div>
	<div style="position:absolute; left:67px; top:695px; padding:0px; font-size:16px; width:750px; height:30px">
		<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold">FAX:</span>
		<INPUT NAME="fax" SIZE="15" VALUE="<?=$DISPLAY['fax'] ?>" MAXLENGTH="12"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"  placeholder="Fax Number"><span style="font-size:12px; font-style:italic">&nbsp;&nbsp;&nbsp;(Please include Area Code)</span>
	</div>
	<div style="position:absolute; left:53px; top:730px; padding:0px; font-size:16px; width:750px; height:30px">
		<span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*Email:</span>
		<INPUT NAME="email" SIZE="54"  VALUE="<?=$DISPLAY['email'] ?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Email Address">
	</div>
    
    <div style="position:absolute; left:112px; top:763px; padding:0px; width:750px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:12px">
		<a href="/research/Privacy-Policies/LCI-Privacy-Statement.pdf">Never Sold or Given to 3rd Party (See Privacy Policy)</a><br><br>
	</div>
   
<!-- Horizontal Bar Start -->
<div style="position:absolute; left:0px; top:800px; padding:0px; width:750px; height:2px; background-color:#605b51;"> </div>
<!-- Horizontal Bar End -->   
    
    <div style="position:absolute; left:0px; top:-100px; padding:0px; width:750px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
    	
   <div style="position:absolute; left:0px; top:935px; padding:0px; width:750px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:22px; color:#C60">
		<strong>First . . . Choose Your Media</strong>
	</div>
    
    <div style="position:absolute; left:0px; top:970px; padding:0px; width:750px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
		I would like to request a Free Subscription(s) to:
	</div> 
    
    <div style="position:absolute; left:0px; top:995px; padding:0px; width:300px">
    	    <img src="/lol-logos/LASN_BLUE_325.jpg" alt="LASN" width="300" border="0"><br />
            <center><span style="font-size:16px">The Industry Trade Magazine For<br />
            Commercial Landscape Specifiers Nationwide</span></center>
    </div>
    
    <div style="position:absolute; left:0px; top:1155px; padding:0px; width:300x">
    	    <img src="/lol-logos/lcdbms-logo-NEW-BIG.png" alt="LCDBM" width="300" border="0"><br />
            <center><span style="font-size:16px">Projects, Products &amp; News For Landscape<br />
            Contractors &amp; Superintendents Nationwide</span></center>
    </div>    
    
    <div style="position:absolute; left:0px; top:1300px; padding:0px; width:300px">
    	    <img src="/lol-logos/LOW_NEW_BIG.jpg" alt="LOW" width="300" border="0"><br />
            <center><span style="font-size:16px">Your Weekly Source of Industry News,<br />
			Features &amp; Product Introductions for<br />
			ALL Landscape Professionals</span></center>            
    </div>    
    
               
    <div style="position:absolute; left:310px; top:940px; z-index:5000; padding:60px; width:299px; height:30px;font size:14px">
						<? $M->brand_sel2($brand, $protype, 'highlight'); ?>
	</div>        
        
        
    <div style="position: absolute; left: 371px; top: 1040px; padding: 0px; width: 500px; font-size:16px; z-index: 5000">
				<INPUT TYPE="checkbox" value="LAdigital" name="sal" <?=$sal?>> Also Request a Digital Version of LASN.
                
    </div>
    
   <div style="position: absolute; left: 371px; top: 1250px; padding: 0px; width: 500px; font-size:16px; z-index: 5000">
				
				<INPUT TYPE="checkbox" value="LCdigital" name="list" <?=$list?>> Also Request a Digital Version of LC/DBM.
                
    </div>    
    
    
    
    
    <div style="position:absolute; left:0px; top:1450px; padding:0px; width:750px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
		<strong>Digital versions are also available online.</strong>
	</div> 
    
    <div style="position:absolute; left:0px; top:1473px; padding:0px; width:750px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
		Digital versions are available each month up to 10 days in advance of printed magazine(s).<br />
        If you would like to be notified when the online version is available, please select the<br>
		appropriate box(es) above.
	</div>
    
    <div style="position:absolute; left:0px; top:1735px; padding:0px; font-size:22px; color:#C60; width:274px; height:30px">
         <INPUT type="submit" value="Continue To Next Page"  style="height:20px; width:200px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888">
	</div>     
  
           
	</div>
   
<!-- Horizontal Bar Start -->
<div style="position:absolute; left:0px; top:1450px; padding:0px; width:750px; height:2px; background-color:#605b51;"> </div>
<!-- Horizontal Bar End -->     
    
		<div style="position: absolute; top: 1460px; width: 750px">
		<strong><span style="font-size:22px; color:#C60">Also We Need A Personal Identifier</span></strong><br />
        		(It's A Post Office Requirement)<br /><br />
                <span style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; color:#FF0004">*My Hair Color is:</span><br />
                <INPUT NAME="month" SIZE="40" VALUE="<?=$DISPLAY['month']?>"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="First Letter of Your Hair Color"><br />           
			</div>     
                    
   
    <div style="position:absolute; left:0px; top:1580px; padding:0px; font-size:16px; width:274px; height:30px">
         Page 1 of 3 
	</div>
    </div>
 
        
 </div>
    




    

        
    
<?php if($_SESSION['shot'] != 0) { ?>

 
        

        <?
        if($_SESSION['shot'] != 2 && $action != "edit" && $action != 'renew') {
?>
   
        <h2>Are You Sure...</h2>
        <p>You have chosen a Free Professional Listing on LandscapeOnline.com.  You can still select an enhanced listing for just $9.95 each month and put your company's name before thousands of potential clients.</p>


      <input checked type='radio' name='hot' value='1' />No, I only want the free professional listing at this time.<br />
        <input type='radio' name='hot' value='2' />Yes, please enhance my company listing.  Please use the following credit card information.

<?php
        } else {
?>

        <h2>Congratulations...</h2>
        <p>
            For taking advantage of LandscapeOnline.com's targetted marketting opportunity.  You've just put your company in front of 1000's of prospective clients.
        </p>


<?php
        }
?>
<?php $color = ($_SESSION['shot'] == 2) ? '#ff0000' : '#000000'; ?>

    <? } ?>
	<?	if ($action == "edit") {?>
		<input type=hidden name=change value=edit>
		<input type=hidden name=action value=edit><input type=hidden name=uid value="<?=$uid?>">
		<!-- <INPUT type=submit value=Edit  name=Enter> -->
        
	  <?	echo " ";
			echo "</FORM>";	
					
			}else{
		
		if ($action == "renew")	{ 
			echo " "; 		
		   echo "<input type=hidden  name=action value=renew>";
			$M->renew_up($uid);
			echo "<input type=hidden name=uid value=".$uid.">";
			echo "<INPUT type=submit value=Renew name=renew >";
			echo " ";
		?>

	   <?
			echo " ";
			echo "</FORM>";	
			

			}else{?>


			</FORM>
			 <? } ?>
			 <? } ?>
				
				
				
				
				
				
				
				
				
				
			

				
			
			</td>
			
			
			
		</tr>
	</table><br>
	
	<div style="position: relative; left: 250px">
		<? 	// include("lo_top-main2-bottom.inc"); ?>
	</div>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
include("lo_footer-main2-new.inc");
?>





