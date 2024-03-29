<? 
	
	$pageId = 'resources';
	include '../modules/configuration.inc';
	include $rootInclude.'la-common-top-inner.php';

	include $rootInclude.'la-common-header-inner.inc'; 
	
	
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
	<a id="Sales"></a>	
      <div class="container">
      <div class="row">
				 <div class="landingPageHeader col-lg-12">
           <h3>Advertising Table of Contents</h3>
     	 	</div> 
		  
		  	<div class="landingPageHeader col-lg-12">
           <h4><strong>Jump to:</strong> &nbsp;&nbsp; <a href="#Sales">Sales Sheet</a> &nbsp;|&nbsp; <a href="#LASNmk">LASN Media Kit</a> &nbsp;|&nbsp; <a href="#LCmk">LC-TLE Media Kit</a> &nbsp;|&nbsp; <a href="#Digitalcutsheets">Digital Marketing Cutsheets</a> &nbsp;|&nbsp; <a href="#Digitalmk">Digital Media Kit</a></h4>
     	 	</div>
			
		  				 <div class="landingPageHeader col-lg-12">
							 	 
           <h4><u>Sales Sheets</u></h4>
     	 	</div>
			
			<? 
				$LASNmagazines = [
					//title, link
					['Sales - Custom Residential Cutsheet', 'Sales-Custom-Residential-cutsheet'],
					['September ASLA Show Issue Profiles', '2020-ASLA-Show-Issue-Profile'],
					['LASN Marketplace Cutsheet', 'marketplace-cutsheet'],
					['LASN Survey Results', 'survey-results'],
					['LC-TLE Marketplace Cutsheet', 'LCmarketplace-cutsheet'],
					

				]; 
								
				
				foreach($LASNmagazines as $mag){
					
					echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 for_small img_fit colme">
										<a href="'.BASE_URL.'advertising/' . $mag[1] . '.pdf" target="_blank"><img src="'.BASE_URL.'advertising/' . $mag[1] . '.jpg" alt="img" width="100%" /></a>
										<div class="thumbTitleContainer">
											<h3>' . $mag[0] . '</h3>
											<h4><a href="'.BASE_URL.'advertising/' . $mag[1] . '.pdf" target="_blank">View PDF</a></h4>
										</div>
								</div><!-- /.col-lg-3 -->';
					
				}
				
				
				
			?>
			
			
			
			
			
				
      </div><!-- /.row -->
      </div><!-- /.container -->
	<a id="LASNmk"></a>
      </div><!-- /.group_of_pdf -->


<div class="group_of_pdf full_width">
	 
      <div class="container">
      <div class="row">
				 
			
		  				 <div class="landingPageHeader col-lg-12">
							
           <h4><u>2020 LASN Media Kit</u></h4>
     	 	</div>
			
			<? 
				$LASNmagazines = [
					//title, link
					['Full LASN Media Kit (2.6 MB)', 'LASN-2020-Media-Kit-EMAIL'],
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
										<a href="'.BASE_URL.'mediakits/' . $mag[1] . '.pdf" target="_blank"><img src="'.BASE_URL.'mediakits/' . $mag[1] . '.jpg" alt="img" width="100%" /></a>
										<div class="thumbTitleContainer">
											<h3>' . $mag[0] . '</h3>
											<h4><a href="'.BASE_URL.'mediakits/' . $mag[1] . '.pdf" target="_blank">View PDF</a></h4>
										</div>
								</div><!-- /.col-lg-3 -->';
					
				}
				
				
				
			?>
			
			
			
			
			
				
      </div><!-- /.row -->
      </div><!-- /.container -->
	<a id="LCmk"></a>
      </div><!-- /.group_of_pdf -->


<div class="group_of_pdf full_width">
      <div class="container">
      <div class="row">
				 
			
		  				 <div class="landingPageHeader col-lg-12">
           <h4><u>2020 LC-TLE Media Kit</u></h4>
     	 	</div>
			
			<? 
				$LASNmagazines = [
					//title, link
					['Full LC-TLE Media Kit (3.1 MB)', 'LC-2020-Media Kit-EMAIL'],
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
										<a href="'.BASE_URL.'mediakits/' . $mag[1] . '.pdf" target="_blank"><img src="'.BASE_URL.'mediakits/' . $mag[1] . '.jpg" alt="img" width="100%" /></a>
										<div class="thumbTitleContainer">
											<h3>' . $mag[0] . '</h3>
											<h4><a href="'.BASE_URL.'mediakits/' . $mag[1] . '.pdf" target="_blank">View PDF</a></h4>
										</div>
								</div><!-- /.col-lg-3 -->';
					
				}
				
				
				
			?>
			
			
			
			
			
				
      </div><!-- /.row -->
      </div><!-- /.container -->
	<a id="Digitalcutsheets"></a>
      </div><!-- /.group_of_pdf -->




<div class="group_of_pdf full_width">
      <div class="container">
      <div class="row">
				
			
		  				 <div class="landingPageHeader col-lg-12">
           <h4><u>Digital Marketing Cutsheets</u></h4>
     	 	</div>
			
			<? 
				$LASNmagazines = [
					//title, link
					['LA Details Targeted Popoups', 'LADetails-targeted-popups'],
					['Run-of-Site Takeovers', 'run-of-site-takeovers'],
					['Run-of-Site Popoups', 'run-of-site-popups'],

					

				]; 
								
				
				foreach($LASNmagazines as $mag){
					
					echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 for_small img_fit colme">
										<a href="'.BASE_URL.'advertising/' . $mag[1] . '.pdf" target="_blank"><img src="'.BASE_URL.'advertising/' . $mag[1] . '.jpg" alt="img" width="100%" /></a>
										<div class="thumbTitleContainer">
											<h3>' . $mag[0] . '</h3>
											<h4><a href="'.BASE_URL.'advertising/' . $mag[1] . '.pdf" target="_blank">View PDF</a></h4>
										</div>
								</div><!-- /.col-lg-3 -->';
					
				}
				
				
				
			?>
			
			
			
			
			
				
      </div><!-- /.row -->
      </div><!-- /.container -->
	<a id="Digitalmk"></a>
      </div><!-- /.group_of_pdf -->


<div class="group_of_pdf full_width">
      <div class="container">
      <div class="row">
				
			
		
		  				 <div class="landingPageHeader col-lg-12">
           <h4><u>Digital Media Kit</u></h4>
     	 	</div>
		  
		  <? 
				$LASNmagazines = [
					//title, link
					['FULL Digital Media Kit (2.1 MB)', 'LA-2020-Media-Group-DIgital-Media-Kit-EMAIL'],
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
										<a href="'.BASE_URL.'advertising/' . $mag[1] . '.pdf" target="_blank"><img src="'.BASE_URL.'advertising/' . $mag[1] . '.jpg" alt="img" width="100%" /></a>
										<div class="thumbTitleContainer">
											<h3>' . $mag[0] . '</h3>
											<h4><a href="'.BASE_URL.'advertising/' . $mag[1] . '.pdf" target="_blank">View PDF</a></h4>
										</div>
								</div><!-- /.col-lg-3 -->';
					
				}
				
				
				
			?>
			
			
			
			
			
				
      </div><!-- /.row -->
      </div><!-- /.container -->
      </div><!-- /.group_of_pdf -->




			<? include $rootInclude.'la-common-footer-inner.inc'; ?>


  </body>
</html>
