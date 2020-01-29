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

	<!-- Start Assoc Search Section -->

<!-- Below used to correct content position need to rewrite to do correct -->
<table>
	<tr>
    	<td style="line-height:5px">&nbsp;</td>
    </tr>
</table>
<!-- Above used to correct content position need to rewrite to do correct -->

<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Welcome to the</center></span><br>
	<center><img src="https://landscapearchitect.com/lol-logos/3-logo-new.jpg" width="763" /></center><br />
	<span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Event Listing Center</center></span>
<div>


<!-- Old Code Start -->

<?
include "lol_common.inc";

$I = new industry_Class($db);

include $include_path . "associat_event_handler.inc";

if ($action == "edit") {
	$data = $I->association_info($id);
}
include $include_path . "associat_event_edit-js2.inc"; ?>


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  
<!-- Start Banner Section -->  
<div class="banner2">

	<!-- Start - Divs is here to move the ads for the articles in correct position -->
	<div style="position:relative; left:258px; top:-760px">
    	<?
		include $include_path . "banner-pages.inc";
		?>
	</div>       
        
</div>
<!-- End Banner Section --> 
 
<!-- Start Footer Section -->  
	<div class="bottom1">
	<? include $include_path . "lo_footer-main2.inc"; ?>
	</div>
</div>	