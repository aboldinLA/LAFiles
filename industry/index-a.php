
<?
include("lo_top-main2-prod-js3.inc");






?>

<!-- Menu Section -->  
<div class="main1">

	<!-- Start - Div is here to move the header for the articles in correct position -->
	<div style="position:relative; left:-10px; top:-30px; z-index: 80000">
		
		
	<?
	include $include_path . "lo_header-main2-new.inc";
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
			include("lo_top-main2-side2-js50.inc");
		?>




	<table width="1024">
		<tr>
			<td width="240px">
				
				
			<!-- Left Nav Start -->
			

		<?
		include("lo_top-main2-side-new.inc");
		?>	       
	       
	       
		       
			<!-- Left Nav End -->
				
			</td>
			
			
			
			<td width="784">
			

				
				
<div style="position:relative; left:0px; top:10px; width:765px">
	<center><img style="width: 90%" src="https://landscapearchitect.com/lol-logos/3-logo-new.jpg" width="763" /></center><br />
    <center><span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Welcome to the</center></span>

	<center><span style="font-size:32px; font-family:Arial, Helvetica, sans-serif; font-weight:bold"><center>Association Search Center</center></span>
    
<center><span style="font-size:16px">To find contact information for an association, simply enter the association acronym,<br />
or association name and click on the link of the desired association.</span></center><br /><br />
</div>

<div style="position:relative; left:-200px; top:0px; width:765px">

<!-- AJAX Start -->




<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<!-- Custom styles for this template -->
<link href="starter-template.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

   
    
<div style="position: relative; top: -75px">    
   <div class="container">
      <div class="starter-template">
		<div class="page-header">
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
	
	<div style="position: relative; left: 250px">
		<? 	include("lo_top-main2-bottom.inc"); ?>
	</div>
	







<!-- Code End -->


    
	<!-- End Content Section -->
    
</div>
<!-- End Main Section -->
  


</div>





<?
include("lo_footer-main2-new.inc");
?>





