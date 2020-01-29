<?
include "lol_common.inc";


$pass = $C->mkpass_ass($assoc_id);
include $include_path . "class/industry_class.inc";

$I = new industry_Class($db);
$I->save_pass($assoc_id,$pass);
if ($action != "edit") {
		session_unset();
		// Finally, destroy the session.
		session_destroy(); 
}
$secthdr="Thank You";
include $include_path . "lol_header2.inc";
?>
<FORM METHOD="post" ACTION="<?echo $PHP_SELF?>">
<input type="hidden"  name="uid" value=<?echo $uid?>>
<TABLE ALIGN="center" CELLPADDING="0" CELLSPACING="0" WIDTH="95%"> 

	<?
	if ($action == "edit")	{
	
	?>
	<TR>
		<TD COLSPAN=3 align=center><br><br>
		Thank you for your Update.<br>
        Your free listing, including a hot link to your website, will appear in the Associations<br />
		Search Engine of LandscapeOnline.com as exampled below.<br></TD>
	</TR>
    <tr align="center">
    	<td><img width="600" src="https://landscapearchitect.com/imgz2/assoc-list.jpg" /><br></td>
    </tr>
	<?	} else { ?>
	<TR> 
			<TD COLSPAN="3" align=center>
				<br><br>
				Thank you for submitting your association's information to LandscapOnLine.com 
				We will verify your submission by sending you an E-mail within seven (7) business days,
				 which will include a private password and direct link to your association page.<br> 
				 This will allow you to make updates and change to your information at any time.<br>
			</TD> 
	 </TR>
     <TR>
		<TD COLSPAN=3 align=center><br><br>
        Your free listing, including a hot link to your website, will appear in the Associations<br />
		Search Engine of LandscapeOnline.com as exampled below.<br></TD>
	</TR>
    <tr align="center">
    	<td><img width="600" src="https://landscapearchitect.com/imgz2/assoc-list.jpg" /></td>
    </tr>
      
	 <?}?>
	 <TR> 
			<td><br><HR><!--mm replaced--></td>
	</TR> 
</table>
<? include $include_path . "lol_footer.inc"; ?>
	