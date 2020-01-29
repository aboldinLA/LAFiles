<?

// Top Section - HTML
include("lad_top-main.inc");

	$uname2 = $_SESSION['name'];

	$ucode = $_SESSION['user'];

?>
	
	
<?

// Top Section - Nav Section
include("lad_header-main3.inc");

	$banName = $_GET['ad'];

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


function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $passwordus = substr( str_shuffle( $chars ), 0, $length );
    return $passwordus;
}


$passwordus = random_password(8);




?>


<title>LA Details - Registration</title>

	
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
	  
	<link href="css/lad-format.css" rel="stylesheet" id="bootstrap-css">
	  
  
	  

	  
  	  					<div style="padding-bottom: 75px">
						<div class="row">
						  <div class="col-md-12">
								
								
							<div class="row">
								
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
									
									
									
									
									
									
									<span style="font-size: 28px; font-weight: bold; position: relative; left: 50%">New Registration</span>
									
									
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
	  

	  
							
	
							
							
				<div class="flexbox-container colShift">

				  <div class="main" style="width: 100%">
					  
	
		<style>
			
			
			.formFname {
				
				position: relative;
				left: 330px;
                top: -10px;
				width:40%;
				height:30px;
				
			}
			
			
			.formFname2 {
				
				position: relative;
				left: 332px;
                top:40px;
				width:40%;
				height:30px;
				
			}
			
			.formFname3 {
				
				position: relative;
				left: 312px;
                top:90px;
				width:40%;
				height:30px;
				
			}			
			
			.formFname4 {
				
				position: relative;
				left: 318px;
                top:140px;
				width:40%;
				height:30px;
				
			}			
			
			
			@media screen and (max-width: 1100px) {
				.formFname {

					position: relative;
					left: -100px;
					width:80%;
					height:30px;
				}
				
				.formFname2 {

					position: relative;
					left: 0px;
					width:80%;
					height:30px;

				}

				.formFname3 {

					position: relative;
					left: -20px;
					width:80%;
					height:30px;

				}			

				.formFname4 {

					position: relative;
					left: -12px;
					width:80%;
					height:30px;

				}							
				
			}			
			
			
			
		</style>
						  
						  
					  
					  
					  
					  
					  
					<!-- Lost Password Start -->
					  
					  		<section>
								
			<div style="font-size:16px">
					<center><em>Please fill out the infomation below. <? echo $result; ?><br>
							Your password will be email to you upon submission.</em><br><br>
				</div>

			<form action="update-nsub.php?ad=33&catMain=Park%20and%20Recreation" method="POST">
				
				<input type="hidden" value="<? echo $passwordus; ?>" name="pass" />
				<input type="hidden" value="lad" name="brand" />

	
			<div align="left" class="formFname">
					<center><label for="email"><font size="3">First Name:</font></label>
						<input type="text" id="email" name="fname" size="35"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Enter First Name" required /></center>
			</div>
				
			<div align="left" class="formFname2">
					<center><label for="email"><font size="3">Last Name:</font></label>
						<input type="text" id="email" name="lname" size="35"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Enter Last Name" required /></center>
			</div>
				
			<div align="left" class="formFname3">
					<center><label for="email"><font size="3">Company Name:</font></label>
						<input type="text" id="email" name="conam" size="35"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Enter Company Name" required /></center>
			</div>				
				
				
				
			<div align="left" class="formFname4">
					<center><label for="email"><font size="3">Email Address:</font></label>
						<input type="text" id="email" name="email" size="35"  style="height:20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#000; background-color:#CCC; padding-left:10px; box-shadow: 5px 5px 5px #888888" placeholder="Enter Email Address" required /></center>
			</div>	
				
		<style>
			
			
			.formCframe {
				
				position: relative;
				left: 285px;
				top: 180px;
				width:70%;
				height:30px;
				
			}
			
			.formCframe2 {
				
				position: relative;
				left: 235px;
				top: 275px;
				width:85%;
				height:30px;
				
			}			
			
			
			@media screen and (max-width: 1100px) {
				
				.formCframe {

					position: relative;
					left: 0px;
					top: 0px;
					width:100%;
					height:30px;

				}

				.formCframe2 {

					position: relative;
					left: 0px;
					top: 100px;
					width:115%;
					height:30px;

				}			


				
			}			
			
			
			
		</style>				
				
				
				
				
				
				
			<div align="left" class="formCframe">
				<h3>Title</h3>
				
				<?
				
								

								$sql = "SELECT * FROM type_title ORDER by sub_number ASC";
								$result = $conn->query($sql);									
				
				
								$row = 0;
								$column = 0;
								echo "<table width='100%'>";
								while($row = mysqli_fetch_assoc($result)) {
									if ($column == 0) {echo "<tr>";}
									if (($column == 2) && ($row == 0)){echo "<td>content</td></tr><tr>";}
								  echo "<td><input type='radio' name='title' value='".$row['name']."'>  ".$row['name']."</td>";
								  $column++;
								  if ($column >= 3) {
									$row++;
									echo "</tr>";
									$column = 0;
								  }
								}
								echo "</table>";

				
				?>
		
			</div>	
				

						  				
				
				
				
				
				
			<div align="left" class="formCframe2">
				<h3>I Am A:</h3>
				
				<?
				
				

								$sql = "SELECT * FROM type_iam ORDER by idAccount ASC";
								$result = $conn->query($sql);									
				
				
								$row = 0;
								$column = 0;
								echo "<table width='100%'>";
								while($row = mysqli_fetch_assoc($result)) {
									if ($column == 0) {echo "<tr>";}
									if (($column == 2) && ($row == 0)){echo "<td>content</td></tr><tr>";}
									
										if (substr($row['name'], 0, 3) === '---') { 
											
											$str2 = substr($row['name'], 4);
										
								  			echo "<td><strong>".$str2."<strong></td>";
										
										
										} else {
									
									
											echo "<td><input type='checkbox' name='iam[]' value='".$row['name']."'>  ".$row['name']."</td>";
									
										}
									
									
									
								  $column++;
								  if ($column >= 3) {
									$row++;
									echo "</tr>";
									$column = 0;
								  }
								}
								echo "</table>";

				
				
				
				
				
				?>
		
			</div>		
				
		<style>
			
			
			.formBframe {
				
				position: relative;
				left: 300px;
				top: 2100px;
				width:70%;
				height:30px;
				
			}
			

			@media screen and (max-width: 1100px) {
				
				.formBframe {

					position: relative;
					left: 0px;
					top: 0px;
					width:100%;
					height:30px;

				}

				
			}	
			
		</style>				
				
				
							<div class="g-recaptcha" data-sitekey="6LfbIFoUAAAAAFxVEEkqOVzAJvDpfaag82j8NNuy"  style="position: relative; left: 318px; top: 600px"></div>
				
				
				
				
				
				
				
				
				<div align="left" style="width:500px; height:30px; position: relative; left: 115px; top: 635px">
					<center><input type="submit" value="Submit" name="submit" name="submit" style="height:30px; width:100px; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; color:#FFFFFF; background-color:#000000; padding-left:10px; box-shadow: 5px 5px 5px #888888" /></center>
				</div>
				
				
				
				<div align="left" style="width:500px; height:30px; position: relative; left: 115px; top: 625px">
					<p>&nbsp;</p>
				</div>				
				
				
				
				
				
				
				
				
			</form>
										
								
								
								

	
					 					  
					  		</section>
	
							<!-- Lost Password End -->
					  

					  

					</div> 
					
					

					
					

				  <div class="sidebar">
					  
		<style>
			
			
				.adShift39 {
					position: relative;
					left: 40px;
					top: -35px;
				}
			
			@media screen and (max-width: 1100px) {
				
				.adShift39 {
					position: relative;
					left: 15px;
					top: -25px;
				}				
				

				
			}			
			
			
			
		</style>
						  					  
					  
					  

					  					  
					  
							<!-- Banners Start -->
					  
					  
							<div class="adShift39">
					  
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
	
	
	
	
			<div class="adShift3" style="position: relative; top: 400px">
	
				<?

				// Top Section - Footer Section
				// include("lad_footer-main.inc");
				include("lo_top-main2-bottom-lad.inc");

				?>	
				
			</div>

<?
include("lo_footer-main2-new.inc");
?>
	
	