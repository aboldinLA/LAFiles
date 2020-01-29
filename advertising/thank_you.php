<?

$include_path = "../../includes/";

$banner_include_path = "../../includes/banner_incs/";

include $include_path . "script_head.inc";

include $include_path . "class/media_class.inc";



 

$C = new common_class($db);

$M = new media_class($db);





// change logo for just sign up 

include $include_path . "main_top.inc";

include $banner_include_path . "top_menu.inc";

include $banner_include_path . "advertising_top.inc";



?>

 



<?if ($action == "edit")

{

$subscribe = $M->gets($media_id);

$pass =  $M->find_pass($media_id);

?>

<?if ($subscribe == "LASN")

		{

		   $logo = "lasn_logo.jpg";

           $name = "Landscape Architect Magazine ";

		

		}

		if ($subscribe == "LCM")

		{

		   $logo = "lcm_logo.jpg";

		   $name = "Landscape Contractor Magazine ";

		

		}if ($subscribe == "LOL")

		{

		   $logo = "logo.gif";

		   $name = "LandscapeOnLine.com ";

		

		}

		?>

		<TABLE WIDTH="75%" align="center" valign="top"> 

<TR> 

<TD COLSPAN="3" class="cellhead"><STRONG>Your Address has been Changed</STRONG></FONT></TD> 

				</TR> 

         <TR> 

		<TD align="center" bgcolor="FFFFFF">



			<IMG SRC="image/<?echo $logo?>" WIDTH="246" HEIGHT="60" BORDER="0">

		</td>

	</tr>

	<tr>

		<td align="center">

			 



			<P>Your Address has been Changed<br>

			Just a reminder<br> <FONT SIZE="4">Your  Password  is:<b> <font color="#FF0099"><?echo $pass?></b></font></FONT>

			</P>		</TD> 

	</TR><br> 

<?

	}else{



$key = $M->make_key($uid);

$pass = $M->mkpass($pass, $uid);

$us = $M->get_info_list($uid);

$subscribe = $M->gets($uid);

$M->load_key($uid,$key,$name,$pass); ?>



 <TABLE WIDTH="90%" align="center" valign="top"> 

	

		<?if ($subscribe == "LASN")

		{

		   $logo = "lasn_logo.jpg";

           $name = "Landscape Architect & Specifier News ";

		

		}

		if ($subscribe == "LCM")

		{

		   $logo = "lcm_logo.jpg";

		   $name = "Landscape Contractor Magazine ";

		

		}if ($subscribe == "LOL")

		{

		   $logo = "logo.gif";

		   $name = "LandscapeOnLine.com ";

		

		}

		

		

		

		?>

<TR> 

<TD COLSPAN="3" class="cellhead"><STRONG>Thank you for choosing  <?echo $name?></STRONG></FONT></TD> 

				</TR> 

         <TR> 

		<TD align="center" bgcolor="FFFFFF">



			<IMG SRC="image/<?echo $logo?>" WIDTH="246" HEIGHT="60" BORDER="0">

		</td>

	</tr>

	<tr>

		<?if ($action=="renew")

		{

				echo "<td align=center>Thank You for you Renewal</TD>"; 

		

		

		}else{?>

		<td align="center">

			<P>You have made the right choice your on line account should be active within two to three working days. For future reference (to make changes), please note your<br><br> <FONT SIZE="4">Password :<b> <font color="#FF0099"><?echo $pass?></b></font></FONT>

			</P>

		</TD>

	<?}?>	

	</TR><br> 

	<?}?>

	

</TABLE>

</td>

<td valign="top" align="RIGHT" width="179">

<? include $banner_include_path . "advertising_bottom.inc"; ?>

	</TD>

</TR>

<? include $include_path . "main_bottom.inc"; ?>