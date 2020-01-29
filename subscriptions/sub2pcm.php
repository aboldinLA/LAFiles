<?
include "lol_common.inc";
include $include_path . "class/media_classPcm.inc";
$M = new media_class($db);

if ($REQUEST_METHOD=="POST") {
	$error = "";
	if ($action == "edit") 	$uid = $media_id;
    if (strlen($biz_title_other) == 0)  $biz_title_other = ""; 	
    if (strlen($assoc_other) == 0)		$assoc_other = "";
    if (strlen($does_other) == 0)		$does_other = "";
    if (strlen($am_other) == 0)	$am_other = "";
    if (strlen($sites_other) == 0)	$sites_other = "";
    if (strlen($biz_title) < 2 )	 	$error .= "- Please enter your Title<br>";
    if (strlen($assoc) < 2 && strlen($assoc_other) < 2)		$error .= "- Please enter your Associations<br>";
    if (strlen($overwork_id) < 2)		$error .= "- Work Area<br>";
    if (strlen($acreage_id) < 2)		$error .= "- Work Acreage<br>";
    if (strlen($sites_id) < 2 && strlen($sites_other) < 2)		$error .= "- Work Site<br>";
	
	if (!strlen($error)){  
		//to take check boxes array
 		if (is_array($does)) 	$does = implode(",",$does);
 		if (is_array($assoc)) 	$assoc = implode(",",$assoc);
		if (is_array($am_id)) 	$am_id = implode(",",$am_id);
		if (is_array($overwork_id)) 	$overwork_id = implode(",",$overwork_id);
		if (is_array($acreage_id)) 	$acreage_id = implode(",",$acreage_id);
		if (is_array($sites_id)) 	$sites_id = implode(",",$sites_id);
		if (is_array($authority))	$authority = implode(",",$authority);
		$input = strtotime("now");
        $M->sub2_input($uid, $biz_title, $biz_title_other, $am_id, $am_other, $overwork_id, $acreage_id, $sites_id, $sites_other, $does, $does_other, $assoc, $assoc_other, $authority,$input);
		if ($action == "edit" || $action == "renew")
              header("location:sub3pcm.php?action=".$action."&media_id=$media_id");
		else
             header("location:sub3pcm.php"); 	  
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
	$biz_title_other = $data['biz_title_other'];
	$assoc = explode(",", $data['assoc']);
	$assoc_other = $data['assoc_other'];
	$am_id = explode(",", $data['am_id']);
    $am_other = $data['am_other'];
	$overwork_id = explode(",", $data['area']);
	$acreage_id = explode(",", $data['acres']);
	$sites_id = explode(",", $data['sites_id']);
	$authority = explode(",",$data['auth']);
	$does = explode(",",$data['type_biz']);
	$does_other = $data['type_biz_other'];
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
                	<td><FONT COLOR="#ff0000"><strong>Title:</strong></FONT></td>
                </tr>
				<tr>
					<TD VALIGN="TOP" >
						<?	$M->type_title($biz_title, $protype, 'highlight'); ?>
                        <input type="radio" name="biz_title" <? if ($biz_title_other) echo "checked";?> value="other"> 
						Other : <input type="text" name="biz_title_other" value="<? echo $biz_title_other ?>">
		 			</td>
				</tr>
			</table>
			
			<br></br>
		  	<table>
            	<tr>
                	<td><FONT COLOR="#ff0000"><strong>I Am A:</strong></FONT></td>
                </tr>
				<tr>
					<TD VALIGN="TOP" >
						<?	$M->type_iam($am_id, $protype, 'highlight'); ?>
                        <input type="checkbox" name="am_id[]" <? if ($am_other) echo "checked";?> value="other"> 
						Other : <input type="text" name="am_other" value="<? echo $am_other ?>">
		 			</td>
				</tr>
			</table>

			<br></br>
			<table>
			  	<TR> 
				  	<TD VALIGN="TOP" >
						<FONT COLOR="#ff0000"><B>My authority allows me to:</B></FONT><br />
						<small>(Select all that apply)</small><br>
						<? $M->authority($authority, $protype, 'highlight'); ?>
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
						<input type="radio" name="sites_id[]" <? if ($sites_other) echo "checked";?> value="other"> 
						Other : <input type="text" name="sites_other" value="<? echo $sites_other ?>">
		 			</td>
				</tr>
			</table>

		</td>
		<TD valign=top>
		  	<table>
                <tr>
                	<td><FONT COLOR="#ff0000"><strong>I Am Involved in the Following<br />
Work Areas:</strong></FONT></td>
                </tr>
				<tr>
					<TD VALIGN="TOP" >
						<?	$M->type_does($does, $protype, 'highlight'); ?>
                        <input type="checkbox" name="does[]" <? if ($does_other) echo "checked";?> value="other"> 
						Other : <input type="text" name="does_other" value="<? echo $does_other ?>">
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
		<TD colspan="2" align="center">Step 2 of 4<INPUT  TYPE="SUBMIT"  VALUE="Continue"></TD> 
	</tr>
</TABLE>
	</form>
<? include $include_path . "lol_footer.inc"; ?>
