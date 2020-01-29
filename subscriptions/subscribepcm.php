<?php

include "lol_common.inc";
include $include_path . "class/media_classPcm.inc";
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

	if(strlen($comp_name) < 3)	$error .= "- Please enter your Company Name<br>";
	if(strlen($first_name) < 1)	$error .= "- Please enter your First Name<br>";
	if(strlen($last_name) < 2)	$error .= "- Please enter your Last Name<br>";
	if(strlen($address) < 2)	$error .= "- Please enter your Address<br>";
	if(strlen($city) < 3)		$error .= "- Please enter your City<br>";
	if(strlen($state) < 2)		$error .= "- Please enter your State<br>";
	if(strlen($zip) < 5)		$error .= "- Please enter your ZIP code<br>";
	if(strlen($area_code) < 3)	$error .= "- Please enter your Area code<br>";
	if(strlen($phone) < 7)		$error .= "- Please enter your Phone Number<br>";
	if(strlen($email) < 5)		$error .= "- Please enter your Email<br>";
	if(strlen($month) < 2)		$error .= "- Please enter your Birthday Month<br>";
	if(strlen($subscribe) > 4)	$error .= "- Please subscribe to one at a time<br>";

    if($_SESSION['shot'] == 2 && $action != 'edit') {
        if(strlen($cc_name) < 1) $error .= "- Please enter the name written on your credit card. <br />";
        if(strlen($cc_num) < 1) $error .= "- Please enter your credit card number. <br />";
        if(strlen($ccType) < 1) $error .= "- Please enter your credit card type. <br />";
    }
 	
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
				$mail_to,$alt_mail, $website,$area_code, $phone, $area_code_fax, 
				$fax, $email, $month);
				
			if ($change == "edit") {
				//header("location: thank_you.php?action=edit&uid=$uid"); 
				//exit;
			}
			header("location:sub2pcm.php?action=".$action."&protype=".$protype);
			
		} else {
			
			$total = $M->check_user($comp_name,$subscribe);
			
			if (is_numeric($total)) { 
				header("location:have_listing.php?total=$total");
			} else {
				//input info

				$_SESSION['auth'] = $SUBSCRIBE_AUTH;
				$_SESSION['uid'] = $M->subscribtion_form($brand, $comp_name, $sal, $first_name, $last_name, 
						$address, $address_2, $city, $state, $zip, $country,$mail_to,$alt_mail,
						$website,$area_code, $phone, $area_code_fax, $fax,
						$email, $month, $how, $how_other, $subscribe, $note,$protype,0);
                // submit cc info as well
                $cc->transAmount = 9.95;
                $cc->refType = 'sub';
                $cc->refID = $_SESSION['uid'];
                $cc->monthly = 1;
                $cc->ccNumber = $cc_num;
                $cc->ccType = $ccType;
                $cc->ccExpMonth = $cc_month;
                $cc->ccExpYear = $cc_year;
                $cc->ccName = $cc_name;
                $cc->email = $email;
                $cc->area_code = $area_code;
                $cc->phone = $phone;
                $cc->address = $address;
                $cc->address2 = $address_2;
                $cc->city = $city;
                $cc->state = $state;
                $cc->zip = $zip;
                $cc->company = $comp_name;

                $cc->submit();

				header("location:sub2pcm.php");
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
		header("location: ". $lol_url ."/member/login.php?t=s");	
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

if ($subscribe == "lasn") {
	$magtit="Signup Form";
	$magimg="lasn_logo.jpg";
} else 	if ($subscribe == "lcm") {
	$magtit="Landscape Contractor Signup Form";
	$magimg="lcm_logo.jpg";
} else if ($subscribe == "lsmp") {
	$magtit="Landscape Superintendent Signup Form";
	$magimg="lsmp_logo_sm.jpg";
} else {
	$magtit="LandscapeOnline Multi-Media Subscription Signup";
	$magimg="lol_logo_sm.jpg";
}
$secthdr=$magtit;
include $include_path . "lol_header2.inc";

?>
<form method="post" action="<?echo $PHP_SELF?>">
<input type="hidden" name="action" value="<?=$action ?>">
<? if ($action == "edit") { ?>
<input type="hidden" name="id" value="<?=$DISPLAY['id']?>">
<input type="hidden" name="protype" value="<?=$DISPLAY['protype']?>">
<input type="hidden" name="subscribe" value="<?=$DISPLAY['subscribe']?>">
<? } else { ?>
<input type="hidden" name="protype" value="<?=$protype ?>">
<input type="hidden" name="subscribe" value="<?=$subscribe ?>">
<? } ?>
<TABLE WIDTH="90%" align="center" cellpadding="0" cellspacing="0"> 
			<?if (strlen($ls) > 0 ) echo "<input type=hidden name=ls value=".$ls.">"; 	?>
	 <TR bgcolor="FFFFFF"> 
<?

?><TD colspan=3 align=center ><IMG SRC="/lol-logos/3-logo.jpg"><br><br>
</TD>
	</TR>
			  	<tr> 
				  	<TD VALIGN="TOP" >
						<FONT COLOR="#ff0000"><B>Brands:</B></FONT><br />
						<small>(Select all that apply)</small><br>
						<? $M->brand_sel($brand, $protype, 'highlight'); ?>
					</TD> 
				</tr>
	
	<tr>
		<td  ALIGN="center" colspan="3" >Fields in
			<FONT COLOR="#ff0000">red</B></font> are required.
		</td>
	</tr>
	<tr>
		<TD COLSPAN="2" align="center" >
			<? if ($error) $C->errors($error); ?>
		</TD>
	</tr>
<? if ($action == "edit" || $action == "renew") { ?>
	<tr>
		<td ALIGN=center colspan=3><font color=#000066>Please Note: If you are a current subscriber and this is your first time visiting LandscapeOnLine.com,<br> we apologize for making you enter your information again.<br> A password will be assigned to your account and will appear on your mailing label </font><br><br></td> 
	</tr>
	<? } ?>
		<TR> 
				<TD ALIGN="right"><FONT COLOR="#ff0000"><B>Company Name</B>:</TD> 
				<td></td>
				<TD><INPUT NAME="comp_name" SIZE="34"  VALUE="<?=$DISPLAY['comp_name'] ;?>"  ></TD> 
		</TR> 
		<TR> 
				<TD ALIGN="right"><FONT COLOR="#ff0000"><B>Your Name</B>:
				</TD>
				<td></td> 
			<td>
	
				  <INPUT NAME="first_name" SIZE="10" VALUE="<?=$DISPLAY['first_name']?>"  >
				  <INPUT NAME="last_name" SIZE="15" VALUE="<?=$DISPLAY['last_name']?>"  >
			</TD> 
	</TR> 
	<TR> 
			<TD ALIGN="right"  VALIGN="top"><FONT COLOR="#ff0000"><B>Company Address</B>:	
			</TD> 
			<td></td>
			<TD><INPUT NAME="address" SIZE="34"  VALUE="<?=$DISPLAY['address']?>"  ><BR><INPUT NAME="address_2" 	SIZE="34" VALUE="<?=$DISPLAY['address_2']?>"   >
			</TD> 
	</TR> 
		<? $C->pro_state($DISPLAY['city'],$DISPLAY['state'],$DISPLAY['zip']) ?>
	<TR> 
		<TD ALIGN="right"  VALIGN="TOP" ><B>Mail To</B>:
		</TD> 
		<td></td>
		<TD> <? if ($DISPLAY['mail_to'] == "alt") {
				$altchk="checked";
			} else {
				$compchk="checked";
			}?>
		   <INPUT TYPE="radio" value="comp" name="mail_to" <?=$compchk?>>Company address above<br>
		   
				<INPUT TYPE="radio" value="alt" name="mail_to" <?=$altchk?>>Alternate address below:<br>
				
				<TEXTAREA COLS="30" NAME="alt_mail" ROWS="3" value="<?=$DISPLAY['alt'];?>"  ><?=$DISPLAY['alt'];?></TEXTAREA>
				</TD> 
	</TR> 

	<TR> 
		<TD ALIGN="right" >
				<FONT COLOR="#ff0000"><B>Phone</B>:</font>
		</TD> 
		<td></td>
		<TD><INPUT NAME="area_code" SIZE="3" VALUE="<?=$DISPLAY['area_code']?>" MAXLENGTH="3"  ><INPUT NAME="phone" SIZE="15" VALUE="<?=$DISPLAY['phone']?>" MAXLENGTH="8"  >
		</TD> 
	</TR> 
	<TR> 
		<TD ALIGN="right" ><B>FAX</B>:</TD> 
		<td></td>
		<TD><INPUT NAME="area_code_fax" SIZE="3" VALUE="<?=$DISPLAY['area_code_fax']?>" MAXLENGTH="3"  ><INPUT NAME="fax" SIZE="15" VALUE="<?=$DISPLAY['fax'] ?>" MAXLENGTH="11"  ></TD> 
	</TR> 
	<TR> 
		<TD ALIGN="right" ><FONT COLOR="#ff0000"><B>Email</B>:</font></TD> 
		<td></td>
		<TD><INPUT NAME="email" SIZE="34"  VALUE="<?=$DISPLAY['email'] ?>"  ></TD> 
	</TR> 
		<TR> 
		<TD ALIGN="right" ><B>Website</B>:
		</TD> 
		<td></td>
		<TD><INPUT NAME="website" SIZE="34" VALUE="<?=$DISPLAY['website']?>"  >
		</TD> 
	</TR> 
	<TR> 
		<TD ALIGN="right" ><font COLOR="#ff0000"><B>Birthday Month</B>:<BR><small>(needed by our auditors)</small></font>
		</TD> 
		<td></td>
		<TD VALIGN="TOP">
				   <SELECT NAME="month" SIZE="1"  > 
		<?
          if (strlen($DISPLAY['month']) > 2)    {?>
		           <OPTION VALUE="<?=$DISPLAY['month']?>"><?=$DISPLAY['month']?></OPTION> 
		  <?} else {?>
					<OPTION VALUE="">Enter Month</OPTION> 
		 <?}?>						
		    			<OPTION VALUE="January">January</OPTION> 
						<OPTION VALUE="February">February</OPTION> 
						<OPTION VALUE="March">March</OPTION> 
						<OPTION VALUE="April">April</OPTION> 
						<OPTION VALUE="May">May</OPTION> 
						<OPTION VALUE="June">June</OPTION> 
						<OPTION VALUE="July">July</OPTION> 
						<OPTION VALUE="August">August</OPTION> 
						<OPTION VALUE="September">September</OPTION> 
						<OPTION VALUE="October">October</OPTION> 
						<OPTION VALUE="November">November</OPTION> 
						<OPTION VALUE="December">December</OPTION> 
						</SELECT>
		</TD> 
	</TR> 
<?if ($action == !"list") { ?>
<TR> 
<TD ALIGN="right"  VALIGN="TOP" ><B>How did you<BR>hear about us?</B>:</TD> 
<td></td>
<TD> 
	  <DL>
		 <DT>
			 <INPUT TYPE="CHECKBOX"	 value="Saw magazine at work" name="how[]"  >Saw magazine at work
		 </DT>
		 <DT><INPUT TYPE="CHECKBOX"value="Saw magazine at peers office" name="how[]"  >Saw magazine at peers office
		 </DT>
		 <DT><INPUT TYPE="CHECKBOX"value="LandscapeOnLine.com" name="how[]"  > LandscapeOnLine.com
		 </DT> 
		<DT><b> Saw you at the following Trade Show</b>
		</DT> 
			<DD> 
						<SELECT NAME="how[]" SIZE="1"  > 
						  <OPTION VALUE="">Select trade show name</OPTION> 
						  <OPTION VALUE="Trade Show Alsa">ALSA</OPTION> 
						  <OPTION VALUE="Trade Show CLCA">CLCA</OPTION> 
						  <OPTION VALUE="Trade Show Denver Pro-Green">Denver Pro-Green</OPTION> 
						  <OPTION VALUE="Trade Show GIE">GIE</OPTION> 
						  <OPTION VALUE="Trade Show IAAPA">IAAPA</OPTION> 
						  <OPTION VALUE="Trade Show Irrigation Association">Irrigation Association</OPTION> 
						  <OPTION VALUE="Trade Show IECA">IECA</OPTION> 
						  <OPTION VALUE="Trade Show Lightfair">Lightfair</OPTION> 
						  <OPTION VALUE="Trade Show NRPA">NRPA</OPTION> 
						  <OPTION VALUE="Trade Show SCTC">SCTC</OPTION> 
						  <OPTION VALUE="Trade Show TNLA">TNLA</OPTION> 
						  <OPTION VALUE="Trade Show WNGE">WNGE</OPTION> 
						  <OPTION VALUE="Trade Show World of Concrete">World of
							 Concrete</OPTION> 
						</SELECT></DD> 
					<DT><b>Other:</b></DT>
					<DD><INPUT type=text NAME="how_other" SIZE="15"> 
					</DL></DD>
		</TD> 
	</TR> 
		
<?}?> 		
	<TR> 
		<TD ALIGN="right"  VALIGN="top"><B>Comments</B>:</TD> 
		<td></td>
		<TD><TEXTAREA COLS="30" NAME="note" ROWS="4" value="<?=$DISPLAY['note']?>"  ><?=$DISPLAY['note']?></TEXTAREA>
		</TD> 
	</TR> 		
<?php
    if($_SESSION['shot'] != 0) { ?>
        <TR> 
            <TD  align="center" colspan="3">Step 1 of 4  <INPUT type="submit" value="Continue"  >
                    <INPUT TYPE=RESET name="reset" value="Clear">
            </TD>
        </tr>
        <?
        if($_SESSION['shot'] != 2 && $action != "edit" && $action != 'renew') {
?>
    <tr>
        <td colspan='3'>
        <h2>Are You Sure...</h2>
        <p>You have chosen a Free Professional Listing on LandscapeOnline.com.  You can still select an enhanced listing for just $9.95 each month and put your company's name before thousands of potential clients.</p>
        </td>
    </tr>
    <tr>
        <td colspan='2'>&nbsp;</td>
        <td><input checked type='radio' name='hot' value='1' />No, I only want the free professional listing at this time.<br />
        <input type='radio' name='hot' value='2' />Yes, please enhance my company listing.  Please use the following credit card information.</td> 
    </tr>
<?php
        } else {
?>
    <tr>
        <td colspan='3'>
        <h2>Congratulations...</h2>
        <p>
            For taking advantage of LandscapeOnline.com's targetted marketting opportunity.  You've just put your company in front of 1000's of prospective clients.
        </p>
        </td>
    </tr>
<?php
        }
?>
<?php $color = ($_SESSION['shot'] == 2) ? '#ff0000' : '#000000'; ?>
    <tr>
        <td align='right' valign='top' colspan='3'>
        <hr noshade size=-1 />
        <fieldset>
            <legend>Billing Information for "Linked Listing" - Just $9.95 a month</legend>
            <table width=100% border=0 cellpadding=0 cellspacing=3>
                <tbody>
                    <tr>
                        <td width='30%' align='right'><strong><font color='<?= $color ?>'>Card Number</font></strong></td>
                        <td width='2%'>&nbsp;</td>
                        <td><input type='text' name='cc_num' size='20' value='<?= $cc_num ?>' /></td>
                    </tr>
                    <tr>
                        <td width='30%' align='right'><strong><font color='<?= $color ?>'>Name On Card</font></strong></td>
                        <td width='2%'>&nbsp;</td>
                        <td><input type='text' name='cc_name' size='20' value='<?= $cc_name ?>'/></td>
                    </tr>
                    <tr>
                        <td width='30%' valign='top' align='right'><strong><font color='<?= $color ?>'>Card Type</font></strong></td>
                        <td width='2%'>&nbsp;</td>
                        <td><? $cc->cardType($ccType); ?></td>
                    </tr>
                    <tr>
                        <td width='30%' align='right'><strong><font color='<?= $color ?>'>Expiration</font></strong></td>
                        <td width='2%'>&nbsp;</td>
                        <td><? $cc->month($cc_month, 'cc_month'); ?> <? $cc->year($cc_year,'cc_year'); ?></td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        </td>
    </tr>
    <? } ?>
	<?	if ($action == "edit") {?>
	<tr>
		<input type=hidden name=change value=edit>
		<input type=hidden name=action value=edit><input type=hidden name=uid value="<?=$uid?>">
		<TD align=center colspan=3><INPUT type=submit value=Edit  name=Enter></TD>
	</tr>
	<TR> 
		<td colspan=3><HR><!--mm replaced--></td>
	</TR>
	  <?	echo "</table>";
			echo "</FORM>";	
					
			}else{
		
		if ($action == "renew")	{ 
			echo "<tr>"; 		
		   echo "<input type=hidden  name=action value=renew>";
			$M->renew_up($uid);
			echo "<input type=hidden name=uid value=".$uid.">";
			echo "<TD  align=center colspan=3><INPUT type=submit value=Renew name=renew ></TD>";
			echo "</tr>";
		?><TR> 
				<td><HR><!--mm replaced--></td>
			</TR>
	   <?
			echo "</table>";
			echo "</FORM>";	
			

			}else{?>
<TR> 
	<TD  align="center" colspan="3">Step 1 of 4  <INPUT type="submit" value="Continue"  >
			<INPUT TYPE=RESET name="reset" value="Clear">
	</TD>
</tr>
<tr>
	<td  colspan="3" align="center"> <br>
	</td>
</tr>
		 <TR> 
		 <TD COLSPAN="3"><!-- mm-bottomreplace --><br><br><hr></TD> 
	  </TR> 
</TABLE>
			</FORM>
			 <?}?>
			 <?}?>
<? include $include_path . "lol_footer.inc"; ?>
