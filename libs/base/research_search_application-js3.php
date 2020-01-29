<?
include("lo_top-main2-js.inc");
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

<?php
   $firefox = strpos($_SERVER["HTTP_USER_AGENT"], 'Firefox') ? true : false;
?>

<?php
//Firefox Chrome
if ($firefox) {?> 

<div class="tb2" style="position:absolute; left:0px; width:750px; z-index:2000; box-shadow: 5px 5px 5px #888888">
<span style="font-size:16px">Editorial &amp; Article Searchessss&nbsp;&nbsp;</span>
</div><br />

<!-- Old Code Start -->

	<? include $include_path . "/base/research_search_application3-js3.php" ?>
         

<!-- Old Code End -->




<? } else { ?>
               <style>
					#wrapper7 {
    					margin-left:auto;
    					margin-right:auto;
    					width:960px;
					}
				</style>
                
	<?
	include $include_path . "/base/research_search_application3-js3.php";
	?>                
                
                
<div class="tb2" style="position:absolute; left:0px; width:750px; z-index:2000; box-shadow: 5px 5px 5px #888888">
<span style="font-size:16px">Editorial &amp; Article Searches&nbsp;&nbsp;</span>
</div><br />

<!-- Old Code Start -->
		<div style="position:relative; left:0px; top:-175px">

                <div>	
                	<div style="position:absolute; left:323px; top:200px">
                    <h2 class='attn'>&nbsp;</h2>
                    </div>



        </div>
<!-- Old Code End -->
<? } ?>




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

	<!-- Start - Divs is here to move the ads for the articles in correct position -->
	<div>
    	<?
		include $include_path . "banner-unvers-js2.inc";
		?>
	</div> <br>
        
        
<!-- End Banner Section --> 
 
<!-- Start Footer Section -->  
	<div style="position:relative; left:-700px">
	<center><? include $include_path . "lo_footer-main2.inc"; ?><br><br></center>
	</div>

</div>