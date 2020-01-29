<?
	include "lol_common.inc";
?>
<?
include '../../includes/la_top-common.php';
?>


<style>
	.form-control {
		display: block;
		width: 100%;
		height: 34px;
		padding: 6px 12px;
		font-size: 14px;
		line-height: 1.42857143;
		color: #555;
		background-color: #fff;
		background-image: none;
		border: 1px solid #ccc;
		border-radius: 4px;
		-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
		box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
		-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
		-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
		transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	}

</style>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
		
		
	<?
		include("../../includes/la_header-common.inc");
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
			include("../../includes/la_banner-common.inc");
		?>




	<table width="1024">
		<tr>
			<td width="240px" style="position: relative; left: -5px; top: -210px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("../../includes/la_left-side-common2.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			

				
				
<div style="position:relative; left:0px; top:10px; width:765px">
	<center><img style="width: 30%" src="https://landscapearchitect.com/lol-logos/LASN_BLUE_500.jpg" /><img style="width: 35%; padding-left: 50px" src="https://landscapearchitect.com/lol-logos/TLE-no-date.jpg" /></center><br />
    <center><span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Welcome to the</center></span>

	<center><span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Keyword Association Search</center></span><br>
    
<center><span style="font-size:16px">To find contact information for an association, simply enter the association acronym,<br />
or association name and click on the link of the desired association.</span></center><br /><br />
</div>

<div style="position:relative; left:-200px; top:0px; width:765px">

<!-- AJAX Start -->



<!-- removal fixes sidebar text issue 

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
-->



<!-- Custom styles for this template -->
<link href="starter-template.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

   
    
<div style="position: relative; top: -75px; left: 210px;">    
   <div class="container">
      <div class="starter-template">
		<div class="page-header" style="padding-bottom: 9px; margin: 40px 0 20px; border-bottom: 1px solid #eee; font-family: Arial, Helvetica, sans-serif; font-weight: bold;">
			<center><h1>Search Association</h1></center>
		</div>
        <form role="form2" method="post">
		  <div class="form-group">
			<input type="text" class="form-control" id="keyword2" placeholder="Enter Keyword">
		  </div>
		</form>
		<ul id="content2"></ul>
		
	  </div>
    </div><!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
	$(document).ready(function() {
		$('#keyword2').on('input', function() {
			var searchKeyword2 = $(this).val();
			if (searchKeyword2.length >= 3) {
				$.post('search2.php', { keywords2: searchKeyword2 }, function(data) {
					$('ul#content2').empty()
					$.each(data, function() {
						$('ul#content2').append('<li><a href="https://landscapearchitect.com/industry/index-result-a.php?uid=0&type_event=meeting&action=search&search=acronym&acro=' + this.id + '" target="_blank">' + this.title + '</a></li>');
					});
				}, "json");
			}
		});
	});
	</script>


<!-- AJAX End -->
</div>

</div>




<!-- End Assoc Search Section -->
				
				
				
				
				
				


				
			
			</td>
			
			
			
		</tr>
	</table><br>
	
	<div style="position: relative; left: 270px">
		<? include("../../includes/lo_top-main2-bottom.inc"); ?>
	</div>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>




<?
    include("../../includes/lo_footer-main2-new.inc");
?>





