<? if ($action == "edit")
{
$data = $I->association_info($id);
$biz_id = explode(",",$data['subtype_id']);

}
?>
<div style="position:relative; left: 150px">

  <FORM METHOD="post" ACTION="<?echo $PHP_SELF?>">
  <input type="hidden"  name="id" value=<?echo $id?>>
  <input type="hidden"  name="action" value=<?echo $action?>>
		 
	<p style="position: relative; left: 5px; width: 500px; text-align: center">To help others find your Association, please select from the following
demographics those categories which best represent your membership.<br><br>

You may select as many as apply, but to avoid confusing the users of
		LandscapeOnline.com please select only those that apply . . .</p><br><br>	 
		 
		 
		 
  
<TABLE width="763px" CELLPADDING="0" CELLSPACING="0">

 	<tr>
		<TD COLSPAN="3" ALIGN="center">
<? if ($error) $C->errors($error); ?>
<?
	if (!is_array($biz_id))
	{
		$biz_id[] = "";
	}
?>
		</td>
     </tr>
     <tr>
		<td style="position:relative; left: -100px; width: 500px"><br><strong>Designers, Consultants Contractors and/or Maintenance Professionals:</strong></td>
    </tr>
    <tr>
		<td><br>&nbsp;</td>
    </tr>    
	<tr>
		<td style="position: relative; left: -100px"><? $M->types($biz_id,"d",10) ?></td>
    </tr>
	</tr>
  
	<tr>
		<td style="position: relative; left: -100px"><br><INPUT type="submit"  VALUE="Enter" name="submit" style="height:30px; width:110px; font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:5px; box-shadow: 5px 5px 5px #888888"></td>
    </tr>
	</tr>

</table>
</form>
</div>
