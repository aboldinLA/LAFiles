<form method="post" action="<?echo $PHP_SELF?>">



<? if ($action == "edit") {

	echo "<input type=hidden name=id value=$id><input type=hidden  name=action value=$action>";  

	}

?>

<TABLE WIDTH="97%" cellpadding="0" cellspacing="0"> 

		<TR><td COLSPAN="4">Complete the information below to begin your FREE Listing in

LandscapeOnline's "Product Search" database.<br><br>All listings are subject to review and LandscapeOnline.com reserves the

right to refuse this service for any reason.  Fields in <FONT COLOR="#ff0000">red</FONT> are required

<br>

<?if ($error) $C->errors($error); ?> <br><br>

</td></TR>

		

	

		  <TR> 

			 <TD align=center>

		  <TABLE WIDTH="70%" cellpadding="0" cellspacing="0"> 

		  <TR>

			 <TD ALIGN="right" NOWRAP="NOWRAP"><FONT COLOR="#ff0000"><B>Company

				Name</B>:</FONT></TD> 

			 <TD WIDTH="3"></TD> 

			 <TD><INPUT NAME="comp_name" SIZE="34" VALUE= "<?= $DISPLAY['comp_name'] ?>"></TD> 

		  </TR> 

		  <TR> 

			 <TD ALIGN="right" NOWRAP="NOWRAP" VALIGN="top"><FONT 	COLOR="#ff0000"><B>Company Address</B>:</FONT></TD> 

			 <TD></TD>

			 <TD>

			 <INPUT NAME="address" SIZE="34" VALUE="<?= $DISPLAY['address'] ?>"><BR>

			 <INPUT NAME="address2" SIZE="34" VALUE="<?= $DISPLAY['address2'] ?>"></TD> 

		  </TR> 

		<? $C->pro_state($DISPLAY['city'],$DISPLAY['state'],$DISPLAY['zip']) ?>

	      <? $C->country($country) ?>

		  <TR> 

			 <TD ALIGN="right" NOWRAP="NOWRAP"><FONT	COLOR="#ff0000"><B>Contact Name</B>:</FONT></TD> 

			 <TD></TD> 

			 <TD><INPUT NAME="first_name" SIZE="10" VALUE="<?= $DISPLAY['first_name'] ?>">

				<INPUT NAME="last_name" SIZE="15" VALUE="<?= $DISPLAY['last_name'] ?>"></TD> 

		  </TR> 



		  <TR> 

			 <TD ALIGN="right" NOWRAP="NOWRAP"><FONT COLOR="#ff0000"><B>Phone</B>:</FONT></TD> 

			 <TD></TD> 

			 <TD><INPUT TYPE="TEXT"  NAME="area_code" SIZE="4"  MAXLENGTH="3"  VALUE="<?= $DISPLAY['area_code'] ?>" >

				<INPUT NAME="phone" SIZE="15" MAXLENGTH="15" VALUE="<?= $DISPLAY['phone'] ?>"></TD> 

		  </TR> 

		   <TR> 

			 <TD ALIGN="right" NOWRAP="NOWRAP"><B>Fax</B>:</TD> 

			 <TD></TD> 

			 <TD><INPUT TYPE="TEXT"  NAME="area_fax" SIZE="4"  MAXLENGTH="3"  VALUE="<?= $DISPLAY['area_fax '] ?>" >

				<INPUT NAME="fax" SIZE="15" MAXLENGTH="8" VALUE="<?= $DISPLAY['$fax'] ?>"></TD> 

		  </TR> 

		  <TR> 

			 <TD ALIGN="right" NOWRAP="NOWRAP"><FONT COLOR="#ff0000"><B>Email</B>:</FONT></TD> 

			 <TD></TD> 

			 <TD><INPUT NAME="email" SIZE="34" VALUE="<?= $DISPLAY['email'] ?>"></TD> 

		  </TR> 

		  <TR> 

			 <TD ALIGN="right" NOWRAP="NOWRAP"><B>	Website</B>:</TD> 

			 <TD>&nbsp; </TD> 

			 <TD><INPUT NAME="website" SIZE="34" VALUE="<?= $DISPLAY['website'] ?>">

		  </TR> 

		    <TR> 

			 <TD ALIGN="right" NOWRAP="NOWRAP"><B>Alternate Address</B>:</TD> 

			 <TD>&nbsp; </TD> 

			 <TD>

		  

			 <TEXTAREA COLS="30" NAME="alt_mail" ROWS="3" value="<?=$DISPLAY['alt'];?>"  ><?=$DISPLAY['alt'];?></TEXTAREA></TD></TR>  

		 </TABLE>

		  </TD> <td valign=top><table>

		  

		     <TR> 

					 <TD ALIGN="RIGHT" VALIGN="TOP">

					 <FONT COLOR="#ff0000"><B>I am a</B>:</FONT><BR></TD> 

					

					 <TD>

					 <?$V->vendor_type($DISPLAY['vendor_type_id']); ?></TD> 

				  </TR> <tr>

			 <TD  VALIGN="top" colspan=2><br>

			 

			 <font color="#FF0000"><B>Company Profile</B>: Up to 2500 characters&nbsp;</font><br>

			 

			 <TEXTAREA COLS="33" NAME="profile" ROWS="6" value="<?= $DISPLAY['profile']?>"><?= $DISPLAY['profile']?></TEXTAREA>

			 </TD> 

		  </TR>

		  </TABLE>

		  </TD>

  </TR> 

	

<?

if ($request == Null){$request[] = ""; }

$V->request($request);

?> 



  <TR>

			 <TD COLSPAN="2" align="center" ><input type="submit" value="Continue"></TD>

		  </TR>

	</TABLE> </FORM>

