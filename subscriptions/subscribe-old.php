<?
include "lol_common.inc";
include $include_path . "class/media_class.inc";
$M = new media_class($db);
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
	
	if(!strlen($error))	 {  
	    //set listing to number in data base
 if (strlen($website) > 0 ){
 	if (strpos($website,"http://") != 0) $website = "http://" . $website;
}

	
		//to take check boxes array
		if (is_array($how)) $how = implode(",",$how);
		if ($action == "renew" ||  $action == "edit" ) {

			$M->subscribtion_form_edit($id, $comp_name, $sal, $first_name, 
				$last_name, $address, $address_2, $city, $state, $zip, $country,
				$mail_to,$alt_mail, $website,$area_code, $phone, $area_code_fax, 
				$fax, $email, $month);
				
			if ($change == "edit") {
				//header("location: thank_you.php?action=edit&uid=$uid"); 
				//exit;
			}
			header("location:sub2.php?action=".$action."&protype=".$protype);
			
		} else {
			
			$total = $M->check_user($comp_name,$subscribe);
			
			if (is_numeric($total)) { 
				header("location:have_listing.php?total=$total");
			} else {
				//input info

				$_SESSION['auth'] = $SUBSCRIBE_AUTH;
				$_SESSION['uid'] = $M->subscribtion_form($comp_name, $sal, $first_name, $last_name, 
						$address, $address_2, $city, $state, $zip, $country,$mail_to,$alt_mail,
						$website,$area_code, $phone, $area_code_fax, $fax,
						$email, $month, $how, $how_other, $subscribe, $note,$protype,0);
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
} else { // sign up
	if ($action == "list") {
		$subscribe = "lol";
	} else {
		if ($protype == "d")	$subscribe = "lasn";
		if ($protype == "c") 	$subscribe = "lcm";
	}
}
$_SESSION['subscribe_list'] = $subscribe;
$_SESSION['protype_list'] = $protype;

if ($subscribe == "lasn") {
	$magtit="Landscape Architect and Specifier News Subscription Form";
	$magimg="lasn_logo.jpg";
} else 	if ($subscribe == "lcm") {
	$magtit="Landscape Contractor Magazine Subscription Form";
	$magimg="lcm_logo.jpg";
} else {
	$magtit="LandscapeOnline Professional Listing Sign-up";
	$magimg="lol_logo_sm.jpg";
}
$secthdr=$magtit;
include $include_path . "lol_header.inc";

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

?><TD colspan=3 align=center ><IMG SRC="/imgz/<?=$magimg?>"><br><br>
</TD>
	</TR>
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
		<TD ALIGN="right" ><font  COLOR="#ff0000"><B>Birthday Month</B>:</font><BR><FONT color="#ff0000" SIZE="-2">(needed by our auditors)</FONT>
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
	
