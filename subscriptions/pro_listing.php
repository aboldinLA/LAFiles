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

	if(strlen($protype) < 3)	$error .= "- Professional Type Error<br>";

	

	if(!strlen($error))	 {  

	    //set listing to number in data base

		if ($protype == "design") {$listing = "1";}

		if ($protype == "contractor") {$listing = "2";}

	

		//to take check boxes array

		if (is_array($how)) $how = implode(",",$how);

		if ($action == "renew" ||  $action == "edit" ) {



			$M->listing_form_edit($uid, $comp_name, $sal, $first_name, 

				$last_name, $address, $address_2, $city, $state, $zip, $country,

				$mail_to,$alt_mail, $website,$area_code, $phone, $area_code_fax, 

				$fax, $email, $month);

				

			if ($change == "edit") {

				header("location: thank_you.php?action=edit&uid=$uid"); 

				exit;

			}

			if ($protype == 'design')

				header("location: lasn.php?action=".$action."&media_id=$uid");

			 

			if ($protype == 'contractor')

				header("location: lcm.php?action=".$action."&uid=$uid");     

			

		} else {



			$total = $M->check_user($comp_name,$protype);

			

			if (is_numeric($total)) { 

				header("location:have_listing.php?total=$total");

			} else {

					//input info

				$_SESSION['auth'] = $SUBSCRIBE_AUTH;

				$_SESSION['uid'] = $M->listing_form($comp_name, $sal, $first_name, $last_name, 

						$address, $address_2, $city, $state, $zip, $country,$mail_to,$alt,

						$website,$area_code, $phone, $area_code_fax, $fax,

						$email,$month, $how, $how_other, $protype, $note,$listing,0);

				if ($protype)

					header("location:sub2.php?protype=".$protype);

				else

					header("location:sub2.php");

			}//end user check

		}//end else

	}//end error check

}

if($action == "edit") {

	$uid = $_SESSION['uid'];

	$auth = $_SESSION['auth'];

	if (!$uid || $auth != $SUBSCRIBE_AUTH) {

		session_register("np");

	  	$_SESSION['np'] = $PHP_SELF . "?action=edit"; 

		header("location: /member/login.php?t=s");	

	} else {

		if ($uid && $auth == $SUBSCRIBE_AUTH) $DISPLAY = $M->get_info_list($uid);

	}

} else { $DISPLAY = $M->get_info_list(98); }

include $include_path . "lol_header.inc";



?>

<form method="post" action="<?echo $PHP_SELF?>">

<input type="hidden" name="protype" value="<?=$protype ?>">

<input type="hidden" name="uid" value="<?=$DISPLAY['uid']?>">

<TABLE WIDTH="100%" align="center" cellpadding="0" cellspacing="0"> 



			<?if (strlen($ls) > 0 ) echo "<input type=hidden name=ls value=".$ls.">"; 	?>

			

	<TR> 

		<TD COLSPAN="3" class="cellhead">Professional Listing</TD> 

	</TR> 

	 <TR bgcolor="FFFFFF"> 

<?

	if ($protype == "LASN")

		echo "<TD colspan=3 align=center  ><IMG SRC=/imgz/lasn_logo.jpg></TD> ";

	if ($protype == "LCM")

		echo "<TD colspan=3 align=center ><IMG SRC=/imgz/lcm_logo.jpg></TD> ";

	if ($protype == "LOL")

		echo "<TD colspan=3 align=center ><IMG SRC= /imgz/logo.gif></TD> ";

?>

	</TR>

	<tr>

		<td  ALIGN="center" colspan="3" >Fields in

			<FONT COLOR="#ff0000">red</B></font> are required <hr color="#3399ff">

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

				<TD><INPUT NAME="comp_name" SIZE="34"  VALUE="<?=$DISPLAY['comp_name'] ;?>" TABINDEX="1"></TD> 

		</TR> 

		<TR> 

				<TD ALIGN="right"><FONT COLOR="#ff0000"><B>Your Name</B>:

				</TD>

				<td></td> 

			<td>

	

				  <INPUT NAME="first_name" SIZE="10" VALUE="<?=$DISPLAY['first_name']?>" TABINDEX="3">

				  <INPUT NAME="last_name" SIZE="15" VALUE="<?=$DISPLAY['last_name']?>" TABINDEX="4">

			</TD> 

	</TR> 

	<TR> 

			<TD ALIGN="right"  VALIGN="top"><FONT COLOR="#ff0000"><B>Company Address</B>:	

			</TD> 

			<td></td>

			<TD><INPUT NAME="address" SIZE="34"  VALUE="<?=$DISPLAY['address']?>" TABINDEX="5"><BR><INPUT NAME="address_2" 	SIZE="34" VALUE="<?=$DISPLAY['address_2']?>" TABINDEX="6" >

			</TD> 

	</TR> 

		<? $C->pro_state($DISPLAY['city'],$DISPLAY['state'],$DISPLAY['zip']) ?>

	<TR> 

		<TD ALIGN="right"  VALIGN="TOP" ><B>Mail To</B>:

		</TD> 

		<td></td>

		<TD> 

		   <DL> 

				<DT><INPUT TYPE="radio" value="mail to company" name="mail_to" checked  TABINDEX="11">Company address above

				</DT> 

				<DT><INPUT TYPE="radio" value="alternate address" name="mail_to">Alternate address below:

				</DT> 

				

				<DT>

				</DT>	

						<DD><TEXTAREA COLS="19" NAME="alt" ROWS="3" value="<?=$DISPLAY['alt'];?>" TABINDEX="12"><?=$DISPLAY['alt'];?></TEXTAREA>

				</DL></DD></TD> 

	</TR> 

	<TR> 

		<TD ALIGN="right" ><B>website</B>:

		</TD> 

		<td></td>

		<TD><INPUT NAME="website" SIZE="15" VALUE="<?=$DISPLAY['website']?>" TABINDEX="13">

		</TD> 

	</TR> 

	<TR> 

		<TD ALIGN="right" >

				<FONT COLOR="#ff0000"><B>Phone</B>:</font>

		</TD> 

		<td></td>

		<TD><INPUT NAME="area_code" SIZE="3" VALUE="<?=$DISPLAY['area_code']?>" MAXLENGTH="3" TABINDEX="14"><INPUT NAME="phone" SIZE="15" VALUE="<?=$DISPLAY['phone']?>" MAXLENGTH="8" TABINDEX="15">

		</TD> 

	</TR> 

	<TR> 

		<TD ALIGN="right" ><B>FAX</B>:</TD> 

		<td></td>

		<TD><INPUT NAME="area_code_fax" SIZE="3" VALUE="<?=$DISPLAY['area_code_fax']?>" MAXLENGTH="3" TABINDEX="16"><INPUT NAME="fax" SIZE="15" VALUE="<?=$DISPLAY['fax'] ?>" MAXLENGTH="11" TABINDEX="17"></TD> 

	</TR> 

	<TR> 

		<TD ALIGN="right" ><FONT COLOR="#ff0000"><B>Email</B>:</font></TD> 

		<td></td>

		<TD><INPUT NAME="email" SIZE="34"  VALUE="<?=$DISPLAY['email'] ?>" TABINDEX="18"></TD> 

	</TR> 

	<TR> 

		<TD ALIGN="right" ><font  COLOR="#ff0000"><B>Birthday Month</B>:<BR><FONT SIZE="-1">(needed by our auditors)</FONT>

		</TD> 

		<td></td>

		<TD VALIGN="TOP">

				   <SELECT NAME="month" SIZE="1" TABINDEX="19"> 

		<?

          if (strlen($DISPLAY['month']) > 4)    {?>

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

			 <INPUT TYPE="CHECKBOX"	 value="Saw magazine at work" name="how[]" TABINDEX="20">Saw magazine at work

		 </DT>

		 <DT><INPUT TYPE="CHECKBOX"value="Saw magazine at peers office" name="how[]" TABINDEX="21">Saw magazine at peers office

		 </DT>

		 <DT><INPUT TYPE="CHECKBOX"value="LandscapeOnLine.com" name="how[]" TABINDEX="22"> LandscapeOnLine.com

		 </DT> 

		<DT><b> Saw you at the following Trade Show</b>

		</DT> 

			<DD> 

						<SELECT NAME="how[]" SIZE="1" TABINDEX="22"> 

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

		<TD ALIGN="right"  VALIGN="top"><B>Comment Note</B>:</TD> 

		<td></td>

		<TD><TEXTAREA COLS="29" NAME="note" ROWS="3" value="<?=$DISPLAY['note']?>" TABINDEX="23"><?=$DISPLAY['note']?></TEXTAREA>

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

					

			}

		

		?>

						

<TR> 

	<TD  align="center" colspan="3">Step 1 of 4  <INPUT type="submit" value="Continue" TABINDEX="24">

			<INPUT TYPE=RESET name="reset" value="Clear">

	</TD>

</tr>

<tr>

	<td  colspan="3"> * Free subscriptions are based on several criteria, and may be denied at the discretion of the publisher.

	</td>

</tr>

		 <TR> 

		 <TD COLSPAN="3"><!-- mm-bottomreplace --><br><br><hr></TD> 

	  </TR> 

</TABLE>

			</FORM>

			



			 

<? include $include_path . "lol_footer.inc"; ?>

	