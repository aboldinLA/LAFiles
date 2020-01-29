<?
$include_path = "../../includes/";
include $include_path . "script_head.inc";
include $include_path . "class/common_class.inc";
$C = new Common_Class(&$db);

if($REQUEST_METHOD=="POST")
{ 
	              
			 
			 $enter = $C->logins($password);
                
              if (is_numeric($enter) )
				  {
				     header("location: place_review.php?action=edit&media_id=$enter");
				  }
			  if (!is_numeric($enter) )
				 $mode = "error";
			
         
	   
}

?>
<?if ($mode == "error")
{

	  echo "<TABLE ALIGN=center BORDER=1 CELLPADDING=5 rules=none bordercolor=#3399ff width=40% bgcolor=#ffffff>";
		  echo "<tr>";
		  echo "<td colspan=3 nowrap><font color=red>The code you entered doesn't match a subscriber. Please contact Landscape on Line for assistance.</font></td>";
		  echo "</tr>";
		  echo "<tr>";
		  echo "<td align=center><a href=../index.php><img src=../image/butt_home.gif border=0 ></a></td>";
		  echo "<td align=center><a href=../help.php><img src=../image/butt_help.gif border=0 ></a></td>";
		   echo "<td align=center><a href=place_ad.php>Back</a></td>";
		  echo "</tr>";
		  echo "</table>";
 

}else{
	include $include_path . "main_top.inc"?>
 <form method="post" action="<?echo $PHP_self?>">
		 <TABLE ALIGN="center" CELLPADDING="15" >
		 <tr>		
			 <TD align="left"><a href="../password.php">I forgot my password</a></TD> 
		  
			 <TD align="right"><a href="../help.php"><img src="../image/butt_help.gif" border="0" ></a></TD> 
		  </TR>
		  <TR>
		  	 <TD align="center" colspan="2"><B>To view  your information</B>
				<P>Enter the 9-digit alphanumeric code<BR>from
				  your magazine's mailing label:<BR>- OR -<br>Your 9-digit code from LandscapOnLine.com<br>( Provided when you first signed up )</td>
		   <tr><TR>
			 <TD align="center" colspan="2"><?echo $error; ?></td>
		   <tr>
		   <TR>
			 <TD align="center" colspan="2"><input type="password" name="password" MAXLENGTH="10" ></td>
		   <tr>		
			<td align="center" colspan="2">	  
				<INPUT TYPE="submit" VALUE="Enter">
				</TD>
		  </TR>
		  
		</TABLE></FORM>
<?}?>
<?
include $include_path . "main_bottom.inc";
?>