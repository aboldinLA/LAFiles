<?

include "lol_common.inc";
if ($action == "subscribe")  {

	$secthdr="Professional Subscriptions with Optional \"Find A Pro\" Listings";
	if($failedlogin == "1") {
		$error .= "Unknown User or Password!<br>";
		$error .= "Please choose a subscription below, or return to the ";
		$error .= "<a href=\"/member/login.php?t=s\">Subscription Login Page</a>.<br>";
	} 
    if($defaultp == "1") {
        $error .= "Since this is your first visit to LandscapeOnline.com, we apologize for requiring you to enter your information again. ";
        $error .= "Please choose the magazine that you are updating your subscription for below.<br>";
    }

} else {
	$secthdr="\"Find A Pro\" Listings";
}

include $include_path . "lol_header.inc";
if($error) {
	$C->errors($error);
	echo("<br><br>");
}
?>
			<? if ($action == "subscribe") { ?>

The following subscription offers are FREE to landscape and development

professionals and include the option to list your company in

LandscapeOnline's "Find A Pro" database.<br><br>
			<? } ?>
<table cellspacing="3" cellpadding="0" width="90%">
			<? if ($action == "subscribe") { ?>

			<tr>

				<td><a href="subscribe.php?action=subscribe&protype=d"><IMG src="/imgz/lasn_mag.jpg" border="0" alt="Landscape Architect &amp; Specifier News (LASN)">

				</a></td>

				<td><font size="+1" color="#008000">»</font><a href="subscribe.php?action=subscribe&protype=d">Click here </a>to begin your <strong>FREE</strong> subscription to the #1 publication for

Landscape Architects, Designers, Planners, Developers and Property

Administrators in North America. <strong>#1</strong> in Features, Columns, News and Product

Information. 12 issues/yr.

					<br><br>

				</td>

			</tr>

			<tr>

				<td><a href="subscribe.php?action=subscribe&protype=c"><IMG src="/imgz/lcm_mag.jpg" border="0" alt="Landscape Contractor Magazine (LCM)">

				</a></td>

				<td><font size="+1" color="#FF6900">»</font><a href="subscribe.php?action=subscribe&protype=c">Click Here</a> to begin your <strong>FREE</strong> subscription to the only publication

specifically designed for the Landscape Contractor Business Owner

nationwide. <strong>#1</strong> in Features, Columns, News and Product Information. 12

issues/yr.

					<br><br>

				</td>

			</tr>

			<tr><td colspan=2><br>

			

<strong>Optional "Find A Pro" Listings</strong>:

Once you complete your subscription information you'll be given three

options to put your company in front of thousands of Developers, Property

Administrators and Home Owners:

<p>

<font size="+1" color="#008000">»</font> Option 1: List your company for FREE in LandscapeOnline's "Find A Pro"

database.

  <p>

<font size="+1" color="#008000">»</font> Option 2: For only $9.95/mth LandscapeOnline will also provide a link

directly to your company website.

  <p>

<font size="+1" color="#008000">»</font> Option 3: You can choose not to be listed in LandscapeOnline's "Find A

Pro" database, the choice is yours . . .

<p>

Just click on the magazine cover above to begin your subscription today!!!</td></tr>

			<? } else { ?>

			<tr><td>You can list your company for<strong> FREE</strong> in LandscapeOnline's national "Find A Pro" Database.  Just choose from the two categories below,

			then complete the required information and put your company in front of thousands of potential clients every month.

  <p></td></tr>

			<tr>

				

				<td align=center><a href="subscribe.php?action=list&protype=d">

				<img src="/imgz/design_list.gif" border=0 align="middle"><br>

				<br>

				<strong>Click Here</strong></a> to list your company in LandscapeOnline's "Find A Pro" database for Design Services and Consultants.

				<BR>

				</td>

			</tr>

			<tr>

				<td align=center><br>

				<br>

				

				<a href="subscribe.php?action=list&protype=c">

				<img src="/imgz/contractor_list.gif" border=0 align="middle"><br>

				<br><strong>Click Here</strong></a>to list your company in LandscapeOnline's "Find A Pro" database for Installation and Maintenance Companies.<BR>

				</td>

			</tr>

				<tr><td><br>

				<strong>Optional Upgrades are Available!</strong>

<br><br>

If you already have a Company Website you can choose to link your site to your LandscapeOnline listing.

<br><br>

For $9.95/month LandscapeOnline will provide a link from your listing to your companies existing website and guarantee your premium

positioning within the search on a first come-first listed-basis . . .  For more information begin the sign-up procedures above and

watch for the Upgrade Options. . . . 

</td></tr>





			<? } ?>

			

	

</TABLE>

<? include $include_path . "lol_footer.inc"; ?>
