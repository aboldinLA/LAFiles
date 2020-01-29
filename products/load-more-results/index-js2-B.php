<?php
session_start();

include("config.inc2.php");

// Count for pages
$results = mysqli_query($connecDB,"SELECT COUNT(*) FROM vendor_product");
$get_total_rows = mysqli_fetch_array($results); //total records

//break total records into pages
$total_pages = ceil($get_total_rows[0]/$item_per_page);
	
$keyword5 = preg_replace("/[\/\&%#\$]/", "_", $_POST[keyword]);

?>

<!-- <div style="position:relative; top:25px">
<? // echo preg_replace('/\s+/', '+', $_POST[keyword]) . 'bird' ?>
</div> -->

<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>

<!-- more Script -->
<script type="text/javascript">
$(document).ready(function() {
	
	var track_click = 0; //track user click on "load more" button, righ now it is 0 click
	
	var total_pages = <?php echo $total_pages; ?>;
	$('#results2').load("https://landscapearchitect.com/products/load-more-results/fetch_pages3.php?keyword2=<? echo preg_replace('/\s+/', '+', $keyword5) ?>", {'page':track_click}, function() {track_click++;}); //initial data to load

	$(".load_more").click(function (e) { //user clicks on button
	
		$(this).hide(); //hide load more button on click
		$('.animation_image').show(); //show loading image

		if(track_click <= total_pages) //make sure user clicks are still less than total pages
		{
			//post page number and load returned data into result element
			$.post('https://landscapearchitect.com/products/load-more-results/fetch_pages3.php?keyword2=<? echo preg_replace('/\s+/', '+', $_POST[keyword]) ?>',{'page': track_click}, function(data) {
			
				$(".load_more").show(); //bring back load more button
				
				$("#results2").append(data); //append data received from server
				
				//scroll page to button element
				$("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 500);
				
				//hide loading image
				$('.animation_image').hide(); //hide loading image once data is received
	
				track_click++; //user click increment on load button
			
			}).fail(function(xhr, ajaxOptions, thrownError) { 
				alert(thrownError); //alert any HTTP error
				$(".load_more").show(); //bring back load more button
				$('.animation_image').hide(); //hide loading image once data is received
			});
			
			
			if(track_click >= total_pages-1)
			{
				//reached end of the page yet? disable load button
				$(".load_more").attr("disabled", "disabled");
			}
		 }
		  
		});
});
</script>
<!-- more Script -->


<style>
.frmSearch2 {background-color:#fff; margin: 100px; padding:5px; margin-top:5px; margin-left: 295px; color:#a97f3f; border: 1px solid; width: 750px; height:120px}
#country-list2{float:left; list-style:none; margin:0; margin-left:-10px; margin-top:15px; padding:0; width:190px;}
#country-list2 td{padding: 10px; color:#906; background:#CCC; border-bottom:#F0F0F0 1px solid;}
#country-list2 td2{padding: 10px; color:#fff; background:#fff; margin-left:10px; border-bottom:#F0F0F0 1px solid;}
#country-list2 td:hover{background:#a97f3f;}
#search-box2{padding: 10px; background-color:#999 border: #F0F0F0 1px solid;}
</style>


<table align="center" width="763">
<tr>
<td>
<div style="position:relative; left:0px; top:20px">
<div id="results2"></div>
</div>
</td>
</tr>
</table>

<table align="center" width="763">
<tr>
<td>
<div style="position:relative; left:-10px; top:20px">
<button class="load_more" id="load_more_button" style="font-size:16px; font-weight:bold; width:200px; box-shadow: 5px 5px 5px #888888; background:#a97f3f"">See More Products</button>
<div class="animation_image" style="display:none;"><img src="https://landscapearchitect.com/products/load-more-results/ajax-loader.gif"> Loading...</div>
<? // echo preg_replace("/[\/\&%#\$]/", "_", $_POST[keyword]) . 'dog' ?><br>
<? // echo preg_replace('/\s+/', '+', $_POST[keyword]) . 'horse' ?><br>
<? // echo $keyword5 . 'goat' ?><br>
<? // echo preg_replace('/\s+/', '+', $keyword5) . 'pig' ?>
</div>
</td>
</tr>
</table>


