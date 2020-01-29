<? if ($action == "edit")
{
$data = $I->association_info($id);
$biz_id = explode(",",$data['subtype_id']);

}
?>
  <FORM METHOD="post" ACTION="<?echo $PHP_SELF?>">
  <input type="hidden"  name="id" value=<?echo $id?>>
  <input type="hidden"  name="action" value=<?echo $action?>
  
<TABLE ALIGN="center" CELLPADDING="0" CELLSPACING="0" WIDTH="763">
	<TR> 
		<TD COLSPAN="3" >To help others find your Association, please select from the following
demographics those categories which best represent your membership.<br><br>

You may select as many as apply, but to avoid confusing the users of
LandscapeOnline.com please select only those that apply . . .<br><br>
		</TD> 
	</TR>
    <tr>
    	<td>
        <!-- Horizontal Bar Start -->
		<div style="width:763px; height:2px; background-color:#605b51;"></div>
		<!-- Horizontal Bar End -->
        </td>
    </tr>
 
		<TD width="763" COLSPAN="3" ALIGN="center">
<? if ($error) $C->errors($error); ?>
<?
	if (!is_array($biz_id))
	{
		$biz_id[] = "";
	}
?>
		</td>
	<tr>
		<td><br><strong>Designers, Consultants Contractors and/or Maintenance Professionals:</strong><br>
			<table width="763">
            	<tr>
                	<td width="763"><? $M->types($biz_id,"d",10) ?></td>
                </tr>
            </table>
		</td>
	</tr>
    <tr>
		<td valign="top"> </strong>
			<table>
            	<tr>
                	<td> </td>
                </tr>
            </table>
		</td>
	</tr>
	<tr>
		<td><INPUT type="submit"  VALUE="Enter" name="submit" style="height:20px; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888"></td>
    </tr>
	</tr>

</table>
</form>
