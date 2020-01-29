<?

include "lol_common.inc";

include $include_path . "class/media_class3.inc";

$M = new media_class($db);



if ($REQUEST_METHOD=="POST") {

	$error = "";

	if ($action == "edit") 	$uid = $media_id;

	if (strlen($biz_title_other) == 0)  $biz_title_other = ""; 	

	if (strlen($assoc_other) == 0)		$assoc_other = "";

    if (strlen($type_am_other) == 0)	$type_am_other = "";

	if (strlen($biz_title) < 2 )	 	$error .= "- Please enter your Title<br>";

	if (strlen($assoc) < 2 && strlen($assoc_other) < 2)		$error .= "- Please enter your Associations<br>";

	if (strlen($reg) < 2)  				$error .= "- Please enter Registered or Certified<br>";

    if (strlen($am_id) < 2 && strlen($type_am_other) < 2)		$error .= "- Please enter Firm/Company/Dept<br>";

    //if (in_array('1',$am_id) && $reg != 'yes') {
    //    $error .= "- You cannot register as a Landscape Architect unless you are a registered Landscape Architect<br />";
    //}
	

	if (!strlen($error)){  

		//to take check boxes array

		if (is_array($assoc)) 	$assoc = implode(",",$assoc);

		if (is_array($am_id)) 	$am_id = implode(",",$am_id);

		if (is_array($authority))	$authority = implode(",",$authority);

		

		$input = strtotime("now");

		 

		$M->sub2_input($uid, $am_id, $biz_title, $biz_title_other, $assoc, 

			$assoc_other, $reg,$type_am_other,$authority,$input,$protype);



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

	$magtit="Tell Us About You...";

	$magimg="lasn_logo.jpg";

} else 	if ($subscribe == "lcm") {

	$magtit="Tell Us About You...";

	$magimg="lcm_logo.jpg";

} else {

	$magtit="Tell Us About You...";

	$magimg="lol_logo_sm.jpg";

}

$secthdr=$magtit;

include  $include_path . "lol_header.inc";



// set values for edit & renew

if ($action == "edit" || $action == "renew") {

	$data = $M->get_info_list($uid);

	$biz_title = $data['biz_title'];

	$assoc = explode(",", $data['assoc']);

	$am_id = explode(",", $data['type_am']);

	$reg = $data['reg'];

	$authority = explode(",",$data['auth']);

	$type_am  = $data['type_am'];

	$biz_title_other = $data['biz_title_other'];

	$assoc_other = $data['assoc_other'];

	$other = $data['type_am_other'];

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

		<td valign='top'>

			<table>

				<tr>

				  <TD VALIGN="TOP" >&nbsp;<FONT

					 COLOR="#ff0000"><B>Title:</B></font><br>

<?

if ( $protype == "c" ){

	$biz_name_3 = "Foreman";

	$biz_name_4 = "Project Manager";

} else {

	$biz_name_3 = "Associate";

	$biz_name_4 = "Public Practice";

}



?>

<? 

if($protype == "s") { 
    $tList = array(
                "Superintendent" => "Superintendent",
                "General Manager" => "General Manager",
                "Facility Manager" => "Facility Manager",
                "Foreman" => "Foreman",
                "Admin/Supervisor/Mgr" => "Admin / Supervisor / Manager"
            );
    foreach($tList as $key => $label) {
        $ch = ($biz_title == $key) ? "checked" : "" ;
        ?><input type="radio" name="biz_title" <?= $ch ?> value="<?= $key ?>" /> <?= $label ?><br /><?
    }
} else { ?>
    <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Sole Owner"){echo "Checked"; } ?> value="Sole Owner" > Sole Owner<BR> 

    <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Partner/Principle"){echo "Checked"; } ?> value="Partner/Principle" > Partner / Principle<BR>

    <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title == $biz_name_3){echo "Checked"; } ?> value="<?=$biz_name_3?>"> <?=$biz_name_3?><BR>

    <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title == $biz_name_4){echo "Checked"; } ?> value="<?=$biz_name_4?>"> <?=$biz_name_4?><BR>

    <INPUT TYPE="RADIO" NAME="biz_title"  <? if ($biz_title =="Superintendent"){echo "Checked"; } ?>value="Superintendent"> Superintendent<BR>

    <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Manager"){echo "Checked"; } ?> value="Manager" > Manager<BR>

    <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Vendor/Supplier/Rep"){echo "Checked"; } ?> value="Vendor/Supplier/Rep"> Vendor/Supplier/Rep<BR>
    <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Educator"){echo "Checked"; } ?> value="Educator" > Educator<BR>

    <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Student"){echo "Checked"; } ?> value="Student" > Student<BR>

<? } ?>
					 <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Other"){echo "Checked"; } ?> value="Other"> Other : 

					 <INPUT TYPE="TEXT" NAME="biz_title_other" value="<?echo $biz_title_other ;?>" SIZE="10">

					 <BR><BR></TD>

			 	</tr>

			</table>


			<table>
			  	<TR> 
				  	<TD VALIGN="TOP" >
                        &nbsp;<FONT COLOR="#ff0000"><B>Associations:</B></font><BR><small>(Please select every assoc. that you belong to)</small>:<br>
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

						<small>(Select all that apply)</small><br>

					

						<?	$M->type_am($am_id, $protype, 'highlight'); ?>

						

						<input type="checkbox" name="am_id[]" <? if ($other) echo "checked";?> value="other"> 

						

						Other : <input type="text" name="type_am_other" value="<?echo $other?>">

		 			</td>

				</tr>

			</table>

		</td>

	</TR>

	<TR> 

		<TD COLSPAN="2"><br></TD> 

	</TR> 

	<TR>

		  <TD VALIGN="TOP" ALIGN="RIGHT">&nbsp;<B>Authority</B>:<BR>
			<small>(Select all that apply)</small></TD>

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

