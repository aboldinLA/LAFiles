<? if ($uid1 && $auth1 == $ASSOC_AUTH) $DISPLAY = $I->association_info($uid1); 
	$web_mod = "1";
?>
 
<FORM METHOD="post" ACTION="<? echo $_SERVER['PHP_SELF'] ?>">
<input type="hidden" name="action" value="<?=$action?>">
<input type="hidden" name="id" value="<?=$DISPLAY['id']?>">
<input type="hidden" name="web_mod" value="<? echo $web_mod ?>">
<TABLE ALIGN="center" CELLPADDING="0" WIDTH="763" CELLSPACING="3" style="font-size:16px">
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr> 
    
	<TR> 
		 <TD COLSPAN="3" style="font-size:16px; font-weight:bold">Association Signup Page</TD> 
	</TR> 
    
	<TR> 
		 <TD COLSPAN="3" style="font-size:16px; font-weight:bold">Fields in <span style="color:#ff0000">red</span> are required</TD> 
	</TR>
    
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr> 
        
	<tr>
		<TD COLSPAN="3" ALIGN="center"><? if ($error) $C->errors($error); ?></td>
    </tr>
    
	<TR> 
		 <TD ALIGN="right" NOWRAP="NOWRAP" style="font-size:16px; font-weight:bold; color:#ff0000">We are a:</TD> 
		 <TD WIDTH="3"> </TD> 
		 <TD><SELECT NAME="local" SIZE="1" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888"> 
		 <?if (strlen($DISPLAY['local']) > 0  )
		 {?>
		 <OPTION VALUE="<?=$DISPLAY['local']?>"><?=$DISPLAY['local']?></OPTION> 
		 <?}else{ ?>
				  <OPTION VALUE="<?=$DISPLAY['local']?>">Select</OPTION> 
		<?}?>
				  <OPTION VALUE="national">National Association</OPTION> 
				  <OPTION VALUE="state">State Association</OPTION> 
				  <OPTION VALUE="local">Local Association</OPTION> 
				  <OPTION VALUE="local">Affiliate Association</OPTION> 
				</SELECT>
		 </TD> 
	</TR>
    
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
     
	<TR> 
		 <TD ALIGN="right" NOWRAP="NOWRAP" style="font-size:16px; font-weight:bold; color:#ff0000">Association Name:</TD> 
		 <TD WIDTH="3"></TD> 
		 <TD><INPUT NAME="association" SIZE="34" VALUE="<?=$DISPLAY['association'] ?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Association Name"></TD> 
	</TR>
    
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
          
	<TR> 
		<TD ALIGN="right" NOWRAP="NOWRAP" style="font-size:16px; font-weight:bold; color:#ff0000">Association Acronym:</TD> 
		<TD WIDTH="3"></TD> 
		<TD><input type="text" name="acronym" value="<?=$DISPLAY['acronym']?>" size="10" maxlength="10" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Acronym"></TD> 
	</TR>
    
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
          
	<TR> 
		 <TD ALIGN="right" NOWRAP="NOWRAP" VALIGN="top" style="font-size:16px; font-weight:bold; color:#ff0000">Mailing Address:</TD> 
		 <TD> </TD> 
		 <TD> <INPUT NAME="address" SIZE="34" VALUE="<?=$DISPLAY['address']?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Mailing Address"></TD> 
	</TR>
    
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
    
    <tr>      
		<td colspan="3">	<? $C->pro_state4($DISPLAY['city'],$DISPLAY['state'],$DISPLAY['zip']) ?></td>
    </tr>
    
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr> 
       
	<TR> 
		<TD ALIGN="right" NOWRAP="NOWRAP" style="font-size:16px; font-weight:bold">Toll-Free Number:</TD> 
		<TD></TD> 
		<TD><INPUT NAME="toll" SIZE="20" MAXLENGTH="16" VALUE="<?=$DISPLAY['toll'] ?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Toll-Free Number"></TD> 
	</TR>
    
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
    
	<TR> 
		<TD ALIGN="right" NOWRAP="NOWRAP" style="font-size:16px; font-weight:bold">Fax:</TD> 
		<TD></TD> 
		<TD><INPUT NAME="fax" SIZE="20" MAXLENGTH="16" VALUE="<?=$DISPLAY['fax'] ?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Fax"></TD> 
	</TR>
    
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
        
	<TR> 
		<TD ALIGN="right" NOWRAP="NOWRAP" style="font-size:16px; font-weight:bold">Website:<BR>
        <span  style="font-size:12px">i.e. landscapeonline.com</span></TD> 
		<TD></TD> 
		<TD><INPUT NAME="web" SIZE="34"	VALUE="<?=$DISPLAY['web']?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Website"></TD> 
	</TR>
    
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr> 
        
	<TR> 
		<TD ALIGN="right" NOWRAP="NOWRAP" style="font-size:16px; font-weight:bold; color:#ff0000">Email:</TD> 
		<TD></TD> 
		<TD><INPUT NAME="email" SIZE="34" VALUE="<?=$DISPLAY['email']?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Email"></TD>
	</TR> 
    
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>

	<TR> 
		<TD COLSPAN="3" style="font-size:16px; font-weight:bold">Executive Director:</TD> 
	</TR>
        
    <TR> 
		<TD ALIGN="right" NOWRAP="NOWRAP" style="font-size:16px; font-weight:bold">Name:</TD> 
		<TD></TD> 
		<TD><INPUT NAME="exfirst" SIZE="10" VALUE="<?=$DISPLAY['exfirst']?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="First Name"> 
				<INPUT NAME="exlast" SIZE="15"	 VALUE="<?=$DISPLAY['exlast']?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Last Name">
		</TD> 
	</TR>
          
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr> 
              
	<TR> 
		<TD ALIGN="right" NOWRAP="NOWRAP" style="font-size:16px; font-weight:bold">Phone:</TD> 
		<TD></TD> 
		<TD><INPUT NAME="exphone" SIZE="20" MAXLENGTH="16" VALUE="<?=$DISPLAY['exphone'] ?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Phone"></TD> 
	</TR>
          
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr> 
              
	<TR> 
		<TD ALIGN="right" NOWRAP="NOWRAP" style="font-size:16px; font-weight:bold">Email:</TD> 
		<TD></TD> 
		<TD><INPUT NAME="exmail" SIZE="34" VALUE="<?=$DISPLAY['exmail']?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Email"></TD>
	</tr>

    <tr>
    	<td style="line-height:10px">&nbsp;</td>
    </tr>
						
	<TR> 
		<TD NOWRAP="NOWRAP" COLSPAN="3" VALIGN="bottom" style="font-size:16px; font-weight:bold">Do you offer an Official Publication (If so, please list name of publication)</TD> 
   </tr>
           
   <TR>
		<TD ALIGN="left"  VALIGN="bottom" style="font-size:16px; font-weight:bold"><!-- Yes<input type="radio" name="offpub" value="yes"> --></TD> 
		<TD></TD>
        <TD VALIGN="top" style="font-size:16px; font-weight:400; position: relative; left: -192px">The name of the publication is: <INPUT NAME="publication" SIZE="40" VALUE="<?=$DISPLAY['publication'] ?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Publication Name"></TD> 
	</tr>
            
	<TR>
		<TD ALIGN="right" style="font-size:16px; font-weight:bold"><!-- No<input type="radio" name="offpub" value="no"> --></TD> 
	</tr>
            
    <tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>   
             
	<TR> 
		<TD ALIGN="right" NOWRAP="NOWRAP" style="font-size:16px; font-weight:bold; color:#ff0000">Total number of members:</TD> 
		<TD></TD> 
		<TD><INPUT NAME="members" SIZE="12" VALUE="<?=$DISPLAY['members']?>" style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:2px; box-shadow: 5px 5px 5px #888888" style="height:20px; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Member Number"> </TD> 
	</TR>
           
	<TR>
		<TD width="20">&nbsp;</TD>
	</tr>
            
	<tr>
		<TD width="20">&nbsp;</TD>
		<td align="left" colspan="2">&nbsp;<INPUT type="submit"  VALUE="Enter" name="submit" style="height:20px; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#000; background-color:#b58e4f; padding-left:10px; box-shadow: 5px 5px 5px #888888; cursor:pointer"></td>
   </tr>

</table>
</FORM>	
