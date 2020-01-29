<?

include "lol_common.inc";

include $include_path . "class/research_class.inc";

include $include_path . "image_handle.inc";

include $include_path . "class/industry_class.inc";



$I = new industry_Class($db);

$R = new research_class($db); 





if($REQUEST_METHOD=="POST")

{

    if(!is_uploaded_file($user_upload))

				{

					$picture_error = "<br><font size=\"-1\" color=\"ff0000\">- Please Browse and select an image to upload.</font>";

					$error=true;

				}

			

			// no errors - insert the values and carry on.

			if(!eregi("^([a-zA-Z0-9.]|_)+$",$user_upload_name))

				{

					$picture_error = "<br><font size=\"-1\" color=\"ff0000\">- Picture names must not contain spaces or special charicters (&%$# etc).</font>";

					$error=true;

				}

			

			if((strpos(strtolower($user_upload_name),".jpg") < 1)&&(strpos(strtolower($user_upload_name),".gif") < 1))

				{



				    

					$picture_error = "<br><font size=\"-1\" color=\"ff0000\">- Please upload only .gif or .jpg files.</font>"; 

					$error=true;

				}



			   if(!$error)

			{



			               //$user_upload = stripslashes($upload);

 			

		

			  

				 				

									// image processing

									$dir_to_store = "../news_photo/";

				



										$picture = upload_image_file($user_upload, $user_upload_name, $user_upload_type, $user_upload_size, 9000, $dir_to_store);

					

									if(file_exists($dir_to_store.$picture))

					

									$input_file_name = create_thumbnail($dir_to_store.$picture,$dir_to_store, 160, 220);



									$input = strtotime("today");  

									

									$I->news_in($acro,$comment,$how,$picture,$input,0);

									

									header("location:thank_you.php");

		  

		  } //end no error      

   

			 



} //end request_method

include $include_path . "lol_header.inc";

?>

<?

if ($acro > 1 )

{

$data = $I->association_info($acro);

$acronym = $data['acronym'];

$association =$data['association'];

$email = $data['email'];

$first_name = $data['mkfirst'];

$last_name = $data['mklast'];





}

?>

<FORM METHOD="post" ACTION="<?echo $PHP_SELF ?>"  ENCTYPE="multipart/form-data"> 

<input type="hidden" name="MAX_FILE_SIZE" value="25000">



<input type="hidden" name="acro" value="<?echo $acro?>">



<TABLE ALIGN="center" WIDTH="75%" > 

<TR> 

					 <TD COLSPAN="3" HEIGHT="27"

					  BACKGROUND="../imgz/head_mid_up_txt.gif">

						<FONT COLOR="#FFFFFF" SIZE="3"

						 FACE="Arial, Helvetica, sans-serif"><STRONG>Association News Submission Page</STRONG></FONT></TD> 

 </TR> 

<TR>

	 <TD colspan="3">

<table>

<TR> 

	 <TD ALIGN="RIGHT" VALIGN="TOP" nowrap><B>Association Acronym :</B></font>  

	 </TD> 

	 <TD></TD> 

	 <TD VALIGN="TOP"><?echo ucwords($acronym)?>

	 </td>

</tr>

<TR> 

	 <TD ALIGN="RIGHT" VALIGN="TOP"><B>Association Name :</B></font>  

	 </TD> 

	 <TD></TD> 

	 <TD VALIGN="TOP"><?echo ucwords($association)?>

	 </td>

</tr>

 <TR> 

	 <TD ALIGN="RIGHT" VALIGN="TOP"><B>Your e-mail:</B>

	 </TD> 

	 <TD></TD> 

	 <TD VALIGN="TOP"><?echo $email?>

	 </TD> 

  </TR> 

</TR> 	

   <TR> 

	 <TD ALIGN="RIGHT" VALIGN="TOP"><B>For more information, please contact :</B></font></TD>  

	 </TD> 

	 <TD></TD> 

	 <TD VALIGN="TOP"><?echo ucwords($first_name)?> <?echo ucwords($last_name)?></td>

</tr>

 <TR> 

	 <TD ALIGN="RIGHT" ><B>Date submitted:</B>

	 </TD> 

	 <TD></TD>

	 <?if (strlen($input) == 0)

	 {$input = strtotime("today"); } ?>

	 <TD VALIGN="TOP"><?echo  date("M d Y",$input)?></TD> 

  </TR> 

   </table>

  </td>

  </tr>

 <tr>

		<TD  VALIGN="TOP" ><b>Please submit your association news here.<br><br>You can type or paste in from any text program</b></TD>

		<TD VALIGN="TOP"  colspan="2" ><TEXTAREA NAME="comment" ROWS="10" COLS="70" WRAP="VIRTUAL" value="<?echo $comment ?>" TABINDEX="16"><?echo $comment?></TEXTAREA>

		 </TD>

	</TR>   

	<tr>

		<TD colspan="3" >

		<table width="100%">

			<tr>

				<TD><INPUT TYPE="radio" NAME="how" VALUE="upload"></TD>

		       <TD   ><b>I am Attacing a photos (must be in  .jpg  or  .gif formats of at least 300 dpi (at a standard 4" x 5" size)</b></TD>

  </TR>   

	<tr>

		<TD ALIGN="center" colspan="2"><b>Press the browse button to locate your attachment.</TD>

	</TR>   

	<TR> 

		 <TD COLSPAN="2" VALIGN="MIDDLE" ALIGN="CENTER">

			 <BR	CLEAR="LEFT">

			 <INPUT TYPE="FILE" NAME="user_upload" size="30" >

						 <?echo $picture_error; ?><BR>

			 <FONT SIZE="-1">Select a gif or jpg file anywhere on your computer<BR><BR></FONT>

		</TD> 

		</TR> 

	<tr>

		<TD  VALIGN="TOP" ><INPUT TYPE="radio" NAME="how" VALUE="mail"></TD>

		<TD VALIGN="TOP"  colspan="2" ><b>I am sending photo in the mail <font size="2">(must be in slide or print format)</font><br>

		 </TD>

	</TR>  <tr>

		<TD  VALIGN="TOP" ></TD>

		<TD VALIGN="TOP"  colspan="2" ><b>Please mail photo(s) to: <br>14771 Plaza Dr.  Suite M <br>Tustin, CA 92780<br> Attn:Association News



		 </TD>

	</TR>  

	</table>

	</td>

	</tr>

	<TR> 

		 <TD colspan="3" align="center"><INPUT TYPE="SUBMIT"  NAME="SUBMIT"  VALUE="Submit" ></TD>

		

		

	</TR> 

	<TR> 

		 <TD COLSPAN="3" HEIGHT="7" BACKGROUND="../imgz/head_mid_up_txt.gif">

		 </TD> 

	</TR> 

</TABLE></FORM>

<? include $include_path . "lol_footer.inc"; ?>

	