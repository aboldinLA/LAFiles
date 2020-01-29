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

<div class="tb2" style="position:absolute; left:0px; width:750px; z-index:2000; box-shadow: 5px 5px 5px #888888">
<span style="font-size:16px">Editorial &amp; Article Searches&nbsp;&nbsp;</span>
</div><br />

<!-- Old Code Start -->

	<? include $include_path . "/base/research_search_application2-js.php" ?>
         

<!-- Old Code End -->

<!-- Spacing added to move footer down Start -->
<table>
	<tr>
    	<td style="line-height:100px">&nbsp;</td>
    </tr>
</table>
<!-- Spacing added to move footer down End -->
    
	<!-- End Content Section -->
</div>
<!-- End Main Section -->
  
<!-- Start Banner Section -->  
<div class="banner2">

	<!-- Start - Divs is here to move the ads for the articles in correct position -->
	<div style="position:absolute; left:465px; top:165px">
    	<?
		include $include_path . "banner-unvers.inc";
		?>
	</div>        
        
</div>
<!-- End Banner Section --> 
 
<!-- Start Footer Section -->  
	<div class="bottom1" style="position:relative; top:2000px">
	<? include $include_path . "lo_footer-main2.inc"; ?>
	</div>

</div>