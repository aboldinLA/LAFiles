<?php
session_start();
include("lo_top-main2.inc");


include("config.inc2.php");

// count for pages Needed
$results = mysqli_query($connecDB,"SELECT COUNT(*) FROM vendor_product");
$get_total_rows = mysqli_fetch_array($results); //total records

//break total records into pages
$total_pages = ceil($get_total_rows[0]/$item_per_page);	

?>

<div align="center" class="container-lo">
<div class="clear"></div>

<!-- Menu Section Start -->  
<div class="header">
<?
include $include_path . "lo_header-main2.inc";
?>
</div>
<!-- Menu Section End -->  

<div class="main1">

<!-- Content Section Main1 Start -->

<!-- Logo Section Start -->
<div style="position:relative; left:0px; top:-150px; width:750px; font-family:Arial, Helvetica, sans-serif; font-size:16px">

		<table width="750" cellpadding="5" cellspacing="0" style="position:relative; left:30px; top:10px">
        	<tr>
            	<td><img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="175" align="top" /></td>
                <td><img src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG-2.jpg" width="190" align="top" /></td>
				<td><img src="https://landscapearchitect.com/lol-logos/lolw-logo.jpg" width="225" /></td>
			</tr>
		</table> 
</div>
<!-- Logo Section End -->

<!-- Tab Section Start -->
<div style="position:relative; top:-235px">
    <script src="https://landscapearchitect.com/products/tab-content/tabcontent.js" type="text/javascript"></script>
    <link href="https://landscapearchitect.com/products/tab-content/template1/tabcontent.css" rel="stylesheet" type="text/css" />
<body style="background:#F6F9FC; font-family:Arial;">
    <div style="width: 763px; margin: 0 auto; padding: 120px 0 40px;">
        <ul class="tabs" data-persist="true">
            <li><a href="#view1">Search by Article Title</a></li>
            <li><a href="#view2">Search by Article Content</a></li>
            <li><a href="#view3">Quick Search</a></li>
        </ul>
        <div class="tabcontents">
        
        
            <div id="view1">
<!-- View 1 Start -->
            
<div class="tb3" style=" position:relative; left:-28px; top:-25px; width:750px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Article Search Center:&nbsp;&nbsp
</div><br /><br />

<div style="position:relative; left:-327px; top:-53px">
<!-- Search Section Start -->
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	
	var track_click = 0; //track user click on "load more" button, righ now it is 0 click
	
	var total_pages = <?php echo $total_pages; ?>;
	$('#results').load("https://landscapearchitect.com/research/load-more-results/fetch_pages2a.php", {'page':track_click}, function() {track_click++;}); //initial data to load

<!-- script for Ajax Search 1 Start -->
	$("#search-box").keyup(function(){

		$.ajax({
		type: "POST",
		url: "https://landscapearchitect.com/research/load-more-results/index-js.php",
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
<h2 style="font-family:Arial, Helvetica, sans-serif">Interactive Keyword Article Search by Title </h2>
</div>

<div style="position:relative; top:5px">
<input type="text" id="search-box" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; border:1px solid; border-color:#000; box-shadow: 5px 5px 5px #888888" placeholder="Enter Article Title" autocomplete="on" />
</div>

<div id="suggesstion-box"></div>

</div>
</td>
</tr>
</table>

<!-- Search Box Setup end -->
<!-- Search Section End -->
</div>

<!-- Veiw 1 End -->
                
            </div>
            
            <div id="view2">
<!--Veiw 2 Start -->
            
<div class="tb3" style=" position:relative; left:-28px; top:-25px; width:750px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Article Search Center:&nbsp;&nbsp
</div><br /><br />

<div style="position:relative; left:-327px; top:-53px">
<!-- Search Section Start -->
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	
	var track_click = 0; //track user click on "load more" button, righ now it is 0 click
	
	var total_pages = <?php echo $total_pages; ?>;
	$('#results2').load("https://landscapearchitect.com/research/load-more-results/fetch_pages3a.php", {'page':track_click}, function() {track_click++;}); //initial data to load

<!-- script for Ajax Search 1 Start -->
	$("#search-box2").keyup(function(){

		$.ajax({
		type: "POST",
		url: "https://landscapearchitect.com/research/load-more-results/index-js2.php",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box2").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		

		success: function(data){
			$("#suggesstion-box2").show();
			$("#suggesstion-box2").html(data);
			$("#search-box2").css("background","#FFF");
			
		}
		});
	});
});

function selectCountry(val) {
$("#search-box2").val(val);
$("#suggesstion-box2").hide();
}

</script>
<link href="css/style-count.css" rel="stylesheet" type="text/css">

<style>
.frmSearch2 {background-color:#fff; margin: 100px; padding:5px; margin-top:5px; margin-left: 295px; color:#a97f3f; border: 1px solid; width: 750px; height:120px}
#country-list2{float:left; list-style:none; margin:0; margin-left:-10px; margin-top:15px; padding:0; width:190px;}
#country-list2 td{padding: 10px; color:#906; background:#CCC; border-bottom:#F0F0F0 1px solid;}
#country-list2 td2{padding: 10px; color:#fff; background:#fff; margin-left:10px; border-bottom:#F0F0F0 1px solid;}
#country-list2 td:hover{background:#a97f3f;}
#search-box2{padding: 10px; background-color:#999 border: #F0F0F0 1px solid;}
</style>

<!-- script for Ajax Search 1 End -->


<!-- Search Box Setup Start -->

<table align="center" width="763">
<tr>
<td>
<div class="frmSearch2">
<div style="position:relative; top:0px">
<h2 style="font-family:Arial, Helvetica, sans-serif">Interactive Keyword Article Search by Title </h2>
</div>

<div style="position:relative; top:5px">
<input type="text" id="search-box2" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold; border:1px solid; border-color:#000; box-shadow: 5px 5px 5px #888888" placeholder="Enter Content" autocomplete="on" />
</div>

<div id="suggesstion-box2"></div>

</div>
</td>
</tr>
</table>

<!-- Search Box Setup end -->
<!-- Search Section End -->
</div>


<!-- Veiw 2 End -->             
            </div>
            
            <div id="view3">
                <!-- Content Veiw 3 Start --> 


<div class="tb3" style=" position:relative; left:-28px; top:-25px; width:750px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Article Search Center:&nbsp;&nbsp
</div><br /><br />


<!-- New Keyword Section Start -->

<!-- Product Name Section Start -->
<style>
.frmSearch3 {background-color:#fff; margin: 100px; padding:5px; margin-top:5px; margin-left: 300px; color:#a97f3f; border: 1px solid; width: 745px}
#country-list3{float:left; list-style:none; margin:0; margin-left:-10px; margin-top:15px; padding:0; width:190px;}
#country-list3 td{padding: 10px; color:red; background:#999; border-bottom:#F0F0F0 1px solid;}
#country-list3 td:hover{background:#a97f3f;}
#search-box3{padding: 10px; background-color:#999 border: #F0F0F0 1px solid;}
</style>





                <!-- Content Veiw 3 End -->             
            </div>
        </div>
    </div>
</body>
</div>
<!-- Tab Section End -->

<!-- Content Section End -->
  
</div>
<!-- End Main Section --> 

<!-- Banner Section Start -->
<div class="banner1">
		<? 
		// include $include_path . "banner-ads-prod2.inc"; 
		?>


<!-- Footer Section Start -->  
<div class="bottom1">
<? // include $include_path . "lo_footer-main2.inc"; ?>
</div>
<!-- Footer Section End -->  

</div>
