<? 
	
	$pageId = 'resources';
	
	include '../../../includes/la-common-top-inner.php';

	include '../../../includes/la-common-header-inner.inc'; 
	
	
?>


<style>

.landingPageHeader h3 {

		    font-family: 'DM Serif Text', serif;
    font-size:56px;
    font-weight: normal;
    font-style: normal;
    font-stretch: normal;
    line-height: 1.08;
    letter-spacing: normal;
    color: #313131;
    margin: 0 0 17px 0;
		text-align: center;
}

.landingPageHeader {	
	margin-bottom: 30px;
}

</style>

      <div class="full_width">
     
      </div><!-- /.mab_ban -->

      

<div class="group_of_pdf full_width">
      <div class="container">
      <div class="row">
		  
		  
			<div class="landingPageHeader col-lg-12">
           <h3>2020 Digital Media Kit </h3>
     	 	</div> 
		  

			
			<? 
				$LASNmagazines = [
					//title, link
					['FULL Digital Media Kit (2.1 MB)', 'LA-2020-Media-Group-DIgital-Media-Kit-EMAIL'],

				]; 
								
				
				foreach($LASNmagazines as $mag){
					
					echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 for_small img_fit colme">
										<a href="https://landscapearchitect.com/advertising/' . $mag[1] . '.pdf" target="_blank"><img src="https://landscapearchitect.com/advertising/' . $mag[1] . '.jpg" alt="img" width="100%" /></a>
										<div class="thumbTitleContainer">
											<h3>' . $mag[0] . '</h3>
											<h4><a href="https://landscapearchitect.com/advertising/' . $mag[1] . '.pdf" target="_blank">View PDF</a></h4>
										</div>
								</div><!-- /.col-lg-3 -->';
					
				}
				
				
				
			?>
			
			
			
			
			
				
      </div><!-- /.row -->
      </div><!-- /.container -->
      </div><!-- /.group_of_pdf -->


<div class="group_of_pdf full_width">
      <div class="container">
      <div class="row">
				 
		 <div class="landingPageHeader col-lg-12">
           <h4><u>Individual Pages</u></h4>
     	 	</div>
			
			<? 
				$LASNmagazines = [
					//title, link
					['Digital Media Kit - Page 1', 'LA-2020-Media-Group-DIgital-Media-Kit_01'],
					['Digital Media Kit - Page 2', 'LA-2020-Media-Group-DIgital-Media-Kit_02'],
					['Digital Media Kit - Page 3', 'LA-2020-Media-Group-DIgital-Media-Kit_03'],
					['Digital Media Kit - Page 4', 'LA-2020-Media-Group-DIgital-Media-Kit_04'],
					['Digital Media Kit - Page 5', 'LA-2020-Media-Group-DIgital-Media-Kit_05'],
					['Digital Media Kit - Page 6', 'LA-2020-Media-Group-DIgital-Media-Kit_06'],
					['Digital Media Kit - Page 7', 'LA-2020-Media-Group-DIgital-Media-Kit_07'],
					['Digital Media Kit - Page 8', 'LA-2020-Media-Group-DIgital-Media-Kit_08'],
					['Digital Media Kit - Page 9', 'LA-2020-Media-Group-DIgital-Media-Kit_09'],
					['Digital Media Kit - Page 10', 'LA-2020-Media-Group-DIgital-Media-Kit_10'],
					['Digital Media Kit - Page 11', 'LA-2020-Media-Group-DIgital-Media-Kit_11'],
					['Digital Media Kit - Page 12', 'LA-2020-Media-Group-DIgital-Media-Kit_12'],

				]; 
								
				
				foreach($LASNmagazines as $mag){
					
					echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 for_small img_fit colme">
										<a href="https://landscapearchitect.com/advertising/' . $mag[1] . '.pdf" target="_blank"><img src="https://landscapearchitect.com/advertising/' . $mag[1] . '.jpg" alt="img" width="100%" /></a>
										<div class="thumbTitleContainer">
											<h3>' . $mag[0] . '</h3>
											<h4><a href="https://landscapearchitect.com/advertising/' . $mag[1] . '.pdf" target="_blank">View PDF</a></h4>
										</div>
								</div><!-- /.col-lg-3 -->';
					
				}
				
				
				
			?>
			
			
			
			
			
				
      </div><!-- /.row -->
      </div><!-- /.container -->
      </div><!-- /.group_of_pdf -->







			<? include '../../../includes/la-common-footer-inner.inc'; ?>


  </body>
</html>
