<?

$include_path = "../../includes/";

include $include_path . "script_head.inc";

include $include_path . "class/media_class.inc";

$M = new media_class($db);

include $include_path . "main_top.inc";

?>

<?

if ($action == !"edit")

{

   $media_id = $uid;

}

 $data = $M->get_pass($media_id);

 $pass = $data['pass'];



?>

 <body bgcolor="#E8FCFF" >

 <TABLE ALIGN="center" BORDER="1" CELLPADDING="7" rules="none" bordercolor="#3399ff" width="50%" bgcolor="#ffffff" > 

	<TR> 

		<TD align="center">

			<IMG SRC="image/logo.gif" WIDTH="246" HEIGHT="37" BORDER="0">

		</td>

	</tr>

	<?if($action == "edit")

	{?>



	<tr>

		<td align="center">

			<B>Thank you for Update </B> 

			<P>Just a reminder your <br> password  is <font color="#FF0099"><?echo $pass?></font>

			</P>

		</TD> 

	</TR><br>

	

	<?}else{?>

	<tr>

		<td align="center">

			<B>Thank you for Update </B> 

			<P>To make future changes to your information, please go to www.LandscapeOnLine.com 

                  with the<br> password <font color="#FF0099"><?echo $pass?></font>

			</P>You have made the right choice listing with Landscape On Line. Your listing should be active within one working day.

		</TD> 

	</TR><br> 

	<?}?>

	<tr>

		<td align="center"><a href="../kill.php">home

		</td>

	</tr>

</TABLE><br> 

<? 

include $include_path . "main_bottom.inc";

?>