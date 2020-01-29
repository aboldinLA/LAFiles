<? 
	
	$pageId = 'resources';
	
	include '../../includes/la-common-top-inner.php';

	include '../../includes/la-common-header-inner.inc'; 
	
	
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
           <h3>Editorial Table of Contents</h3>
     	 	</div>
			
			
			<? 
				$LASNmagazines = [
					//title, link
					['2020 LASN Editorial Calendar', 'LA-2020-Editorial-Calendar'],
					['2020 LC-TLE Editorial Calendar', 'LC-2020-Editorial-Calendar'],
					['Custom Residential Issue', 'custom_residential'],
					['Lighting Issue', 'lighting'],
					['Parks Issue', 'parks'],
					['School & Campus Design Issue', 'SchoolCampus'],

				]; 
								
				
				foreach($LASNmagazines as $mag){
					
					echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 for_small img_fit colme">
										<a href="https://landscapearchitect.com/editorial/features/' . $mag[1] . '.pdf" target="_blank"><img src="https://landscapearchitect.com/editorial/features/' . $mag[1] . '.jpg" alt="img" width="100%" /></a>
										<div class="thumbTitleContainer">
											<h3>' . $mag[0] . '</h3>
											<h4><a href="https://landscapearchitect.com/editorial/features/' . $mag[1] . '.pdf" target="_blank">View PDF</a></h4>
										</div>
								</div><!-- /.col-lg-3 -->';
					
				}
				
				
				
			?>
			
			
			
			
			
				
      </div><!-- /.row -->
      </div><!-- /.container -->
      </div><!-- /.group_of_pdf -->


			<? include '../../includes/la-common-footer-inner.inc'; ?>


  </body>
</html>
