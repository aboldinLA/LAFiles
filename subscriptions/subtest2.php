<?
include "lol_common.inc";
include $include_path . "class/media_class4.inc";
$M = new media_class($db);

if ($REQUEST_METHOD=="POST") {
	$error = "";
	if ($action == "edit") 	$uid = $media_id;
    if (strlen($biz_title_other) == 0)  $biz_title_other = ""; 	
    if (strlen($assoc_other) == 0)		$assoc_other = "";
    if (strlen($type_biz1_other) == 0)	$type_biz1_other = "";
    if (strlen($type_biz2_other) == 0)	$type_biz2_other = "";
    if (strlen($type_biz3_other) == 0)	$type_biz3_other = "";
    if (strlen($type_biz4_other) == 0)	$type_biz4_other = "";
    if (strlen($type_biz5_other) == 0)	$type_biz5_other = "";
    if (strlen($type_biz6_other) == 0)	$type_biz6_other = "";
    if (strlen($type_biz7_other) == 0)	$type_biz7_other = "";
    if (strlen($type_biz8_other) == 0)	$type_biz8_other = "";
    if (strlen($type_biz9_other) == 0)	$type_biz9_other = "";
    if (strlen($type_am_other) == 0)	$type_am_other = "";
    if (strlen($type_am2_other) == 0)	$type_am2_other = "";
    if (strlen($type_am3_other) == 0)	$type_am3_other = "";
    if (strlen($type_am4_other) == 0)	$type_am4_other = "";
    if (strlen($type_overwork_other) == 0)	$type_overwork_other = "";
    if (strlen($type_acreage_other) == 0)	$type_acreage_other = "";
    if (strlen($type_sites_other) == 0)	$type_sites_other = "";
    if (strlen($biz_title) < 2 )	 	$error .= "- Please enter your Title<br>";
    if (strlen($assoc) < 2 && strlen($assoc_other) < 2)		$error .= "- Please enter your Associations<br>";
   if (strlen($overwork_id) < 2 && strlen($type_overwork_other) < 2)		$error .= "- Work Area<br>";
    if (strlen($acreage_id) < 2 && strlen($type_acreage_other) < 2)		$error .= "- Work Acreage<br>";
    if (strlen($sites_id) < 2 && strlen($type_sites_other) < 2)		$error .= "- Work Site<br>";
	
	if (!strlen($error)){  
		//to take check boxes array
		if (is_array($assoc)) 	$assoc = implode(",",$assoc);
		if (is_array($biz1_id)) 	$biz1_id = implode(",",$biz1_id);
		if (is_array($biz2_id)) 	$biz2_id = implode(",",$biz2_id);
		if (is_array($biz3_id)) 	$biz3_id = implode(",",$biz3_id);
		if (is_array($biz4_id)) 	$biz4_id = implode(",",$biz4_id);
		if (is_array($biz5_id)) 	$biz5_id = implode(",",$biz5_id);
		if (is_array($biz6_id)) 	$biz6_id = implode(",",$biz6_id);
		if (is_array($biz7_id)) 	$biz7_id = implode(",",$biz7_id);
		if (is_array($biz8_id)) 	$biz8_id = implode(",",$biz8_id);
		if (is_array($biz9_id)) 	$biz9_id = implode(",",$biz9_id);
		if (is_array($am_id)) 	$am_id = implode(",",$am_id);
		if (is_array($am2_id)) 	$am2_id = implode(",",$am2_id);
		if (is_array($am3_id)) 	$am3_id = implode(",",$am3_id);
		if (is_array($am4_id)) 	$am4_id = implode(",",$am4_id);
		if (is_array($overwork_id)) 	$overwork_id = implode(",",$overwork_id);
		if (is_array($acreage_id)) 	$acreage_id = implode(",",$acreage_id);
		if (is_array($sites_id)) 	$sites_id = implode(",",$sites_id);
		if (is_array($authority))	$authority = implode(",",$authority);
		
		$input = strtotime("now");
		 
		$M->sub2_input($uid, $type_biz1, $biz1_title, $biz1_title_other, $type_biz2, $biz2_title, $biz2_title_other, $type_biz3, $biz3_title, $biz3_title_other, $type_biz4, $biz4_title, $biz4_title_other, $type_biz5, $biz5_title, $biz5_title_other, $type_biz6, $biz6_title, $biz6_title_other, $type_biz7, $biz7_title, $biz7_title_other, $type_biz8, $biz8_title, $biz8_title_other, $type_biz9, $biz9_title, $biz9_title_other, $type_am, $am_title, $am_title_other, $type_am2, $am2_title, $am2_title_other, $type_am3, $am3_title, $am3_title_other, $type_am4, $am4_title, $am4_title_other, $type_overwork, $overwork_title, $overwork_title_other, $type_acreage, $acreage_title, $acreage_title_other, $type_sites, $sites_title, $sites_title_other, $assoc, $assoc_other, $type_biz1_other, $type_biz2_other, $type_biz3_other, $type_biz4_other, $type_biz5_other, $type_biz6_other, $type_biz7_other, $type_biz8_other, $type_biz8_other, $type_am_other, $type_am2_other, $type_am3_other, $type_am4_other, $type_overwork_other, $type_acreage_other, $type_sites_other, $auth, $input, $protype);

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
	$biz1_id = explode(",", $data['type_biz1']);
	$biz2_id = explode(",", $data['type_biz2']);
	$biz3_id = explode(",", $data['type_biz3']);
	$biz4_id = explode(",", $data['type_biz4']);
	$biz5_id = explode(",", $data['type_biz5']);
	$biz6_id = explode(",", $data['type_biz6']);
	$biz7_id = explode(",", $data['type_biz7']);
	$biz8_id = explode(",", $data['type_biz8']);
	$biz9_id = explode(",", $data['type_biz9']);
	$am_id = explode(",", $data['type_am']);
	$am2_id = explode(",", $data['type_am2']);
	$am3_id = explode(",", $data['type_am3']);
	$am4_id = explode(",", $data['type_am4']);
	$overwork_id = explode(",", $data['type_overwork']);
	$acreage_id = explode(",", $data['type_acreage']);
	$sites_id = explode(",", $data['type_sites']);
	$authority = explode(",",$data['auth']);
	$type_biz1  = $data['type_biz1'];
	$type_biz2  = $data['type_biz2'];
	$type_biz3  = $data['type_biz3'];
	$type_biz4  = $data['type_biz4'];
	$type_biz5  = $data['type_biz5'];
	$type_biz6  = $data['type_biz6'];
	$type_biz7  = $data['type_biz7'];
	$type_biz8  = $data['type_biz8'];
	$type_biz9  = $data['type_biz9'];
	$type_am  = $data['type_am'];
	$type_am2  = $data['type_am2'];
	$type_am3  = $data['type_am3'];
	$type_am4  = $data['type_am4'];
	$type_overwork  = $data['type_overwork'];
	$type_acreage  = $data['type_acreage'];
	$type_sites  = $data['type_sites'];
	$biz_title_other = $data['biz_title_other'];
	$assoc_other = $data['assoc_other'];
	$other = $data['type_biz_other'];
	$other2 = $data['type_am_other'];
	$other3 = $data['type_overwork_other'];
	$other4 = $data['type_acreage_other'];
	$other5 = $data['type_sites_other'];
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
	$biz_name_3 = "Associate";
	$biz_name_4 = "Public Practitioner";
} else {
	$biz_name_3 = "Associate";
	$biz_name_4 = "Public Practitioner";
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
    <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Partner/Principal"){echo "Checked"; } ?> value="Partner/Principal" > Partner/Principal<BR>
    <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title == $biz_name_3){echo "Checked"; } ?> value="<?=$biz_name_3?>"> <?=$biz_name_3?><BR>
    <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title == $biz_name_4){echo "Checked"; } ?> value="<?=$biz_name_4?>"> <?=$biz_name_4?><BR>
    <INPUT TYPE="RADIO" NAME="biz_title"  <? if ($biz_title =="Superintendent"){echo "Checked"; } ?>value="Superintendent"> Superintendent<BR>
    <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Manager"){echo "Checked"; } ?> value="Manager" > Manager<BR>
    <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Foreman"){echo "Checked"; } ?> value="Foreman" > Foreman<BR>
    <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Crew Member"){echo "Checked"; } ?> value="CrewMember" > Crew Member<BR>
    <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Vendor/Supplier/Rep"){echo "Checked"; } ?> value="Vendor/Supplier/Rep"> Vendor/Supplier/Rep<BR>
    <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Educator"){echo "Checked"; } ?> value="Educator" > Educator<BR>
    <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Student"){echo "Checked"; } ?> value="Student" > Student<BR>
<? } ?>
					 <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Other"){echo "Checked"; } ?> value="Other"> Other : 
					 <INPUT TYPE="TEXT" NAME="biz_title_other" value="<?echo $biz_title_other ;?>" SIZE="10">
					 <BR><BR></TD>
			 	</tr>
			</table>

			<br></br>
		  	<table>
            	<tr>
                	<td><strong>I Am A:</strong></td>
                </tr>
				<tr>
					<TD VALIGN="TOP" >
						<FONT COLOR="#153bb6"><B>Designer:</B></FONT>
						<small>(Select all that apply)</small><br>
					
						<?	$M->type_am($am_id, $protype, 'highlight'); ?>
						
		 			</td>
					<td>
				</tr>
			</table>
		  	<table>
				<tr>
					<TD VALIGN="TOP" >
						<FONT COLOR="#153bb6"><B>Contractor:</B></FONT>
						<small>(Select all that apply)</small><br>
					
						<?	$M->type_am2($am2_id, $protype, 'highlight'); ?>
						
					</td>
				</tr>
			</table>
		  	<table>
				<tr>
					<TD VALIGN="TOP" >
						<FONT COLOR="#153bb6"><B>Maintenance Professional:</B></FONT><br />
						<small>(Select all that apply)</small><br>
					
						<?	$M->type_am3($am3_id, $protype, 'highlight'); ?>
						
		 			</td>
				</tr>
			</table>
		  	<table>
				<tr>
					<TD VALIGN="TOP" >
						<FONT COLOR="#153bb6"><B>Related Professional:</B></FONT>
						<small>(Select all that apply)</small><br>
					
						<?	$M->type_am4($am4_id, $protype, 'highlight'); ?>
						<input type="checkbox" name="am4_id[]" <? if ($other) echo "checked";?> value="other"> 

						

						Other : <input type="text" name="type_am4_other" value="<?echo $other?>">

		
		 			</td>
				</tr>
			</table>



			<br></br>
			<table>
			  	<TR> 
				  	<TD VALIGN="TOP" >
                        &nbsp;<FONT COLOR="#ff0000"><B>Authority</B>:</font>&nbsp;My authority allows me to:<BR><small>(Select all that apply)</small>:<br>
						<? $M->authority($authority); ?>
					</TD> 
				</tr>
			</table>
			<br></br>
		  	<table>
				<tr>
					<TD VALIGN="TOP" >
						<FONT COLOR="#ff0000"><B>Over 10% of My Company's or Department's Work:</B></FONT><br />
						<small>(Select all that apply)</small><br>
					
						<?	$M->type_overwork($overwork_id, $protype, 'highlight'); ?>
		 			</td>
				</tr>
			</table>
			<br></br>
		  	<table>
				<tr>
					<TD VALIGN="TOP" >
						<FONT COLOR="#ff0000"><B>The Annual Acreage My Company or Departments Works On is:</B></FONT>
						<small>(Select One)</small><br>
					
						<?	$M->type_acreage($acreage_id, $protype, 'highlight'); ?>
		 			</td>
				</tr>
			</table>
			<br></br>
		  	<table>
				<tr>
					<TD VALIGN="TOP" >
						<FONT COLOR="#ff0000"><B>My Company or Departments is:</B></FONT>
						<small>(Select One)</small><br>
					
						<?	$M->type_sites($sites_id, $protype, 'highlight'); ?>
						
						<input type="radio" name="sites_id[]" <? if ($other5) echo "checked";?> value="other"> 
						
						Other : <input type="text" name="type_sites_other" value="<?echo $other?>">
		 			</td>
				</tr>
			</table>

		</td>
		<TD valign=top>
		  	<table>
                <tr>
                	<td><strong>I Am Involved in the Following<br />
Work Areas:</strong></td>
                </tr>
				<tr>
					<TD VALIGN="TOP" >
						<FONT COLOR="#153bb6"><B>Design Functions:</B></FONT>
						<small>(Select all that apply)</small><br>
					
						<?	$M->type_biz1($biz1_id, $protype, 'highlight'); ?>
						
		 			</td>
				</tr>
			</table>
		  	<table>
				<tr>
					<TD VALIGN="TOP" >
						<FONT COLOR="#153bb6"><B>Planners:</B></FONT>
						<small>(Select all that apply)</small><br>
					
						<?	$M->type_biz2($bi2z_id, $protype, 'highlight'); ?>
						
		 			</td>
				</tr>
			</table>            
		  	<table>
				<tr>
					<TD VALIGN="TOP" >
						<FONT COLOR="#153bb6"><B>Development Functions:</B></FONT><br />
						<small>(Select all that apply)</small><br>
					
						<?	$M->type_biz3($bi3z_id, $protype, 'highlight'); ?>
						
		 			</td>
				</tr>
			</table>        
		  	<table>
				<tr>
					<TD VALIGN="TOP" >
						<FONT COLOR="#153bb6"><B>Earth Science:</B></FONT>
						<small>(Select all that apply)</small><br>
					
						<?	$M->type_biz4($biz4_id, $protype, 'highlight'); ?>
						
		 			</td>
				</tr>
			</table>        
		  	<table>
				<tr>
					<TD VALIGN="TOP" >
						<FONT COLOR="#153bb6"><B>Bulding Management:</B></FONT><br />
						<small>(Select all that apply)</small><br>
					
						<?	$M->type_biz5($biz5_id, $protype, 'highlight'); ?>
						
		 			</td>
				</tr>
			</table>        
		  	<table>
				<tr>
					<TD VALIGN="TOP" >
						<FONT COLOR="#153bb6"><B>Installation Functions:</B></FONT><br />
						<small>(Select all that apply)</small><br>
					
						<?	$M->type_biz6($biz6_id, $protype, 'highlight'); ?>
						
		 			</td>
				</tr>
			</table>        
		  	<table>
				<tr>
					<TD VALIGN="TOP" >
						<FONT COLOR="#153bb6"><B>Water Features:</B></FONT>
						<small>(Select all that apply)</small><br>
					
						<?	$M->type_biz7($biz7_id, $protype, 'highlight'); ?>
						
		 			</td>
				</tr>
			</table> 
		  	<table>
				<tr>
					<TD VALIGN="TOP" >
						<FONT COLOR="#153bb6"><B>Maintenance Functions:</B></FONT><br />
						<small>(Select all that apply)</small><br>
					
						<?	$M->type_biz8($biz8_id, $protype, 'highlight'); ?>
						
		 			</td>
				</tr>
			</table> 
		  	<table>
				<tr>
					<TD VALIGN="TOP" >
						<FONT COLOR="#153bb6"><B>Specialties:</B></FONT>
						<small>(Select all that apply)</small><br>
					
						<?	$M->type_biz9($biz9_id, $protype, 'highlight'); ?>
						
						<input type="checkbox" name="biz9_id[]" <? if ($other) echo "checked";?> value="other"> 

						

						Other : <input type="text" name="type_biz9_other" value="<?echo $other?>">


		 			</td>
				</tr>
			</table> 


			<br></br>
			<table>
			  	<TR> 
				  	<TD VALIGN="TOP" >
                        &nbsp;<FONT COLOR="#ff0000"><B>Associations:</B></font><BR><small>(Please select every assoc. that you<br />
belong to)</small>:<br>
						<? $M->assoc($assoc, $protype);?>
						<input type=checkbox name="assoc[]" <? if ($assoc_other) echo "checked";?> value="other" >
						Other: <input type=text name=assoc_other value="<?=$assoc_other?>"><br>
					</TD> 
				</tr>
			</table>
			<br></br>
			<br></br>
		</td>
	</TR>
	<TR>
	 
		<TD colspan="2" align="center">
			Step 2 of 4
		<INPUT  TYPE="SUBMIT"  VALUE="Continue">
		</TD> 
	</tr>
</TABLE>
	</form>
<? include $include_path . "lol_footer.inc"; ?>
