<?
    include "lol_common.inc";
    include $include_path . "lol_header2.inc";
        $uid=$_SESSION['uid'];

    if ($action == "edit") {
        $subscribe =$_SESSION['subscribe_list'];
        $protype=$_SESSION['protype_list'];
        $uid=$_SESSION['uid'];
    }
    if ($subscribe == "lasn") {	
        $logo = "lasn_logo.jpg";
        $name = "Landscape Architect Magazine ";
    } elseif ($subscribe == "lcm") {
        $logo = "lcm_logo.jpg";	
        $name = "Landscape Contractor Magazine ";
    } else {
        $logo = "main_lol_logo.gif";
        $name = "LandscapeOnLine.com";
    }
?>

</td>
</table>


<div style="position:absolute; left:135px; top:0px; padding:0px; width:475px">
        <img src="https://landscapearchitect.com/subscriptions/images/list-back-tle4.jpg">
</div>


<div style="position:absolute; left:185px; top:300px; padding:0px; width:700px; font-size:24px; color:#000; font-weight:bold; text-align:center">
	Please Register at the show!<br />
    Print this page and bring it to the show for Free Admission
</div>

<div style="position:absolute; left:275px; top:375px; padding:0px; width:500px; height:30px; font-size:14px; color:#000">
	<HR WIDTH="100%" SIZE="2" NOSHADE>
</div>

<div style="position:absolute; left:185px; top:400px; padding:0px; width:700px; font-size:36px; color:#000; font-weight:bold; text-align:center">
	FREE ADMISSION
</div>

<div style="position:absolute; left:185px; top:450px; padding:0px; width:700px; font-size:24px; color:#000; font-weight:bold; text-align:center">
    For the 2011 Landscape Expo,<br />
	October 12th & 13th

</div>

<div style="position:absolute; left:185px; top:515px; padding:0px; width:700px; font-size:18px; color:#000; font-weight:bold; text-align:center">
    Long Beach Convention Center,<br />
    300 East Ocean Boulevard<br />
    Long Beach, CA 90802
</div>

<div style="position:absolute; left:275px; top:590px; padding:0px; width:500px; height:30px; font-size:14px; color:#000">
	<HR WIDTH="100%" SIZE="2" NOSHADE>
</div>

</body>
</html>


<? include  $include_path . "lol_footer.inc" ?>
