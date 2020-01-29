<?

include "lol_common.inc";

include $include_path . "class/media_class.inc";

$M = new media_class($db);



if ($REQUEST_METHOD=="POST") {

	$error = "";

	if ($action == "edit") 	$uid = $media_id;

	if (strlen($biz_title_other) == 0)  $biz_title_other = ""; 	

	if (strlen($assoc_other) == 0)		$assoc_other = "";

    if (strlen($type_biz_other) == 0)	$type_biz_other = "";

	if (strlen($biz_title) < 2 )	 	$error .= "- Please enter your Title<br>";

	if (strlen($assoc) < 2 && strlen($assoc_other) < 2)		$error .= "- Please enter your Associations<br>";

	if (strlen($reg) < 2)  				$error .= "- Please enter Registered or Cetified<br>";

    if (strlen($biz_id) < 2 && strlen($type_biz_other) < 2)		$error .= "- Please enter Firm/Company/Dept<br>";

	

	if (!strlen($error)){  

		//to take check boxes array

		if (is_array($assoc)) 	$assoc = implode(",",$assoc);

		if (is_array($biz_id)) 	$biz_id = implode(",",$biz_id);

		if (is_array($authority))	$authority = implode(",",$authority);

		

		$input = strtotime("now");

		 

		$M->sub2_input($uid, $biz_id, $biz_title, $biz_title_other, $assoc, 

			$assoc_other, $reg,$type_biz_other,$authority,$input,$protype);



		if ($action == "edit" || $action == "renew")

              header("location:sub3.php?action=".$action."&media_id=$media_id");

		else

             header("location:sub3.php"); 	  

 	}

 }

$subscribe=$_SESSION['subscribe_list'];

$protype=$_SESSION['protype_list'];

$uid=$_SESSION['uid'];

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

include  $include_path . "lol_header.inc";



// set values for edit & renew

if ($action == "edit" || $action == "renew") {

	$data = $M->get_info_list($uid);

	$biz_title = $data['biz_title'];

	$assoc = explode(",", $data['assoc']);

	$biz_id = explode(",", $data['type_biz']);

	$reg = $data['reg'];

	$authority = explode(",",$data['auth']);

	$type_biz  = $data['type_biz'];

	$biz_title_other = $data['biz_title_other'];

	$assoc_other = $data['assoc_other'];

	$other = $data['type_biz_other'];

	$protype = $data['protype'];



}

?>



<form method="post" action="<?echo $PHP_SELF?>">

<input type="hidden" value="<?echo $uid?>" name="media_id" >

<input type="hidden" value="<?echo $action?>" name="action">

<input type="hidden" value="<?echo $protype?>" name="protype">

<TABLE WIDTH="100%" cellpadding="0" cellspacing="0"> 



	<TR> 

		<TD  COLSPAN="2"  align="center">

			<?  if ($protype) { ?><IMG SRC="/imgz/<?=$protype?>_list.gif"  BORDER="0"><BR><? } ?>

		</TD>

	</TR>

	<TR VALIGN="MIDDLE">

		<TD COLSPAN="2" VALIGN="MIDDLE" ALIGN="CENTER">

		 	

			<BR>

			Fields in <B><FONT COLOR="#ff0000">red</FONT></B>

			are required</FONT><BR><br>

			

		</TD>

	</TR>

	<tr>

		<TD COLSPAN="2" align="center" >

			<? if ($error) $C->errors($error);	?>

		</TD>

	</TR>

	<TR>

		<td>

			<table>

				<tr>

				  <TD VALIGN="TOP" >&nbsp;<FONT

					 COLOR="#ff0000"><B>Title:</B></font><br>

				     <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Sole Owner"){echo "Checked"; } ?> value="Sole Owner" > Sole Owner<BR> 

				     <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Partner/Principle"){echo "Checked"; } ?> value="Partner/Principle" > Partner/Principle<BR>

					 <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Associate"){echo "Checked"; } ?> value="Associate"> Associate<BR>

					 <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Public Practice"){echo "Checked"; } ?> value="Public Practice"> Public Practice<BR>

					 <INPUT TYPE="RADIO" NAME="biz_title"  <? if ($biz_title =="Admin/Supervisor/Mgr"){echo "Checked"; } ?>value="Admin/Supervisor/Mgr"> Admin/Supervisor/Mgr.<BR>

					 <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Academia - Educator"){echo "Checked"; } ?> value="Academia - Educator" > Academia - Educator<BR>

					 <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Academia - Student"){echo "Checked"; } ?> value="Academia - Student"> Academia - Student<BR>

					 <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Other"){echo "Checked"; } ?> value="Other"> Other : 

					 <INPUT TYPE="TEXT" NAME="biz_title_other" value="<?echo $biz_title_other ;?>" SIZE="10">

					 <BR><BR></TD>

			 	</tr>

			</table>

			<table>

			  	<TR> 

				  	<TD VALIGN="TOP" >&nbsp;<FONT COLOR="#ff0000"><B>Associations:</B></font><BR>(Please

					 	select every assoc. that you belong to):<br>

						

					

						<? $M->assoc($assoc, $protype);?>

											

						<input type=checkbox name="assoc[]" <? if ($assoc_other) echo "checked";?> value="other" >

						

						Other: <input type=text name=assoc_other value="<?=$assoc_other?>"><br>

					</TD> 

				</tr>

			</table>

		</td> 

		<TD valign=top>

		  	<table>

				<tr>

					<TD VALIGN="TOP" >

						<FONT COLOR="#ff0000"><B>MyFirm/Company/Dept does:</B></FONT>

						(Select all that apply)<br>

					

						<?	$M->type_biz($biz_id, $protype); ?>

						

						<input type="checkbox" name="biz_id[]" <? if ($other) echo "checked";?> value="other"> 

						

						Other : <input type="text" name="type_biz_other" value="<?echo $other?>">

		 			</td>

				</tr>

			</table>

		</td>

	</TR>

	<TR> 

		<TD COLSPAN="2"><br></TD> 

	</TR> 

	<TR>

		  <TD VALIGN="TOP" ALIGN="RIGHT">&nbsp;<FONT

			 COLOR="#ff0000"><B>Licensed Landscape<BR>

			 Contractor:</B></font></TD>

		  <TD>

		  <INPUT TYPE="RADIO"  NAME="reg"  VALUE="yes"> Yes<BR>

		  <INPUT TYPE="RADIO"  NAME="reg"  VALUE="no" checked> No<BR><BR></TD> 

		  

		</tr><tr>

		

		  <TD VALIGN="TOP" ALIGN="RIGHT">&nbsp;<B>Authority</B>:<BR><FONT

			 SIZE="-1">(Select all that apply)</FONT></TD>

		  <TD>&nbsp;My authority allows me to:<BR>

			<? $M->authority($authority); ?>

		</TD>

		</TR>

	<TR> 

		<TD COLSPAN="2" align="center">

			Step 2 of 4 </FONT>

				<INPUT  TYPE="SUBMIT"  VALUE="Continue">

		 </TD> 

</tr>

</TABLE>

	</form>

<? include $include_path . "lol_footer.inc"; ?>

	