<?
include "lol_common.inc";

?>




<?
include("lo_top-main2-prod-js3.inc");
?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
	    <?
	include $include_path . "lo_header-main2-new-js2.inc";
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
			include("lo_top-main2-side2-js50.inc");
		?>




	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

				
				
				
		<?
		include("lo_top-main2-side-new.inc");
		?>	       
	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
				
					<div style="position: relative; left: 35px">
					<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Welcome to the</center></span><br>
						<center><img src="https://landscapearchitect.com/lol-logos/3-logo-new.jpg" width="725" /></center><br />
						<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Membership Profile</center></span><br>
				</div>
				
				
				
					<div>


					<!-- Old Code Start -->

					<?

					include $include_path . "class/industry_class.inc";
					include $include_path . "class/media_class.inc";

					$M = new media_class($db);
					$I = new industry_Class($db);

					if($REQUEST_METHOD=="POST"){

						$error = "";

						if(count($biz_id) < 1)	$error .= "- Please enter One<br>";

						if(!strlen($error))  {

								if(is_array($biz_id))
									$biz_id = implode(",",$biz_id);
										if ($action == "edit") {
										$I->input_members($biz_id,$id);
										echo '<META HTTP-EQUIV="Refresh" Content="0; URL=https://landscapearchitect.com/industry/assoc_thanks.php?assoc_id=$id&action=edit">';    
										exit;
										} else {	
										echo '<META HTTP-EQUIV="Refresh" Content="0; URL=https://landscapearchitect.com/industry/assoc_thanks.php">';    
										exit;
										}
						 }
					}
					$secthdr="Membership Profile";
					?>
					<? include $include_path . "assoc_members_form-js2.inc"; ?> 

					<!-- Old Code End -->

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

				