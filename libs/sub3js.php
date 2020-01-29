<?
include "lol_common.inc";
include $include_path . "class/media_class.inc";

$M = new media_class($db);

if($REQUEST_METHOD=="POST")	{
	$error = "";
	if (strlen($ylist) < 2 ) $error .= "- Please enter at least one product<br>";
	if (!strlen($error)) {  
		if ($action == "edit") 		$uid = $media_id;
		if (strlen($ebull) < 1)		$ebull = "yes";
		//to take check boxes array
		if (is_array($ylist)) $ylist = implode(",",$ylist);	
		if (is_array($needs)) $needs = implode(",",$needs);
        $M->pro_int($ylist, $needs ,$ebull ,$uid);
		if ($action == "edit" || $action == "renew") {
			$data= $M->get_info_list($media_id);
			$goto = $data['pay_link'];
	
			if ($goto == "yes")	{
    			header("location: thank_you.php?media_id=$media_id&action=".$action);
   			} else {
      			header("location: list.php?action=edit&media_id=$media_id");
    		}
		}
		if ($action == !"edit")
			header("location: list.php?protype=". $protype);
	}
}	
$subscribe =$_SESSION['subscribe_list'];
$protype=$_SESSION['protype_list'];
$uid=$_SESSION['uid'];
	// set values for edit & renew
	if ($action == "edit" || $action == "renew") {
		$data = $M->get_info_list($uid);
		$ylist = explode(",", $data['ylist_id']);
		$needs = explode(",", $data['needs']);
	}



include  $include_path . "lol_header2.inc";
?>

<form method="post" action="<?echo $PHP_SELF?>">
<input type="hidden" value="<?echo $media_id?>" name="media_id" >
<input type="hidden" value="<?echo $action?>" name="action" >
<input type="hidden" value="<?echo $protype?>" name="protype" >

	<div style="position:absolute; left:125px; top:95px; padding:0px; width:475px">
            <img src="https://landscapearchitect.com/subscriptions/images/sub3-back.jpg">
    </div>

<div style="position:absolute; left:150px; top:225px; padding:0px; width:500px; height:30px">
<TABLE WIDTH="100%"  VALIGN="top" align="center"> 
    <TR> 
		<TD ALIGN="center" colspan="2">
		<?  if ($error) $C->errors($error); ?>	
		</td>
	</tr>
	<TR> 
		<TD ALIGN="center" colspan="2"> 
 			To receive Brochures and/or Product Information from LandscapeOnline vendors just check the <br>appropriate box(es) below then hit the 
			"Continue" button at the bottom of the page.<br><br>If you do not wish to receive Product Information simply scroll to the <br>bottom of this page and hit the "Continue" button.
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<?	$M->table($ylist, $protype); ?>

		</td>
	</tr>
	<TR>
		<td colspan="3">
			<TABLE CELLPADDING="0" CELLSPACING="0" align="center"> 
					<TR> 
						<TD NOWRAP="NOWRAP" ALIGN="LEFT"> 
								<DL> 
							<DT>I need the information for (check all that apply):</DT> 
							<?
									
									if (!$action == "edit" || !$error) 
									{$needs[] = "";}
			
			
								echo "<DD><input type=checkbox name=needs[] value=current_project ".
								(in_array("current_project",$needs)?"checked":"") .
								">Current Project</DD> ";
			
								echo "<dd><input type=checkbox name=needs[] value=future_project ".
								(in_array("future_project",$needs)?"checked":"") .
								">Future Project</DD> ";
			
								echo "<dd><input type=checkbox name=needs[] value=college_project ".
								(in_array("college_projectt",$needs)?"checked":"") .
								">College Project</DD> ";
						    ?>
							</DL>
						</TD> 
				</TR> 
			</TABLE>

		<BR>
			<TABLE align="center" width="100%">
				<TR> 
					<TD NOWRAP="NOWRAP" ALIGN="CENTER" colspan="3"> 
					<INPUT	TYPE="CHECKBOX" NAME="ylist" VALUE="none">Thank you, but no product information at this time.
					</TD> 
				</TR> 
				<br>
				<tr>
					<td align="center" colspan="3">
					<FONT SIZE="-1">Page 2 of 3 </FONT>
					<INPUT NAME="Continue" TYPE="SUBMIT" VALUE="Continue">
					</TD>
				</TR>
				
			 </TABLE></FORM>
			</td>
		</tr>
	</table>
    </div>
 <? include $include_path . "lol_footer.inc"; ?>
	
