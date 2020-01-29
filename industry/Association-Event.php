<?
include "lol_common.inc";

include $include_path . "class/industry_class.inc";
$I = new industry_Class($db);

include $include_path . "associat_event_handler.inc";

if ($action == "edit") {
	$data = $I->association_info($id);
}

?>



<?
include("lo_top-common.inc");
?>


<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
		
		
	<?
		include $include_path . "lo_header-common.inc";
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
			include("lo_banner-common.inc");
		?>




	<table width="1024">
	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

				
				
		<?
		include("lo_left-side-common.inc");
		?>

      
	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			

				

				<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Welcome to the</center></span><br>
					<center><img style="width: 30%" src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" /><img style="width: 35%; padding-left: 50px" src="https://landscapearchitect.com/lol-logos/TLE-no-date.jpg" /></center><br />
					<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Event Listing Center</center></span>
				<div>


				<!-- Old Code Start -->

<?

include $include_path . "associat_event_edit-js2.inc"; ?>


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->				
				
				
				
				
				
				
				
				
				
				
				
				
			</td>
			
			
			
		</tr>
	</table><br>
	
	<div style="position: relative; left: 250px">
		<? 	include("lo_top-main2-bottom.inc"); ?>
	</div>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
include("lo_footer-main2-new.inc");
?>




