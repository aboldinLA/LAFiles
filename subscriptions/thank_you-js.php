<?
include "lol_common.inc";

?>


<?
include("lo_top-main2.inc");
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px">
	    <?
	include $include_path . "lo_header-main2-js.inc";
	?>
 
	</div>

	<!-- Start Content Section -->


<!-- Below used to correct content position need to rewrite to do correct -->
<table>
	<tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
</table>
<!-- Above used to correct content position need to rewrite to do correct -->

<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Welcome to the</center></span><br>
	<center><img src="https://landscapearchitect.com/lol-logos/3-logo-new.jpg" width="763" /></center><br />
	<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Subscription Request Center</center></span><br>
<div>


<!-- Old Code Start -->

<?
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
	$sub_thank = "<span style=\"font-size:36px; color:#C60\">Thank You</span>";
	} else {
	$sub_thank = "<span style=\"font-size:36px; color:#C60\">Congratulations</span> <br> <span style=\"font-size:18px\">You have successfully completed the New Subscription Request Application</span>";
	}
	
	if ($action == "edit") {
	$sub_thank2 = "<br><span style=\"font-family:Arial, Helvetica, sans-serif; font-size:18px\">For keeping your <br> Subscription Profile up to date!</span>";
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

	<div style="position:absolute; left:275px; top:335px; font-size:28px; font-weight:bold; padding:0px; width:700px">
    	<span style="font-size:16px"><br /></span><? echo $sub_thank ?><br /><br />
	</div>
    
    
	<TABLE ALIGN="center" cellpadding="0" cellspacing="0" width="700">
    	<tr>
        	<td style="height:20px"> </td>
        </tr>
    	<tr>
      		<td>
        	<p align="center"><center><font style="font-size:14px;font-family:times"><? echo $sub_thank2 ?><br /><br />
        	<? echo $sub_thank3 ?>            
  
        	<? echo $sub_thank4 ?>            
       		</td>
     	</tr>
	</table>        
        




    


<!-- Old Code End -->
    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  
<!-- Start Banner Section -->  
<div class="banner2">

	<!-- Start - Divs is here to move the ads for the articles in correct position -->
	<div style="position:relative; left:307px; top:-925px">
    	<?
		include $include_path . "banner-ads2.inc";
		?>
	</div>       
        
</div>
<!-- End Banner Section --> 
 
<!-- Start Footer Section -->  
	<div class="bottom1" style="position:relative; left:-150px">
	<? include $include_path . "lo_footer-main2.inc"; ?>
	</div>
</div>	