<?

include "lol_common.inc";



if($REQUEST_METHOD=="POST") { 

	if ($password == "AAA000000") {

		header("location: vendor_add.php");

	} else {		

		$uid = $C->login_vendor($password);

        if(is_numeric($uid)) {

			header("location:profile.php?action=edit&uid=$uid");

	}

		if(!is_numeric($enter) )

			$error .= "The code you entered doesn't match a Vendor. Please contact Landscape on Line for assistance.";

	}

}

include  $include_path . "lol_header.inc";

?>

 <form method="post" action="<?echo $PHP_self?>">

	<TABLE ALIGN="center" valign="middle" width="75%" bgcolor="FFFFFF" cellpadding="6" > 

			  <TR>

				 <td  background="../imgz/head_mid_up_txt.gif" colspan="2">

					<font color="#FFFFFF" size="4" ><B>Access Vendor Form</B></font></td>

           </tr>

		   <tr>

                 <td ALIGN="center" valign="middle" colspan="2" >Enter the ID and password <BR>Given to you by LandscapeOnLine.com<BR></td>

		   </tr>

		     <TR>

			 <TD align="right">Password :</td> 

			  <td ><input type="password" name="password" MAXLENGTH="10" ></td>

          </tr>

		  <tr>

		  <td colspan="2"><table cellpadding="3">

		  <?if ($error)

			  { $C->errors($error);

			  }?></table></td>

			

		  </tr>

		   <tr>		

			<td align="center" colspan="2">	  

				<INPUT TYPE="submit" VALUE="Enter">

				</TD>

		  </TR>

		</TABLE></td>

</FORM>	



</td>

<td valign="top" align="RIGHT" width="179">

<? include $banner_include_path . "advertising_bottom.inc"; ?>

	</TD>

</TR>

<? include $include_path . "main_bottom.inc"; ?>