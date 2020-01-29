<?

include "lol_common.inc";

include $include_path . "class/vendor_class.inc";

include $include_path . "class/media_class.inc";

$V = new vendor_class($db);

$M = new media_class($db);



if($REQUEST_METHOD=="POST")	{  

	$error = "";



	if(!is_array($xlist))

		$error .= "- Must enter at least one category<br>";

	if(!strlen($error)) {

		if(is_array($xlist))

		$find=implode(",",$xlist);

		             			          

		$V->input_values($uid,$idParent,$find);

		$V->vendor_mail($uid);

        if(isset($_SESSION['vhot']) && $_SESSION['vhot'] == 1) {

            $V->vendor_list($uid, 'go');

            header("location: ${lol_url_s}/bin/linkpoint/payment.php?pt=ven&id=${uid}");

        } else {

            $V->vendor_list($uid, 'yes');

            header("location:thank_you_vendor.php?list=yes&action=$action");

        }

        

		//header("location:vendor_listing.php"); 	

	 }

}



include $include_path . "lol_header.inc";



if ($action == "edit") {

	$data = $V->vendor($uid);

	$xlist = explode(",",$data['xlist']);

}

?>

	<FORM method="post" action="<?echo $PHP_SELF ?>">		

		<INPUT type="hidden" name="vst" value="<?echo $vst?>">

		<TABLE align="center" width="100%">

			<TR>

				<TD class="cellhead" colspan="2"><B><? $vn=$V->vendor_type_name($vst);echo $vn; echo (($vn == "Grower") ? " Plant Material" : " Product");?> Selection</b></TD>

			</TR>	<!-- mm r2 -->

			<TR>

				<TD colspan="2" align="center"><?if ($error) $C->errors($error); ?>

				</TD>

			</TR>

			<TR>

				<TD colspan="2" align="center">	— Categories —<BR>The Most Important Information About Your Company!</B><BR><BR>"To list your company correctly please search the following list for 

categories that match your product line(s).  You may select as many 

categories as is appropriate but remember that selecting non-matching 

categories will confuse the end-users.<BR><I>  All entries are subject to editing by 

LandscapeOnLine.com personnel." </I>

				</TD>

			</TR>

			<TR>

				<TD colspan="2"><?

	if ($action == !"edit")

	{

	   $xlist[] = "";

	}

		if ($vst == "4") $V->view_wh($xlist);	

		if ($vst == "5") $V->view_wh($xlist);			 

		if ($vst == "6") $V->view_grow($xlist);			 

    ?>

				</TD>

			</TR>

			<TR>

				<TD colspan="2">

					<TABLE align="center">

						<TR>

							<TD align="center">	Upon approval by the publisher, this information will appear in the Specifier’s Guide,<BR>and/or the Buyers Guide, and/or LandscapeOnLine.com

							</TD>

							<TR>

								<TR>

									<TD align="center">										

										<INPUT type="submit" name="submit" value="Continue" >

									</TD>

								</TR>

					</TABLE>

					</TD>

			</TR>

		</table>

					

	</FORM><? include $include_path . "lol_footer.inc"; ?>

