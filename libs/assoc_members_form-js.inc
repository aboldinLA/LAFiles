<? if ($action == "edit")
{
$data = $I->association_info($id);
$biz_id = explode(",",$data['subtype_id']);

}
?>
  <FORM METHOD="post" ACTION="<?echo $PHP_SELF?>">
  <input type="hidden"  name="id" value=<?echo $id?>>
  <input type="hidden"  name="action" value=<?echo $action?>>
<TABLE ALIGN="center" CELLPADDING="0" CELLSPACING="0" WIDTH="763"> 

	<TR> 
		<TD COLSPAN="3" >To help others find your Association, please select from the following
demographics those categories which best represent your membership.<br>
<br>


You may select as many as apply, but to avoid confusing the users of
LandscapeOnline.com please select only those that apply . . .<br><br>
</TD> 
	</TR> 
	
	<tr>
		<TD width="500" COLSPAN="3" ALIGN="center">
<? if ($error) $C->errors($error); ?>
<?
	if (!is_array($biz_id))
	{
		$biz_id[] = "";
	}
?>
		</td>
	<tr>
		<td><strong>Designers and Consultants:</strong>
			<table width="500"><tr><td width="500"><? $M->types($biz_id,"d",10) ?></td></tr></table>
		</td>
		</tr><tr>
		<td valign="top"><strong>Contractors and/or Maintenance Professionals:</strong>
			<table><tr><td><? $M->types($biz_id,"c",10) ?></td></tr></table>
		</td>
	</tr>
	<tr>
				<td align="center" colspan="3"><INPUT type="submit"  VALUE="Enter" name="submit">
				</td>
            </tr>
		
		</tr>

</table></form>
			
