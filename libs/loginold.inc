

<TABLE ALIGN="center" CELLPADDING="0" WIDTH="100%" CELLSPACING="0" > 

	<TR>

		<td class="cellhead"><?

		switch ($t) {

		case "ad": $type="Administration"; break;

		case "as": $type="Association"; break;

		case "v": $type="Vendor"; break;

		case "s": $type="Subscriber"; break;

		}

		echo $type;

		?> Login </td>

	</tr>

	<tr>

		 <TD><B>Access Your Information:</B>

		 <br><br>

		</td>

	</tr>

	<TR>

		<TD align="center">

 			<? if ($err && $err == $ASSOC_ACCT) $error.="You must be registered as an association to access this page."; 

			if ($error) { $C->errors($error); };?>

		</td>

	</tr>

	<TR>

		<TD><form method="post" action="<?echo $PHP_self?>" name="loginform" id="loginf">

			<br>Please enter your password:<BR>

			<table>

			<? if ($t == "ad") {?>

			<tr>

				<td>Login:

				<td><input type="text" name="email" MAXLENGTH="45" value="">

			</tr>

			<? } ?>

			<tr>

				<td>Password:<td> <input type="password" name="password" MAXLENGTH="10" >

		</td>

		</tr>

			<tr>

		<?

		if ( !$_SESSION['np'] && $t == "ad"){

			$new_npage = "/private/index.php";

		} else {

			$new_npage = $_SESSION['np'];

		}

		?>

		<td align="center" colspan=2><INPUT TYPE="submit" VALUE="Enter">

		<input type="hidden" name="npage" value="<?=$new_npage?>">

		<input type="hidden" name="action" value="login">

		<input type="hidden" name="t" value="<?=$t?>"></FORM></TD>

	</TR>

	<tr><td colspan=2>If you forgot your password, please click <a href="info.php?action=fp">here</a>. 

		</table>

		</td>

	</tr>

</TABLE>

