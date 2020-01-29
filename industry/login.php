<?

include "lol_common.inc";



include $include_path . "class/industry_class.inc";



$I = new industry_Class($db);

 

if($REQUEST_METHOD=="POST")

{

			  $new = $I->password_check($email,$password); 

			   if (is_numeric($new))

				   {

				   	  $uid =$new;

				   	  session_register("uid");

					  $_SESSION['uid'] = $new; 

				      header("location:associat_list.php?action=edit&uid=$new");

			       }	

			       else{

				    $error .= "Invalid E-mail address or password ";

				   }

}

include $include_path . "lol_header.inc";

?>



<TABLE ALIGN="center" CELLPADDING="0" WIDTH="100%" CELLSPACING="0" > 

	<TR>

		<td class="cellhead">Member Login</td>

		</tr>

	<tr>

		 <TD><B>Access Your Assocation Information</B></td>

	</tr>

	<TR>

		<TD align="center">

 			<?  if ($error) { $C->errors($error); }; echo $new; ?>

		</td>

	</tr>

	<TR>

		<TD><? include  $include_path . "loginform.inc" ?></td>

	</tr>

</TABLE>

<? include $include_path . "lol_footer.inc"; ?>

	