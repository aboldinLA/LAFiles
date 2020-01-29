<?
$include_path = "../../includes/";
include $include_path . "script_head.inc";
include $include_path . "class/media_class.inc";
if($REQUEST_METHOD=="POST")
	{
		
		header("location: ../kill.php");
	}
include $include_path . "main_top.inc";
?>
<form method="post" action="<?echo $PHP_SELF?>">
<body bgcolor="#E8FCFF" >
 <TABLE ALIGN="center" BORDER="1" CELLPADDING="7" rules="none" bordercolor="#3399ff" width="40%" bgcolor="#ffffff" > 
	<TR> 
		<TD align="center">
			<IMG SRC="image/logo.gif" WIDTH="246" HEIGHT="37" BORDER="0">
		</td>
	</tr>
	<tr>
		<td align="center">
			<B>Thank you for choosing Landscape On Line</B> 
			</TD> 
	</TR><br> 
	<tr>
		<td align="center"><input type="submit" name="home" value="Home">
		</td>
	</tr>
</TABLE></form><br> 
<? 
include $include_path . "main_bottom.inc";
?>