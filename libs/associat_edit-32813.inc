<? if ($uid1 && $auth1 == $ASSOC_AUTH) $DISPLAY = $I->association_info($uid1); 
	$web_mod = "1";
?>
 
<FORM METHOD="post" ACTION="<?echo $PHP_SELF?>">
<input type="hidden" name="action" value="<?=$action?>">
<input type="hidden" name="id" value="<?=$DISPLAY['id']?>">
<input type="hidden" name="web_mod" value="<? echo $web_mod ?>">

<div style="width:750px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
		<span style="font-size:32px; font-weight:bold; font-family:Arial, Helvetica, sans-serif">Welcome to the</span><br><br>
	<center><img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="280" align="top" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG-2.jpg" width="295" align="top" /></center>
    <center><img src="https://landscapearchitect.com/lol-logos/lolw-logo.jpg" width="300" /></center><br />
	<span style="font-size:32px; font-weight:bold">Association Sign-Up Center</span><br></p>
	</div>

<TABLE ALIGN="center" CELLPADDING="0" WIDTH="763" CELLSPACING="3"> 
    <tr>
    	<td style="font-size:14px" COLSPAN="3" align="center">
        	<br />To list your association and events at LandscapeOnline.com please fill out the form below.<br /><br />
            	<font style="font-size:24px"><b>Remember there are no charges or setup fees. </b></font><br /><br />
                Once established LandscapeOnline will send reminders to your executive director to update the contact information and events schedule.<br /><br />
                For more information or assistance call 714-979-5276 (x136)<br /><br />
                <b>If your association is already listed at LandscapeOnline and you would like to list a new event please <a href="https://landscapearchitect.com/member/login4.php?t=as"><br />click here.</a></b><br /><br />

        </td>
    </tr>    
	<TR> 
		 <TD COLSPAN="3"><B>Fields in <FONT size="2" COLOR="#ff0000"> red</FONT> are required</B> </TD> 
	</TR>
	<tr>
		<TD COLSPAN="3" ALIGN="center">
<? if ($error) $C->errors($error); ?>
		</td>
	<TR> 
		 <TD ALIGN="right" NOWRAP="NOWRAP"><FONT size="2" COLOR="#ff0000"><B>We are a</B>:</FONT>
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
		 <TD ALIGN="right" NOWRAP="NOWRAP"><FONT size="2" COLOR="#ff0000"><B>Association Name</B>:</FONT>
		 </TD> 
		 <TD WIDTH="3">
		 </TD> 
		 <TD><INPUT NAME="association" SIZE="80" VALUE="<?=$DISPLAY['association'] ?>">
		 </TD> 
	</TR> 
	<TR> 
		<TD ALIGN="right" NOWRAP="NOWRAP"><FONT	size="2" COLOR="#ff0000"><B>Association Acronym</B>:</FONT>
		</TD> 
		<TD WIDTH="3">
		</TD> 
		<TD><input type="text" name="acronym" value="<?=$DISPLAY['acronym']?>" size="34" maxlength="10">
		</TD> 
	</TR> 
	<TR> 
		 <TD ALIGN="right" NOWRAP="NOWRAP" VALIGN="top"><FONT size="2" COLOR="#ff0000"><B>Mailing Address</B>:</FONT>
		 </TD> 
		 <TD>
		 </TD> 
		 <TD> <INPUT NAME="address" SIZE="80" VALUE="<?=$DISPLAY['address']?>"> 
		 </TD> 
	</TR> 

			<? $C->pro_state($DISPLAY['city'],$DISPLAY['state'],$DISPLAY['zip']) ?>
		<TR> 
			 <TD ALIGN="right" NOWRAP="NOWRAP"><FONT size="2"><B>Toll-Free Number</B>:</font>
			 </TD> 
			 <TD></TD> 
			 <TD><INPUT NAME="toll" SIZE="20" MAXLENGTH="16" VALUE="<?=$DISPLAY['toll'] ?>">
			 </TD> 
	</TR> 
	<TR> 
			 <TD ALIGN="right" NOWRAP="NOWRAP"><B>Fax</B>:
			 </TD> 
			 <TD></TD> 
			 <TD><INPUT NAME="fax" SIZE="20" MAXLENGTH="16" VALUE="<?=$DISPLAY['fax'] ?>"></TD> 
	</TR>
	<TR> 
			 <TD ALIGN="right" NOWRAP="NOWRAP"><FONT size="2"><B> Website</B>:<BR></font>
				<FONT	SIZE="-1">i.e. landscapeonline.com</FONT>
			</TD> 
			 <TD></TD> 
			 <TD><INPUT NAME="web" SIZE="80"	VALUE="<?=$DISPLAY['web']?>">
			</TD> 
	</TR> 
	<TR> 
			 <TD ALIGN="right" NOWRAP="NOWRAP"><FONT size="2" COLOR="#ff0000"><B>Email</B></font>:
			 </TD> 
			 <TD></TD> 
			 <TD><INPUT NAME="email" SIZE="80" VALUE="<?=$DISPLAY['email']?>"></TD>
	</TR> 



			 <TR> 
			 <TD COLSPAN="3"><FONT size="2"><B>Executive Director</B>:</font>
			 </TD> 
		</TR> 
        <TR> 
			 <TD ALIGN="right" NOWRAP="NOWRAP"><FONT size="2"><B>Name</B>:</font>
			 </TD> 
			 <TD></TD> 
			 <TD>
				<INPUT NAME="exfirst" SIZE="10" VALUE="<?=$DISPLAY['exfirst']?>"> 
				<INPUT NAME="exlast" SIZE="24"	 VALUE="<?=$DISPLAY['exlast']?>">
			 </TD> 
		  </TR> 
		  <TR> 
			 <TD ALIGN="right" NOWRAP="NOWRAP"><FONT size="2"><B>Phone</B>:</font>
			 </TD> 
			 <TD></TD> 
			 <TD><INPUT NAME="exphone" SIZE="20" MAXLENGTH="16" VALUE="<?=$DISPLAY['exphone'] ?>">
			 </TD> 
		  </TR> 
		  <TR> 
			 <TD ALIGN="right" NOWRAP="NOWRAP"><FONT size="2"><B>Email</B>:</font>
			 </TD> 
			 <TD></TD> 
			 <TD><INPUT NAME="exmail" SIZE="80" VALUE="<?=$DISPLAY['exmail']?>">
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
				<TD NOWRAP="NOWRAP" COLSPAN="3" VALIGN="bottom"><FONT size="2"><B>Do you offer an official publication ?</B></font>
				 </TD> 
           </tr>
		   <TR>
		        <TD ALIGN="right"  VALIGN="bottom"><FONT size="2">Yes</font><input type="radio" name="offpub" value="yes"> </TD> 
				  <TD></TD> <TD VALIGN="top"><FONT size="2">The name of the publication is</font><br><INPUT NAME="publication" SIZE="34" VALUE="<?=$DISPLAY['publication'] ?>"></TD> 
			</tr>
			<TR>
		        <TD ALIGN="right"><FONT size="2">No</font><input type="radio" name="offpub" value="no"></TD> 
			</tr>
		    <TR> 
			 <TD ALIGN="right" NOWRAP="NOWRAP"><font size="2" color="#FF0000"><B>Total number of members</B>:</font>
			 </TD> 
			 <TD></TD> 
			 <TD>
				<INPUT NAME="members" SIZE="12" VALUE="<?=$DISPLAY['members']?>"> 
			 </TD> 
		  </TR> 
		   <TR>
				 <TD width="20">&nbsp;
				</TD>
			</tr>
			<tr>
				<td align="center" colspan="3"><INPUT type="submit"  VALUE="Enter" name="submit">
				</td>
            </tr>
</table>
			</FORM>
            
