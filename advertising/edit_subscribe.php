<?$include_path = "../../includes/";

include $include_path . "script_head.inc";

include $include_path . "class/media_class.inc";

$M = new media_class($db);





if($REQUEST_METHOD=="POST")

{

		$error = "";



		if(strlen($comp_name) < 3)

		$error .= "- Please enter your Company Name<br>";



		if(strlen($first_name) < 2)

		$error .= "- Please enter your First Name<br>";



		if(strlen($last_name) < 2)

		$error .= "- Please enter your Last Name<br>";



		if(strlen($address) < 2)

		$error .= "- Please enter your Address<br>";



		if(strlen($city) < 3)

		$error .= "- Please enter your City<br>";



		if(strlen($state) < 2)

		$error .= "- Please enter your State<br>";



		if(strlen($zip) < 5)

		$error .= "- Please enter your ZIP code<br>";



		if(strlen($area_code) < 3)

		$error .= "- Please enter your Area code<br>";



		if(strlen($phone) < 7)

		$error .= "- Please enter your Phone Number<br>";



		if(strlen($email) < 5)

		$error .= "- Please enter your Email<br>";



		if(!strlen($error))

		{  



			//to take check boxes array

			if(is_array($how))

			$how = implode(",",$how);





					$M->subscribtion_form_edit($uid, $comp_name, $sal, $first_name, $last_name, $address, $address_2, $city, $state, $zip, $country,$mail_to,$alt_mail, $website,$area_code, $phone, $fax, $email,$month); 

					

					

						

								 

                }//end error check

}// end post

include $include_path . "main_top.inc";

?>



<?

$data = $M->get_info_list($uid);

$comp_name = $data['comp_name'];

$sal = $data['sal'];

$last_name = $data['last_name'];

$first_name = $data['first_name'];

$address = $data['address'];

$address_2 = $data['address_2'];

$city = $data['city'];

$state = $data['state'];

$zip = $data['zip'];

$country = $data['country'];

$address_2 = $data['address_2'];

$alt= $data['alt'];

$area_code = $data['area_code'];

$phone = $data['phone'];

$fax = $data['fax'];

$email = $data['email'];

$month = $data['month'];

$subscribe = $data['subscribe'];



?>



<form method="post" action="<?echo $PHP_SELF?>">

<input type="hidden" name="subscribe" value="<?echo $subscribe?>">

<input type="hidden" name="uid" value="<?echo $uid?>">

	<TABLE BORDER="1"  ALIGN="center" bordercolor="#3399ff" rules="none" cellpadding="5" cellspacing="3" bgcolor="#ffffff">

		<TR> 

			<TD ALIGN="right"><font color="red"><?echo $error?></font> 

			<TABLE CELLPADDING="0" CELLSPACING="0" BORDER="0"	  ALIGN="RIGHT"> 

			<TR> 

			<TD><a href="../help.php"><img src="../image/butt_help.gif" border="0" ></a></TD> 

		</TR> 

	</TABLE> 

			<CENTER><B>Subscription Form</B><BR>Landscape Architect & Specifier News<br> Landscape Contractor Magazine<br><FONT SIZE="-1">Fields in <B><FONT COLOR="#ff0000">red</B></font> are required 

	<TABLE ALIGN="center" CELLPADDING="0" CELLSPACING="0" > 

	<TR> 

		<TD ALIGN="right"><FONT COLOR="#ff0000"><B>Company Name</B>:</TD> 

		<TD></TD> 

		<TD><INPUT NAME="comp_name" SIZE="34"  VALUE="<?echo $comp_name ;?>"></TD> 

		</TR> 

	<TR> 

		<TD ALIGN="right" NOWRAP="NOWRAP"><FONT COLOR="#ff0000"><B>Your Name</B>:</TD> 

		<TD></TD> 

		<TD> 



			<INPUT NAME="first_name" SIZE="10" VALUE="<?echo $first_name?>">

			<INPUT NAME="last_name" SIZE="15" VALUE="<?echo $last_name?>"></TD> 

	</TR> 

	<TR> 

		<TD ALIGN="right" NOWRAP="NOWRAP" VALIGN="top"><FONT COLOR="#ff0000"><B>Company Address</B>:</TD> 

		<TD></TD> 

		<TD><INPUT NAME="address" SIZE="34"

		VALUE="<?echo $address?>"><BR><INPUT NAME="address_2" SIZE="34" VALUE="<?echo $address_2?>"></TD> 

	</TR> 

	<TR> 

		<TD ALIGN="right" NOWRAP="NOWRAP"><FONT COLOR="#ff0000"><B>Company City, State ZIP</B></TD> 

		<TD></TD> 

		<TD><INPUT NAME="city" SIZE="17"  VALUE="<?echo $city?>"> 

				<SELECT NAME="state" SIZE="1"> 

				<OPTION VALUE="<?echo $state?>"><?echo $state?></OPTION> 

				<OPTION VALUE="AK">AK</OPTION> 

				<OPTION VALUE="AL">AL</OPTION> 

				<OPTION VALUE="AR">AR</OPTION> 

				<OPTION VALUE="AZ">AZ</OPTION> 

				<OPTION VALUE="CA">CA</OPTION> 

				<OPTION VALUE="CO">CO</OPTION> 

				<OPTION VALUE="CT">CT</OPTION> 

				<OPTION VALUE="DE">DE</OPTION> 

				<OPTION VALUE="FL">FL</OPTION> 

				<OPTION VALUE="GA">GA</OPTION> 

				<OPTION VALUE="HI">HI</OPTION> 

				<OPTION VALUE="IA">IA</OPTION> 

				<OPTION VALUE="ID">ID</OPTION> 

				<OPTION VALUE="IL">IL</OPTION> 

				<OPTION VALUE="IN">IN </OPTION> 

				<OPTION VALUE="KS">KS</OPTION> 

				<OPTION VALUE="KY">KY</OPTION> 

				<OPTION VALUE="LA">LA</OPTION> 

				<OPTION VALUE="MA">MA</OPTION> 

				<OPTION VALUE="MD">MD</OPTION> 

				<OPTION VALUE="ME">ME</OPTION> 

				<OPTION VALUE="MI">MI</OPTION> 

				<OPTION VALUE="MN">MN</OPTION> 

				<OPTION VALUE="MO">MO</OPTION> 

				<OPTION VALUE="MS">MS</OPTION> 

				<OPTION VALUE="MT">MT</OPTION> 

				<OPTION VALUE="NC">NC</OPTION> 

				<OPTION VALUE="ND">ND</OPTION> 

				<OPTION VALUE="NE">NE</OPTION> 

				<OPTION VALUE="NH">NH</OPTION> 

				<OPTION VALUE="NJ">NJ</OPTION> 

				<OPTION VALUE="NM">NM</OPTION> 

				<OPTION VALUE="NV">NV</OPTION> 

				<OPTION VALUE="NY">NY</OPTION> 

				<OPTION VALUE="OH">OH</OPTION> 

				<OPTION VALUE="OK">OK</OPTION> 

				<OPTION VALUE="OR">OR</OPTION> 

				<OPTION VALUE="PA">PA</OPTION> 

				<OPTION VALUE="RI">RI</OPTION> 

				<OPTION VALUE="SD">SD</OPTION> 

				<OPTION VALUE="SC">SC</OPTION> 

				<OPTION VALUE="TN">TN</OPTION> 

				<OPTION VALUE="TX">TX</OPTION> 

				<OPTION VALUE="UT">UT</OPTION> 

				<OPTION VALUE="VA">VA</OPTION> 

				<OPTION VALUE="VT">VT</OPTION> 

				<OPTION VALUE="WA">WA</OPTION> 

				<OPTION VALUE="WI">WI</OPTION> 

				<OPTION VALUE="WV">WV</OPTION> 

				<OPTION VALUE="WY">WY</OPTION> 

				</SELECT>

			<INPUT NAME="zip" SIZE="7" VALUE="<?echo $zip?>"></TD> 

	</TR> 

	<TR> 

		<TD ALIGN="right" NOWRAP="NOWRAP"><B>Country</B>:</TD> 

		<TD></TD> 

		<TD><INPUT NAME="country" SIZE="10" VALUE="<?echo $country;?>"></TD> 

		</TR> 

	<TR> 

		<TD ALIGN="right" NOWRAP="NOWRAP" VALIGN="TOP"><B>Mail To</B>:</TD> 

		<TD WIDTH="10"></TD> 

		<TD> 

		<DL> 

		<DT><INPUT TYPE="radio" value="mail to company " name="mail_to"> Company address above</DT> 

		<DT><INPUT TYPE="radio"value="LandscapeOnLine.com" name="mail_to"> Alternate address below:</DT> 

		<DT></DT><DD><TEXTAREA COLS="19" NAME="alt" ROWS="3" value="<?echo $alt;?>"><?echo $alt;?></TEXTAREA>

		</DL></DD></TD> 

	</TR> 

	<TR> 

	<TR> 

		<TD ALIGN="right" NOWRAP="NOWRAP"><B>website</B>:</TD> 

		<TD></TD> 

		<TD><INPUT NAME="website" SIZE="15" VALUE="<?echo $website?>">

		</TD> 

	</TR> 

	<TR> 

		<TD ALIGN="right" NOWRAP="NOWRAP">

		<FONT COLOR="#ff0000"><B>Phone</B>:</font></TD> 

		<TD></TD> 

		<TD><INPUT NAME="area_code" SIZE="3" VALUE="<?echo $area_code?>" MAXLENGTH="3"><INPUT NAME="phone" SIZE="15" VALUE="<?echo $phone?>" MAXLENGTH="8" >

		</TD> 

	</TR> 

	<TR> 

		<TD ALIGN="right" NOWRAP="NOWRAP"><B>FAX</B>:</TD> 

		<TD WIDTH="10"></TD> 

		<TD><INPUT NAME="fax" SIZE="15" VALUE="<?echo $fax;?>" MAXLENGTH="11"></TD> 

	</TR> 

	<TR> 

		<TD ALIGN="right" NOWRAP="NOWRAP"><FONT COLOR="#ff0000"><B>Email</B>:</font></TD> 

		<TD></TD> 

		<TD><INPUT NAME="email" SIZE="34"	  VALUE="<?echo $email;?>"></TD> 

		</TR> 

	<TR> 

		<TD ALIGN="right" NOWRAP="NOWRAP"><font  COLOR="#ff0000"><B>Birthday Month</B>:<BR><FONT SIZE="-1">(needed by our

		auditors)</FONT></TD> 

		<TD></TD> <TD VALIGN="TOP"> 

				<SELECT NAME="month" SIZE="1"> 

				<OPTION VALUE="<? echo $month  ?>"><? echo $month  ?></OPTION> 

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

				</SELECT></TD> 

	</TR> 

	<TR > 

		<TD colspan="3" nowrap align="center"> <INPUT type="submit" action="edit" value="edit"></FORM><br>

		<a href="../index.php"><img src="../image/butt_home.gif" border="0"></a>

		</TD>

	</tr>

</TABLE> 

</TABLE>

<?

include $include_path . "main_bottom.inc";

?>