<?$include_path = "../../includes/";

$banner_include_path = "../../includes/banner_incs/";

include $include_path . "script_head.inc";

include $include_path . "class/media_class.inc";



$C = new Common_Class($db);



include $include_path . "main_top.inc";  

include $banner_include_path . "top_menu.inc";

?>

<TR valign="top"><td>

<? include $banner_include_path . "advertising_top.inc"; ?>

</td><TD VALIGN="top" WIDTH="75%" align="center">  



	<FORM method="post" action="<?echo $PHP_SELF ?>">		

		<INPUT type="hidden" name="vst" value="<?echo $vst?>">

		<TABLE align="center" width="75%">

			<TR>

				<TD background="../imgz/head_mid_up_txt.gif" colspan="2" align="center"><FONT color="#FFFFFF" size="4"><B>Professional Listings and Subscriptions

				</TD>

			</TR>

			<TR>

				<TD align="CENTER" colspan="2"><B>Required Information</B><BR>I am interested in: (choose one only)

				<HR color="#3399ff">

				</TD>

			</TR>

			<TR>

				<TD align="CENTER"><IMG src="image/lasn_logo.jpg" border="0" height="60" width="210">

				</TD>

				<TD align="LEFT" valign="MIDDLE">	Landscape Architect &amp; Specifier News (LASN)<BR>					

					<INPUT TYPE="radio" onClick="location.href='circulation_subscription.php?subscribe=LASN'">Beginning a new subscription<BR>					

					<INPUT TYPE="radio" onClick="location.href='renew.php?subscribe=LASN'">Renewing my current subscription<BR>					

					<INPUT TYPE="radio" onClick="location.href='renew.php?action=edit'">Changing my address

				</TD>

			</TR>

			<TR>

				<TD align="CENTER" colspan="2" height="30">

				</TD>

			</TR>

			<TR valign="MIDDLE">

				<TD align="CENTER"><IMG src="image/lcm_logo.jpg" border="0" height="60" width="210">

				</TD>

				<TD align="LEFT" valign="MIDDLE">	Landscape Contractor Magazine (LCM)<BR>					

					<INPUT TYPE="radio" onClick="location.href='circulation_subscription.php?subscribe=LCM'">Beginning a new subscription<BR>					

					<INPUT TYPE="radio" onClick="location.href='renew.php?subscribe=LCM'">Renewing my current subscription<BR>					

					<INPUT TYPE="radio" onClick="location.href='renew.php?action=edit'">Changing my address<BR>

				</TD>

			</TR>

			<TR>

				<TD align="CENTER" colspan="2" height="30">

				</TD>

			</TR>



			<TR valign="MIDDLE">

				<TD nowrap align="CENTER"><IMG src="image/logo.gif" border="0" height="60" width="210">

				</TD>

				<TD align="LEFT" valign="MIDDLE">	LandscapeOnLine.com ( LOL )<BR>					

					<INPUT TYPE="radio" onClick="location.href='circulation_subscription.php?subscribe=LOL&ls=d'">Beginning a new online listing for design services<BR>					

					<INPUT TYPE="radio" onClick="location.href='circulation_subscription.php?subscribe=LOL&ls=c'">Beginning a new online listing for contractors<BR>					

					<INPUT TYPE="radio" onClick="location.href='renew.php?action=edit'">Updating my online listing

				</TD>

			</TR>

			<TR>

				<TD colspan="3" height="7" background="../imgz/head_mid_up_txt.gif">

				</TD>

			</TR>

		</TABLE>

	</FORM>





</td>

<td valign="top" align="RIGHT" width="179">

<? include $banner_include_path . "advertising_bottom.inc"; ?>

	</TD>

</TR>

<? include $include_path . "main_bottom.inc"; ?>