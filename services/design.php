<?

$include_path = "../../includes/";

$banner_include_path = "../../includes/banner_incs/";

include $include_path . "script_head.inc";

include $include_path . "class/media_class.inc";

$M = new media_class($db);

$C = new common_class($db);



if($REQUEST_METHOD=="POST")

	{

		if ($action == "edit") {

		$uid = $media_id;}

		



			$error = "";

             



					if(strlen($biz_title) < 2 )

					$error .= "- Please enter your Title<br>";



					if (strlen($biz_title_other) == 0) 

						{

					     $biz_title_other = "none";

					    } 



					if(strlen($assoc) < 2 )

					$error .= "- Please enter your Associations<br>";



					if(strlen($reg) < 2)

					$error .= "- Please enter Registered or Cetified<br>";

					

					if (strlen($assoc_other) == 0)

		             {

						$assoc_other = "no";

                     }

					 if (strlen($type_biz_other) == 0)

		             {

						$type_biz_other = "no";

                     }



					if(strlen($biz_id) < 2)

					$error .= "- Please enter Firm/Company/Dept<br>";

			

			



			if(!strlen($error))

			  {  

						//to take check boxes array

							if(is_array($assoc))

							 $assoc = implode(",",$assoc);



							if(is_array($biz_id))

							 $biz_id = implode(",",$biz_id);



						  if(is_array($auth))

							 $auth = implode(",",$auth);

						     $input = strtotime("now");



								     				

					$M->lasn_input($uid, $biz_id, $biz_title, $biz_title_other, $assoc, $assoc_other, $reg,$type_biz_other,$auth,$input,1);



						if ($action == "edit" || $action == "renew")

                          { header("location:pro_interest.php?action=".$action."&media_id=$media_id"); }

						else

	                      { header("location:pro_interest.php"); }

			  }		  

 }

 include $include_path . "main_top.inc";  

 include $banner_include_path . "top_menu.inc";

?>

<TR valign="top"><td>

<? include $banner_include_path . "advertising_top.inc"; ?>

</td><TD VALIGN="top" WIDTH="75%" align="center">  

<?

	// set values for edit & renew

if ($action == "edit" || $action == "renew")

{

$data = $M->get_info_list($media_id);

$biz_title = $data['biz_title'];

$assoc = explode(",", $data['assoc']);

$biz_id = explode(",", $data['subscribe_type']);

$reg = $data['reg'];

$auth = explode(",",$data['auth']);

$subscribe_type  = $data['subscribe_type'];



}?>



<form method="post" action="<?echo $PHP_SELF?>">

<input type="hidden" value="<?echo $media_id?>" name="media_id" >

		<input type="hidden" value="<?echo $action?>" name="action">

<TABLE WIDTH="75%" BGCOLOR="FFFFFF"	> 

	<TR> 

		  <TD COLSPAN="3" HEIGHT="27"

			BACKGROUND="../imgz/head_mid_up_txt.gif">

			 <FONT COLOR="#FFFFFF" SIZE="3"

			  FACE="Arial, Helvetica, sans-serif"><STRONG>Subscription Form

			 </STRONG></FONT></TD> 

	</TR> 

	<TR bgcolor="FFFFFF"> 

		  <TD  COLSPAN="2"  align="center">

			 <IMG SRC="image/lasn_logo.jpg"  BORDER="0" WIDTH="210"

			  HEIGHT="60"><BR>

		   </TD>

	  </TR>

 <TR VALIGN="MIDDLE">

		  <TD COLSPAN="2" VALIGN="MIDDLE" ALIGN="CENTER"><hr color="#3399ff">&nbsp;<B>Subscription Form</B><BR>Fields in <B><FONT

			 COLOR="#ff0000">red</FONT></B> are required</FONT><BR CLEAR="ALL"></TD>

		</TR>

		<tr>

			<TD COLSPAN="2" align="center" >

				<?

				if ($error)

					{

						 $C->errors($error);

					}

				?>

			</TD>

		</TR>

		<TR>

		  <TD VALIGN="TOP" ALIGN="RIGHT">&nbsp;<FONT

			 COLOR="#ff0000"><B>Title</B></font></TD>

		  <TD>

		     <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Sole Owner"){echo "Checked"; } ?> value="Sole Owner" > Sole Owner<BR> 

		     <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Partner/Principle"){echo "Checked"; } ?> value="Partner/Principle" > Partner/Principle<BR>

			 <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Associate"){echo "Checked"; } ?> value="Associate"> Associate<BR>

			 <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Public Practice"){echo "Checked"; } ?> value="Public Practice"> Public Practice<BR>

			 <INPUT TYPE="RADIO" NAME="biz_title"  <? if ($biz_title =="Admin/Supervisor/Mgr"){echo "Checked"; } ?>value="Admin/Supervisor/Mgr"> Admin/Supervisor/Mgr.<BR>

			 <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Academia - Educator"){echo "Checked"; } ?> value="Academia - Educator" > Academia - Educator<BR>

			 <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Academia - Student"){echo "Checked"; } ?> value="Academia - Student"> Academia - Student<BR>

			 <INPUT TYPE="RADIO" NAME="biz_title" <? if ($biz_title =="Other"){echo "Checked"; } ?> value="Other"> Other : 

			 <INPUT TYPE="TEXT" NAME="biz_title_other" <?echo $biz_title_other ;?>SIZE="10">

			 <BR><BR></TD> 

		</TR> 

	  	<TR> 

		  <TD VALIGN="TOP" ALIGN="RIGHT">&nbsp;<FONT COLOR="#ff0000"><B>Associations</B></font><BR>(Please

			 select every assoc. <br> that you belong to):</TD>

		  <TD>

	<?

		$M->assoc($assoc);

	?>

	</TD> 

		</TR> 

		<TR> 

		  <TD VALIGN="TOP" ALIGN="RIGHT">&nbsp;<FONT

			 COLOR="#ff0000"><B>Registered or Certified<BR>Landscape

			 Architect</B>:</font></TD>

		  <TD>

		  <INPUT TYPE="RADIO"  NAME="reg"  VALUE="yes"> Yes<BR>

		  <INPUT TYPE="RADIO"  NAME="reg"  VALUE="no" checked> No<BR><BR></TD> 

		</TR> 

		

		<TR> 

		  <TD VALIGN="TOP" ALIGN="RIGHT"><FONT COLOR="#ff0000"><B>My<BR>Firm/Company/Dept<BR>does</B>:</FONT><BR><font SIZE="-1">(Select all that apply)</FONT></TD>

		  <TD>

		  

<?

		$M->type_biz($biz_id);

?>

	<input type="checkbox" name="lcm_biz_id[]"  value="other"> Other : <input type="text" name="type_biz_other" value="<?echo $other?>">

		 </TD> 

		</TR>

	

		

		<TR> 

		  <TD COLSPAN="2"><br></TD> 

		</TR> 

		

		<TR>

		  <TD VALIGN="TOP" ALIGN="RIGHT">&nbsp;<B>Authority</B>:<BR><FONT

			 SIZE="-1">(Select all that apply)</FONT></TD>

		  <TD>&nbsp;My authority allows me to:<BR>

<?

  $M->auth($auth);

?></TD>

		</TR>

		<TR> 

		  <TD COLSPAN="2" align="center">

				<FONT  SIZE="-1">Step 2 of 4 </FONT>

				<INPUT  TYPE="SUBMIT"  VALUE="Continue">

		 </TD> 



</TABLE>

	</form>

</td>

<td valign="top" align="RIGHT" width="179">

<? include $banner_include_path . "advertising_bottom.inc"; ?>

	</TD>

</TR>

<? include $include_path . "main_bottom.inc"; ?>

