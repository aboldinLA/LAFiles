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

	<div style="position:absolute; left:0px; top:0px; font-size:28px;  padding:0px; width:700px">
    
    <font size="52">Thank You!<br /></font>
    from<br />
    <div style="width:700px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
	<center><img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="280" align="top" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG-2.jpg" width="295" align="top" /></center>
    <center><img src="https://landscapearchitect.com/lol-logos/lo-DBMS-logo-800.jpg" width="300" /></center><br /></p>
	</div>
	</div>

<div style="position:absolute; left:100px; top:255px; padding:0px; width:500px; height:30px">
<TABLE ALIGN="center" cellpadding="0" cellspacing="0" width="500">
    <tr>
      <td>
        <p align="center"><center><font style="font-size:14px;font-family:times">Your subscription request/update is now being processed.<br />
        To view our current magazines in digital format,<br />
        please click on the appropriate link below:<br /><br />
  		<a href="http://landscapearchitect.epubxp.com/read/account_titles/160377"><img src="/lol-logos/LASN_BLUE_325.png" width="225" border="0"></a><br />
  		<a href="http://landscapearchitect.epubxp.com/read/account_titles/160377">LASN Digital Version Link</a><br /><br />
  		<a href="http://landscapecontractor.epubxp.com/"><img src="/lol-logos/lcdbms-logo-NEW-BIG.png" width="225" border="0"></a><br /><br />
        <a href="http://landscapecontractor.epubxp.com/">LCDBM Digital Version Link</a><br /><br />
        <a href="https://landscapearchitect.com/research/article.php?id=15871"><img src="/lol-logos/lolw-logo.jpg" width="225" border="0"></a><br />
  		<a href="https://landscapearchitect.com/research/article.php?id=15871">LandscapeOnline Weekly Archive Link</a><br /><br /><br />
        Have an interesting landscaping related story to share?<br /><br />
        <a href="https://landscapearchitect.com/research/submissions/">Click here to Learn about our Editorial Submission Guidelines and Procedures.</a><br /><br /><br />
        
        <a href="https://landscapearchitect.com/research/LASN-Expo/index-LAX-2014.php"><img src="/lol-logos/LA-Expo-2014-GOLD.jpg" width="225" border="0"></a><br /><br />
		<a href="https://landscapearchitect.com/research/LASN-Expo/index-LAX-2014.php">Click here for information about the upcoming 2014 LA Expo/Long Beach</a><br /><br />
        February 13th and 14th, 2014, Long Beach, CA</font></p><br /><br />
        
        <a href="https://landscapearchitect.com/research/TLE/index-tle-2013.php"><img src="/lol-logos/TLE-2013-Logo-500.jpg" width="225" border="0"></a><br /><br />
		<a href="https://landscapearchitect.com/research/TLE/index-tle-2013.php">Click here for information about the upcoming 2013 Landscape Expo/Long Beach</a><br /><br />
        October 16th and 17th, 2013, Long Beach, CA</font></p>
        <hr align="center" width=80% color=67999A noshadow>      	</td>
     </tr>

</table>
</div>

<? include  $include_path . "lol_footer2.inc" ?>
