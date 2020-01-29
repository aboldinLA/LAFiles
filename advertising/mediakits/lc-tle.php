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
           <h3>LC-TLE 2020 Media Kit </h3>
     	 	</div> 
		  

			
			<? 
				$LASNmagazines = [
					//title, link
					['Full LC-TLE Media Kit (3.1 MB)', 'LC-2020-Media Kit-EMAIL'],

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
					['LC-TLE Media Kit - Page 1', 'LC-MK20-01-Cover'],
					['LC-TLE Media Kit - Page 2', 'LC-MK20-02-Nationwide-Circulation'],
					['LC-TLE Media Kit - Page 3', 'LC-MK20-03-Reaching-Contractors'],
					['LC-TLE Media Kit - Page 4', 'LC-MK20-04-Products-That-Sell'],
					['LC-TLE Media Kit - Page 5', 'LC-MK20-05-Demographic-Profile'],
					['LC-TLE Media Kit - Page 6', 'LC-MK20-06-Multi-Media-and-Lead-Generation-Program'],
					['LC-TLE Media Kit - Page 7', 'LC-MK20-07-The-LC_DBM-Marketplace'],
					['LC-TLE Media Kit - Page 8', 'LC-MK20-08-Leads-Are-Like-Gold'],
					['LC-TLE Media Kit - Page 9', 'LC-MK20-09-Generate-Leads-in-25-Ways'],
					['LC-TLE Media Kit - Page 10', 'LC-MK20-10-Editorial-Calendar'],
					['LC-TLE Media Kit - Page 11', 'LC-MK20-11-Rates'],
					['LC-TLE Media Kit - Page 12', 'LC-MK20-12-LC-Has-it-All'],

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
