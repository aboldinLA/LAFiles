<?


?>

<FORM METHOD="post" ACTION="<?echo $PHP_SELF?>">
    
    <div style="position: relative; left: 50px">

<TABLE ALIGN="center" CELLPADDING="5" CELLSPACING="0" WIDTH="90%" style"font-size:16px; position:relative:left:30px"> 
	<tr>
		<TD COLSPAN="3" ALIGN="center"><? if ($error) { $C->errors($error); } ?></td>
	</tr>
	<tr>
		<td align="right"><input type="hidden"  name="id" value=<?echo $id?>><strong>Event Type:</strong>
			<? if ($type_event == "meeting") {
				$techk_m="checked";
			} else if ($type_event == "meeting") {
				$techk_e="checked";
			} ?>
			</td>
			</tr>
			<tr>
				<td align="right">Annual:&nbsp;</td>
				<td><input type="radio" name="type_event" value="meeting" <?=$techk_m?>></td>
				<td>(Your Association's Major Annual Meeting(s))</td>
			</tr>
			<tr>
				<td style="line-height:10px">&nbsp;</td>
			<tr>
				<td align="right">Single:&nbsp;</td>
				<td><input type="radio" name="type_event" value="events" <?=$techk_e?>></td>
				<td>(Other Meetings, Seminars, or Events)</td>
		</tr>
		<tr>
			<td style="line-height:10px">&nbsp;</td>
		<tr>		
		<tr>
			<td align="right"><strong>Event Name: </strong></td>
			<td colspan="2">&nbsp; <input type="text" name="event_name" value="" size="34" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:2px; box-shadow: 5px 5px 5px #888888" placeholder="Event Name"></td>
    </tr>
		<tr>
			<td style="line-height:10px">&nbsp;</td>
		<tr>	
	<tr>
			<td align="right"><strong>Date: </strong></td>
			<td colspan="2">&nbsp;<? date_dropdowns2('input_mon','input_day','input_year',time()); ?></td>
    </tr>
		<tr>
			<td style="line-height:10px">&nbsp;</td>
		<tr>	
	<tr>
			<td align="right"><strong>Place: </strong></td>
			<td colspan="2">&nbsp; <input type="text" name="place" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:2px; box-shadow: 5px 5px 5px #888888" placeholder="Place" value=<?=$place?>></td>
    </tr>
		<tr>
			<td style="line-height:10px">&nbsp;</td>
		<tr>	
	<tr>
			<td align="right"><strong>Contact: </strong></td>
			<td colspan="2">&nbsp; <input type="text" name="contact" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:2px; box-shadow: 5px 5px 5px #888888" style="height:20px; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Contact" value=<?=$contact?>></td>
	</tr>
		<tr>
			<td style="line-height:10px">&nbsp;</td>
		<tr>	
	<tr>
			<td  align="right"><strong>Fee:</strong></td>
			<td colspan="2">&nbsp;
				<SELECT NAME="fee" SIZE="1"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:2px; box-shadow: 5px 5px 5px #888888"> 
				  <OPTION VALUE="">Select</OPTION> 
				  <OPTION VALUE="yes" <?=($fee=="yes" ? "selected" : "")?>>Yes</OPTION> 
				  <OPTION VALUE="no" <?=($fee=="no" ? "selected" : "")?>>No</OPTION> 
				</SELECT>
			</td>
	</tr>
	<tr>
			<td align="center" colspan="3"><br><br><INPUT type="submit"  VALUE="Add Event" name="meet" style="height:30px; width:125px; font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:5px; box-shadow: 5px 5px 5px #888888"></td>
	</tr>
    
            <tr><td style="line-height: 20px">&nbsp;</td></tr>    
    
	</FORM>
		<tr>
			<td style="line-height:10px">&nbsp;</td>
		<tr>	
    <tr>
			<td colspan="3" style="position: relative; left: 0px"><? $I->view_meet_input($id,"meeting")?></td>
	</tr>
        
     <tr><td style="line-height: 10px">&nbsp;</td></tr>   
        
	<tr>
			<td colspan="3"><? $I->view_meet_input($id,"events")?></td>
	</tr>
	<tr>
		<td align=center colspan=3><br><span style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; font-weight: bold">Finished Adding Events, press continue below to go to the next page.</span><br><br><input type=button style="height:30px; width:125px; font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:5px; box-shadow: 5px 5px 5px #888888; cursor:pointer" value=Continue onClick="window.location='<?
		if ($action == "edit")
		{
	  	echo "Association-Members.php?id=$id&action=edit";
		}else{
	  	echo "Association-Members.php?id=$id";
		}
		?>';">
		</td>
	</tr>

</table>
</div></div>