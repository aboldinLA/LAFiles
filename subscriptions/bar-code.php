<?
    include "lol_common.inc";
    include $include_path . "lol_header2-show-tle.inc";
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
	
	$firstname2 = $_GET['firstname2'];
	
	$lastname2 = $_GET['lastname2'];
	
	$addressB2 = $_GET['addressB2'];

	$cityB2 = $_GET['cityB2'];

	$stateB2 = $_GET['stateB2'];

	$zipB2 = $_GET['zipB2'];
	
	
?>

<div class="tle-container"> 
  <div class="clear"></div>
  <div align="center">
    
  <div align="left" class="left1">
  
<?
include $include_path . "tle-show-left-panel.inc";
?>

 </div>
  
  <div class="center1">
  <div align="center">

 <!-- Add Content Below this line--> 
  
  
<div style="width:600px">
     <center><img src="https://landscapearchitect.com/lol-logos/TLE-2014-Logo-LB-800.jpg" width="450"></center>
</div>



<div style="width:600px; font-size:48px; color:green; font-weight:bold" align="center">
	Thank You!
</div>

<div style="width:600px; font-size:28px; color:#000; font-weight:bold; text-align:center">
	For Pre-Registering for FREE Admission<br />
	to the 2014 Landscape Expo Exhibit Hall!<br /><br />
    <center>
    <center>
    <table width="524">
	<tr>
		<td colspan="2"><center>
     	<span style="font-family: 'Times New Roman', Times, serif; font-size: 24px; font-weight:bold;">Now Take A Look At The Educational Programs!<br />
Sign Up Today & Save 30%<br />
<br />
Early Bird Rates Expire 9/30/14!</span></center>
     	</td>
 	</tr>
</table>
</center>
</center>
</div><br />


<div style="width:600px">
<br />
<hr width="85%" />
<br />


<table>
 <tr>
    <td width="500">
    <center>
    <span style="font-family: 'Times New Roman', Times, serif; font-size: 24px">
	To sign up for seminars.<br />
	Simply follow these links to the TLE-LB E-Store.</span></center></td>
 </tr>
</table><br />
    
<table width="490">
	<tr>
    	<td align="center" bgcolor="green"  style="font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#FFF; padding:5px">Wednesday, October 29th ~ 8:30 - 10:00 AM
        </td>
    </tr>
</table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=56" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Susan-Sims.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=56" target="_blank">Tree Selection with Planting Care</a></strong><br />
By Susan Sims</span></td>
        </tr>
</table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=1&products_id=14" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/ron-whitehurst.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=1&products_id=14" target="_blank">Evolving Insights in Landscape Biocontrol</a></strong><br />
 By Ron Whitehurst</span></td>
        </tr>
    </table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=61" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Judith-Guido.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=61" target="_blank">How to Build a Profitable, Green & Sustainable Company</a></strong><br />
 By Judith Guido</span></td>
        </tr>
    </table>
<br />

<table width="490">
	<tr>
    	<td align="center" bgcolor="green"  style="font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#FFF; padding:5px">Wednesday, October 29th ~ 10:30 AM - 12:00 PM
        </td>
    </tr>
</table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=41" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Mike-Garcia.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=41" target="_blank">Drip Irrigation</a></strong><br />
By Mike Garcia</span></td>
        </tr>
    </table>
<br />


<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=48" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Jose-Mercado.jpg"  width="120" border="0"/></a></td>
        
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=48">Tree Safety</a></strong><br />
By Jose Mercado</span></td>
        </tr>
</table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=53" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Yvonne-English.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=53" target="_blank">Planting Design Process</a></strong><br />
By Yvonne English</span></td>
        </tr>
    </table>
<br />


<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=62" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Terry-Vassey-1.jpg"  width="120" border="0"/></a></td>
        
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=62">Turfgrass Insect Identification and Management in Southern Calif</a></strong><br />
By Terry Vassey</span></td>
        </tr>
</table>
<br />

<table width="490">
	<tr>
    	<td align="center" bgcolor="green"  style="font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#FFF; padding:5px">Wednesday, October 29th ~ 1:00 - 2:30 PM
        </td>
    </tr>
</table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=43" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Allister-Cooney2.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=43" target="_blank">Pressure & Irrigation Systems</a></strong><br />
By Allister Cooney</span></td>
        </tr>
    </table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=47" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Jose-Mercado.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=47" target="_blank">Tree Care: Planting, Pruning, Cabling & Bracing</a></strong><br />
By Jose Mercado</span></td>
        </tr>
    </table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=52" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Yvonne-English.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=52" target="_blank">Creating Outdoor Rooms</a></strong><br />
By Yvonne English</span></td>
        </tr>
    </table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=63" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Judith-Guido.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=63" target="_blank">How to Interpret the Market Noise - Is it Deafening or Driving</a></strong><br />
By Judith Guido</span></td>
        </tr>
    </table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=67" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/James-Bethke.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=67" target="_blank">The Birds and Bees and Neonicotinoids</a></strong><br />
By James Bethke</span></td>
        </tr>
    </table>
<br />


<table width="490">
	<tr>
    	<td align="center" bgcolor="green"  style="font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#FFF; padding:5px">Wednesday, October 29th ~ 3:00 - 4:30 PM
        </td>
    </tr>
</table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=39" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Neal-Shapiro.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=39" target="_blank">Rain & Stormwater Harvesting Green Infrastructure</a></strong><br />
By Neal Shapiro, Russell Ackerman<br />
& Scott Mathers</span></td>
        </tr>
</table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=49" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Ron-Matranga.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=49" target="_blank">
Introduction to Hazard Evaluation, Risk Assessment & Tree Failure</a></strong><br />
By Ron Matranga</span></td>
        </tr>
</table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=54" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Joyce-Jong.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=54" target="_blank">Soil Biology Management for Sustainable Turf & Landscape Care</a></strong><br />
By Joyce Jong</span></td>
        </tr>
</table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=65" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Rafael-Gonzalez.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=65" target="_blank">Choosing the Best Plants for Your Site</a></strong><br />
By Rafael Gonzalez-Arnau</span></td>
        </tr>
</table>
<br />

<table width="490">
	<tr>
    	<td align="center" bgcolor="green"  style="font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#FFF; padding:5px">Thursday, October 30th ~ 8:30 - 10:00 AM
        </td>
    </tr>
</table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=38" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Lee-Mangum.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=38" target="_blank">Treating Invasive Pests & Diseases in Trees with Trunk Injection</a></strong><br />
By Lee Mangum</span></td>
        </tr>
    </table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=42" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/thumbs/Kristin-Moore.jpg"  width="120" border="0"/></a></td>
        
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=42" target="_blank">Website Strategies that will Grow<br />
Your Business</a></strong><br />
By Kristin Moore</span></td>
        </tr>
</table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=57" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/thumbs/Richard-Daigle.jpg"  width="120" border="0"/></a></td>
        
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=57" target="_blank">Irrigation Scheduling</a></strong><br />
By Richard Daigle</span></td>
        </tr>
</table>
<br />

<table width="490">
	<tr>
    	<td align="center" bgcolor="green"  style="font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#FFF; padding:5px">Thursday, October 30th ~ 10:30 AM - 12:00 PM
        </td>
    </tr>
</table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=40" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Milene-Apanian.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=40" target="_blank">Getting Paid! Leveraging California Collection Remedies</a></strong><br />
By Milene Apanian</span></td>
        </tr>
</table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=59" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Richard-Daigle.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=59" target="_blank">Irrigation Performance Tests</a></strong><br />
By Richard Daigle</span></td>
        </tr>
    </table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=64" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Richard-Sokulsky.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=64" target="_blank">Pesticide Laws & Regulations</a></strong><br />
By Richard Sokulsky</span></td>
        </tr>
</table>
<br />

<table width="490">
	<tr>
    	<td align="center" bgcolor="green"  style="font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#FFF; padding:5px">Thursday, October 30th ~ 1:00 - 2:30 PM
        </td>
    </tr>
</table>
<br />


<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=44" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Will-Harrison-1.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=44" target="_blank">Weed Control in the Landscape</a></strong><br />
By Will Harrison</span></td>
        </tr>
    </table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=50" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Suzie-Wiest.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=50" target="_blank">New Plant Introductions</a></strong><br />
By Suzie Wiest</span></td>
        </tr>
    </table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=60" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Richard-Daigle.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=60" target="_blank">Wire Tracking & Electrical Troubleshooting</a></strong><br />
By Richard Daigle</span></td>
        </tr>
    </table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=66" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Jose-Mercado.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=66" target="_blank">Tree Care: Planting, Pruning, Cabling & Bracing</a></strong><br />
By Jose Mercado</span></td>
        </tr>
    </table>
<br />

<table width="490">
	<tr>
    	<td align="center" bgcolor="green"  style="font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#FFF; padding:5px">Thursday, October 30th ~ 3:00 - 4:30 PM
        </td>
    </tr>
</table>
<br />


<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=45" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Susan-Sims.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=45" target="_blank">Recognizing Tree Problems</a></strong><br />
By Susan Sims</span></td>
        </tr>
    </table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=51" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Reginald-Durant.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=51" target="_blank">Landscaping Sustainability with Native Plants</a></strong><br />
By Reginald Durant</span></td>
        </tr>
    </table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=55" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Marco-Schiavon7.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=55" target="_blank">Turfgrass Disease Management</a></strong><br />
By Marco Schiavon</span></td>
        </tr>
    </table>
<br />

<table width="490" border="0" align="center" cellspacing="0px">
    	<tr>
        	<td width="130"><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=58" target="_blank"><img src="https://landscapearchitect.com/LO-Store/images/products/Richard-Daigle.jpg"  width="120" border="0"/></a></td>
            <td><span style="font-family: Times New Roman, Times, serif; font-size: 18px"><strong><a href="https://landscapearchitect.com/LO-Store/product_info.php?cPath=10&products_id=58" target="_blank">Irrigation Field Hydraulics</a></strong><br />
By Richard Daigle</span></td>
        </tr>
    </table>
<br />

<div style="width:600px">
     <center><img src="https://landscapearchitect.com/lol-logos/TLE-2014-Logo-LB-800.jpg" width="450"></center>
</div>



<div style="width:600px; font-size:48px; color:green; font-weight:bold">
	Thanks Again!
</div>

<div style="width:600px; font-size:28px; color:#000; font-weight:bold; text-align:center">
	For Pre-Registering for FREE Admission<br />
	to the 2014 Landscape Expo Exhibit Hall!<br /><br />
    <center>
    <center>
    <table width="524">
	<tr>
		<td colspan="2">
     	<span style="font-family: 'Times New Roman', Times, serif; font-size: 24px; font-weight:bold">Now Take A Look At The Educational Programs!</span>
     	</td>
 	</tr>
</table>
</center>
</center>



</div>


    
  <div class="right1">
  <div style=" position:absolute; left:785px; top:10px">
  
  

<?
include $include_path . "tle-show-right-panel.inc";
?>
</div>

</div>    
    


  


<? include  $include_path . "lol_footer2-show.inc" ?>
