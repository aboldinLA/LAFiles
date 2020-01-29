

 <FORM method="post" action="<?echo $PHP_SELF ?>"> 

  <input type="hidden" name="vst" value="<?echo $vst?>">

  <? if (!$id) $id =$uid; ?>

    <input type="hidden" name="id" value="<?echo $id?>">

  <input type="hidden" name="action" value="<?echo $action?>">

<TABLE ALIGN="center" WIDTH="100%"> 

	<tr><td class="cellhead" colspan=2><B><? echo $V->vendor_type_name($vst)?> Product Selection</td></tr><!-- mm r2 -->

	<tr>

		<td colspan="2" align="center">	

			<?if ($error)$C->errors($error);?>

		</td>

	</tr>

	<tr>

		<td COLSPAN="2" align="center">

		   The Most Important Information About Your Company!</b><br><br>"To list your company correctly please search the following list for 

categories that match your product line(s).  You may select as many 

categories as is appropriate but remember that selecting non-matching 

categories will confuse the end-users.<br><i>  All entries are subject to editing by 

LandscapeOnLine.com personnel." </i>

</td>

   </tr>

  <tr>

     <td colspan="2" align="center">

	 <?

		if($action != "edit") $xlist[] = "";

		$V->view_xlist($id,$xlist);

	?>

    

</td>

</tr>

<tr>

<td colspan="2">

 <table align="center">

<tr>

	<td align="center" >Upon approval by the publisher, this information will appear in the Specifier’s Guide,<br> and/or the Buyers Guide, and/or LandscapeOnLine.com

	</td>

<tr>

 <TR>

<TD align=center >

<input type="submit" name="submit" value="Continue" >

 

 </td>

 </TR> 

 

 	</TABLE> 

	 <TR> 

					 <TD COLSPAN="3"><!-- mm-bottomreplace --><br><br><hr></TD> 

				  </TR> </FORM>

	</td>

 </TR>

 	</TABLE>