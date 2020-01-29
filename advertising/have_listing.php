<?$include_path = "../../includes/";

include $include_path . "script_head.inc";

include $include_path . "class/media_class.inc";

$M = new media_class($db);

$C = new common_class($db);







if($REQUEST_METHOD=="POST")

	{                  

		                //error check

 						$error = "";



								if(strlen($comp_name) < 3)

									$error .= "- Please enter your Company Name<br>";



								if(strlen($first_name) < 2)

									$error .= "- Please enter your First Name<br>";

									

								if(strlen($last_name) < 2)

									$error .= "- Please enter your Last Name<br>";



								if(strlen($address) < 2)

									$error .= "- Please enter your Address<br>";



								if(strlen($city) < 3)

									$error .= "- Please enter your City<br>";



								if(strlen($state) < 2)

									$error .= "- Please enter your State<br>";



								if(strlen($zip) < 5)

									$error .= "- Please enter your ZIP code<br>";



								if(strlen($area_code) < 3)

									$error .= "- Please enter your Area code<br>";



								if(strlen($phone) < 7)

											$error .= "- Please enter your Phone Number<br>";



								if(strlen($email) < 5)

											$error .= "- Please enter your Email<br>";



								 if(strlen($month) < 2)

											$error .= "- Please enter your Birthday Month<br>";

														

								if(strlen($subscribe) > 4)

												$error .= "- Please subscribe to one at a time<br>";

			

	                 //end error check

					if(!strlen($error))

					 {  

						                     //set listing to number in data base

                                            if ($subscribe == "LASN") 

											{$listing = "1";}

											if ($subscribe == "LCM") 

											{$listing = "2";}



												//to take check boxes array

												if(is_array($how))

												$how = implode(",",$how);

                 

				

													

            

									 if ($action == "renew" ||  $action == "edit" )

									{

										



										 $M->subscribtion_form_edit($media_id, $comp_name, $sal, $first_name, $last_name, $address, $address_2, $city, $state, $zip, $country,$mail_to,$alt_mail, $website,$area_code, $phone, $area_code_fax, $fax, $email, $month); 

                                                 

												 

												 if ($change == "edit")

													 {

													     

												         header("location: thank_you.php?action=edit&media_id=$media_id"); 

														exit;

													 }





												if ($subscribe == 'LASN')

															 { 

															 

															   header("location: lasn.php?action=edit&media_id=$media_id");     

															 }							   

													   if ($subscribe == 'LCM')

															 { 

															   

															   header("location: lcm.php?action=edit&media_id=$media_id");     

															 }		



									}else{

															

															$total = $M->check_user($comp_name,$subscribe);

															

															if (is_numeric($total))

																{

															       echo $total;

																   exit;

																   header("location: have_listing.php?total=$total");



																}



													        //input info

															 $uid = $M->subscribtion_form($comp_name, $sal, $first_name, $last_name, $address, $address_2, $city, $state, $zip, $country,$mail_to,$alt, $website,$area_code, $phone, $area_code_fax, $fax,  $email,$month, $how, $how_other, $subscribe, $note,$listing,0);

														

							  

																			if ($subscribe == 'LASN')

																			{ 



																			header("location:lasn.php");     

																			}							   

																			  if ($subscribe == 'LCM')

																			 { 

																			     header("location:lcm.php");     

																			}		

																			if ($subscribe == 'LOL')

																			{

																			header("location:lol.php?ls=$ls");     

																			} 			

									}//end else				 

					  }//end error check

													

}// end post

include $include_path . "main_top.inc";

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



<TABLE WIDTH="100%"   border="0" cellpadding="0" cellspacing="0"> 

		<TR>

		<TD>

 <TABLE WIDTH="100%"   border="0" cellpadding="0" cellspacing="0"> 

		<TR>

	<!--- top  banner table --->

		  <TD COLSPAN="5" BGCOLOR="FFC900" WIDTH="100%"> 

			 <TABLE WIDTH="100%" BORDER="0" CELLPADDING="0" CELLSPACING="0"> 

				<TR> 

				  <TD WIDTH="161" HEIGHT="71">

					 <IMG SRC="../imgz/header_up01.gif" WIDTH="161" HEIGHT="71"></TD> 

				  <TD WIDTH="119" HEIGHT="71">

					 <IMG SRC="../imgz/header_up02.gif" WIDTH="119" HEIGHT="71"></TD> 

				  <TD BGCOLOR="FFF6D2"><? $C->banner($PHP_SELF,1) ?></TD> 

				</TR> 

			 </TABLE> 

		

	<!--- menu table --->

			 <TABLE WIDTH="100%" BORDER="0" CELLPADDING="0" CELLSPACING="0"> 

				<tr>

					<td height="5" bgcolor="#000000">

					</td>

				  </tr>

				<TR> 

				  <td BGCOLOR="273B74"> 

					 <DIV ALIGN="center">

					  <a HREF="../advertising/index.php" target="_top"  onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image12','','../imgz/butt_advinf_ov.gif',1)">

                         <img src="../imgz/butt_advinf.gif" name="Image12" width="81" height="27" border="0"></a>

						<A HREF="../service/index.php" ONMOUSEOUT="MM_swapImgRestore()"

						 ONMOUSEOVER="MM_swapImage('Image13','','../imgz/butt_find_ov.gif',1)">

						<IMG SRC="../imgz/butt_find.gif" NAME="Image13" WIDTH="81" HEIGHT="27"

						 BORDER="0"></A>

						<A HREF="../index/index.php" ONMOUSEOUT="MM_swapImgRestore()"

						 ONMOUSEOVER="MM_swapImage('Image14','','../imgz/butt_prodsea_ov.gif',1)">

						<IMG SRC="../imgz/butt_prodsea.gif" NAME="Image14" WIDTH="81" HEIGHT="27"

						 BORDER="0"></A>

						<A HREF="../research/index.php" TARGET="_top"

						 ONMOUSEOUT="MM_swapImgRestore()"

						 ONMOUSEOVER="MM_swapImage('Image15','','../imgz/butt_research_ov.gif',1)">

						<IMG SRC="../imgz/butt_research.gif" NAME="Image15" WIDTH="81" HEIGHT="27"

						 BORDER="0"></A>

						<A HREF="../advertising/advertising_information.php" TARGET="_top"

						 ONMOUSEOUT="MM_swapImgRestore()"

						 ONMOUSEOVER="MM_swapImage('Image11','','../imgz/bott_profsub_ov.gif',1)">

						<IMG SRC="../imgz/bott_profsub.gif" NAME="Image11" WIDTH="117" HEIGHT="27"

						 BORDER="0"></A>

						<A HREF="../industry/index.php" ONMOUSEOUT="MM_swapImgRestore()"

						 ONMOUSEOVER="MM_swapImage('Image16','','../imgz/butt_industry_ov.gif',1)">

						<IMG SRC="../imgz/butt_industry.gif" NAME="Image16" WIDTH="81" HEIGHT="27"

						 BORDER="0"></A>

						<A HREF="../calendar/index.php"

						 ONMOUSEOUT="MM_swapImgRestore()"

						 ONMOUSEOVER="MM_swapImage('Image17','','../imgz/butt_calendar_ov.gif',1)">

						<IMG SRC="../imgz/butt_calendar.gif" NAME="Image17" WIDTH="81" HEIGHT="27"

						 BORDER="0"></A>

						<A HREF="../contact/index.php" ONMOUSEOUT="MM_swapImgRestore()"

						 ONMOUSEOVER="MM_swapImage('Image18','','../imgz/butt_contact_ov.gif',1)">

						<IMG SRC="../imgz/butt_contact.gif" NAME="Image18" WIDTH="81" HEIGHT="27"

						 BORDER="0"></A>

						<A HREF="../store/index.php" ONMOUSEOUT="MM_swapImgRestore()"

						 ONMOUSEOVER="MM_swapImage('Image10','','../imgz/butt_bookstore_ov.gif',1)">

						<IMG SRC="../imgz/butt_bookstore.gif" NAME="Image10" WIDTH="81" HEIGHT="27"

						 BORDER="0"></A></DIV> </TD> 

				</TR> 

				<TR> 

				  <TD HEIGHT="15" BACKGROUND="../imgz/header_txt.gif"></TD> 

				</TR> 

			 </TABLE></TD> 

		</TR>

		

	<!---banner left table---->

		<TR VALIGN="TOP"> 

		  <TD VALIGN="top" WIDTH="135"> 

			 <TABLE WIDTH="130" BORDER="0" CELLPADDING="0" CELLSPACING="0"

			  HEIGHT="535"> 

				<TR> 

				  <TD WIDTH="150" HEIGHT="30"><IMG SRC="../imgz/head_left.gif"

					 WIDTH="150" HEIGHT="30"></TD> 

				</TR> 

				<TR> 

				  <TD HEIGHT="492" BGCOLOR="FFC900"> 

					 <DIV ALIGN="center"> 

						<TABLE WIDTH="120" BORDER="0" CELLPADDING="0"

						 CELLSPACING="0"> 

						  <TR> 

							 <TD WIDTH="120" HEIGHT="120" BGCOLOR="#FFFFFF"

							  VALIGN="center" ALIGN="center"><? $C->banner($PHP_SELF,3) ?></TD> 

						  </TR> 

						  <TR> 

							 <TD HEIGHT="50" WIDTH="120"><IMG

								SRC="../imgz/landsc_logo.gif" WIDTH="120" HEIGHT="50"></TD> 

						  </TR> 

						  <TR> 

							 <TD WIDTH="120" HEIGHT="120" BGCOLOR="#FFFFFF"

							  VALIGN="center" ALIGN="center"><? $C->banner($PHP_SELF,4) ?></TD> 

						  </TR> 

						  <TR> 

							 <TD HEIGHT="50" WIDTH="120"><IMG

								SRC="../imgz/landsc_logo.gif" WIDTH="120" HEIGHT="50"></TD> 

						  </TR> 

						  <TR> 

							 <TD WIDTH="120" HEIGHT="120" BGCOLOR="#FFFFFF"

							  VALIGN="center" ALIGN="center"><? $C->banner($PHP_SELF,5) ?></TD> 

						  </TR> 

						</TABLE> </DIV></TD> 

				</TR> 

				<TR> 

				  <TD WIDTH="150" HEIGHT="12"><IMG SRC="../imgz/bott_left.gif"

					 WIDTH="150" HEIGHT="12"></TD> 

				</TR> 

			 </TABLE></TD> 

		  <TD VALIGN="top" WIDTH="100%" align="center"> 

<form method="post" action="<?echo $PHP_SELF?>">

          <input type="hidden" name="subscribe" value="<?echo $subscribe?>">

			<?if (strlen($ls) > 0 )

			{

			 echo "<input type=hidden name=ls value=".$ls.">";

			}

			?>

			 <TABLE WIDTH="90%"> 

				<TR> 

<TD COLSPAN="3" class="cellhead">Subscription <STRONG>

					 </STRONG></FONT></TD> 

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

				   <tr >

						<td  ALIGN="center" colspan="2">Are records show you are a current subscriber please contact us for more information 	</font><br>

						<br></td> 

				   </tr>

				 	<TR> 

							<TD ALIGN="right"><B>Company Name</B>:</TD> 

							<TD><?echo ucwords($comp_name) ;?>

							</TD> 

					</TR> 

					<TR> 

							<TD ALIGN="right" NOWRAP="NOWRAP"><B>Your Name</B>:

							</TD> 

							<TD><?echo $sal ?> <?echo ucwords($first_name)?>  <?echo ucwords($last_name)?>

						</TD> 

				</TR> 

				<TR> 

						<TD ALIGN="right" NOWRAP="NOWRAP" VALIGN="top"><B>Company Address</B>:	

						</TD> 

						<TD><?echo $address?> <?echo $address_2?>

						</TD> 

				</TR> 

				<TR> 

					<TD ALIGN="right" NOWRAP="NOWRAP"><B>Company City, State ZIP</B>

					</TD> 

					<TD><?echo $city?> <?echo $state?> <?echo $zip?>

					</TD> 

				</TR> 

				

				<TR> 

					<TD ALIGN="right" NOWRAP="NOWRAP"><B>website</B>:

					</TD> 

					<TD><?echo $website?>

					</TD> 

				</TR> 

				<TR> 

					<TD ALIGN="right" NOWRAP="NOWRAP">

							<B>Phone</B>:

					</TD> 

					<TD>( <?echo $area_code?> ) <?echo $phone?>

					</TD> 

				</TR> 

				<TR> 

					<TD ALIGN="right" NOWRAP="NOWRAP"><B>FAX</B>:</TD> 

					<TD>( <?echo $area_code_fax?> ) <?echo $fax;?></TD> 

				</TR> 

				<TR> 

					<TD ALIGN="right" NOWRAP="NOWRAP"><B>Email</B>:</TD> 

					<TD><?echo $email;?></TD> 

				</TR> 

				<TR> 

					<TD ALIGN="right" NOWRAP="NOWRAP"><B>Birthday Month</B>:<BR>

					</TD> 

					<TD VALIGN="TOP"> <? echo $month ?>

					</TD> 

				</TR> 

		

			</TABLE>

		</td>

		<td>

		<table>

				

			 </TD> 

		

	 

<!--- banner right---->

		  <TD VALIGN="top" ALIGN="RIGHT" WIDTH="92"> 

			 <TABLE WIDTH="120" BORDER="0" CELLPADDING="0" CELLSPACING="0"

			  HEIGHT="535"> 

				<TR> 

				  <TD WIDTH="123" HEIGHT="30"><IMG SRC="../imgz/head_right.gif"

					 WIDTH="123" HEIGHT="30"></TD> 

				</TR> 

				<TR> 

				  <TD BGCOLOR="FFF4C2"> 

					 <DIV ALIGN="center"> 

						<TABLE WIDTH="90" BORDER="0" CELLPADDING="0" HEIGHT="468"

						 CELLSPACING="0"> 

						  <TR> 

							 <TD BGCOLOR="#FFFFFF" VALIGN="center" ALIGN="center"><? $C->banner($PHP_SELF,2) ?></TD>

							 

						  </TR> 

						</TABLE> </DIV></TD> 

				</TR> 

				<TR> 

				  <TD WIDTH="123" HEIGHT="12"><IMG SRC="../imgz/bott_right.gif"

					 WIDTH="123" HEIGHT="12"></TD> 

				</TR> 

			 </TABLE></TD> 

		</TR> </table></TD> 

		</TR> </table>

	      



<?

include $include_path . "main_bottom.inc";

?>