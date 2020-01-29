 <body  topmargin="0" leftmargin="0" marginheight="0" marginwidth="0">
	 <TABLE BGCOLOR="#3399ff" WIDTH="100%"> 
		<TR> 
		  <TD VALIGN="MIDDLE" ALIGN="CENTER"><IMG SRC="/image/lol.gif"> </TD> 
		</TR> 
	 </TABLE> 
<? if($uid == 0)
{
?>	 <TABLE BGCOLOR="#3399ff"> 
	    <TR> <FORM METHOD="POST" ACTION="<?echo  $PHP_SELF?>" > 
		  <TD VALIGN="MIDDLE" BGCOLOR="#70a183"><b>Login</b></TD>  
		</TR>
		<? if (strlen($error) >3)
			{
				echo "<TR>";
				echo "<TD VALIGN=MIDDLE BGCOLOR=#70a183><font color=red>".$error. "</font></TD>";  
				echo "</TR>";
            }
		?>
		<TR> 
		  <TD VALIGN="MIDDLE" BGCOLOR="#70a183">NAME</TD>  
		</TR> 
		<TR> 
		  <TD BGCOLOR="#70a183"><INPUT TYPE="TEXT" name="name"></TD> 
		</TR> 
		<TR> 
		  <TD VALIGN="MIDDLE" BGCOLOR="#70a183">Password</TD>  
		</TR> 
		<TR> 
		  <TD VALIGN="MIDDLE" BGCOLOR="#70a183"><INPUT TYPE="password" name="password"></TD>  
		</TR>
		<TR> 
		  <TD VALIGN="MIDDLE" BGCOLOR="#70a183"><input type="submit"  value="Enter"></TD>  
		</TR>
		</form>
		<TR> 
		  <TD BGCOLOR="#70a183"
			ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#70a183'"
			CLASS="menulink" ALIGN="CENTER" WIDTH="67" VALIGN="MIDDLE"><A
			 HREF="advertising/advertising_information.php">Advertising</A></TD> 
		</TR>
		<TR> 
		  <TD BGCOLOR="#70a183" 
			ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#70a183'"
			CLASS="menulink"  VALIGN="MIDDLE" ><A
			 HREF="vendor/vendor_add.php">Vendor Add</A></TD> 
		</TR> 
		<TR> 
		  <TD BGCOLOR="#70a183" 
			ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#70a183'"
			CLASS="menulink"  VALIGN="MIDDLE" ><A
			 HREF="vendor/index.php">Vendor Search</A></TD> 
		</TR> 
		<TR> 
		  <TD BGCOLOR="#70a183" 
			ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#70a183'"
			CLASS="menulink"  VALIGN="MIDDLE" ><A
			 HREF="private/index.php">private</A></TD> 
		</TR> 
		

		<TR> 
		  <TD>&nbsp;</TD> 
		</TR> 
	 </TABLE> 
<?}else	{?>
<TABLE BGCOLOR="#3399ff" > 
         <TR> 
		  <TD BGCOLOR="#70a183" nowrap>Welcome back</TD> 
		</TR> 
		<TR> 
		  <TD BGCOLOR="#70a183"><?echo $name?></TD> 
		</TR>
	   	<TR> 
		  <TD BGCOLOR="#70a183" 
			ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#70a183'"
			CLASS="menulink"  VALIGN="MIDDLE" ><A
			 HREF="advertising/circulation_subscription.php?action=edit">Edit My Account</A></TD> 
		</TR> 
		<TR> 
		  <TD BGCOLOR="#70a183" 
			ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#70a183'"
			CLASS="menulink"  VALIGN="MIDDLE" ><A
			 HREF="service/index.php">Service Search</A></TD> 
		</TR> 
		<TR> 
		  <TD BGCOLOR="#70a183" 
			ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#70a183'"
			CLASS="menulink"  VALIGN="MIDDLE" ><A
			 HREF="vendor/vendor_add.php">Vendor Add</A></TD> 
		</TR> 
		<TR> 
		  <TD BGCOLOR="#70a183" 
			ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#70a183'"
			CLASS="menulink"  VALIGN="MIDDLE" ><A
			 HREF="vendor/index.php">Vendor Search</A></TD> 
		</TR> 
		 <TD BGCOLOR="#70a183" 
			ONMOUSEOVER="this.bgColor = '#ebebeb'" ONMOUSEOUT="this.bgColor = '#70a183'"
			CLASS="menulink"  VALIGN="MIDDLE" ><A
			 HREF="private/index.php">private</A></TD> 
		</TR> 
	 </TABLE> <?}?>

