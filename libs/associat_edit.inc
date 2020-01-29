<? if ($uid1 && $auth1 == $ASSOC_AUTH) $DISPLAY = $I->association_info($uid1); 
	$web_mod = "1";
?>
 
<FORM METHOD="post" ACTION="<?echo $PHP_SELF?>">
<input type="hidden" name="action" value="<?=$action?>">
<input type="hidden" name="id" value="<?=$DISPLAY['id']?>">
<input type="hidden" name="web_mod" value="<? echo $web_mod ?>">



<TABLE ALIGN="center" CELLPADDING="0" WIDTH="763" CELLSPACING="8"> 
    <tr>
    	<td style="font-size:16px" COLSPAN="3" align="center">
        	<br />To list your association and events at LandscapeOnline.com please fill out the form below.<br /><br />
            	<font style="font-size:24px"><b>Remember there are no charges or setup fees. </b></font><br /><br />
                Once established LandscapeOnline will send reminders to your executive director<br /> to update the contact information and events schedule.<br /><br />
                For more information or assistance call 714-979-5276 (x132)<br /><br />
                <b>If your association is already listed at LandscapeOnline and you would like to list a new event please <a href="https://landscapearchitect.com/member/login4.php?t=as"><br />click here.</a></b><br />

        </td>
    </tr>  
    <TR> 
		 <TD COLSPAN="3" style="height:10px"> </TD> 
	</TR>
    <TR> 
		 <TD align="center" COLSPAN="3"> <div style="width:750px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:22px; color:#C60">
		<strong>Let's Start With Your Company's Contact Information</strong><br />
	</div></TD> 
	</TR>
    <TR> 
		 <TD align="center" COLSPAN="3"> <div style="width:750px; height:30px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
		Please make sure the following Information is complete.
        <span style="font-size:14px; font-weight:bold; color:#F00">&nbsp;&nbsp;&nbsp;*Required Field</span>

	</div></TD> 
	</TR>    
	<tr>
		<TD COLSPAN="3" ALIGN="center">
<? if ($error) $C->errors($error); ?>
		</td>
	<TR> 
		 <TD ALIGN="right" NOWRAP="NOWRAP"><span style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">*We are a:</span>
		 </TD> 
		 <TD WIDTH="3">
		 </TD> 
		 <TD><SELECT NAME="local" SIZE="1"> 
		 <?if (strlen($DISPLAY['local']) > 0  )
		 {?>
		 <OPTION VALUE="<?=$DISPLAY['local']?>"><?=$DISPLAY['local']?></OPTION> 
		 <?}else{ ?>
				  <OPTION VALUE="<?=$DISPLAY['local']?>">Select</OPTION> 
		<?}?>
				  <OPTION VALUE="national">National</OPTION> 
				  <OPTION VALUE="state">State</OPTION> 
				  <OPTION VALUE="local">Local</OPTION> 
				</SELECT>
		 </TD> 
	</TR> 
	<TR> 
		 <TD ALIGN="right" NOWRAP="NOWRAP"><span style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">*Association Name:</span>
		 </TD> 
		 <TD WIDTH="3">
		 </TD> 
		 <TD><INPUT NAME="association" SIZE="80" VALUE="<?=$DISPLAY['association'] ?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888">
		 </TD> 
	</TR> 
	<TR> 
		<TD ALIGN="right" NOWRAP="NOWRAP"><span style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">*Association Acronym</span>
		</TD> 
		<TD WIDTH="3">
		</TD> 
		<TD><input type="text" name="acronym" value="<?=$DISPLAY['acronym']?>" size="34" maxlength="10" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888">
		</TD> 
	</TR> 
	<TR> 
		 <TD ALIGN="right" NOWRAP="NOWRAP" VALIGN="top"><span style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">*Mailing Address</span>
		 </TD> 
		 <TD>
		 </TD> 
		 <TD> <INPUT NAME="address" SIZE="80" VALUE="<?=$DISPLAY['address']?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"> 
		 </TD> 
	</TR> 

			<? $C->pro_state3($DISPLAY['city'],$DISPLAY['state'],$DISPLAY['zip']) ?>
		<TR> 
			 <TD ALIGN="right" NOWRAP="NOWRAP"><span style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">Toll-Free Number</span>
			 </TD> 
			 <TD></TD> 
			 <TD><INPUT NAME="toll" SIZE="20" MAXLENGTH="16" VALUE="<?=$DISPLAY['toll'] ?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888">
			 </TD> 
	</TR> 
	<TR> 
			 <TD ALIGN="right" NOWRAP="NOWRAP"><span style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">Fax</span>
			 </TD> 
			 <TD></TD> 
			 <TD><INPUT NAME="fax" SIZE="20" MAXLENGTH="16" VALUE="<?=$DISPLAY['fax'] ?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"></TD> 
	</TR>
	<TR> 
			 <TD ALIGN="right" NOWRAP="NOWRAP"><span style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold"> Website</B>:<BR></font>
				<FONT	SIZE="-1">i.e. landscapeonline.com</FONT>
			</TD> 
			 <TD></TD> 
			 <TD><INPUT NAME="web" SIZE="80"	VALUE="<?=$DISPLAY['web']?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888">
			</TD> 
	</TR> 
	<TR> 
			 <TD ALIGN="right" NOWRAP="NOWRAP"><span style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">*Email</B></font>:
			 </TD> 
			 <TD></TD> 
			 <TD><INPUT NAME="email" SIZE="80" VALUE="<?=$DISPLAY['email']?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"></TD>
	</TR> 



			 <TR> 
			 <TD COLSPAN="3"><div style="font-family:Arial, Helvetica, sans-serif; font-size:16px">
    	<hr noshade="noshade" />
		<strong><span style="font-size:22px; color:#C60">Executive Director</span></strong><br />
			 </TD> 
		</TR> 
        <TR> 
			 <TD ALIGN="right" NOWRAP="NOWRAP"><span style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">Name</span>
			 </TD> 
			 <TD></TD> 
			 <TD>
				<INPUT NAME="exfirst" SIZE="10" VALUE="<?=$DISPLAY['exfirst']?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"> 
				<INPUT NAME="exlast" SIZE="24"	 VALUE="<?=$DISPLAY['exlast']?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888">
			 </TD> 
		  </TR> 
		  <TR> 
			 <TD ALIGN="right" NOWRAP="NOWRAP"><span style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">Phone</span>
			 </TD> 
			 <TD></TD> 
			 <TD><INPUT NAME="exphone" SIZE="20" MAXLENGTH="16" VALUE="<?=$DISPLAY['exphone'] ?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888">
			 </TD> 
		  </TR> 
		  <TR> 
			 <TD ALIGN="right" NOWRAP="NOWRAP"><span style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">Email</span>
			 </TD> 
			 <TD></TD> 
			 <TD><INPUT NAME="exmail" SIZE="80" VALUE="<?=$DISPLAY['exmail']?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888">
			 </TD>
			 </tr>

			<tr>
				<td> </td>
			</tr>
			<tr>
				<td> </td>
			</tr>			
			<tr>
				<td> </td>
			</tr>
						
			<TR> 
				<TD NOWRAP="NOWRAP" COLSPAN="3" VALIGN="bottom"><div style="font-family:Arial, Helvetica, sans-serif; font-size:16px">
    	<hr noshade="noshade" />
		<strong><span style="font-size:22px; color:#C60">Do you offer an official publication?</span></strong><br />
				 </TD> 
           </tr>
		   <TR>
		        <TD ALIGN="right"  VALIGN="bottom">Yes</font><input type="radio" name="offpub" value="yes"> </TD> 
				  <TD></TD> <TD VALIGN="top">The name of the publication is<br><INPUT NAME="publication" SIZE="34" VALUE="<?=$DISPLAY['publication'] ?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"></TD> 
			</tr>
			<TR>
		        <TD ALIGN="right">No</font><input type="radio" name="offpub" value="no"></TD> 
			</tr>
		    <TR> 
			 <TD ALIGN="right" NOWRAP="NOWRAP"><span style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold">*Total number of members</span>
			 </TD> 
			 <TD></TD> 
			 <TD>
				<INPUT NAME="members" SIZE="12" VALUE="<?=$DISPLAY['members']?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"> 
			 </TD> 
		  </TR> 
		   <TR>
				 <TD width="20">&nbsp;
				</TD>
			</tr>
			<tr>
				<td align="center" colspan="3"><INPUT type="submit"  VALUE="Enter" name="submit"  style="height:20px; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888">
				</td>
            </tr>
</table>
			</FORM>
            
