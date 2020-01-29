<html>
<head>
<TITLE>New Search</TITLE>
<head>
<style>
body{width:610px;}
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
		url: "searchconame.php",
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
<input type="text" id="search-box" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold" placeholder="Enter Company Name" />
<div id="suggesstion-box"></div>
</div>
</body>
</html>