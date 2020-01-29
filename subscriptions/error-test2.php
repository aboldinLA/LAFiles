<?php

include "lol_common.inc";
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
	if(!strlen($error))	 {  
	    	//set listing to number in data base
       		 if (strlen($website) > 0 ) {
           			 if (strpos($website,"http://") != 0) $website = "http://" . $website;
       		 }
	
		//to take check boxes array
		if (is_array($how)) $how = implode(",",$how);
		if ($action == "renew" ||  $action == "edit" ) {
			$M->subscribtion_form_edit($id, $brand, $comp_name, $sal, $first_name, 
				$last_name, $address, $address_2, $city, $state, $zip, $country,
				$mail_to,$alt_mail, $area_code, $phone, $area_code_fax, 
				$fax, $email, $month, $list);
			header("location:sub2.php?action=".$action."&protype=".$protype);
		} else {
			$total = $M->check_user($comp_name,$subscribe);
			if (is_numeric($total)) { 
				header("location:have_listing.php?total=$total");
			} else {
				$_SESSION['auth'] = $SUBSCRIBE_AUTH;
				$_SESSION['uid'] = $M->subscribtion_form($brand, $comp_name, $sal, $first_name, $last_name, $address, $address_2, $city, $state, $zip, $country,
				                    $mail_to,$alt_mail, $area_code, $phone, $area_code_fax, $fax, $email, $month,
				                    $subscribe, $note, $list, 0);
				header("location:sub2.php");
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
	if (document.form1.month.value.length < 1) {
		alert("Please enter your number of sibliings.");
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

	<div style="position:absolute; left:125px; top:0px; padding:0px; width:475px">
            <img src="https://landscapearchitect.com/subscriptions/images/subscription-back2.jpg">
    </div>


<? if ($error) $C->errors($error); ?>
<? if ($action == "edit" || $action == "renew") { ?>

	<div style="position:absolute; left:300px; top:198px; padding:0px; width:500px; height:30px">
		<font color=#000066>Please Note: If you are a current subscriber and this is your first time visiting<br />
        LandscapeOnLine.com, Please update or provide the required information.</font> 
	</div>
    
	<? } ?>
    
    <div style="position:absolute; left:275px; top:255px; padding:0px; width:274px; height:30px">
		Fields in <FONT COLOR="#ff0000"><B>Red</B></FONT> are required.
	</div>
	<div style="position:absolute; left:340px; top:285px; padding:0px; width:350px; height:30px">
		<FONT COLOR="#ff0000"><B>Company Name</B>:</FONT>
		<INPUT NAME="comp_name" SIZE="34"  VALUE="<?=$DISPLAY['comp_name'] ;?>"  >
	</div>
	<div style="position:absolute; left:373px; top:310px; padding:0px; width:274px; height:30px">
				<FONT COLOR="#ff0000"><B>Your Name:</B></FONT>
				  <INPUT NAME="first_name" SIZE="10" VALUE="<?=$DISPLAY['first_name']?>"  >
				  <INPUT NAME="last_name" SIZE="15" VALUE="<?=$DISPLAY['last_name']?>"  >
	</div>
	<div style="position:absolute; left:332px; top:340px; padding:0px; width:350px; height:30px">
			<FONT COLOR="#ff0000"><B>Company Address:</B></FONT>	
			<INPUT NAME="address" SIZE="34"  VALUE="<?=$DISPLAY['address']?>"  >
    </div>
    <div style="position:absolute; left:384px; top:360px; padding:0px; width:350px; height:30px">
            <INPUT NAME="address_2" 	SIZE="34" VALUE="<?=$DISPLAY['address_2']?>"   >
	</div>
    
	<div style="position:absolute; left:409px; top:388px; padding:0px; width:274px; height:30px">
			<FONT COLOR="#ff0000"><B>City:</B></FONT>
		  	<INPUT NAME="city" SIZE="34"  VALUE="<?=$DISPLAY['city'] ;?>"  >
	</div>
    
    
	<div style="position:absolute; left:363px; top:415px; padding:0px; width:274px; height:30px">
		<font COLOR="#ff0000"><B>State:</B></font>
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
 
	<div style="position:absolute; left:272px; top:440px; padding:0px; width:500px; height:30px">
            <FONT COLOR="#ff0000"><B>Postal Code:</B></FONT>
		  	<INPUT NAME="zip" SIZE="34"  VALUE="<?=$DISPLAY['zip'] ;?>">
	</div>
    
    	<div style="position:absolute; left:253px; top:465px; padding:0px; width:500px; height:30px">
		<B>Mail To</B>:
		<? if ($DISPLAY['mail_to'] == "alt") {
				$altchk="checked";
			} else {
				$compchk="checked";
			}?>
		   <INPUT TYPE="radio" value="comp" name="mail_to" <?=$compchk?>>Company address above
           </div>
		   <div style="position:absolute; left:274px; top:480px; padding:0px; width:500px; height:30px">
				<INPUT TYPE="radio" value="alt" name="mail_to" <?=$altchk?>>Alternate address below:
           </div>
			<div style="position:absolute; left:305px; top:500px; padding:0px; width:500px; height:30px">
				<TEXTAREA COLS="30" NAME="alt_mail" ROWS="3" value="<?=$DISPLAY['alt'];?>"  ><?=$DISPLAY['alt'];?></TEXTAREA>
			</div>

	<div style="position:absolute; left:360px; top:570px; padding:0px; width:274px; height:30px">
				<FONT COLOR="#ff0000"><B>Phone</B>:</font>
		<INPUT NAME="area_code" SIZE="3" VALUE="<?=$DISPLAY['area_code']?>" MAXLENGTH="3"  ><INPUT NAME="phone" SIZE="15" VALUE="<?=$DISPLAY['phone']?>" MAXLENGTH="8"  >
	</div>
	<div style="position:absolute; left:364px; top:593px; padding:0px; width:274px; height:30px">
		<B>FAX:</B>
		<INPUT NAME="area_code_fax" SIZE="3" VALUE="<?=$DISPLAY['area_code_fax']?>" MAXLENGTH="3"  ><INPUT NAME="fax" SIZE="15" VALUE="<?=$DISPLAY['fax'] ?>" MAXLENGTH="11"  >
	</div>
	<div style="position:absolute; left:337px; top:617px; padding:0px; width:400px; height:30px">
		<FONT COLOR="#ff0000"><B>Email:</B></FONT>
		<INPUT NAME="email" SIZE="34"  VALUE="<?=$DISPLAY['email'] ?>"  >
	</div>
	<div style="position:absolute; left:243px; top:640px; padding:0px; width:300px; height:30px">
		<font COLOR="#ff0000"><B>Number of Siblings</B>:<BR><small>(needed by our auditors)</small></font>
    </div>
    <div style="position:absolute; left:318px; top:640px; padding:0px; width:300px; height:30px">
		<INPUT NAME="month" SIZE="5" VALUE="<?=$DISPLAY['month']?>"  >
	</div>

	<div style="position:absolute; left:100px; top:830px; padding:0px; width:500px; height:30px">
						<FONT COLOR="#ff0000" size="5"><B> </B></FONT><br />
						<small> </small><br>
    </div>
    <div style="position:absolute; left:465px; top:820px; padding:0px; width:299px; height:30px;font size:14px">
						<? $M->brand_sel($brand, $protype, 'highlight'); ?>
	</div>
    
    <div style="position:absolute; left:348px; top:845px; padding:0px; width:500px; height:30px">
				<INPUT TYPE="checkbox" value="LAdigital" name="sal" <?=$sal?>>Also Request a Digital Version of LASN.
    </div>
    
    <div style="position:absolute; left:337px; top:910px; padding:0px; width:500px; height:30px">
				<INPUT TYPE="checkbox" value="LCdigital" name="list" <?=$list?>>Also Request a Digital Version of LC/dbm.
    </div>
    
    <div style="position:absolute; left:380px; top:1000px; padding:0px; width:274px; height:30px">
         Page 1 of 4   <INPUT type="submit" value="Continue"  >
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
