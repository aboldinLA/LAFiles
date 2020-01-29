<?

// Top Section - HTML
include("lad_top-main.inc");

	$uname2 = $_SESSION['name'];

	$ucode = $_SESSION['user'];

?>
	
	
<?

// Top Section - Nav Section
include("lad_header-main3.inc");

	//$banName = $_GET['ad'];

		$ran = array(1300,32,1214,38,29,1301,1215,33,41);
		$randomElement = $ran[array_rand($ran, 1)];

		$banName = $randomElement;


	if ($banName == 1300) {
		
		$picBan = "Fencing1.jpg";
		$picBan2 = "Fencing2.jpg";
		$picBan3 = "Fencing3.jpg";
		
	} elseif ($banName == 32) {
		
		$picBan = "Lighting1.jpg";
		$picBan2 = "Lighting2.jpg";
		$picBan3 = "Lighting3.jpg";
		
	} elseif ($banName == 1214) {
		
		$picBan = "Outdoor1.jpg";
		$picBan2 = "Outdoor2.jpg";
		$picBan3 = "Outdoor1.jpg";
		
	} elseif ($banName == 38) {
		
		$picBan = "PMBR1.jpg";
		$picBan2 = "PMBR2.jpg";
		$picBan3 = "PMBR1.jpg";
		
	} elseif ($banName == 29) {
		
		$picBan = "SiteAmenities1.jpg";
		$picBan2 = "SiteAmenities1.jpg";
		$picBan3 = "SiteAmenities1.jpg";
		
	} elseif ($banName == 1301) {
		
		$picBan = "sculpture1.jpg";
		$picBan2 = "sculpture2.jpg";
		$picBan3 = "sculpture1.jpg";
		
	} elseif ($banName == 1215) {
		
		$picBan = "SiteFurnishings1.jpg";
		$picBan2 = "SiteFurnishings1.jpg";
		$picBan3 = "SiteFurnishings1.jpg";
		
	} elseif ($banName == 33) {
		
		$picBan = "Park1.jpg";
		$picBan2 = "Park2.jpg";
		$picBan3 = "Park1.jpg";
		
	} elseif ($banName == 41) {
		
		$picBan = "WaterFeatures1.jpg";
		$picBan2 = "WaterFeatures2.jpg";
		$picBan3 = "WaterFeatures1.jpg";
		
	}




?>

	
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
                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- Third Slide -->
                <div class="item active">

                    <!-- Slide Background -->
                    <img src="https://landscapearchitect.com/LandscapeProducts/images/banners/<? echo $picBan3; ?>" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <div class="row">
                            <!-- Slide Text Layer -->
                            <div class="slide-text slide_style_left">
                           
  
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Second Slide -->
                <div class="item">

                    <!-- Slide Background -->
                    <img src="https://landscapearchitect.com/LandscapeProducts/images/banners/<? echo $picBan; ?>" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_center">
 
 
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Third Slide -->
                <div class="item">

                    <!-- Slide Background -->
                    <img src="https://landscapearchitect.com/LandscapeProducts/images/banners/<? echo $picBan2; ?>" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_right">

 
                    </div>
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
	  
	  
			  <style>
				  
				#topBar {
					width: 300px;
					padding-left: 100px;
				}

				#topBar2 {
					position: relative;
					top: 15px;
					width: 800px;
					padding-left: 250px;
				}	

				#topBar3 {
					position: relative;
					top: 15px;
					width: 300px;
					padding-left: 250px;
				}					  





				@media screen and (max-width: 1100px) {

					#topBar {
						width: 200px;
						padding-left: 15px;
					}

					#topBar2 {
						position: relative;
						top: 15px;
						width: 400px;
						padding-left: 25px;
					}

				#topBar3 {
					position: relative;
					top: 15px;
					width: 300px;
					padding-left: 70px;
				}					


				}			
			


			  </style>
	  
	  
	  
	  
	  
	  
  	  					<div style="padding-bottom: 75px">
						<div class="row">
						  <div class="col-md-12">
								
								
							<div class="row">
								<div class="col-md-4" id="topBar">
									
									<img width="100%" style="margin: 10px" src="https://landscapearchitect.com/lol-logos/la-details-logo.jpg"> <? if  (!empty($_GET['uname2'])) { ?><h4>Welcome: <? echo $_GET['uname2']; ?></h4><? } else { echo "&nbsp;";}?>
									
								</div>
								<div class="col-md-4" id="topBar2">
									
									<?
									

																		$servername = "localhost";
																		$username = "landscap_lol";
																		$password = "meow2meow";
																		$dbname = "landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 
									
									
																		$cat2 = $_GET['number'];
									
									
																			$sql533 = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE vendor_product.xlist='". $cat2 ."' AND (new_vendor.status='10' OR new_vendor.status='12' OR new_vendor.status='14' OR new_vendor.status='16' OR new_vendor.status='18')";
																			$result533 = $conn->query($sql533);

																			$rowcount533=mysqli_num_rows($result533);
									
									
									
									
									
									
									?>
									
									
									
									
									
									
									<span style="font-size: 28px; font-weight: bold">LAD Search
									
									
								</div>
								<!-- <div class="col-md-4" id="topBar3">
									
								  <span style="font-size: 18px; font-weight: bold">
									<select onchange="if (this.value) window.location.href=this.value">




																<?

																		$cat1 = $_GET['ad'];
																		$cat2 = $_GET['number'];
																		$cat3 = $_GET['catMain'];
																		$cat4 = $_GET['catName'];


																			$sql1 = "SELECT * FROM xlist WHERE idParent = '" . $cat1 ."' AND name NOT LIKE '%*%' ORDER BY name ASC";
																		$result1 = $conn->query($sql1);									

																	// category section

																		echo '<option value="https://landscapearchitect.com/LandscapeProducts/index-js3.php?ad='. $cat1 . '">Top Level</option>';

																		while($row = mysqli_fetch_array($result1)) {



																			$sql33 = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE vendor_product.xlist='". $row['id'] ."' AND (new_vendor.status='10' OR new_vendor.status='12' OR new_vendor.status='14' OR new_vendor.status='16' OR new_vendor.status='18')";
																			$result33 = $conn->query($sql33);

																			$rowcount33=mysqli_num_rows($result33);


																			$sql44 = "SELECT * FROM new_vendor WHERE xlist LIKE '%". $row['id'] ."%' AND (new_vendor.status='10' OR new_vendor.status='12' OR new_vendor.status='14' OR new_vendor.status='16' OR new_vendor.status='18')";
																			$result44 = $conn->query($sql44);

																			$rowcount44=mysqli_num_rows($result44);


																			$sql55 = "SELECT DISTINCT vendor_id FROM vendor_product LEFT JOIN new_vendor ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.xlist='". $row['id'] ."' AND (new_vendor.status='10' OR new_vendor.status='12' OR new_vendor.status='14' OR new_vendor.status='16' OR new_vendor.status='18')";
																			$result55 = $conn->query($sql55);

																			$rowcount55=mysqli_num_rows($result55);				

																				if ($rowcount33 != 0){
																					echo '<option value="https://landscapearchitect.com/LandscapeProducts/index-sub-js4.php?ad=' . $cat1 . '&number='. $row['id'] . '&catName='. $row['name'] . '&catMain='. $cat3 . '&uname2=' . $uname2 . '"><span style="font-family: Helvetica, Arial; font-size: 14px">'. $row['name'] . ' ('. $rowcount55 . ')</span></option>';
																				}

																		}

																		echo '<option value="https://landscapearchitect.com/LandscapeProducts/index-sub-js4.php?ad=' . $cat1 . '&number='. $cat2 . '&catName='. $cat4 . '&catMain='. $cat3 . '&kind=8&uname2=' . $uname2 . '">View All Products</option>';



																?>		  								




									  </select>

								  </span>
									
								</div> -->								
								
							</div>
																
								
							</div>
	  					</div>
						</div>
	  
	<style>
				
				figure {
				  width: 75%;
				  box-shadow: 5px 5px 5px #888888;
				  text-align: center;
				  font-style: italic;
				  font-size: smaller;
				  text-indent: 0;
				  border: thin silver solid;
				  margin: 0.5em;
				  padding: 0.5em;
				}			
			
			.banner_holder{
				width: 100%;
				height: 300px;
				min-height: 200px;
				overflow: hidden;
				background-color: dimgrey;
				display: block;
			}

			.banner_holder img{
				width: 100%;
			}
		
		.limagelad {
			width: 175px;
			height: 75px;
			overflow: hidden;
			margin: 10px;
			text-align: center;
			line-height: 75px;
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		.limagelad2 {
			max-width: 100%;
			max-height: 100%;
			align-content: center;
		  	position: relative;
		  	top: 50%;
		  	transform: translateY(-50%);				
		}
		
		@media screen and (max-width: 1100px) {
			
		.limagelad {
			position: relative;
			left: 0px;
			width: 150px;
			height: 75px;
			overflow: hidden;
			margin: 0px;
			text-align: center;
			line-height: 75px;
			
			display: block;
			margin-left: auto;
			margin-right: auto;			
		}			
			
			

		.limagelad2 {
			width: 75%;
			max-height: 75%;
			align-content: center;
		  	position: relative;
		  	top: 50%;
		  	transform: translateY(-50%);					
		
		
		
		
		@media screen and (max-width: 400px) {
			
		.limagelad {
			width: 175px;
			height: 75px;
			overflow: hidden;
			margin: 10px;
			text-align: center;
			line-height: 75px;
			
			display: block;
			margin-left: auto;
			margin-right: auto;			
		}			
			
			

		.limagelad2 {
			width: 25px;
			max-height: 75%;
			align-content: center;
		  	position: relative;
		  	top: 50%;
		  	transform: translateY(-50%);			
			
			
			
		}		
			
				
	</style>	
	  
				<style>
					
		.colShift {
			position: relative;
			left: 100px;
			top: -55px;
		}
					
		.colShift2 {
			position: absolute;
			left: -200px;
		}	
					
		.colSize {
			position: absolute;
			left: 450px;
		}
					
		.boxWidth {
			width: 450px;
		}					
					
						
			
		@media screen and (max-width: 1100px) {
			
			.colShift {
				position: relative;
				left: 50px;
				top: -55px;
			}	
			
		.boxWidth {
			width: 25%;
		}			
			
			
			
		}
			
			
		@media screen and (max-width: 400px) {
			
			.colShift {
				position: absolute;
				left: -200px;
			}	

			.colSize {
				position: absolute;
				left: 100%;
			}
			
		}
			
			
			  	</style>	  
	  
	  
	  
	  
	  <table style="position: relative; top: -75px">
		  <tr>
		    <td valign="top" width="80%">  
					
									<?
		
						$keywordSE4 = $_GET['keywordSE3'];
						
		
						if (!empty($keywordSE4)) {
							
							$keywordSE = $keywordSE4; 
						
						} elseif ($_POST['keywrd'] === NULL) {
							
							$keywordSE = "bicycle"; 
							
						} else {
							
							$keywordSE = $_POST['keywrd']; 
							
						}
		
		
		
		
					   
					   ?>
			
                <center><h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px">Keyword Search: <? echo $keywordSE; ?></h3></center><br>
                   
                   
	</div>		
			
						
						
						<form method="post" action="index-search.php">
							
							<center>
						
							<input type="text" name="keywrd" value="<? echo $keywordSE ?>" style="width: 250px; height: 20px; box-shadow: 5px 5px 5px #888888; padding: 3px; position: relative; top: -20px" placeholder="Please enter Keyword"><input type="image" value="Go" width="34px" src="https://landscapearchitect.com/images/mag-button.png"  class ="sch" id="sch" onmouseover="this.src='https://landscapearchitect.com/images/mag-button-over.png';"  onmouseout="this.src='https://landscapearchitect.com/images/mag-button.png';" style="position: relative; top: -7px" /><br><br>
								<!-- <input type="submit" value="Submit" style="background-color: #4fb548; position: relative; left: -10px; top: 10px; font-family: Helvetica, Arial,' sans-serif'; font-size: 18px; padding: 3px"> -->

							</center>
							
						</form>
					
									<?
									
										// premium vendor Start

											$servername = "localhost";
											$username = "landscap_lol";
											$password = "meow2meow";
											$dbname = "landscap_lollive";
	
										// Create connection
											$conn = new mysqli($servername, $username, $password, $dbname);
										// Check connection
											if ($conn->connect_error) {
   												 die("Connection failed: " . $conn->connect_error);
											} 
								   
								   
						$keywordSE4 = $_GET['keywordSE3'];
						
		
						if (!empty($keywordSE4)) {
							
							$keywordSE2 = $keywordSE4; 
						
						} elseif ($_POST['keywrd'] === NULL) {
							
							$keywordSE2 = "bicycle"; 
							
						} else {
							
							$keywordSE2 = $_POST['keywrd']; 
							
						}								   
								   
								   

										   


											$link = mysql_connect("localhost", "landscap_lol", "meow2meow");
											mysql_select_db("landscap_lollive", $link);

											$result = mysql_query("SELECT * FROM `xlist` WHERE `name` LIKE '%" . $keywordSE2 . "%' ORDER BY `id` DESC", $link);
											$num_rows33 = mysql_num_rows($result);	
								   
								   
								   
								   if ($num_rows33 != 0){
								   

					?>
					
					
					
					
					
		
				<div id="featured" style="position: relative; left: 0px; top: 0px">
					
					
				
				
									<?
									
								
								   
						$keywordSE4 = $_GET['keywordSE3'];
						
		
						if (!empty($keywordSE4)) {
							
							$keywordSE2 = $keywordSE4; 
						
						} elseif ($_POST['keywrd'] === NULL) {
							
							$keywordSE2 = "bicycle"; 
							
						} elseif ($keywordSE == "bicycle") {
							
							$keywordSE2 = "bicycle"; 
							
						}  else {
							
							$keywordSE2 = $_POST['keywrd']; 
							
						}										   



											$sql77 = "SELECT * FROM `xlist` WHERE `name` LIKE '%" . $keywordSE2 . "%' ORDER BY `id` DESC";

											$result77 = $conn->query($sql77);
					   
											
					   
												
																				
					   							//  <!-- Top Logo End -->

					   
					   							//  <!-- Logo Adjustment Start -->
					   
					   
												// include("lo_top-main2-bottom.inc");
									   
								   }
					   
									?>												
				
				
					
                   			
                   										
		
                   			
	
		
	
	
						<div class="row">
						  <div class="col-md-10">	
	
	
	<div style="position:relative; left: 75px; top: 0px">
		
      
		<div style='width:90%; height:2px; background-color:#605b51;'> </div><br>
                                
                   <h3 style="font-family: Helvetica, Arial,' sans-serif'; font-size: 18px; padding-left: 330px">Results: <? echo $keywordSE2 ?></h3><br>
                                 
						<?php
	
						if ($_POST['keywrd'] === NULL) {
							
							$keywordSE = "bicycle"; 
						
						} else {
							
							$keywordSE = $_POST['keywrd']; 
							
						}
	
	
						// database connection info
						$conn = mysql_connect('localhost','landscap_lol','meow2meow') or trigger_error("SQL", E_USER_ERROR);
						$db = mysql_select_db('landscap_lollive',$conn) or trigger_error("SQL", E_USER_ERROR);

						// find out how many rows are in the table 

						$sql = 	"(SELECT id, product_name, description, photo, cadd, photo_time as 'date', 'product' As type FROM `vendor_product` WHERE `product_name` LIKE '%" . $keywordSE2 . "%' OR `description` LIKE '%" . $keywordSE2 . "%' ORDER BY cadd DESC)
							UNION
								 (SELECT id, company_name, profile, logo, caddv as 'cadd', edit_date as 'date', 'vendor' As type FROM `new_vendor` WHERE `profile` LIKE '%" . $keywordSE2 . "%' OR `company_name` LIKE '%" . $keywordSE2 . "%' AND `status` != 2)
							UNION
								 (SELECT id, name, idParent, sub_number, caddx as 'cadd', idAccount as 'date', 'xlist' As type FROM `xlist` WHERE `name` LIKE '%" . $keywordSE2 . "%') ORDER BY cadd DESC";					   
					   
					   
					   
						$result = mysql_query($sql, $conn) or trigger_error("SQL", E_USER_ERROR);
						$r = mysql_fetch_row($result);
					    $num_rows22 = mysql_num_rows($result);
					   
						$numrows = $r[0];

						// number of rows to show per page
						$rowsperpage = 20;
						// find out total pages
						$totalpages = ceil($numrows / $rowsperpage);
					   	// echo $totalpages . "<br>";

						// get the current page or set a default
						if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
						   // cast var as int
						   $currentpage = (int) $_GET['currentpage'];
						} else {
						   // default page num
						   $currentpage = 1;
						} // end if

						// if current page is greater than total pages...
						if ($currentpage > $totalpages) {
						   // set current page to last page
						   $currentpage = $totalpages;
						} // end if
						// if current page is less than first page...
						if ($currentpage < 1) {
						   // set current page to first page
						   $currentpage = 1;
						} // end if

						// the offset of the list, based on current page 
						$offset = ($currentpage - 1) * $rowsperpage;

						// get the info from the db 
						$sql = "(SELECT id, product_name, description, photo, cadd, photo_time as 'date', 'product' As type FROM `vendor_product` WHERE `product_name` LIKE '%" . $keywordSE2 . "%' OR `description` LIKE '%" . $keywordSE2 . "%' ORDER BY cadd DESC)
							UNION
								 (SELECT id, company_name, profile, logo, caddv as 'cadd', edit_date as 'date', 'vendor' As type FROM `new_vendor` WHERE `profile` LIKE '%" . $keywordSE2 . "%' OR `company_name` LIKE '%" . $keywordSE2 . "%' AND `status` != 2)
							UNION
								 (SELECT id, name, idParent, sub_number, caddx as 'cadd', idAccount as 'date', 'xlist' As type FROM `xlist` WHERE `name` LIKE '%" . $keywordSE2 . "%') ORDER BY cadd DESC
							LIMIT $offset, $rowsperpage";
					   
						$result = mysql_query($sql, $conn) or trigger_error("SQL", E_USER_ERROR);

						// while there are rows to be fetched...
						while ($list = mysql_fetch_assoc($result)) {
							
							
									// new pic method
									if ($list['type'] == "product") {
										
													
									$sql22 = "SELECT * FROM `vendor_product` WHERE `id` = '" .  $list['id'] . "'";
									$result22 = mysql_query($sql22, $conn) or trigger_error("SQL", E_USER_ERROR);

									// while there are rows to be fetched...
									while ($list = mysql_fetch_assoc($result22)) {													
													
									$linksProd = substr('' . iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($list['description']))) . '', 0, 145);
									
									if ($list['series_product'] == NULL) { 
										
											
								   echo "<table align='left' width='100%' style='padding-right: 15px'>";
								   echo "<tr><td><a href='https://landscapearchitect.com/LandscapeProducts/index-vendor-js.php?number=" .  $list['vendor_id'] . "' target='_blank'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" .  $list['photo'] . "'></a></td><td valign='top' align='left' style='padding-left: 5px; text-align: left'><strong><a href='https://landscapearchitect.com/LandscapeProducts/index-vendor-js.php?number=" .  $list['vendor_id'] . "' target='_blank'>" .  iconv('CP1252', 'ASCII//TRANSLIT', (stripslashes($list['product_name']))) ."</a></strong><br />" .  $linksProd . " ...<strong><br>Date:</strong> " .  date('m-d-y', strtotime($list['photo_time'])) . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table><br><br>" ;															
												}		}								
										
										// echo "dog";
										
									} elseif ($list['type'] == "vendor") {
													
									$sql33 = "SELECT * FROM `new_vendor` WHERE `id` = '" .  $list['id'] . "' AND `status` != 2";
									$result33 = mysql_query($sql33, $conn) or trigger_error("SQL", E_USER_ERROR);

									// while there are rows to be fetched...
									while ($list = mysql_fetch_assoc($result33)) {																		
													
									$linksVend = substr('' . htmlentities($list['profile']) . '', 0, 145);
													
													
								   echo "<table align='left' width='100%' style='padding-right: 15px'>";
								   echo "<tr><td><a href='https://landscapearchitect.com/LandscapeProducts/index-vendor-js.php?number=" .  $list['id'] . "' target='_blank'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" .  $list['logo'] . "'></a></td><td valign='top' align='left' style='padding-left: 5px; text-align: left'><strong><a href='https://landscapearchitect.com/LandscapeProducts/index-vendor-js.php?number=" .  $list['id'] . "' target='_blank'>" .  $list['company_name'] ."</a></strong><br />" .  $linksVend . " ...<strong><br>Updated:</strong> " .  date('m-d-y', strtotime($list['edit_date'])) . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table><br><br>" ;																		
															
															// echo  $list['id'] . " logo - " .  $list['logo'] . " Company Name - " .  $list['company_name'] ."<br>";
															
												}
										
										// echo "cat";
										
									} elseif ($list['type'] == "xlist") {
													
									$sql33 = "SELECT * FROM `new_vendor` WHERE `xlist` = '" .  $list['id'] . "'";
									$result33 = mysql_query($sql33, $conn) or trigger_error("SQL", E_USER_ERROR);

									// while there are rows to be fetched...
									while ($list = mysql_fetch_assoc($result33)) {																		
													
									$linksVend = substr('' . htmlentities($list['profile']) . '', 0, 145);
													
													
								   echo "<table align='left' width='100%' style='padding-right: 15px'>";
								   echo "<tr><td><a href='https://landscapearchitect.com/LandscapeProducts/index-vendor-js.php?number=" .  $list['id'] . "' target='_blank'><img style='max-height: 165px; max-width: 165px; overflow-x: hidden; overflow-y: hidden' src='https://landscapearchitect.com/products/images/" .  $list['logo'] . "'></a></td><td valign='top' align='left' style='padding-left: 5px; text-align: left'><strong><a href='https://landscapearchitect.com/LandscapeProducts/index-vendor-js.php?number=" .  $list['id'] . "' target='_blank'>" .  $list['company_name'] ."</a></strong><br />" .  $linksVend . " ...<strong><br>Updated:</strong> " .  date('m-d-y', strtotime($list['edit_date'])) . "</td></tr><tr><td colspan='2' style='line-height: 20px'>&nbsp;</td></tr></table><br><br>" ;																		
															
															// echo  $list['id'] . " logo - " .  $list['logo'] . " Company Name - " .  $list['company_name'] ."<br>";
															
												}
										
										// echo "cat";
										
									}
										
										
										
										
										
										
						} // end while
					
					   if ($num_rows22 > 20) {	
						   
						$keywordSE4 = $_GET['keywordSE3'];
						
		
						if (!empty($keywordSE4)) {
							
							$keywordSE2 = $keywordSE4; 
						
						} elseif ($_POST['keywrd'] === NULL) {
							
							$keywordSE2 = "bicycle"; 
							
						} else {
							
							$keywordSE2 = $_POST['keywrd']; 
							
						}												   
						   
					
						   echo "<h4>View More News for: " . $keywordSE2 . "</h4>";
					

					
						/******  build the pagination links ******/
						// range of num links to show
						$range = 20;

						// if not on page 1, don't show back links
						if ($currentpage > 1) {
							
						
							
							
						   // show << link to go back to page 1
						   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1'><<</a> ";
						   // get previous page num
						   $prevpage = $currentpage - 1;
						   // show < link to go back to 1 page
						   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><</a> ";
						} // end if 

						// loop to show links to range of pages around current page
						for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
						   // if it's a valid page number...
						   if (($x > 0) && ($x <= $totalpages)) {
							   
						
							  
							   
							  // if we're on current page...
							  if ($x == $currentpage) {
								 // 'highlight' it but don't make a link
								 echo " [<b>$x</b>] ";
							  // if not current page...
							  } else {
								 // make it a link
								 echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=" . $x . "&keywordSE3=" . $keywordSE2 ."'>$x</a> ";
							  } // end else
						   } // end if 
						} // end for

						// if not on last page, show forward and last page links        
						if ($currentpage != $totalpages) {
						   // get next page
						   $nextpage = $currentpage + 1;
							// echo forward link for next page 
						   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=" . $nextpage . "&keywordSE3=" . $keywordSE2 ."'>></a> ";
						   // echo forward link for lastpage
						   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>>></a> ";
						} // end if
						/****** end build pagination links ******/
					   
												
						   
					   }
					   
								   
								   

					?>	
		
					
					
							  </div>		
					
							  </div>		
		
	
				
				
					
                   			
                   										
		
              
				
				

			  </td>
			  
				<style>
					
		.adShift {
			position: relative;
			left: -15px;
			top: -65px;
		}	
					
		.adSize {
			width: 350px;
		}						
					
		@media screen and (max-width: 400px) {
			
		.adShift {
			position: absolute;
			left: 100px;
		}			
			
		.adSize {
			width: 100%;
		}		
			
			
			
			  	</style>
			  
			  
			  
			  
			  
			  
			  
			  <td class="adShift" valign="top" align="left">
				  
				  
				  
				  
				  
				  	<!-- Banner Start -->
				  
							<?
				  
																		$servername = "localhost";
																		$username = "landscap_lol";
																		$password = "meow2meow";
																		$dbname = "landscap_lollive";

																	// Create connection
																		$conn = new mysqli($servername, $username, $password, $dbname);
																	// Check connection
																		if ($conn->connect_error) {
																			 die("Connection failed: " . $conn->connect_error);
																		} 				  
				  

							// Category Banners
							include("banner-LAD-ROS.inc");

							?>	
				  
				  	<!-- Banner End -->
				  
			  </td>
		  </tr>
	  </table>
	
	
		

	
  </div>


	
		<style>
			
				figure {
				  width: 75%;
				  text-align: center;
				  font-style: italic;
				  font-size: smaller;
				  text-indent: 0;
				  border: thin silver solid;
				  margin: 0.5em;
				  padding: 0.5em;
				}			
			
			.banner_holder{
				width: 100%;
				height: 300px;
				min-height: 200px;
				overflow: hidden;
				background-color: dimgrey;
				display: block;
			}

			.banner_holder img{
				width: 100%;
			}
			
		.limage {
			width: 100%;
			height: 250px;    
			overflow: hidden;
			margin-top: 5px;
			text-align: center;
			line-height: 75px;
		}
		.limage2 {
			max-width: 100%;
			max-height: 100%;
			vertical-align: middle;
		  	position: relative;
		  	top: 50%;
		  	transform: translateY(-50%);			
		}	
			
			
			@media only screen and (max-width: 500px) {

					.limage {
						width: 100%;
						height: 75px;    
						overflow: hidden;
						margin-top: 5px;
						text-align: center;
						line-height: 75px;
					}
					.limage2 {
						max-width: 100%;
						max-height: 100%;
						vertical-align: middle;
						position: relative;
						top: 50%;
						transform: translateY(-50%);			
					}
	
				
				
			}			
			
			
			
			
			
		</style>
	


				
				
				
				
				
				
				
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
	
	