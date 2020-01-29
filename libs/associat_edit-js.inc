<? if ($uid1 && $auth1 == $ASSOC_AUTH) $DISPLAY = $I->association_info($uid1); 
	$web_mod = "1";
?>
 
<FORM METHOD="post" ACTION="<?echo $PHP_SELF?>">
<input type="hidden" name="action" value="<?=$action?>">
<input type="hidden" name="id" value="<?=$DISPLAY['id']?>">
<input type="hidden" name="web_mod" value="<? echo $web_mod ?>">
<TABLE ALIGN="center" CELLPADDING="0" WIDTH="763" CELLSPACING="3"> 
	<TR> 
		 <TD COLSPAN="3" class="cellhead">Association Signup Page</TD> 
	</TR> 
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
		 <TD><INPUT NAME="association" SIZE="34" VALUE="<?=$DISPLAY['association'] ?>">
		 </TD> 
	</TR> 
	<TR> 
		<TD ALIGN="right" NOWRAP="NOWRAP"><FONT	size="2" COLOR="#ff0000"><B>Association Acronym</B>:</FONT>
		</TD> 
		<TD WIDTH="3">
		</TD> 
		<TD><input type="text" name="acronym" value="<?=$DISPLAY['acronym']?>" size="10" maxlength="10">
		</TD> 
	</TR> 
	<TR> 
		 <TD ALIGN="right" NOWRAP="NOWRAP" VALIGN="top"><FONT size="2" COLOR="#ff0000"><B>Mailing Address</B>:</FONT>
		 </TD> 
		 <TD>
		 </TD> 
		 <TD> <INPUT NAME="address" SIZE="34" VALUE="<?=$DISPLAY['address']?>"> 
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
			 <TD><INPUT NAME="web" SIZE="34"	VALUE="<?=$DISPLAY['web']?>">
			</TD> 
	</TR> 
	<TR> 
			 <TD ALIGN="right" NOWRAP="NOWRAP"><FONT size="2" COLOR="#ff0000"><B>Email</B></font>:
			 </TD> 
			 <TD></TD> 
			 <TD><INPUT NAME="email" SIZE="34" VALUE="<?=$DISPLAY['email']?>"></TD>
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
				<INPUT NAME="exlast" SIZE="15"	 VALUE="<?=$DISPLAY['exlast']?>">
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
			 <TD><INPUT NAME="exmail" SIZE="34" VALUE="<?=$DISPLAY['exmail']?>">
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
				<TD NOWRAP="NOWRAP" COLSPAN="3" VALIGN="bottom"><FONT size="2"><B>Do you offer an Official Publication ?</B></font>
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
				<INPUT NAME="members" SIZE="10" VALUE="<?=$DISPLAY['members']?>"> 
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
