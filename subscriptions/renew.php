<?

include "lol_common.inc";



if ($REQUEST_METHOD=="POST") {

	if ($password == "AAA000000") {

	    if ($subscribe== "LCM")

			header("location:circulation_subscription.php?subscribe=LCM");

	    else

			header("location:circulation_subscription.php?subscribe=LASN");

		}

	} else {

		$uid = $C->login_subscriber($password);

		if (is_numeric($uid)) {

		    if ($action == "edit") 

				header("location:circulation_subscription.php?action=edit&uid=$uid");	   

		    else 

			    header("location:circulation_subscription.php?action=renew&uid=$uid");

		}

		if (!is_numeric($uid)) $mode = "error";

	}

}



include $include_path . "lol_header.inc";



if ($mode == "error") { ?>

<TABLE ALIGN=center BORDER=1 CELLPADDING=5 rules=none bordercolor=#3399ff width=40% bgcolor=#ffffff>";

	<tr>

		<td colspan=2 nowrap><font color=red>The code you entered doesn't match a subscriber. Please contact Landscape on Line for assistance.</font></td>";

	</tr>

	<tr>

		<td align=center><a href=../index.php><img src=../image/butt_home.gif border=0 ></a></td>";

		<td align=center><a href=renew.php?action=edit>Try Again</a></td>";

	</tr>

</table> 

<? } else { ?>



		<form method="post" action="<?echo $PHP_self?>">	

		  <? if ($renew == "renew") {

                   "<input type=hidden name=renew value=renew>";

	         } ?>

			 <TABLE WIDTH="75%"> 

				<TR> 

					<TD COLSPAN="3" class="cellhead">Access to Subscriber Change Form</TD> 

		       </TR> 

		

			 <TD align="center">Enter the 9-digit alphanumeric code<BR>

			 	from your magazine's mailing label:<BR></td>

		   </tr>

		   <TR>

			 <TD align="center"><?echo $error; ?></td>

		   </tr>

		   <TR>

			 <TD align="center"><input type="password" name="password" MAXLENGTH="10" ></td>

		   </tr>	

		   <TR>

			 <TD align="center">Please note . . . The Password requirement is case sensitve. Type your password exactly as it appears on your label or e-mail confirmation</td>

		   </tr>

		   <tr>

			<td align="center" >	  

				<INPUT TYPE="submit" VALUE="Enter">

				</TD>

		  </TR>

		    <TR> 

					 <TD COLSPAN="3"><!-- mm-bottomreplace --><br><br><hr></TD> 

				  </TR> 

				  

			 </TABLE></form> 

<?}?>

<? include $include_path . "lol_footer.inc"; ?>

	