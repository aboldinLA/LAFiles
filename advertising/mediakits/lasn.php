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
           <h3>LASN 2020 Media Kit </h3>
     	 	</div> 
		  

			
			<? 
				$LASNmagazines = [
					//title, link
					['Full LASN Media Kit (2.6 MB)', 'LASN-2020-Media-Kit-EMAIL'],

				]; 
								
				
				foreach($LASNmagazines as $mag){
					
					echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 for_small img_fit colme">
										<a href="https://landscapearchitect.com/mediakits/' . $mag[1] . '.pdf" target="_blank"><img src="https://landscapearchitect.com/mediakits/' . $mag[1] . '.jpg" alt="img" width="100%" /></a>
										<div class="thumbTitleContainer">
											<h3>' . $mag[0] . '</h3>
											<h4><a href="https://landscapearchitect.com/mediakits/' . $mag[1] . '.pdf" target="_blank">View PDF</a></h4>
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
					['LASN Media Kit - Page 1', 'LA-2020-Media-Group-Media-Kit_01'],
					['LASN Media Kit - Page 2', 'LA-2020-Media-Group-Media-Kit_02'],
					['LASN Media Kit - Page 3', 'LA-2020-Media-Group-Media-Kit_03'],
					['LASN Media Kit - Page 4', 'LA-2020-Media-Group-Media-Kit_04'],
					['LASN Media Kit - Page 5', 'LA-2020-Media-Group-Media-Kit_05'],
					['LASN Media Kit - Page 6', 'LA-2020-Media-Group-Media-Kit_06'],
					['LASN Media Kit - Page 7', 'LA-2020-Media-Group-Media-Kit_07'],
					['LASN Media Kit - Page 8', 'LA-2020-Media-Group-Media-Kit_08'],
					['LASN Media Kit - Page 9', 'LA-2020-Media-Group-Media-Kit_09'],
					['LASN Media Kit - Page 10', 'LA-2020-Media-Group-Media-Kit_10'],
					['LASN Media Kit - Page 11', 'LA-2020-Media-Group-Media-Kit_11'],
					['LASN Media Kit - Page 12', 'LA-2020-Media-Group-Media-Kit_12'],
					['LASN Media Kit - Page 13', 'LA-2020-Media-Group-Media-Kit_13'],
					['LASN Media Kit - Page 14', 'LA-2020-Media-Group-Media-Kit_14'],
					['LASN Media Kit - Page 15', 'LA-2020-Media-Group-Media-Kit_15'],
					['LASN Media Kit - Page 16', 'LA-2020-Media-Group-Media-Kit_16'],

				]; 
								
				
				foreach($LASNmagazines as $mag){
					
					echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 for_small img_fit colme">
										<a href="https://landscapearchitect.com/mediakits/' . $mag[1] . '.pdf" target="_blank"><img src="https://landscapearchitect.com/mediakits/' . $mag[1] . '.jpg" alt="img" width="100%" /></a>
										<div class="thumbTitleContainer">
											<h3>' . $mag[0] . '</h3>
											<h4><a href="https://landscapearchitect.com/mediakits/' . $mag[1] . '.pdf" target="_blank">View PDF</a></h4>
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
