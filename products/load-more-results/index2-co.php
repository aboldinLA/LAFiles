<?php
session_start();

include("config.inc2.php");

// count for pages Needed
$results = mysqli_query($connecDB,"SELECT COUNT(*) FROM vendor_product");
$get_total_rows = mysqli_fetch_array($results); //total records

//break total records into pages
$total_pages = ceil($get_total_rows[0]/$item_per_page);	

?>

<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	
	var track_click = 0; //track user click on "load more" button, righ now it is 0 click
	
	var total_pages = <?php echo $total_pages; ?>;
	$('#results').load("fetch_pages3.php", {'page':track_click}, function() {track_click++;}); //initial data to load

<!-- script for Ajax Search 1 Start -->
	$("#search-box").keyup(function(){

		$.ajax({
		type: "POST",
		url: "https://landscapearchitect.com/products/load-more-results/index-js2.php",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		

		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box").css("background","#FFF");
			
		}
		});
	});
});

function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}

</script>
<link href="css/style-count.css" rel="stylesheet" type="text/css">

<style>
.frmSearch {background-color:#fff; margin: 100px; padding:5px; margin-top:5px; margin-left: 295px; color:#a97f3f; border: 1px solid; width: 750px; height:120px}
#country-list{float:left; list-style:none; margin:0; margin-left:-10px; margin-top:15px; padding:0; width:190px;}
#country-list td{padding: 10px; color:#906; background:#CCC; border-bottom:#F0F0F0 1px solid;}
#country-list td2{padding: 10px; color:#fff; background:#fff; margin-left:10px; border-bottom:#F0F0F0 1px solid;}
#country-list td:hover{background:#a97f3f;}
#search-box{padding: 10px; background-color:#999 border: #F0F0F0 1px solid;}
</style>

<!-- script for Ajax Search 1 End -->


<!-- Search Box Setup Start -->

<table align="center" width="763">
<tr>
<td>
<div class="frmSearch">
<div style="position:relative; top:0px">
<h2 style="font-family:Arial, Helvetica, sans-serif">Interactive Keyword Search Product</h2>
</div>

<div style="position:relative; top:5px">
<input type="text" id="search-box" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; border:1px solid; border-color:#000; box-shadow: 5px 5px 5px #888888" placeholder="Enter Product Name" autocomplete="on" />
</div>

<div id="suggesstion-box"></div>

</div>

<!-- Search Box Setup end -->


