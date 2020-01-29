<?
$include_path = "../../includes/";
include $include_path . "script_head.inc";
include $include_path . "class/media_class.inc";
$M = new media_class($db);
$C = new common_class($db);

include $include_path . "main_top.inc";?>
<body bgcolor="#E8FCFF" >
<?
{ 
$data = $M->get_info_list($media_id);
$listing = $data['subscribe'];
$comp_name = $data['comp_name'];
$website = $data['website'];
$area_code = $data['area_code'];
$phone = $data['phone'];
$cat = $data['ylist_id'];

}
?>
 <TABLE ALIGN="center"> 
		<TR> 
		  <TD ROWSPAN="2" WIDTH="120" HEIGHT="500"> 
			 <TABLE HEIGHT="100%" WIDTH="100%"> 
				<TR> 
				  <TD ALIGN="center" VALIGN="center"><? $C->banner($PHP_SELF,3) ?>
					 </TD> 
				</TR> 
				<TR> 
				  <TD ALIGN="center" VALIGN="top"><? $C->banner($PHP_SELF,4) ?></TD>
				  
				</TR> 
				<TR> 
				  <TD ALIGN="center" VALIGN="top"><? $C->banner($PHP_SELF,5) ?></TD>
				  
				</TR> 
				<TR> 
				  <TD>&nbsp;</TD> 
				</TR> 
			 </TABLE></TD> 
		  <TD WIDTH="468" HEIGHT="60" ALIGN="center"><? $C->banner($PHP_SELF,1) ?></TD>
		  
		  <TD ROWSPAN="2" WIDTH="120" HEIGHT="500" VALIGN="center"
			NOWRAP="NOWRAP"><? $C->banner($PHP_SELF,2) ?></TD> 
		</TR> 
		<TR> 
		  <TD valign="top" >
<TABLE ALIGN="center" CELLPADDING="7"  > 
	<TR> 
		<TD align="center" colspan="3">
		<? if ($listing == "LASN")
		       {$logo = "lasn_logo.jpg"; }
			    if ($listing == "LCM")
		       {$logo = "lcm_logo.jpg";}
			   if ($listing == "LOL")
		       {$logo = "logo.gif"; }
              ?>
			<IMG SRC="image/<?echo $logo?>"  BORDER="0" WIDTH="368" HEIGHT="60" >
		</td>
	</tr>
	<tr>
		<td align="center"><a href="list.php?media_id=<?echo $media_id?>&action=edit">Link my website <b>now !</b></td>
		<td align="center"><a href="circulation_subscription.php?media_id=<?echo $media_id ?>&action=edit">Edit my account</td>
		<td align="center"><a href="../kill.php">home</td>
	</tr>
	<tr>
	  <td align="center" colspan="3"><?$M->view_listing($media_id) ?>
	  </td>	
	</tr>	
</TABLE>
	 </TD> 
		</TR> 
	 </TABLE>  </TD> 
		</TR> 
	 </TABLE> 



<? 
include $include_path . "main_bottom.inc";
?>