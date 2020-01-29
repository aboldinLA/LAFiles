<?
include("lo_top-test.inc");
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

	<center><img src="https://landscapearchitect.com/lol-logos/3-logo-new.jpg" width="763" /></center><br />
<div>


<!-- Old Code Start -->

<?
$requiredClasses[] = 'base/vendor_listing-js.php';

include "lol_common.inc";
$secthdr = "Vendor Profile";


$V = new vendor();

?>

<div class="tb2" style="width:750px; z-index:2000; box-shadow: 5px 5px 5px #888888">
<span style="font-size:16px">Vendor Profile&nbsp;&nbsp;</span>
</div><br />

<div>

    <table width="763" cellpadding='2' cellspacing='2' valign='top'>
      <? include $file_path . "includes/vendor_view-js3.inc"; ?>
    </table>

</div>


<!-- Old Code End -->

    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  
<!-- Start Banner Section -->  
<div class="banner2">

	<!-- Start - Divs is here to move the ads for the articles in correct position -->
	<div style="position:absolute; left:725px; top:223px">
    	<?
		include $include_path . "banner-ads-norot-listing.inc";
		?>
	</div>       
        
</div>
<!-- End Banner Section --> 
 
<!-- Start Footer Section -->  
	<div class="bottom1">
	<? include $include_path . "lo_footer-main2.inc"; ?>
	</div>

</div>