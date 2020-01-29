<?

$include_path = "../../includes/";

$banner_include_path = "../../includes/banner_incs/";

include $include_path . "script_head.inc";

include $include_path . "class/common_class.inc";

 

$C = new common_class($db);



include $include_path . "main_top.inc";

include $banner_include_path . "top_menu.inc";

?>

<TR valign="top"><td>

<? include $banner_include_path . "advertising_top.inc"; ?>

</td><TD VALIGN="top" WIDTH="75%" align="center"> 

<form method="post" action="<?echo $PHP_SELF ?>" > 

  		<TABLE WIDTH="75%"> 

  				<TR> 

					 <TD COLSPAN="3" HEIGHT="27" class="cellhead">Advertising Information</TD> 

				  </TR> 

				  <TR> 

					 <TD><INPUT TYPE="radio"

						ONCLICK="location.href='../vendor_user/vendor_add.php'"></TD> 

					 <TD>List Your Company in LOL </TD> 

					 <TD>&nbsp;</TD> 

				  </TR> 

				  <TR> 

					 <TD><INPUT TYPE="radio"

						ONCLICK="location.href='../vendor_user/login.php'"></TD> 

					 <TD>Edit Your Existing Vendor Profile</TD> 

					 <TD>&nbsp;</TD> 

				  </TR> 

				  <TR> 

					 <TD><INPUT TYPE="radio"

						ONCLICK="location.href='advertising_media.php'"></TD> 

					 <TD>Request Advertising Information</TD> 

					 <TD>&nbsp;</TD> 

				  </TR> 

				  <TR> 

					 <TD><INPUT TYPE="radio"

						ONCLICK="location.href='../ebull/ebull.php'"></TD> 

					 <TD>Send a Message to Select Demographic Groups</TD> 

					 <TD>&nbsp;</TD> 

				  </TR> 

				  <TR> 

					 <TD><INPUT TYPE="radio"

						ONCLICK="location.href='../store/ad_class.php'"></TD> 

					 <TD>Classifieds</TD> 

					 <TD>&nbsp;</TD> 

				  </TR> 

				  <TR> 

					 <TD COLSPAN="3"></TD> 

				  </TR> 



				  </TABLE> </FORM>

				



</td>

<td valign="top" align="RIGHT" width="179">

<? include $banner_include_path . "advertising_bottom.inc"; ?>

	</TD>

</TR>



<? include $include_path . "main_bottom.inc"; ?>