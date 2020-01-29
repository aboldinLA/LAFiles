
<?
include("lo_top-main2-prod.inc");
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
	    <?
	include $include_path . "lo_header-main2-new.inc";
	?>
 
	</div>

	<!-- Start Content Section -->

	<!-- Start Assoc Search Section -->

<!-- Below used to correct content position need to rewrite to do correct -->
<table>
	<tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
</table>
<!-- Above used to correct content position need to rewrite to do correct -->

<!-- Code Start -->
<div>
	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("lo_top-main2-side3.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
<div style="position: relative; left: 25px">
<!-- Start Calendar Section -->
    
	<center><img width="90%" src="images/prog-reg-button04.jpg"></center><br>
	
	<div style="position: relative; top: 15px">
	
<?
    include "lol_common.inc";
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
	
	if ($action == "edit") {
	$sub_thank = "<center><span style=\"font-size:36px; color:#C60\">Thank You</span></center>";
	} else {
	$sub_thank = "<center><span style=\"font-size:36px; color:#C60\">Congratulations</span> <br> <span style=\"font-size:18px\">You have successfully completed the New Subscription Request Application</span></center>";
	}
	
	if ($action == "edit") {
	$sub_thank2 = "<br><br><br><span style=\"font-family:Arial, Helvetica, sans-serif; font-size:18px\">For keeping your <br> Subscription Profile up to date!</span>";
	} else {
	$sub_thank2 = "<span style=\"font-family:Arial, Helvetica, sans-serif; font-size:22px; font-weight:bold; color:#C60\">Once your request has been processed,</span> <br />  <span style=\"font-family:Arial, Helvetica, sans-serif; font-size:18px\">you will be notified by email of your acceptance <br />and given a password to access your Subscription Profile. <br /><br /> <span style=\"font-family:Arial, Helvetica, sans-serif; font-size:22px; font-weight:bold; color:#C60\">In the mean time . . . </span><br> Please follow the links to the right for the Digital Issues.</span><br>";
	}
	
	if ($action == "edit") {
	$sub_thank3 = "<span style=\"font-family:Arial, Helvetica, sans-serif; font-size:22px; font-weight:bold; color:#C60\">Have an interesting landscaping related story to share?</span> <br /> <a href=\"https://landscapearchitect.com/research/submissions/\">Click here for Editorial Submission Guidelines and Procedures.</a></span><br /><br /><span style=\"font-family:Arial, Helvetica, sans-serif; font-size:22px; font-weight:bold; color:#C60\">Have A Great Day!</span>";
	} else {
	$sub_thank3 = " ";
	}	
	
		if ($action == "edit") {
	$sub_thank4 = " ";
	} else {
	$sub_thank4 = "<span style=\"font-family:Arial, Helvetica, sans-serif; font-size:22px; font-weight:bold; color:#C60\">Have an interesting landscaping related story to share?</span> <br /> <a href=\"https://landscapearchitect.com/research/submissions/\">Click here for Editorial Submission Guidelines and Procedures.</a></span><br /><br /><span style=\"font-family:Arial, Helvetica, sans-serif; font-size:22px; font-weight:bold; color:#C60\">Have A Great Day!</span>";
	}	
	
	
	
?>

	<div style="position:absolute; left:0px; top:0px; font-size:28px; font-weight:bold; padding:0px; width:700px">
    
    	<span style="font-size:16px"><br /></span><? echo $sub_thank ?><br /><br />
    	<div style="position:absolute; top:120px; width:700px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
		<center><img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="280" align="top" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG-2.jpg" width="295" align="top" /></center>
    	<center><img src="https://landscapearchitect.com/lol-logos/lolw-logo.jpg" width="300" /></center></p><br />
		</div><br /><br /><br /><br />
	<TABLE ALIGN="center" cellpadding="0" cellspacing="0" width="700">
    	<tr>
        	<td style="height:20px"> </td>
        </tr>
    	<tr>
      		<td>
        	<p align="center"><center><font style="font-size:14px;font-family:times"><? echo $sub_thank2 ?><br /><br />
        	<? echo $sub_thank3 ?>            
  			<!-- <a href="http://landscapearchitect.epubxp.com/read/account_titles/160377"><img src="/lol-logos/LASN_BLUE_325.png" width="225" border="0"></a><br />
  			<a href="http://landscapearchitect.epubxp.com/read/account_titles/160377"><span style="font-family:Arial, Helvetica, sans-serif; font-size:16px">LASN Digital Version Link</span></a><br /><br />
  			<a href="http://landscapecontractor.epubxp.com/"><img src="/lol-logos/lcdbms-logo-NEW-BIG.png" width="225" border="0"></a><br /><br />
        	<a href="http://landscapecontractor.epubxp.com/"><span style="font-family:Arial, Helvetica, sans-serif; font-size:16px">LCDBM Digital Version Link</span></a><br /><br />
        	<a href="https://landscapearchitect.com/research/article.php?id=15871"><img src="/lol-logos/lolw-logo.jpg" width="225" border="0"></a><br />
  			<a href="https://landscapearchitect.com/research/article.php?id=15871"><span style="font-family:Arial, Helvetica, sans-serif; font-size:16px">LandscapeOnline Weekly Archive Link</span></a><br /><br /><br /> -->
        	<? echo $sub_thank4 ?>            
        	<!-- <a href="https://landscapearchitect.com/research/LASN-Expo/index-LAX-2014.php"><img src="/lol-logos/LA-Expo-2014-GOLD.jpg" width="225" border="0"></a><br /><br />
			<a href="https://landscapearchitect.com/research/LASN-Expo/index-LAX-2014.php"><span style="font-family:Arial, Helvetica, sans-serif; font-size:16px">Click here for information about the upcoming 2014 LA Expo/Long Beach</a></span><br /><span style="font-family:Arial, Helvetica, sans-serif; font-size:16px">February 13th and 14th, 2014, Long Beach, CA</span></p><br /><br />
        	<a href="https://landscapearchitect.com/research/TLE/index-tle-2013.php"><img src="/lol-logos/TLE-2013-Logo-500.jpg" width="225" border="0"></a><br /><br />
			<a href="https://landscapearchitect.com/research/TLE/index-tle-2013.php"><span style="font-family:Arial, Helvetica, sans-serif; font-size:16px">Click here for information about the upcoming 2013 Landscape Expo/Long Beach</a></span><br /><span style="font-family:Arial, Helvetica, sans-serif; font-size:16px">October 16th and 17th, 2013, Long Beach, CA</span></p>
        	<hr align="center" width=80% color=67999A noshadow> -->
       		</td>
     	</tr>

	</table>        
        
	</div>			
			
	</div>			
			
			
			
				
	</div>
				
				


				
			
			</td>
			
			
			
		</tr>
	</table><br>
	
	<div style="position: relative; left: 250px">
		<? 	// include("lo_top-main2-bottom.inc"); ?>
	</div>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
include("lo_footer-main2-new.inc");
?>





