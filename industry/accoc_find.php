<?

include "lol_common.inc";

include $include_path . "class/industry_class.inc";



$I = new industry_Class($db);



if($REQUEST_METHOD=="POST")

{

    $error = "";



	if(strlen($search) < 2)

		$error .= "- Please enter a search choise<br>";

	

	if ($search == "acronym") 

		{

		 if(!is_numeric($acro))

		   $error.="You must enter one acronym";

		 }	 

	if ($search == "name") 

		{

		if (strlen($association) == 0 || $association == "Enter Name") 

          $error.="You must enter a name";

		}	 

	if ($search == "membership") 

		{ 

		   if(!is_numeric($members))

		    $error.="You must enter membership category";

		 }	   

	  if(!strlen($error))

	  {

					 if ($check == "national") 

						{$first = "AND local = 'national' "; 

					      $local = "National";

						  $area = "";}	 

					if ($check == "state") 

						{$first = "AND local = 'national' AND state = '".$state."'";

					      $local = "State";

						  $area = $state;}	

					if ($check == "city") 

						{$first = "AND local = 'national' AND city = '".$citys."'";

					       $local = "City";

						   $area = $citys;}	   

					 

					 if ($search == "acronym") 

						{$last = "id = '".$acro."'"; 

					      $cat ="";  }	 

					if ($search == "name") 

						{$last = "association LIKE  '%".$association."%'";

					      $cat ="";}	 

					if ($search == "membership") 

						{$last = "subtype_id like '%".$members."%'";

					      $cat = $members;}	   

								

								

								$action = "view";



	  }//end error



 }// end post

include $include_path . "lol_header.inc";

if ($action == "doi")

{?>



<TABLE ALIGN="center" CELLPADDING="5" WIDTH="75%"	 CELLSPACING="3" > 

	<tr>

		<td align="center"colspan="2"><b>Whould you like to list your association on LandscapeOnLine.com ?</b></td>

	</tr>

	<tr>

		<td>If yes you must have all revant information and click continue</td>

   </tr>

   <tr>

		<td>Not at this time click Go Back</a></td>

   </tr>

	<tr>

		<td ><a href="associat_list">Continue</a></td>

		<td align="center"><a href="accoc_find.php">Go Back</a></td>

   </tr>

</table>



<?}else{?>

<?

if ($action == "view")

{

  $I->find_ass($local,$area,$cat,$first,$last);

?>

<table width="75%"  align="center"	 CELLSPACING="3" >

	<tr>

		<td align="center" ><a href="accoc_find.php?action=edit">Change Search</a></td>

		<td align="center"><a href="accoc_find.php?action=doi"">My Association is not listed</a></td>

   </tr>

</table>

<?}else{?>

<?if ($action == "edit")

{

$data = $I->association_info($uid);



}

?>



<FORM METHOD="post" ACTION="<?echo $PHP_SELF?>">

  <input type="hidden"  name="uid" value=<?echo $uid?>>

<input type="hidden" name="type_event" value="meeting">

<TABLE ALIGN="center" CELLPADDING="0" WIDTH="100%" CELLSPACING="0" > 

	<TR> 

	 <TD class="cellhead" COLSPAN="5">	Association Search</TD> 

	</TR> 

	 <TR>

			 <TD VALIGN="BOTTOM"COLSPAN="5"><strong>Step 1:</strong>&nbsp;&nbsp; Please select one of

				the three geographical areas for your search.</TD>

  </TR>

  <TR>

			 <TD VALIGN="MIDDLE">

			 <INPUT TYPE="RADIO" NAME="check" VALUE="national" CHECKED="CHECKED">

			 <B>National Association</B><BR>

			 <INPUT TYPE="RADIO" NAME="check" VALUE="state"><B>State</B>: 

				  <SELECT NAME="state" SIZE="1"> 

				  <OPTION VALUE=""></OPTION> 

				  <OPTION VALUE="AB">AB</OPTION> 

							<OPTION VALUE="AK">AK</OPTION> 

							<OPTION VALUE="AL">AL</OPTION> 

							<OPTION VALUE="AR">AR</OPTION> 

							<OPTION VALUE="AZ">AZ</OPTION> 

							<OPTION VALUE="BC">BC</OPTION> 

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

							<OPTION VALUE="IN">IN</OPTION> 

							<OPTION VALUE="KS">KS</OPTION> 

							<OPTION VALUE="KY">KY</OPTION> 

							<OPTION VALUE="LA">LA</OPTION> 

							<OPTION VALUE="MA">MA</OPTION> 

							<OPTION VALUE="MB">MB</OPTION> 

							<OPTION VALUE="MD">MD</OPTION> 

							<OPTION VALUE="ME">ME</OPTION> 

							<OPTION VALUE="MI">MI</OPTION> 

							<OPTION VALUE="MN">MN</OPTION> 

							<OPTION VALUE="MO">MO</OPTION> 

							<OPTION VALUE="MS">MS</OPTION> 

							<OPTION VALUE="MT">MT</OPTION> 

							<OPTION VALUE="NB">NB</OPTION>

							<OPTION VALUE="NC">NC</OPTION> 

							<OPTION VALUE="ND">ND</OPTION> 

							<OPTION VALUE="NE">NE</OPTION> 

							<OPTION VALUE="NF">NF</OPTION>

							<OPTION VALUE="NH">NH</OPTION> 

							<OPTION VALUE="NJ">NJ</OPTION> 

							<OPTION VALUE="NM">NM</OPTION> 

							<OPTION VALUE="NV">NV</OPTION>

							<OPTION VALUE="NS">NS</OPTION>

							<OPTION VALUE="NT">NT</OPTION>

							<OPTION VALUE="NU">NU</OPTION> 

							<OPTION VALUE="NY">NY</OPTION> 

							<OPTION VALUE="OH">OH</OPTION> 

							<OPTION VALUE="OK">OK</OPTION> 

							<OPTION VALUE="OR">OR</OPTION> 

							<OPTION VALUE="PA">PA</OPTION> 

							<OPTION VALUE="PE">PE</OPTION>

							<OPTION VALUE="QB">QB</OPTION>

							<OPTION VALUE="RI">RI</OPTION> 

							<OPTION VALUE="SC">SC</OPTION> 

							<OPTION VALUE="SD">SD</OPTION> 

							<OPTION VALUE="SK">SK</OPTION> 

							<OPTION VALUE="TN">TN</OPTION> 

							<OPTION VALUE="TX">TX</OPTION> 

							<OPTION VALUE="UT">UT</OPTION> 

							<OPTION VALUE="VA">VA</OPTION> 

							<OPTION VALUE="VT">VT</OPTION> 

							<OPTION VALUE="WA">WA</OPTION> 

							<OPTION VALUE="WI">WI</OPTION> 

							<OPTION VALUE="WV">WV</OPTION> 

							<OPTION VALUE="WY">WY</OPTION> 

							<OPTION VALUE="YK">YK</OPTION>			

				</SELECT><br>

			 <INPUT TYPE="RADIO" NAME="check" VALUE="city"><B>Local Chapter</B>(city)

			<INPUT TYPE="TEXT" NAME="citys"   VALUE="<?echo $citys?>" SIZE="12"></TD>

		  </TR>

	<tr>

		<TD COLSPAN="5" ALIGN="center">

<? if ($error) $C->errors($error); ?>

			</td>

		</tr>

		<tr>

			<td colspan="5">

<table>

	<tr>

		<td colspan="3"><strong>Step 2: </strong>&nbsp;&nbsp;Search:

		</td>

	</tr>

	<tr>

		<td><input type="radio" name="search" value="acronym"></td>

		<td><b>Acronym</b><br>Select one only</td>

		<td><? $I->assoc_pick(); ?></td>

	</tr>

	<tr>

		<td><input type="radio" name="search" value="name"></td>

		<td><b>Name</b></td>

		<?if (strlen($name) == 0 )

		{?>

		    <td><input type="text" name="association" value="Enter Name"></td>

		<?}else{?>

		<td><input type="text" name="association" value="<?echo $association ?>"></td>

		<?}?>

	</tr>

	<tr>

		<td><input type="radio" name="search" value="membership"></td>

		<td><b>Membership Category</b><br>Select one only</td>

		<td><? $I->member_pick();?></td>

	</tr>

</TABLE>

     </td>

	 </tr>

		

		<tr>

			<td align="center" colspan="5"><INPUT type="submit"  VALUE="Enter" name="enter">

			</td>

		</tr></FORM>



</table>

<?}?>		

<?}?>	

<? include $include_path . "lol_footer.inc"; ?>

	