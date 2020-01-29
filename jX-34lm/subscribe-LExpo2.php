<?php

include "lol_common.inc";
include $include_path . "class/media_class-tle.inc";
include_once $include_path . "base/transaction_class.php";
$cc = new transaction_class();
$M = new media_class($db);
$expiration = "TLE";


if(isset($_REQUEST['hot'])) {
    $_SESSION['shot'] = $_REQUEST['hot'];
}

if($REQUEST_METHOD=="POST")	{
	$DISPLAY= $_POST;
	//error check
 	$error = "";
		if ($action == "edit") 	$uid = $media_id;
    	if (strlen($biz_title_other) == 0)  $biz_title_other = ""; 	
    	if (strlen($does_other) == 0)		$does_other = "";
    	if (strlen($am_other) == 0)	$am_other = "";
    	if (strlen($sites_other) == 0)	$sites_other = "";


	if(!strlen($error))	 {
		//to take check boxes array
 		if (is_array($does)) 	$does = implode(",",$does);
		if (is_array($am_id)) 	$am_id = implode(",",$am_id);
		if (is_array($sites_id)) 	$sites_id = implode(",",$sites_id);
		
		//set listing to number in data base
       		if (strlen($website) > 0 ) {
           			 if (strpos($website,"http://") != 0) $website = "http://" . $website;
       		 }
			 

		if ($action == "renew" ||  $action == "edit" ) {
			$M->subscribtion_form_edit($id, $brand, $comp_name, $sal, $first_name, $last_name, $address, $address_2, $city, $state, $zip, $country, $mail_to,$alt_mail, $area_code, $phone, $area_code_fax, $fax, $email, $month, $list, $expiration, $type_biz_other);
			header("location:sub3-tle.php?action=".$action."&protype=".$protype);
		} else {
			$total = $M->check_user($comp_name,$subscribe);
			if (is_numeric($total)) { 
				header("location:have_listing-tle.php?total=$total");
			} else {
				$_SESSION['auth'] = $SUBSCRIBE_AUTH;
				$_SESSION['uid'] = $M->subscribtion_form($brand, $comp_name, $sal, $first_name, $last_name, $address, $address_2, $city, $state, $zip, $country, $mail_to, $alt_mail,$area_code, $phone,$area_code_fax, $fax, $email,$month, $subscribe, $status, $biz_title, $am_id, $sites_id, $does, $expiration, $type_biz_other, 0);
				header("location:sub3-tle.php");
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
		header("location: ". $lol_url ."/subscriptions/sub3-tle.php?action=".$action."&media_id=$uids");	
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
	$sites_id = explode(",", $data['sites_id']);
	$expiration = "TLE";


	
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


include $include_path . "lol_header2.inc";


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
	if (document.form1.type_biz_other.value.length < 3) {
		alert("Please enter your How you heard about the TLE.");
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

	<div style="position:absolute; left:125px; top:0px; padding:0px; width:475px"><img src="https://landscapearchitect.com/subscriptions/images/tle-back2.jpg" /></div>


<? if ($error) $C->errors($error); ?>
<? if ($action == "edit" || $action == "renew") { ?>


 
    <div style="position:absolute; left:500px; top:260px; padding:0px; width:210px; height:30px; font-size:11px">
		<font color=#000066> </font> 
	</div>
    
	<? } ?>
    
   	<div style="position:absolute; left:548px; top:145px; padding:0px; width:300px; height:30px; font-size:16px">
		If you have a password: <a href="https://landscapearchitect.com/member/login-tle.php?t=s"><strong>Click Here</strong></a>
	</div>
    
    <div style="position:absolute; left:560px; top:165px; padding:0px; width:350px; height:30px; font-size:12px">
    <strong>SAVE $15</strong> - Registration for the Exhibit Hall attendence is free<br />
		if you pre-register NOW.
	</div>
    
    <div style="position:absolute; left:350px; top:200px; padding:0px; width:375px; height:30px; font-size:12px">
		If you would like to register by fax, <a href="https://landscapearchitect.com/research/TLE/Multiple-Attendees-Form.pdf">click here</a> to download a fax form.
	</div>     
    
    <div style="position:absolute; left:270px; top:280px; padding:0px; width:274px; height:30px">
		<strong>*Required Field.</strong>
	</div>
	<div style="position:absolute; left:341px; top:315px; padding:0px; width:350px; height:30px">
		<B>*Company Name</B>:
		<INPUT NAME="comp_name" SIZE="34"  VALUE="<?=$DISPLAY['comp_name'] ;?>"  >
	</div>
	<div style="position:absolute; left:373px; top:340px; padding:0px; width:274px; height:30px">
				<B>*Your Name:</B>
				  <INPUT NAME="first_name" SIZE="10" VALUE="<?=$DISPLAY['first_name']?>"  >
				  <INPUT NAME="last_name" SIZE="15" VALUE="<?=$DISPLAY['last_name']?>"  >
	</div>
	<div style="position:absolute; left:332px; top:370px; padding:0px; width:350px; height:30px">
			<B>*Company Address:</B>	
			<INPUT NAME="address" SIZE="34"  VALUE="<?=$DISPLAY['address']?>"  >
    </div>
    <div style="position:absolute; left:386px; top:390px; padding:0px; width:350px; height:30px">
            <INPUT NAME="address_2" 	SIZE="34" VALUE="<?=$DISPLAY['address_2']?>"   >
	</div>
    
	<div style="position:absolute; left:409px; top:418px; padding:0px; width:274px; height:30px">
			<B>*City:</B>
		  	<INPUT NAME="city" SIZE="34"  VALUE="<?=$DISPLAY['city'] ;?>"  >
	</div>
    
    
	<div style="position:absolute; left:363px; top:445px; padding:0px; width:274px; height:30px">
		<B>*State:</B>
				   <SELECT NAME="state" SIZE="1"  > 
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
 
	<div style="position:absolute; left:273px; top:470px; padding:0px; width:500px; height:30px">
            <B>*Zip Code:</B>
		  	<INPUT NAME="zip" SIZE="34"  VALUE="<?=$DISPLAY['zip'] ;?>">
	</div>
    


	<div style="position:absolute; left:360px; top:500px; padding:0px; width:274px; height:30px">
				<B>*Phone:</B>
		<INPUT NAME="area_code" SIZE="3" VALUE="<?=$DISPLAY['area_code']?>" MAXLENGTH="3"  ><INPUT NAME="phone" SIZE="15" VALUE="<?=$DISPLAY['phone']?>" MAXLENGTH="8"  >
	</div>
    
<div style="position:absolute; left:367px; top:530px; padding:0px; width:274px; height:30px">
		<B>Fax:</B>
		<INPUT NAME="area_code_fax" SIZE="3" VALUE="<?=$DISPLAY['area_code_fax']?>" MAXLENGTH="3"  ><INPUT NAME="fax" SIZE="15" VALUE="<?=$DISPLAY['fax'] ?>" MAXLENGTH="11"  >
	</div>
    
<div style="position:absolute; left:338px; top:560px; padding:0px; width:400px; height:30px">
		<B>*Email:</B>
		<INPUT NAME="email" SIZE="34"  VALUE="<?=$DISPLAY['email'] ?>"  >
	</div>


    
    
        
    
	<div style="position:absolute; left:135px; top:700px; padding:0px; width:325px; height:30px">
		<FONT size="5">Title: </FONT><font size="3"><strong>*Required Field</strong></font><FONT size="2"><strong>&nbsp;&nbsp;&nbsp;(Please Choose One):</strong></FONT>
						<?	$M->type_title2($biz_title, $protype, 'highlight'); ?>
      <input type="radio" name="biz_title" <? if ($biz_title_other) echo "checked";?> value="other"> 
						Other : <input type="text" name="biz_title_other" value="<? echo $biz_title_other ?>">
    </div>
    

    
    <div style="position:absolute; left:135px; top:860px; padding:0px; width:350px; height:30px">
		<FONT size="5">I Am A: </FONT><font size="3"><strong>*Required Field</strong></font><FONT size="2"><strong>&nbsp;&nbsp;&nbsp;(Select all that apply):</strong></FONT>
						<?	$M->type_iam2($am_id, $protype, 'highlight'); ?>
                        <input type="checkbox" name="am_id[]" <? if ($am_other) echo "checked";?> value="other">
						Other : <input type="text" name="am_other" value="<? echo $am_other ?>">
</div>
    
<div style="position:absolute; left:22px; top:1225px; padding:0px; width:600px; height:30px">
						<font size="3">Contractors License Number: </font><input type="text" name="country" value="<? echo $country ?>"><br /><br />
</div>
    
    
    <div style="position:absolute; left:135px; top:1265px; padding:0px; width:405px; height:30px">
		<FONT size="5">I Work At A: </FONT><font size="3"><strong>*Required Field</strong></font><FONT size="2"><strong>&nbsp;&nbsp;&nbsp;(Please Choose One):</strong></FONT>
						<?	$M->type_sites2($sites_id, $protype, 'highlight'); ?>
						<input type="radio" name="sites_id[]" <? if ($sites_other) echo "checked";?> value="other"> 
						Other : <input type="text" name="sites_other" value="<? echo $sites_other ?>">
  </div>
    

    
<div style="position:absolute; left:135px; top:1600px; padding:0px; width:600px; height:30px">
		<FONT size="5">I Am Involved in the Following: </FONT><font size="3"><strong>*Required Field</strong></font><FONT size="2"><strong>&nbsp;&nbsp;&nbsp;(Select all that apply):</strong></FONT>
						<?	$M->type_does2($does, $protype, 'highlight'); ?>
                        <input type="checkbox" name="does[]" <? if ($does_other) echo "checked";?> value="other"> 
						Other : <input type="text" name="does_other" value="<? echo $does_other ?>">
</div>   
    
<div style="position:absolute; left:120px; top:2215px; padding:0px; width:475px; height:30px; font-size:16px; color:#000; font-weight:bold">
		<B>*How did you hear about TLE:</B>
				   <SELECT NAME="type_biz_other" SIZE="1"  > 
		<?
          if (strlen($DISPLAY['type_biz_other']) > 2)    {?>
		           <OPTION VALUE="<?=$DISPLAY['type_biz_other']?>"><?=$DISPLAY['type_biz_other']?></OPTION> 
		  <?} else {?>
					<OPTION VALUE="">Choose How You Heard about the show</OPTION>
		 <?}?>						
                   <OPTION VALUE="Co-Worker" <?php if("Co-Worker"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Co-Worker</OPTION>
                   <OPTION VALUE="Fax" <?php if("Fax"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Fax</OPTION>
                   <OPTION VALUE= "LandscapeOnline.com" <?php if("LandscapeOnline.com"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >LandscapeOnline.com</OPTION>
                   <OPTION VALUE= "Magazine/Newsletter" <?php if("Magazine/Newsletter"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Advertisement Magazine/Newsletter</OPTION>
                   <OPTION VALUE= "Newspaper Ad" <?php if("Newspaper Ad"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Newspaper Ad</OPTION>
                   <OPTION VALUE= "Email" <?php if("Email"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Email</OPTION>
                   <OPTION VALUE= "Press Release" <?php if("Press Release"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Press Release</OPTION>
                   <OPTION VALUE= "Facebook" <?php if("Facebook"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Facebook</OPTION>
					<OPTION VALUE= "LinkedIn" <?php if("LinkedIn"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >LinkedIn</OPTION>
                  <OPTION VALUE= "Free Pass" <?php if("Free Pass"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Free Pass</OPTION>
                  <OPTION VALUE= "Direct Mail" <?php if("Direct Mail"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Direct Mail</OPTION>
                  <OPTION VALUE=  "Poster" <?php if("Poster"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Poster</OPTION>
                  <OPTION VALUE=  "Flyer" <?php if("Flyer"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Flyer</OPTION>
                  <OPTION VALUE=  "Show Exhibitor" <?php if("Show Exhibitor"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Show Exhibitor</OPTION>
                  <OPTION VALUE=  "Show Exhibitor" <?php if("NAPWL"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >NAPWL</OPTION>
                  <OPTION VALUE=  "Show Exhibitor" <?php if("Irrigator Tech"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Irrigator Tech</OPTION>
                  <OPTION VALUE=  "Show Exhibitor" <?php if("Janet Hartin"==$DISPLAY['type_biz_other']) echo 'selected="selected"'?> >Janet Hartin</OPTION>
				 	</SELECT>
    </div>      

<div style="position:absolute; left:380px; top:2260px; padding:0px; width:274px; height:30px">
		         Page 1 of 3 <INPUT type="submit" value="Continue"  >
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
		<INPUT type=submit value=Edit  name=Enter>
        
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
				<HR><!--mm replaced-->
	   <?
			echo " ";
			echo "</FORM>";	
			

			}else{?>

<!-- mm-bottomreplace --><br><br><hr> 

			</FORM>
			 <?}?>
			 <?}?>
<? include $include_path . "lol_footer.inc"; ?>
