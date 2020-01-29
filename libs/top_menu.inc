<!-- <?=__FILE__ ?> Begin -->

	<TABLE width="780" border="0" cellpadding="0" cellspacing="0">

		<TR>

			<TD>

				<TABLE width="100%" border="0" cellpadding="0" cellspacing="0" >

					<TR>	<!--- top  banner table --->

						<TD width="100%">



			<A href="/index.php">

			<IMG src="/imgz/main_lol_logo.gif" width="270" height="60" border="0" alt="LandscapeOnline.com">

			</A>

	

						</TD>

						<TD align="right"><? $C->banner($PHP_SELF,1) ?>

						</TD>

					</TR>

					<TR>

						<TD height="2" bgcolor="#ffffff" colspan="2">

						</TD>

					</TR>

					<TR>

						<TD colspan="2" width="100%">

						

							<TABLE width="100%" cellspacing="0" cellpadding="0">

								<TR height="34">

<? function printnavs () {

		global $sect, $C;

		$topnav = $C->topmenunav();

		foreach ($topnav as $id => $data) {

			$url = $data[0];

			$title = $data[1];

			$selected= ($id == $sect);

			$class= ($selected) ? 'topnavsel' : 'topnav';

			$classa= ($selected) ? 'topnavsela' : 'topnava';

			$c1 = "<TD class=\"" . $class . "\""; 

			$c2 = "onMouseOver=\"lol_menuover(this);\" id=\"" . $id ."\">";

			$c3 = "<a href=\"" . $url ."\" class=\"" . $classa . "\">";

			//if (!$selected) {

				echo $c1 . " onClick=\"window.location='/'+this.id;\" " . $c2 . $c3 . $title . "</A></td>";

			//} else {

			//	echo $c1 . $c2 . $title . "</td>";

			//}

			

		}

	 }

	

	printnavs();

	?>



								</TR>

							</TABLE>

						</TD>

					</TR>

					<TR>

						<TD colspan="2" width="100%" >

							<TABLE width="100%" cellspacing="0" cellpadding="0">

								<TR height="21">

									<TD class="topsubnav" id="subnavtd"></td>

<? 	

	$nav_section = "<td class='topsubnav' id='navspacertd' style='width:0px'></td><td class='topsubnav'>";

		$sitenav = $C->sitenav();

		$j=0;//if ($sect != "") { echo "lol_menuover('$sect');"; } "

		foreach ($sitenav as $key => $value) { 

			//$subnavContent = "<div style='display:" . (($sect == $key) ? 'block' : 'none') . ";' id='" . $key . "_div'>";

			$subnavContent = "<div style='display:none;' id='" . $key . "_div'>";

			$subnavContent .= "<table id='" . $key . "_tab' cellpadding=\"0\" cellspacing=\"0\"><tr>";

			foreach ((array)$value as $subkey => $subvalue) { 

				if ($j>0) { $subnavContent .=  "<td><font color='#C2DACC'>|</font>&nbsp;&nbsp;&nbsp;</td>"; }

				$subnavContent .=  "<td><nobr><a class='" . (($sect == $key) ? 'subnavasel' : 'subnava') . "' href='" . $subvalue . "'>" . $subkey . "</a>&nbsp;&nbsp;&nbsp;</nobr></td>\n";

			}

			$subnavContent .= "</table></div>\n";

			$nav_section .= $subnavContent;

		}

		echo $nav_section;

?>

									 <td align=right class="topsubnav"><a class="topsubnava" href="/">[home]</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

								</TR>

							</TABLE>

						</TD>

					</TR>

				</TABLE>

			</TD>

		</TR>

<tr><td height="5" valign=middle><img src="/imgz/blk_line.gif" width="780" height="1"></td></tr>

		<tr onMouseover="restoreSubnav();"><td><table cellpadding="0" cellspacing="0"><tr valign="top">

		

	<!-- <?=__FILE__ ?> End -->