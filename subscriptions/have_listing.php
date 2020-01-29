<?
	include "lol_common.inc";
include $include_path . "class/media_class.inc";
$M = new media_class($db);

include $include_path . "lol_header2.inc";
?>
	<?
// set values for edit & renew
$data = $M->get_info_list($total);
$comp_name = $data['comp_name'];
$sal = $data['sal'];
$last_name = $data['last_name'];
$first_name = $data['first_name'];
$address = $data['address'];
$address_2 = $data['address_2'];
$city = $data['city'];
$state = $data['state'];
$zip = $data['zip'];
$mail_to = $data['mail_to']; 
$country = $data['country'];
$address_2 = $data['address_2'];
$alt= $data['alt'];
$area_code = $data['area_code'];
$phone = $data['phone'];
$fax = $data['fax'];
$area_code_fax = $data['area_code_fax'];
$website = $data['website'];
$email = $data['email'];
$month = $data['month'];
$subscribe = $data['subscribe'];
?>
	
							<form method="post" action="<?echo $PHP_SELF?>">
								<input type="hidden" name="subscribe" value="<?echo $subscribe?>">
								<?if (strlen($ls) > 0 )
			{
			 echo "<input type=hidden name=ls value=".$ls.">";
			}
			?>
								<TABLE WIDTH="90%">
									<TR>
										<TD COLSPAN="3" class="cellhead">	Subscription <STRONG>
					 </STRONG></FONT>
										</TD>
									</TR>
									<TR bgcolor="FFFFFF">
										<?if ($subscribe == "LASN")
						{
							echo "<TD colspan=2 align=center  ><IMG SRC=image/lasn_logo.jpg  BORDER=0 WIDTH=210 HEIGHT=60></TD> ";
						}
						if ($subscribe == "LCM")
						{
							echo "<TD colspan=2 align=center ><IMG SRC=image/lcm_logo.jpg   BORDER=0 WIDTH=210 HEIGHT=60></TD> ";
						}
						if ($subscribe == "LOL")
						{
							echo "<TD colspan=2 align=center ><IMG SRC= image/logo.gif   BORDER=0 WIDTH=210 HEIGHT=60></TD> ";
						}
						?>
									</TR>
									<?if ($error)
					{$C->errors($error);}?>
					</tr>
					<tr>
						<td ALIGN="center" colspan="2">	Our records show you are a current subscriber please contact us for more information 	</font><br><br>
						</td>
					</tr>
					<TR>
						<TD ALIGN="right"><B>Company Name</B>:
						</TD>
						<TD>
							<?echo ucwords($comp_name) ;?>
						</TD>
					</TR>
					<TR>
						<TD ALIGN="right" NOWRAP="NOWRAP"><B>Your Name</B>:
						</TD>
						<TD>
							<?echo $sal ?>
							<?echo ucwords($first_name)?>
							<?echo ucwords($last_name)?>
						</TD>
					</TR>
					<TR>
						<TD ALIGN="right" NOWRAP="NOWRAP" VALIGN="top"><B>Company Address</B>:
						</TD>
						<TD>
							<?echo $address?>
							<?echo $address_2?>
						</TD>
					</TR>
					<TR>
						<TD ALIGN="right" NOWRAP="NOWRAP"><B>Company City, State ZIP</B>
						</TD>
						<TD>
							<?echo $city?>
							<?echo $state?>
							<?echo $zip?>
						</TD>
					</TR>
					<TR>
						<TD ALIGN="right" NOWRAP="NOWRAP"><B>website</B>:
						</TD>
						<TD>
							<?echo $website?>
						</TD>
					</TR>
					<TR>
						<TD ALIGN="right" NOWRAP="NOWRAP"><B>Phone</B>:
						</TD>
						<TD>	(
							<?echo $area_code?>)
							<?echo $phone?>
						</TD>
					</TR>
					<TR>
						<TD ALIGN="right" NOWRAP="NOWRAP"><B>FAX</B>:
						</TD>
						<TD>	(
							<?echo $area_code_fax?>)
							<?echo $fax;?>
						</TD>
					</TR>
					<TR>
						<TD ALIGN="right" NOWRAP="NOWRAP"><B>Email</B>:
						</TD>
						<TD>
							<?echo $email;?>
						</TD>
					</TR>
					<TR>
						<TD ALIGN="right" NOWRAP="NOWRAP"><B>Birthday Month</B>:<BR>
						</TD>
						<TD VALIGN="TOP">
							<? echo $month ?>
						</TD>
					</TR>
					<TR>
						<TD ALIGN="center" colspan=2><br>
						<br>
						<br>
						<a href="javascript:history.back();">Back</a><BR>
						
						</TD>
					</TR>
				</TABLE>
		
<? include $include_path . "lol_footer.inc"; ?>
	
