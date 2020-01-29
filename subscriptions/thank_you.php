<?
include '../../includes/la_top-common.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$ylist_id = implode(",",$_POST['ylist']);
$needs = implode(",",$_POST['needs']);


		$link = mysqli_connect("localhost", "land_patchew", "59q2GB6k$3", "land_landscap_lollive");

		// Check connection
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}

        $sql = "UPDATE subscribe SET ylist_id = '" . $ylist_id . "', needs = '" . $needs . "' WHERE first_name='" . $first_name . "' AND last_name='" . $last_name . "' AND email='" . $email . "'";
		if(mysqli_query($link, $sql)){
			echo "&nbsp;";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}

		// Close connection
		mysqli_close($link);







?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
	<?
		// include("../../includes/la_header-common.inc");
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
	
		<?
			// include("../../includes/la_banner-common.inc");
		?>

		<?
//			include("lo_top-main2-side2-js50.inc");
		?>


	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
			// include("../../includes/la_left-side-common2.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
	
				
<?
    
                
    if ($action == "edit") {
        $subscribe =$_SESSION['subscribe_list'];
        $protype=$_SESSION['protype_list'];
        $uid=$_SESSION['uid'];
    }
    if ($subscribe == "lasn") {	
        $logo = "lasn_logo.jpg";
        $name = "Landscape Architect Magazine ";
    } elseif ($subscribe == "lcm") {
        $logo = "LC-TLE19-Logo.jpg";	
        $name = "Landscape Contractor/TLE Magazine ";
    } else {
        $logo = "back-LO-3.jpg";
        $name = "LandscapeArchitect.com";
    }
	
	if ($action == "edit") {
	$sub_thank = "<span style=\"font-size:36px; color:#C60\">Thank You</span>";
	} else {
	$sub_thank = "<span style=\"font-size:36px; color:#C60\">Congratulations</span> <br> <span style=\"font-size:18px\">You have successfully completed the New Subscription Request Application</span>";
	}
	
	if ($action == "edit") {
	$sub_thank2 = "<br><span style=\"font-family:Arial, Helvetica, sans-serif; font-size:18px\">For keeping your <br> Subscription Profile up to date!</span>";
	} else {
	$sub_thank2 = "<span style=\"font-family:Arial, Helvetica, sans-serif; font-size:22px; font-weight:bold; color:#C60\">Once your request has been processed,</span> <br />  <span style=\"font-family:Arial, Helvetica, sans-serif; font-size:18px\">you will be notified by email of your acceptance <br />and given a password to access your Subscription Profile. <br /><br /> <span style=\"font-family:Arial, Helvetica, sans-serif; font-size:22px; font-weight:bold; color:#C60\">In the mean time . . . </span><br> <a href='https://landscapearchitect.com/index.php'><h3>Start Exploring the New Site.</h3></a></span><br>";
	}
	
	if ($action == "edit") {
	$sub_thank3 = "<span style=\"font-family:Arial, Helvetica, sans-serif; font-size:22px; font-weight:bold; color:#C60\">Have an interesting landscaping related story to share?</span> <br /> <a href=\"https://landscapearchitect.com/research/submissions/Submit-Editorial.php\">Click here for Editorial Submission Guidelines and Procedures.</a></span><br /><br /><span style=\"font-family:Arial, Helvetica, sans-serif; font-size:22px; font-weight:bold; color:#C60\">Have A Great Day!</span>";
	} else {
	$sub_thank3 = " ";
	}	
	
		if ($action == "edit") {
	$sub_thank4 = " ";
	} else {
	$sub_thank4 = "<span style=\"font-family:Arial, Helvetica, sans-serif; font-size:22px; font-weight:bold; color:#C60\">Have an interesting landscaping related story to share?</span> <br /> <a href=\"https://landscapearchitect.com/research/submissions/Submit-Editorial.php\">Click here for Editorial Submission Guidelines and Procedures.</a></span><br /><br /><span style=\"font-family:Arial, Helvetica, sans-serif; font-size:22px; font-weight:bold; color:#C60\">Have A Great Day!</span>";
	}	
	
	
	
?>

	<div style="position:absolute; left:300px; top:250x; font-size:28px; font-weight:bold; padding:0px; width:700px">
    
    	<center><span style="font-size:16px"><br /></span><? echo $sub_thank ?><br /><br /></center>
    	<div style="position:absolute; top:123px; width:700px; font-family:Arial, Helvetica, sans-serif; font-size:16px">
		<center><img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="280" align="top" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://landscapearchitect.com/lol-logos/TLE-no-date.jpg" width="295" align="top" /></center>
    	</p><br />
		</div><br /><br /><br />
	<TABLE ALIGN="center" cellpadding="0" cellspacing="0" width="700">
    	<tr>
        	<td style="height:20px"> </td>
        </tr>
    	<tr>
      		<td>
        	<p align="center"><center><font style="font-size:14px;font-family:times"><? echo $sub_thank2 ?></p><br /><br />
        
                
       		</td>
     	</tr>

	</table>        
        
	</div>


                
                
                
                
                
				
				
				
			

				
			
			</td>
			
			
			
		</tr>
	</table><br>
	
	<div style="position: relative; left: 250px; top: 2400px">
		<? // include("../../includes/lo_top-main2-bottom.inc"); ?>
	</div>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
    include("../../includes/lo_footer-main2-new.inc");
?>





