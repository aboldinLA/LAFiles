<?
// Top Section - HTML
include '../modules/configuration.inc';
include '../modules/db.php';

//include $rootInclude.'lad_top-main.inc'; 
include $rootInclude.'la-lad-top.inc';

	$uname2 = $_SESSION['name'];

	$uname3 = $_SESSION['lname'];

	$ucode = $_SESSION['user'];

?>
	
	
<?

// Top Section - Nav Section
if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')) {
    include $rootInclude.'lad_header-main3-js.inc'; 
} else {
    //include $rootInclude.'lad_header-common.inc'; 
    include($rootInclude."la-lad-header.inc");
}


include $rootInclude.'search-engine-leaderboard-banners.inc'; 


		
	$cat1 = $_GET['ad'];
	$cat2 = $_GET['number'];
	$cat3 = $_GET['catMain'];
	$cat4 = $_GET['catName'];


	$catName = $_GET['catName'];




?>
<title><? echo $_GET['catMain'] ?></title>


<style>
	
	

	.flexbox-container {
		    display: flex;
    width: 100%;
    min-width: 1200px;
    margin: 0 auto;
    max-width: 2000px;
    padding-left: 10px;
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
		margin-top: -11px;
		
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
		margin-bottom: -3px;
margin-top: 46px;
	}
	
	.productsBtn {
		    font-size: 17px;
    margin-left: 10px;
    padding: 8px 9px 6px 9px;
    border-radius: 5px;
    color: white;
    margin-top: 4px;
	}
	
	.productsBtn a {
		color: white;
		text-decoration: none;
	}
	
	.productsBtn a:hover {
		color: white;
		text-decoration: none;
	}
	
	


</style>



	
  <div style="position: relative; top: -20px">
	  

	  
	  
	  
	  <!-- Slider Start -->
	  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <!-- Add this css File in head tag-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">


 <!--  
        If you want to change #bootstrap-touch-slider id then you have to change Carousel-indicators and Carousel-Control  #bootstrap-touch-slider slide as well
        Slide effect: slide, fade
        Text Align: slide_style_center, slide_style_left, slide_style_right
        Add Text Animation: https://daneden.github.io/animate.css/
        -->
	  
<link href="css/slider-new.css" rel="stylesheet" id="bootstrap-css">
	  


        <div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >

            <!-- Indicators -->
            <ol class="carousel-indicators">
				<!--
                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
				-->
            </ol>

            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- First Slide -->
				
                <div class="item active">

                    <!-- Slide Background -->
					<a href="<? echo $picBanLink1; ?>" >
                    <img src="<?php echo BASE_URL; ?>banner/<? echo $picBan1; ?>" alt="Bootstrap Touch Slider"  class="slide-image"/>
					</a>
                </div>
                <!-- End of Slide -->

                <!-- Second Slide -->
                <div class="item">

                    <!-- Slide Background -->
					<a href="<? echo $picBanLink2; ?>" >
                   	<img src="<?php echo BASE_URL; ?>banner/<? echo $picBan2; ?>" alt="Bootstrap Touch Slider"  class="slide-image"/>
					</a>
                </div>
                <!-- End of Slide -->

                <!-- Third Slide -->
                <div class="item">

                    <!-- Slide Background -->
					<a href="<? echo $picBanLink3; ?>" >
                    <img src="<?php echo BASE_URL; ?>banner/<? echo $picBan3; ?>" alt="Bootstrap Touch Slider"  class="slide-image"/>
					</a>
                </div>
                <!-- End of Slide -->


            </div><!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div> <!-- End  bootstrap-touch-slider Slider -->
        

			<script src="js/slider-new.js"></script> 
	  
	  
	  
	  
	  
	<!-- Slider End --> 
	  
	<link href="css/lad-format2.css" rel="stylesheet" id="bootstrap-css">
	  
  
	  

	  
  	  					<div>
						<div>
						  <div class="searchBarRow col-md-9">
								
								
							<div style="display: flex;justify-content: space-between;">
<!--
								<div class="col-md-4" id="topBar">
									
									<img width="100%" style="margin: 10px" src="https://landscapearchitect.com/lol-logos/la-details-logo.jpg"> <? if  (!empty($_GET['uname2'])) { ?><h4>Welcome: <? echo $_GET['uname2']; ?></h4><? } else { echo "&nbsp;";}?>
									
								</div>
-->
								<div style="padding-left: 10px; margin-top: 25px;">
									
									<?
									

		                        /*$servername = "localhost";
		                        $username = "land_patchew";
		                        $password = "59q2GB6k$3";
		                        $dbname = "land_landscap_lollive";

								// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);
								// Check connection
									if ($conn->connect_error) {
										 die("Connection failed: " . $conn->connect_error);
									} */


									$cat2 = $_GET['number'];


										$sql533 = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE vendor_product.xlist='". $cat2 ."' AND (new_vendor.status='10' OR new_vendor.status='12' OR new_vendor.status='14' OR new_vendor.status='16' OR new_vendor.status='18')";
										$result533 = $conn->query($sql533);

										$rowcount533=mysqli_num_rows($result533);


                                        $ad = $_GET['ad'];
                                        
                                        
                                        if ($ad == 28) {
                                           echo '<title>' . $_GET['catName'] . ' | Business Services</title>';
                                            echo '<h1 style="font-size: 24px; font-weight: bold">Business Services | ' . $_GET['catName'] . '</h1>';
                                        } elseif ($ad == 30) {
                                            echo '<title>' . $_GET['catName'] . ' | Landscape Erosion Control Products</title>';
                                            echo '<h1 style="font-size: 24px; font-weight: bold">Landscape Erosion Control Products | ' . $_GET['catName'] . '</h1>';                                            
                                        }elseif ($ad == 1300) {
                                            echo '<title>' . $_GET['catName'] . ' | Commercial / Wholesale Fencing</title>';
                                            echo '<h1 style="font-size: 24px; font-weight: bold">Commercial / Wholesale Fencing | ' . $_GET['catName'] . '</h1>';
                                        } elseif ($ad == 1139) {
                                            echo '<title>' . $_GET['catName'] . ' | Landscape Erosion Control Products</title>';
                                            echo '<h1 style="font-size: 24px; font-weight: bold">Landscape Erosion Control Products | ' . $_GET['catName'] . '</h1>';    
                                        } elseif ($ad == '32') {
                                            echo '<title>' . $_GET['catName'] . ' | Commercial Exterior Lighting / Electrical</title>';
                                            echo '<h1 style="font-size: 24px; font-weight: bold">Commercial Exterior Lighting / Electrical | ' . $_GET['catName'] . '</h1>';
                                        } elseif ($ad == '1214') {
                                            echo '<title>' . $_GET['catName'] . ' | Outdoor Living / Residential Landscape</title>';
                                            echo '<h1 style="font-size: 24px; font-weight: bold">Outdoor Living / Residential Landscape | ' . $_GET['catName'] . '</h1>';
                                        } elseif ($ad == '33') {
                                            echo '<title>' . $_GET['catName'] . ' | Parks / Playground Products</title>';
                                            echo '<h1 style="font-size: 24px; font-weight: bold">Parks / Playground Products | ' . $_GET['catName'] . '</h1>';
                                        } elseif ($ad == '38') {
                                            echo '<title>' . $_GET['catName'] . ' | Commercial Pavers, Masonry, Blocks, Rocks</title>';
                                            echo '<h1 style="font-size: 24px; font-weight: bold">Commercial Pavers, Masonry, Blocks, Rocks | ' . $_GET['catName'] . '</h1>';
                                        } elseif ($ad == '1212') {
                                            echo '<title>' . $_GET['catName'] . ' | Wildlife / Commercial Landscape Pest Control</title>';
                                            echo '<h1 style="font-size: 24px; font-weight: bold">Wildlife / Commercial Landscape Pest Control | ' . $_GET['catName'] . '</h1>';
                                        } elseif ($ad == '1002') {
                                            echo '<title>' . $_GET['catName'] . ' | Wholesale Plant Accessories & Soil Amendments</title>';
                                            echo '<h1 style="font-size: 24px; font-weight: bold">Wholesale Plant Accessories & Soil Amendments | ' . $_GET['catName'] . '</h1>';
                                        } elseif ($ad == '1394') {
                                            echo '<title>' . $_GET['catName'] . ' | Pool and Spa</title>';
                                            echo '<h1 style="font-size: 24px; font-weight: bold">Pool and Spa | ' . $_GET['catName'] . '</h1>';
                                        } elseif ($ad == '29') {
                                            echo '<title>' . $_GET['catName'] . ' | Business Services</title>';
                                            echo '<h1 style="font-size: 24px; font-weight: bold">Business Services | ' . $_GET['catName'] . '</h1>';
                                        } elseif ($ad == '28') {
                                            echo '<title>' . $_GET['catName'] . ' | Commercial Site Amenities</title>';
                                            echo '<h1 style="font-size: 24px; font-weight: bold">Commercial Site Amenities | ' . $_GET['catName'] . '</h1>';
                                        } elseif ($ad == '1215') {
                                            echo '<title>' . $_GET['catName'] . ' | Site Furnishings / Receptacles</title>';
                                            echo '<h1 style="font-size: 24px; font-weight: bold">Site Furnishings / Receptacles | ' . $_GET['catName'] . '</h1>';
                                        } elseif ($ad == '1301') {
                                            echo '<title>' . $_GET['catName'] . ' | Landscape Art, Sculpture, Metal / Stone Garden Ornaments</title>';
                                            echo '<h1 style="font-size: 24px; font-weight: bold">Landscape Art, Sculpture, Metal / Stone Garden Ornaments | ' . $_GET['catName'] . '</h1>';
                                        } elseif ($ad == '41') {
                                            echo '<title>' . $_GET['catName'] . ' | Water Features, Fountains, Ponds / Equipment</title>';
                                            echo '<h1 style="font-size: 24px; font-weight: bold">Water Features, Fountains, Ponds / Equipment | ' . $_GET['catName'] . '</h1>';
                                        } elseif ($ad == '1213') {
                                            echo '<title>' . $_GET['catName'] . ' | Landscape Irrigation & Water Management</title>';
                                            echo '<h1 style="font-size: 24px; font-weight: bold">Landscape Irrigation & Water Management | ' . $_GET['catName'] . '</h1>';
                                        }
                                                                            
                                    
                                    
									
									?>
									
									
									<!-- Refine Search Start -->									

					
								</div>
									
								</div>
							
								
							</div>
																
								
							</div>
	  					</div>
						</div>
	  
							
				<div class="flexbox-container">

				  <div class="main main col-md-9">
					  
	
					  
					  
							<!-- Details Start -->
                      
                      
                      

                      
                      
					        <!-- 18 Start -->
                      
					  		<section>

									<?
									
										// 18 Start 


											$key4 = $_GET['number'];
						
											$prodKind = $_GET['kind'];
                                
                                                $iCount = 1;
                                
                                                $xCount = 1;                                
						
												
											$sql67 = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE vendor_product.xlist='" . $cat2 . "' AND (new_vendor.status='18' OR new_vendor.status='16' OR new_vendor.status='14' OR new_vendor.status='12' OR new_vendor.status='10') AND vendor_product.photo LIKE '%jpg%' AND vendor_product.series_product = '0' ORDER BY RAND()";
											$result67 = $conn->query($sql67);									
									
												// what safari was showing
						
												
											   $xx = 0;
												$zCount = 0;
												$rowNum = 0;
													$index = 1;
												
															   while($row = mysqli_fetch_assoc($result67)) {
																   
																   
																	$sql99 = "SELECT * FROM vendor_product WHERE xlist='". $key4 ."' AND vendor_id='" .$row['vendor_id']. "'";
																	$result99 = $conn->query($sql99);

																	$rowcount99=mysqli_num_rows($result99);	
																   
																   
																	$sql199 = "SELECT * FROM vendor_product WHERE vendor_id='" .$row['vendor_id']. "'";
																	$result199 = $conn->query($sql199);

																	$rowcount199=mysqli_num_rows($result199);	
																   
																   
																	$sql299 = "SELECT * FROM vendor_product WHERE vendor_id='" .$row['vendor_id']. "' AND (cadd LIKE '%dwg%' OR cadd_2 LIKE '%dwf%' OR cadd_3 LIKE '%dxf%' OR pdff LIKE '%pdf%' OR skup LIKE '%skp%' OR vwxx LIKE '%vwx%' OR mediap LIKE '%pdf%' OR zipp LIKE '%zip%')";
																   
																	$result299 = $conn->query($sql299);
																   
																	$rowcount299=mysqli_num_rows($result299);	
																   
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash		
															
																$string2 =  $row['product_name']; // Trim String

																$string2 = strtolower($string2); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string2 = preg_replace("/[^a-z0-9_\s-]/", "", $string2);  //Strip any unwanted characters

																$string2 = preg_replace("/[\s-]+/", " ", $string2); // Clean multiple dashes or whitespaces

																$string2 = preg_replace("/[\s_]/", "-", $string2); //Convert whitespaces and underscore to dash																	
																	
																   
																	if ($rowcount299 != 0) {

																		 $deLogo = "<img class='deLogo' src='".BASE_URL."lol-logos/la-details-logo.jpg' style='box-shadow: 2px 2px 2px #888888; border: solid; border-color: lightblue'>&nbsp;&nbsp;";

																	} else {
																		
																		$deLogo = "&nbsp;";	
																		
																	}																	   
																   
																   
																if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28)) {
																	
																   $baseCount = $index;
																	
																} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29)) {
																	
																  $baseCount = $index;
																	
																} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30)) {
																	
																   $baseCount = $index;
																	
																} 
																	 
    																$index++;	
                                                                   
													
												}	
                                                
											
											$sql68 = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE vendor_product.xlist='" . $cat2 . "' AND (new_vendor.status='18' OR new_vendor.status='16' OR new_vendor.status='14' OR new_vendor.status='12' OR new_vendor.status='10') AND vendor_product.photo LIKE '%jpg%' AND vendor_product.series_product = '0' ORDER BY RAND()";
											$result68 = $conn->query($sql68);			
                                                
                                                
											   $xx = 0;
												$zCount = 0;
												$rowNum = 0;
													$index = 1;
												
															   while($row = mysqli_fetch_assoc($result68)) {
																   
																   
																	$sql99 = "SELECT * FROM vendor_product WHERE xlist='". $key4 ."' AND vendor_id='" .$row['vendor_id']. "'";
																	$result99 = $conn->query($sql99);

																	$rowcount99=mysqli_num_rows($result99);	
																   
																   
																	$sql199 = "SELECT * FROM vendor_product WHERE vendor_id='" .$row['vendor_id']. "'";
																	$result199 = $conn->query($sql199);

																	$rowcount199=mysqli_num_rows($result199);	
																   
																   
																	$sql299 = "SELECT * FROM vendor_product WHERE vendor_id='" .$row['vendor_id']. "' AND (cadd LIKE '%dwg%' OR cadd_2 LIKE '%dwf%' OR cadd_3 LIKE '%dxf%' OR pdff LIKE '%pdf%' OR skup LIKE '%skp%' OR vwxx LIKE '%vwx%' OR mediap LIKE '%pdf%' OR zipp LIKE '%zip%')";
																   
																	$result299 = $conn->query($sql299);
																   
																	$rowcount299=mysqli_num_rows($result299);	
																   
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash	

																$string = $row['slug'];	
															
																$string2 =  $row['product_name']; // Trim String

																$string2 = strtolower($string2); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string2 = preg_replace("/[^a-z0-9_\s-]/", "", $string2);  //Strip any unwanted characters

																$string2 = preg_replace("/[\s-]+/", " ", $string2); // Clean multiple dashes or whitespaces

																$string2 = preg_replace("/[\s_]/", "-", $string2); //Convert whitespaces and underscore to dash																	
																
                                                
                                                                   // Counts for sets start


                                                                        if ($iCount == 1) {

                                                                            if ($xCount == $baseCount) {

                                                                                echo "<div class='container' style='width:130%'><div class='row'><div class='col-md-3'><a href='".BASE_URL."landscape-design-products/" . $string . "/" . $string2 . "/" . $row['vendor_id'] . "/" . $row['id'] . "'><figure><div><img height='200px' style='max-width: 90%' src='".BASE_URL."products/images/".$row['photo']."' \"></div><figcaption><h2 class='coName' style='font-size: 18px'>".$row['company_name']."</h2><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "</p></figcaption></figure></a></div></div></div>";
                                                                                $iCount = 1;

                                                                            } else {

																                echo "<div class='container' style='width:130%'><div class='row'><div class='col-md-3'><a href='".BASE_URL."landscape-design-products/" . $string . "/" . $string2 . "/" . $row['vendor_id'] . "/" . $row['id'] . "'><figure><div><img height='200px' style='max-width: 90%' src='".BASE_URL."products/images/".$row['photo']."' \"></div><figcaption><h2 class='coName' style='font-size: 18px'>".$row['company_name']."</h2><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "</p></figcaption></figure></a></div>";
                                                                                $iCount++; 
                                                                                $xCount++;       

                                                                            }


                                                                        } elseif ($iCount == 2) {

                                                                            if ($xCount == $baseCount) {

																                echo "<div class='col-md-3'><a href='".BASE_URL."landscape-design-products/" . $string . "/" . $string2 . "/" . $row['vendor_id'] . "/" . $row['id'] . "'><figure><div><img height='200px' style='max-width: 90%' src='https://landscapearchitect.com/products/images/".$row['photo']."' \"></div><figcaption><h2 class='coName' style='font-size: 18px'>".$row['company_name']."</h2><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "</p></figcaption></figure></a></div></div></div>";
                                                                                $iCount = 1;

                                                                            } else {

																                echo "<div class='col-md-3'><a href='".BASE_URL."landscape-design-products/" . $string . "/" . $string2 . "/" . $row['vendor_id'] . "/" . $row['id'] . "'><figure><div><img height='200px' style='max-width: 90%' src='".BASE_URL."products/images/".$row['photo']."' \"></div><figcaption><h2 class='coName' style='font-size: 18px'>".$row['company_name']."</h2><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "</p></figcaption></figure></a></div>";
                                                                                $iCount++;                                                            
                                                                                $xCount++;       
                                                                            }


                                                                        } elseif ($iCount == 3) {


																            echo "<div class='col-md-3'><a href='".BASE_URL."landscape-design-products/" . $string . "/" . $string2 . "/" . $row['vendor_id'] . "/" . $row['id'] . "'><figure><div><img height='200px' style='max-width: 90%' src='".BASE_URL."products/images/".$row['photo']."' \"></div><figcaption><h2 class='coName' style='font-size: 18px'>".$row['company_name']."</h2><p>Matching Products: " . $rowcount99 . "<br>Total Products: " . $rowcount199 . "</p></figcaption></figure></a></div></div></div>";

                                                                            $iCount = 1;
                                                                            $xCount++;       

                                                                        }


                                                                    // Counts for sets end                                                                   
																                                                   
                                                               }
                                                
                                
					   
					   							//  <!-- 18 End -->
					   
					   							
					?>				
					   							
					 					  
					  		</section>
					
					        <!-- 18 End -->	
    
					
	
	
							<!-- Details End -->
					  

					  
					  

					</div> 
					
					

					
					

				  <div class="sidebar">
					  
							<!-- Keyword Search Start -->
					  
								<div class="keywordContain">

<!--										 <h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px; position: relative; left: 125px">Keyword Search: <? echo $keywordSE; ?></h3>-->

											<form method="post" action="Search-Products.php" >


												<input type="text" name="keywrd" value="<? echo $keywordSE ?>" id="keywordBox" placeholder="Please enter Keyword"><input type="image" value="Go" width="34px" src="<?php echo BASE_URL; ?>images/mag-button.png"  class ="sch" id="sch" onmouseover="this.src='<?php echo BASE_URL; ?>images/mag-button-over.png';"  onmouseout="this.src='<?php echo BASE_URL; ?>images/mag-button.png';" style="position: relative; top: -7px" /><br><br>
													<!-- <input type="submit" value="Submit" style="background-color: #4fb548; position: relative; left: -10px; top: 10px; font-family: Helvetica, Arial,' sans-serif'; font-size: 18px; padding: 3px"> -->

												

											</form>

								  </div>					  
					  
							<!-- Keyword Search End -->
					  
					 
					  										  
					  					  
					  
							<!-- Banners Start -->
					  
					  
							<div style="position: relative; z-index: 50000">
					  
							<?

							// Category Banners
                            include $rootInclude.'banner-LAD.inc'; 

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
include $rootInclude.'la_bottom-common.inc'; 


include $rootInclude.'lo_footer-main2-new.inc'; 
?>
	
	