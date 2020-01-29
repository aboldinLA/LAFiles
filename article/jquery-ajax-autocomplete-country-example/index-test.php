<?
session_start();
echo 'top';
include("lo_top-main2.inc");
?>

<div align="center" class="container-lo">
<div class="clear"></div>

<div class="header">
<!-- Menu Section -->  

<?
include $include_path . "lo_header-main2.inc";
?>

</div>

<!-- Content Section Start -->
<div class="main1">

<div style="position:relative; left:0px; top:-150px; width:750px; font-family:Arial, Helvetica, sans-serif; font-size:16px">

		<table width="750" cellpadding="5" cellspacing="0" style="position:relative; left:30px; top:10px">
        	<tr>
            	<td><img src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" width="175" align="top" /></td>
                <td><img src="https://landscapearchitect.com/lol-logos/lcdbms-logo-NEW-BIG-2.jpg" width="190" align="top" /></td>
				<td><img src="https://landscapearchitect.com/lol-logos/lolw-logo.jpg" width="225" /></td>
			</tr>
		</table> 
</div>

<div class="tb3" style=" position:relative; top:-125px; width:750px; box-shadow: 5px 5px 5px #888888">
  &nbsp;&nbsp;Product Search Center:&nbsp;&nbsp
</div><br /><br />

<!-- New Keyword Section Start -->

<style>
.frmSearch {background-color:#fff; margin: 100px; padding:5px; margin-top:5px; margin-left: 300px; color:#a97f3f; border: 1px dotted; width: 540px}
#country-list{float:left; list-style:none; margin:0; margin-left:-10px; margin-top:15px; padding:0; width:190px;}
#country-list td{padding: 10px; color:red; background:#999; border-bottom:#F0F0F0 1px solid;}
#country-list td:hover{background:#a97f3f;}
#search-box{padding: 10px; background-color:#999 border: #F0F0F0 1px solid;}
</style>

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	$("#search-box").keyup(function(){
		$.ajax({
		type: "POST",
		url: "searchprodname.php",
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
</head>
<body>
<div class="frmSearch">
<h1>Keyword Search</h1><br>
<input type="text" id="search-box" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold" placeholder="Enter Product Name" />
<div id="suggesstion-box"></div>
</div>


<!-- Content Section End -->
 
<!-- End Main Section -->  
</div>

<div class="banner1">
<!-- Banner Section -->
		<? include $include_path . "banner-ads-prod.inc"; ?>

</div>

<div class="bottom1">
<!-- Footer Section -->  
<? include $include_path . "lo_footer-main2.inc"; ?>
  
</div>

</div>

<?
echo 'bottom';
?>