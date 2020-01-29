<?
include "lol_common.inc";

if($REQUEST_METHOD=="POST")
{              
        		 
          $query = "INSERT INTO contact (subscribe, first_name,  last_name, area_code,  phone, email, note) VALUES('$subscribe', '$first_name', '$last_name', '$area_code', '$phone', '$email','$note')";
         $db->query($query);
      
		     $action="good";
	
}

include $include_path . "lol_header.inc";
?>

<?if ($action=="good")
{?>
   <TABLE WIDTH="75%"> 
	<TR> 
		<TD COLSPAN="3">
		<FONT COLOR="#FFFFFF" SIZE="3" FACE="Arial, Helvetica, sans-serif">
			<STRONG>Mail Sent Thank You</STRONG></FONT>
		</TD> 
	</TR> 
	<TR> 
		<TD ALIGN="center"  VALIGN="top" COLSPAN="3"><a href="contact.php">Back</a></TD> 
	</TR> 

</TABLE> 
<?}else{?>
<form method="post"  action="<?echo $PHP_SELF?>">
<TABLE WIDTH="75%"> 
	<TR> 
		<TD COLSPAN="3">
		<FONT COLOR="#FFFFFF" SIZE="3" FACE="Arial, Helvetica, sans-serif">
			<STRONG>
Contact Landscape Online
</STRONG></FONT>
		</TD> 
	</TR> 

	<input type="hidden" name="subscribe" value="<? echo $subscribe?>">
	<TR> <td COLSPAN="2" align=center>
	</td>
	</tr>

<tr>
				<TD ALIGN="right"><B>Your Name</B>:
				</TD>
				<td></td> 
			<td>
				  <INPUT NAME="first_name" SIZE="10" VALUE="<? echo $first_name?>" TABINDEX="1">
				  <INPUT NAME="last_name" SIZE="15" VALUE="<? echo $last_name?>" TABINDEX="2">
			</TD> 
	</TR>
	<TR> 
		<TD ALIGN="right" >	<B>Phone</B>:
		</TD> 
		<td></td>
		<TD><INPUT NAME="area_code" SIZE="3" VALUE="<? echo $area_code?>" MAXLENGTH="3" TABINDEX="14"><INPUT NAME="phone" SIZE="15" VALUE="<? echo $phone ?>" MAXLENGTH="9" TABINDEX="15">
		</TD> 
	</TR>
	<TR> 
		<TD ALIGN="right" ><B>Email</B>:</TD> 
		<td></td>
		<TD><INPUT NAME="email" SIZE="34"  VALUE="<? echo $email ?>" TABINDEX="5"></TD> 
	</TR> 
	<TR> 
		<TD ALIGN="right"  VALIGN="top"><B>Enter your Questions </B>:</TD> 
		<td></td>
		<TD><TEXTAREA COLS="29" NAME="note" ROWS="6" value="<? echo $note ?>" TABINDEX="23"><? echo $note ?></TEXTAREA>
		</TD> 
	</TR> 
	<TR> 
	<TD  align="center" colspan="3"><INPUT type="image" src="../image/butt_enter.gif" value="submit" TABINDEX="24">
	</TD>
</tr>

</TABLE> </form>
<? include $include_path . "lol_footer.inc"; ?>
