


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
			include("lo_banner-common-vendor.inc");
		?>




	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("lo_left-side-common-vendor.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			
	<div style="position:absolute; left: 25px; top: 0px; z-index: 0; width: 700px">
			



			<?php
			extract($_REQUEST);
			#ini_set('display_errors',1);
			#error_reporting(-1);
			?>
			<div class="clear"></div>

			<!-- Menu Section -->  
			<?php
			?>
			</div>

			<!-- Content Section -->
			<!-- Begin Section 1 -->  

			<!-- Position correction for vendor page -->  
			<div style="position:relative; left: 30px; top:5px; width: 750px;">
			<div class="tb3" style="width:750px; box-shadow: 5px 5px 5px #888888">
			  &nbsp;&nbsp;<span style="color:#FFFFFF">Vendor Profile Management Center:</span>&nbsp;&nbsp;
			</div><br />

			<div style="position: relative; left: 0px">
			<a href='https://landscapearchitect.com/vendor/logoff.php'><input type='image' src='/imgz2/logoff-button.jpg' style="box-shadow: 5px 5px 5px #888888" border='0' /></a>
			</div><br />
			<!-- Begin Old Code -->  
			<?php
				$requiredClasses[] = "class/common_class-main.inc";
				$requiredClasses[] = "base/transaction_class.php";
				$requiredClasses[] = "base/contacts_class.php";
				$requiredClasses[] = "base/vendor_listing_admin-new-js-js6.php";
				$requiredClasses[] = "base/vdaemon.php";

				include("lol_common-main.inc");
				ini_set('error_log', 'error.log');

				if(!is_object($_SESSION['vendor_listing_edit'])) {
					$_SESSION['vendor_listing_edit'] = new vendor_listing_admin();
				}

				$v = &$_SESSION['vendor_listing_edit'];
				//$v->topFile = "main_top_private.inc";
				//$v->botFile = "main_bottom.inc";

				// if we're working on a page, here it is

				if($_SESSION['auth'] != $GLOBALS['VENDOR_AUTH']) {
					$_SESSION['np'] = $_SERVER['PHP_SELF'];
					header("location: https://landscapearchitect.com/member/login2.php?t=v");
					return(FALSE);
				}

				$v->action($_REQUEST['action'], $_REQUEST); 

				$sBuffer = ob_get_contents();
				ob_end_clean();
				echo(VDCallback($sBuffer));
			?>

			<!-- End Old Code -->  
			</div>



			<!-- End Main Section -->  
			</div>

			<!-- Start Banner Section -->  


		
		
		
		
	
	
	</div>					
			

				
			
			</td>
			
			
			
		</tr>
	</table><br>
	
	<div style="position: relative; left: 250px">
		<? 	//include("lo_top-main2-bottom.inc"); ?>
	</div>
	





<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>


<?
include("lo_footer-main2-new.inc");
?>





