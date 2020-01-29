<?

$include_path = "../../includes/";

$banner_include_path = "../../includes/banner_incs/";

include $include_path . "script_head.inc";

include $include_path . "class/media_class.inc";



$M = new media_class($db);



include $include_path . "main_top.inc"; 

include $banner_include_path . "top_menu.inc";

?>

<TR valign="top"><td>

<? include $banner_include_path . "advertising_top.inc"; ?>

</td><TD VALIGN="top" WIDTH="75%" align="center">  

 

		<? $M->find_some($area_code,$biz_id,$serv,$conditions);?>

</td>

<td valign="top" align="RIGHT" width="179">

<? include $banner_include_path . "advertising_bottom.inc"; ?>

	</TD>

</TR>

<? include $include_path . "main_bottom.inc"; ?>