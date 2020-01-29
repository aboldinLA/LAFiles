<?

include "lol_common.inc";

include $include_path . "class/user_class.inc";

$U = new user_class($db);

if($REQUEST_METHOD=="POST") {

	if ($action == "login") {

		$new = $C->password_check($email,$password); 

	 	if ($new) {

	  		$uid =$new['id'];

			$at =$new['type'];

	  		session_register("uid");

			session_register("at");

	  	 	$_SESSION['uid'] = $uid; 

			$_SESSION['at'] = $at; 

			header("location: " . $npage);

		} else {

	   		$error .= "Invalid E-mail address or password ";

		}

	}

}



include $include_path . "lol_header.inc";

?>

<TABLE ALIGN="center" CELLPADDING="0" WIDTH="100%" CELLSPACING="0" > 

	<TR>

		<td class="cellhead">Member Information</td>

	</tr>

	<TR>

		<td>&nbsp;</td>

	</tr>

	<? 	if ($action == 'fp') { ?>

	<tr><TD><B>Forget your password?</B></td></tr>

	<TR><TD><form method="post" action="info.php" name="fpform" id="fpf">

		<br>Enter your E-mail Address.  We will send you a link to change your password:<BR>

		<input type="text" name="email" MAXLENGTH="45" value="">

		

		<input type="hidden" name="npage" value="<?=$_SESSION['np']?>">

		<input type="hidden" name="action" value="forgot2"><INPUT TYPE="submit" VALUE="Submit"></FORM>

		</TD>

	</TR>

	<? } 

		if ($action == 'forgot2') { 

			$result = $U->forgot_password($email,$npage);

			if ($result == 'invalid') {

				$error = "The User Name or E-mail Address that you entered is not recognized by our system.1";

			} else { 

				?>

				<tr><TD><B>Thank You.</B></td></tr>

				<TR><TD>

					<br>Please check your email and click on the appropriate link to change your temporary password.<BR>

					</TD>

				</TR>

				<?

	 		}

		} 

		if ($action == 'passchg') { 

			$new = $M->password_check($login,$tmp); 

 			if ($new) {

				session_register("login");

				$_SESSION['login'] = $login;

		?>	

	<tr><TD><B>Change your password:</B></td></tr>

	<tr>

		<td align="center"><br><br>

			<table><TR><TD><form method="post" action="<?echo $PHP_self?>" name="fpform" id="fpf">

				<tr><td align="right">E-mail Address: </td><td><?=$login?></td></tr>

				<tr>

				<td align="right">New Password:</td><td><input type="password" name="pass" MAXLENGTH="45" value=""></td>

				</tr>

				<tr><td align="right">Re-enter New Password:</td>

				<td><input type="password" name="pass_confirm" MAXLENGTH="45" value=""></td>

				</tr>

			</table>

		<td>

	</tr>

	<tr><td align=center><br><br><INPUT TYPE="submit" VALUE="Submit"></td>

	

		<input type="hidden" name="npage" value="<?=(($np=$_SESSION['np']) ? $np : $npage)?>">

		<input type="hidden" name="action" value="passchg2"></FORM></td>

	</tr>

		<? 

			} else {

				$error = "The E-mail Address or password is not recognized by our system.";

			}

		} 

	

		if ($action == 'passchg2') { 

			if ($pass == $pass_confirm) {

				$login = $_SESSION['login'];

				if (!$login) {

					$error = "Session error;";

				} else {

					$U->password_change($login,$pass);

					$new = $U->password_check($login,$pass);

					session_register("uid");

					session_register("at");

  	 				$_SESSION['uid'] = $new['uid']; 

					$_SESSION['at'] = $new['at']; 

					?>

						<tr>

							<TD ><B>Your password has been successfully updated.</B>

								<br><br>

								<strong>Please click <a href="<?=$npage?>">here</a> to continue.</strong><br><br>

								<br><br>Thank you. -The LandscapeOnline Staff</td></tr>

					<?

				} 

			} else {

				$error = "The E-mail Address or password is not recognized by our system.";

			}

		}

		?>

			

		<TR>

		<TD align="center">

 			<? 	if ($error) $C->errors($error); ?>

		</td>

	</tr>

</TABLE>

<?  include $include_path . "lol_footer.inc"; ?>

	