<?include "lol_common.inc";include $include_path . "class/media_class.inc";$M = new media_class($db);$M->list_media($uid,$list);if ($list == "go") { 	header("location: " . $lol_url_s . "/bin/linkpoint/payment.php?pt=sub&id=$uid");} else if ($list == "yes" || $list == "no") {	header("location: thank_you.php?list=".$list."&action=".$action);}include $include_path . "lol_header.inc";if ($action == "edit") {$subscribe =$_SESSION['subscribe_list'];$protype=$_SESSION['protype_list'];$uid=$_SESSION['uid'];}if ($subscribe == "lasn"){	$logo = "lasn_logo.jpg";	$name = "Landscape Architect Magazine ";} elseif ($subscribe == "lcm"){	$logo = "lcm_logo.jpg";	$name = "Landscape Contractor Magazine ";} else {	$logo = "main_lol_logo.gif";	$name = "LandscapeOnLine.com";}?><TABLE ALIGN="center" cellpadding="0" cellspacing="0" width="100%"><tr><td><table cellspacing=0 cellpadding=0 border=0 width="100%"><tr><td><center><font style="font-size:22px;font-family:arial">Congratulations! Your Listing is Almost Complete!</font><br><br><font style="font-size:18px;font-family:arial"><b>Now choose your LandscapeOnline "Find A Pro" listing package . . .</b></font><br><br><hr noshadow color=67999A width=80%><font style="font-size:14px;font-family:arial"><b>Option 1: <a href="<?=$PHP_SELF?>?list=yes">Sign me up</a> for the free listing, in random order, below my Premium Positioned Competitors.</b></font><hr noshadow color=67999A width=80%><br><br><a href="<?=$PHP_SELF?>?list=go"><img border=0 src="images/op2.gif"></a></br><font style="font-size:14px;font-family:arial;color:808080">		&nbsp;<b>for Premium Position Listings</b><br><img src="images/catcher.gif"><br><font style="font-size:12px;font-family:arial"><b>By far, the best advertising opportunity on the web!<br></b>For only $6.95 a month <i>(limited time only)</i> you can . . .<br><br>Reach 1,000's of Developers, Commercial Developments,Building Managers, <br>Municipalities, Parks Departments and Home Owners</font><br><? if ($error) $C->errors($error); ?><br><table border=0 cellspacing=0 cellpadding=0>	<tr>		<td><img src="images/prempos_top.gif" border=0></td>		<td rowspan=2><img src="images/spacer.gif" height=111 width=15></td>		<td><img src="images/directlink_top.gif" border=0></td>		<td rowspan=2><img src="images/spacer.gif" height=111 width=15></td>		<td><img src="images/specialintro_top.gif" border=0></td>	</tr>	<tr>		<td bgcolor=ffffff height=75 width=184 valign=top align="Center">		<table border=0 cellspacing=0 cellpadding=6><tr><td align="Center">		<font style="font-size:11px;font-family:arial">		Premium Listings are always <br>in the same order at the		top of<br>your area code.<br><br>First In is First Listed!		</font></td></tr></table>		</td>		<td bgcolor=ffffff height=75 width=184 valign=top align="Center">		<table border=0 cellspacing=0 cellpadding=6><tr><td align="Center">		<font style="font-size:11px;font-family:arial">		Put your best foot forward with a direct link right		to your company's existing website!		</font></td></tr></table>		</td>		<td bgcolor=ffffff height=75 width=184 valign=top align="Center">		<table border=0 cellspacing=0 cellpadding=6><tr><td align="Center">		<font style="font-size:11px;font-family:arial">		Be one of the first to sign up in your area code and take advantage 		of this great introductory offer!		</font></td></tr></table>		</td>	</tr>	<tr>		<td colspan=5 width=582 align=center valign=bottom>		<br>		<font style="font-size:12px;font-family:arial">		Click <a href="<?=$PHP_SELF?>?list=go">"<b>Sign me Up</b>"</a> to List Your Company in the First Available Premium Position for only $6.95 a month!</b></font>  		<font style="font-size:12px;font-family:arial">		<br><i>(Billed conveniently to your credit card.)</i>		</font><br><br>		<form method="get" action="<?echo $PHP_SELF?>">   	 	<input type="hidden" value="<?echo $uid?>" name="uid" >			</td>	</tr></table><hr noshadow color=67999A width=80%><table cellspacing=0 cellpadding=0 border=0>	<tr>		<td colspan=2>&nbsp;</td>	</tr>	<tr>		<td valign=center align=right>		</td>	</tr>	<tr>		<td colspan=2>&nbsp;</td>	</tr>	<tr>		<td valign=center align=right><a href="<?=$PHP_SELF?>?list=no"><img border=0 src="images/op3.gif"></td>		<td valign=center align=left>		<font style="font-size:11px;font-family:arial;color:808080">		. I do not wish to be listed		in LandscapeOnline's Nationwide "Find A Pro" Service Search.		</td>	</tr></table></form></center></td></tr></table><BR>			<!--	<TABLE BORDER="0" align="center" width="80%">				  <?if ($action == "edit")				  {					  echo "<input type=hidden name=action value=edit>";					 echo "<TR>";                     echo"<TD align=right></TD>";					 echo "<TD align=center><input type=submit value=Subscribe></TD>";					 echo "<TD COLSPAN=2></TD>";					 echo"</TR></form>";				 }else{?>				    <TR>					 <TD align="right" ><FONT SIZE="-1">Step 4 of 4 </FONT>&nbsp;</TD>					 <TD align="left" ><input type="submit" value="Continue"></TD>					 					 				  </TR></form>				  <?}?>				</TABLE>--> </TD> 		  </TR> 		  <TR> 		 <TD><!-- mm-bottomreplace --><br><br><hr></TD> 	  </TR>		 </TABLE>	<? include $include_path . "lol_footer.inc"; ?>	