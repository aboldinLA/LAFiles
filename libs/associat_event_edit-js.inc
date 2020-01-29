<?

?>


<FORM METHOD="post" ACTION="<?echo $PHP_SELF?>">

<TABLE ALIGN="center" CELLPADDING="5" CELLSPACING="0" WIDTH="100%" style="font-size:16px"> 
	
	<tr>
		<TD COLSPAN="3" ALIGN="center">
			<? if ($error) { $C->errors($error); } ?><br><br>
		</td>
	</tr>
	<tr>
		<td align="right"><input type="hidden"  name="id" value=<?echo $id?>><strong>Event Type:</strong>
		<? if ($type_event == "meeting") {
				$techk_m="checked";
			} else if ($type_event == "meeting") {
				$techk_e="checked";
			} ?>
			</td></tr>
			<tr><td align="right">
			Annual:<td><input type="radio" name="type_event" value="meeting" <?=$techk_m?>>
			<td>(Your Association's Major Annual Meeting(s))
			</tr><tr>
			<td align="right">
			Single:<td><input type="radio" name="type_event" value="events" <?=$techk_e?>> 
			<td>(Other Meetings, Seminars, or Events)
			</td>
	</tr>
		<tr>
			<td align="right"><strong>Event Name: </strong></td>
			
			<td colspan="2">&nbsp; <input type="text" name="event_name" value="" size="34">
			</td>
    </tr>
	<tr>
			<td align="right"><strong>Date: </strong></td>
			
			<td colspan="2">
			&nbsp; <? date_dropdowns('input_mon','input_day','input_year',time()); ?>
			</td>
    </tr>
	<tr>
			<td align="right"><strong>Place: </strong></td>
			
			<td colspan="2">&nbsp; <input type="text" name="place" value=<?=$place?>>
			</td>
    </tr>
	<tr>
			<td align="right"><strong>Contact: </strong></td>
			
			<td colspan="2">&nbsp; <input type="text" name="contact" value=<?=$contact?>>
			</td>
	</tr>
	<tr>
			<td  align="right"><strong>Fee:</strong> </td>
			
			<td colspan="2">
			&nbsp; <SELECT NAME="fee" SIZE="1"> 
				  <OPTION VALUE="">Select</OPTION> 
				  <OPTION VALUE="yes" <?=($fee=="yes" ? "selected" : "")?>>Yes</OPTION> 
				  <OPTION VALUE="no" <?=($fee=="no" ? "selected" : "")?>>No</OPTION> 
				  </SELECT>
			</td>
	</tr>
	<tr>
			<td align="center" colspan="3"><br><br><INPUT type="submit"  VALUE="Add Event" name="meet">
			</td>
	</tr></FORM>
    <tr>
			<td colspan="3"><? $I->view_meet_input($id,"meeting")?>
			</td>
	</tr>
	<tr>
			<td colspan="3"><? $I->view_meet_input($id,"events")?>
			</td>
	</tr>
		<tr><td align=center colspan=3><br><br><input type=button value=Continue onClick="window.location='<?
		if ($action == "edit")
	{
	  echo "assoc_members.php?id=$id&action=edit";
	}else{
	  echo "assoc_members.php?id=$id";
	}
	?>';">
			</td>
	</tr>

</table>