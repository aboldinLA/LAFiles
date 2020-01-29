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

	<div style="position:absolute; left:135px; top:0px; padding:0px; width:475px">
            <img src="https://landscapearchitect.com/subscriptions/images/list-back.jpg">
    </div>

<div style="position:absolute; left:250px; top:125px; padding:0px; width:500px; height:30px">
<TABLE ALIGN="center" cellpadding="0" cellspacing="0" width="500">
    <tr>
      <td>
        <p align="center"><center><font style="font-size:14px;font-family:times">Your subscription request/update is now being processed.<br />
        To view our current magazines in digital format,<br />
        please click on the appropriate link below:<br /><br />
  		<a href="http://landscapearchitect.epubxpress.com/"><img src="/lol-logos/LASN-Logo2-325.jpg" width="225" border="0"></a><br />
  		<a href="http://landscapearchitect.epubxpress.com/">LASN Digital Version Link</a><br /><br />
  		<a href="http://landscapearchitect.epubxpress.com/"><img src="/lol-logos/LCDBM-logo1-rgb-325.jpg" width="225" border="0"></a><br /><br />
        <a href="http://landscapecontractor.epubxpress.com/">LCDBM Digital Version Link</a><br /><br /><br />
        Have an interesting landscaping related story to share?<br /><br />
        <a href="https://landscapearchitect.com/research/submissions/">Click here to Learn about our Editorial Submission Guidelines and Procedures.</a><br /><br /><br />
        <a href="https://landscapearchitect.com/research/TLE/index-2011"><img src="/lol-logos/TLE-2011-325.jpg" width="225" border="0"></a><br /><br />
		<a href="https://landscapearchitect.com/research/TLE/index-2011">Click here for information about the upcoming 2011 Landscape Expo/Long Beach</a><br /><br />
        October 12th and 13th, 2011, Long Beach, CA</font></p>
        <hr align="center" width=80% color=67999A noshadow>      	</td>
     </tr>

</table>
</div>

<? include $include_path . "lol_footer.inc"; ?>	
