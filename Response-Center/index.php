 <?

// Top Section - HTML
include("lad_top-main.inc");

	$uname2 = $_SESSION['name'];

	$uname3 = $_SESSION['lname'];

	$ucode = $_SESSION['user'];

include("lad_header-main3.inc");

include("connect3.inc");


?>

<title>Response Center</title>


<script>
	
	//resets the cat dropdown 
	
	window.onbeforeunload = function () {
		    var s = document.getElementById("catSelectBox");
      s.onchange = function(){
        location.href = this.options[this.selectedIndex].value
      }
      s.selectedIndex = 0;
	}
	
  
	
		
</script>





<style>

	.flexbox-container {
		    display: flex;
    width: 100%;
    min-width: 1200px;
    margin: 0 auto;
    max-width: 1600px;
    padding-left: 40px;
    padding-right: 40px;
	}
	
	.sidebar {
		flex: 0 !important;
		margin-top: -105px;
	}
	
	.searchBarRow {

		padding-left: 40px;
		padding-right: 40px;
		margin: 0 auto;
		float: none;
	}
	
	.main {
		margin-top: 10px;
	}
	
	#keywordBox {
		width: 80%; 
		height: 31px; 
		box-shadow: 5px 5px 5px #888888; 
		padding: 3px; 
		position: relative; 
		top: -17px; 
		font-size: 20px; 
	}
	
		.keywordContain {
		margin-bottom: 40px;
		margin-top: 25px;
	}



</style>





	
  	<div style="position: relative; top: -20px">

		<link href="css/lad-format.css" rel="stylesheet" id="bootstrap-css">
	 
									
							
							
				<div class="flexbox-container">  <!-- took 'colShift' class off -->

				  <div class="main col-md-5">
					  
					  
						<div class="w3-content w3-section" style="max-width:400px; position: relative; left: 0px">
						  <img class="w3-animate-top" src="https://landscapearchitect.com/lol-logos/back-LO-3.jpg" style="width:100%">
						  <img class="w3-animate-zoom" src="https://landscapearchitect.com/lol-logos/la-details-logo.jpg" style="width:100%">
						  <img class="w3-animate-left" src="https://landscapearchitect.com/lol-logos/tool-and-equipment-logo.jpg" style="width:100%">
						  <img class="w3-animate-bottom" src="https://landscapearchitect.com/lol-logos/national-product-search-logo.jpg" style="width:100%">
						</div>
					  
					  

					</div> 
					
					<div class="main col-md-5" style="position: relative; top: 10px">
						
	
							<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

							<div class="w3-container w3-center w3-animate-zoom">
							  <h1 style="text-align: left">Tell Us What You Want</h1>
							  <p style="text-align: left">Choose all the information that will help your business.</p><br>
								


								<form action="#" method="post" style="text-align: left">
									
								<h3>LandscapeOnline</h3>	
								<input type="checkbox" name="check_list[]" value="C/C++"><label style="font-weight: 200">&nbsp;LO Weekly - Weekly News for the Industry</label><br/>
								<input type="checkbox" name="check_list[]" value="C/C++"><label style="font-weight: 200">&nbsp;LO Weekly -  Sales Opportunities</label><br/><br>
								<input type="checkbox" name="check_list[]" value="C/C++"><label style="font-weight: 200">&nbsp;LandscapeOnline -  Sales Opportunities</label><br/><br>
									
								<h3>LA Details</h3>	
								<input type="checkbox" name="check_list[]" value="C/C++"><label style="font-weight: 200">&nbsp;LA Details Updates</label><br/>
								<input type="checkbox" name="check_list[]" value="C/C++"><label style="font-weight: 200">&nbsp;LA Details Sales Opportunities</label><br/><br>									
									
									
								<h3>The Landscape Expo 2018</h3>	
								<input type="checkbox" name="check_list[]" value="PHP"><label style="font-weight: 200">&nbsp;The Landscape Expo 2018 News</label><br/>
								<input type="checkbox" name="check_list[]" value="PHP"><label style="font-weight: 200">&nbsp;The Landscape Expo Exhibitor Updates</label><br/>
								<input type="checkbox" name="check_list[]" value="PHP"><label style="font-weight: 200">&nbsp;The Landscape Expo Attendee Updates</label><br/>
								<input type="checkbox" name="check_list[]" value="PHP"><label style="font-weight: 200">&nbsp;The Landscape Expo Seminar Updates</label><br/><br>
									
								<h3>Landscape Architect Magazine</h3>
								<input type="checkbox" name="check_list[]" value="Java"><label style="font-weight: 200">&nbsp;Landscape Architect Online Magazine</label><br/>
								<input type="checkbox" name="check_list[]" value="Java"><label style="font-weight: 200">&nbsp;Landscape Architect Subscriber Updates</label><br/>
								<input type="checkbox" name="check_list[]" value="Java"><label style="font-weight: 200">&nbsp;Landscape Architect Sales Opportunities</label><br/><br>
									
									
								<h3>Landscape Contractor Magazine</h3>	
								<input type="checkbox" name="check_list[]" value="PHP"><label style="font-weight: 200">&nbsp;Landscape Contractor Online Magazine</label><br/>
								<input type="checkbox" name="check_list[]" value="PHP"><label style="font-weight: 200">&nbsp;Landscape Contractor Subscriber Updates</label><br/>
								<input type="checkbox" name="check_list[]" value="PHP"><label style="font-weight: 200">&nbsp;Landscape Contractor Sales Opportunities</label><br/><br>
									
									
								<input type="submit" name="submit" value="Submit"/>
								  </form>
								

						
								
							  
							</div>					
						
						
						
					</div>
					
					

					
					

				  <div class="sidebar">
					  

					  							
							<!-- Keyword Search Start -->
					  
							<div class="keywordContain">


											<!-- <form method="post" action="index-search.php" target="_blank">

												<input type="text" name="keywrd" value="<? echo $keywordSE ?>" id="keywordBox" placeholder="Keyword Search"><input type="image" value="Go" width="34px" src="https://landscapearchitect.com/images/mag-button.png"  class ="sch" id="sch" onmouseover="this.src='https://landscapearchitect.com/images/mag-button-over.png';"  onmouseout="this.src='https://landscapearchitect.com/images/mag-button.png';" style="position: relative; top: -7px" /><br><br>

											</form> -->

								  </div>					  
					  
							<!-- Keyword Search End -->								  
					  					  
					  
							<!-- Banners Start -->
					  
					  
							<div style="position: relative; top: 100px">
					  
							<?

							// Category Banners
							include("banner-LAD.inc");

							?>
								
				  			</div>	
								
					  
							<!-- Banners End -->

				  </div>	



				</div>									
							
							
							
							
	
			  
			  
	
				  
			
		

	
  </div>


	
	

<!-- <hr noshade width="40%" style="text-align: left"> -->

				
				
				
				
				
				
				
  </div>
</div>
	
	
	
	


	
<?

// Top Section - Footer Section
// include("lad_footer-main.inc");
include("lo_top-main2-bottom-lad.inc");

?>	

<?
include("lo_footer-main2-new.inc");
?>
	
	