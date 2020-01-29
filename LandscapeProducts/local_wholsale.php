

<? include '../../includes/la-common-top-inner.php'; ?>

<? include '../../includes/la-common-header-inner.inc'; ?>

            
<!--
<section class="gray_shade_anchor full_width">
<div class="container">
	<div class="full_width overflow_">
	<! --<a href="#">LA DETAILS</a> -- >
    <a href="#">TOOLS &amp; EQUIPMENT</a>
    <a href="#" class="active">LOCAL WHOLESALE &amp; PLANT MATERIALS</a>
    </div><! -- /.overflow_-- >
</div><! -- /.container -- >
</section><! -- /.gray_shade_anchor - ->
-->

<section class="search_section_ban full_width">
<div class="container">
<div class="row">
	<div class="col-lg-9 col-lg-offset-3 col-md-8 col-md-offset-4 col-sm-12 col-xs-12">
    	<div class="full_width relative">
			
					<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="zipformHeader">
	
						<input type="text" name="zipcode" size="6" maxlength="5" value="<?php echo $_POST['zipcode']; ?>" />
						<input type="hidden" name="distance" value="100" />
            <button type="submit" name="submit" value="Submit"></button>
					</form>	
        </div><!-- /.relative -->
    </div><!-- /.col-lg-9 -->
</div><!-- /.row -->
</div><!-- /.container -->
</section><!-- /.search_section_ban -->




<section class="tool_page full_width">
<div class="container">
<div class="row">
	<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
    	<div class="white_side full_width min-h-0">
        <h2 class="mobtoggle">ALL CATEGORIES</h2>
        <div class="full_width" id="mobile_slide">
            <a href="#"><h3>Ground Cover</h3></a>
            <a href="#"><h3>Tree Relocation Services</h3></a>
            <a href="#"><h3>Trees - Palms</h3></a>
            <a href="#"><h3>Trees - Wholesale</h3></a>
            <a href="#"><h3>Turf Grass / Sod / Seed</h3></a>
            <a href="#"><h3>Chemicals, Soil Nutrients &amp; <br> Mulch</h3></a>
            <a href="#"><h3>Landscape / Irrigation Supply</h3></a>
            <a href="#"><h3>Pavers, Masonry, Blocks &amp; Rocks</h3></a>
            <a href="#"><h3>Power Equipment</h3></a>
            <a href="#"><h3>Small Engine Repair</h3></a>

            
           <!-- <h4>Brand</h4>
            
            <ul>
            	<li>
                	<div class="check_box__ pull-left">
                        <input type="checkbox" class="form-check-input" id="chkk" checked>
                        <label for="chkk"></label>
                        <label class="form-check-label" for="chkk">Brand Name</label>
                    </div>
                </li>
                <li>
                	<div class="check_box__ pull-left">
                        <input type="checkbox" class="form-check-input" id="chkk1">
                        <label for="chkk1"></label>
                        <label class="form-check-label" for="chkk1">Brand Name</label>
                    </div>
                </li>
                <li>
                	<div class="check_box__ pull-left">
                        <input type="checkbox" class="form-check-input" id="chkk2">
                        <label for="chkk2"></label>
                        <label class="form-check-label" for="chkk2">Brand Name</label>
                    </div>
                </li>
                <li>
                	<div class="check_box__ pull-left">
                        <input type="checkbox" class="form-check-input" id="chkk3">
                        <label for="chkk3"></label>
                        <label class="form-check-label" for="chkk3">Brand Name</label>
                    </div>
                </li>
                <li>
                	<div class="check_box__ pull-left">
                        <input type="checkbox" class="form-check-input" id="chkk4">
                        <label for="chkk4"></label>
                        <label class="form-check-label" for="chkk4">Brand Name</label>
                    </div>
                </li>
                <li>
                	<div class="check_box__ pull-left">
                        <input type="checkbox" class="form-check-input" id="chkk5">
                        <label for="chkk5"></label>
                        <label class="form-check-label" for="chkk5">Brand Name</label>
                    </div>
                </li>
                <li>
                	<div class="check_box__ pull-left">
                        <input type="checkbox" class="form-check-input" id="chkk6">
                        <label for="chkk6"></label>
                        <label class="form-check-label" for="chkk6">Brand Name</label>
                    </div>
                </li>
                <li>
                	<div class="check_box__ pull-left">
                        <input type="checkbox" class="form-check-input" id="chkk7">
                        <label for="chkk7"></label>
                        <label class="form-check-label" for="chkk7">Brand Name</label>
                    </div>
                </li>
            </ul>-->
           </div><!-- #mobslide --> 
        </div><!-- /.white_side -->
        
				
				
				
				<!-- ROS banner ad sidebar start -->
				<?
					 include '../../includes/connect4.inc';                               

                
				$sql = "SELECT * FROM banner_ups WHERE ROS='yes' AND id != '$adNum' ORDER BY RAND() LIMIT 4";
				$result = $conn->query($sql);									

			// banner rotating section


				while($row = mysqli_fetch_array($result)) {

						 echo '<div class="add__ full_width"><a href="' . $row['web'] . '"><img src="/banner/'  . $row['picture'] . '" class=" hidden-xs hidden-sm" style="width:100%;" /></a></div>';

						}
				?>
				<!-- ROS banner ad sidebar end -->
        
    </div><!-- /.col-lg-3 -->
    
    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
			<div class="whiteback-rounded">
    	<div class="full_width headtext">
        	<h6>Local Wholesale &amp; Plant Materials</h6>

        </div><!-- /.headtext -->
        <!-- <div class="showing_vendors full_width">
        	<p class="sort_area_withinMiles">Showing Vendors for: <span>92692</span></p>
            <select>
            	<option>Within 5 Miles</option>
							<option>Within 10 Miles</option>
							<option>Within 15 Miles</option>
							<option selected>Within 25 Miles</option>
							<option>Within 50 Miles</option>
							<option>Within 100 Miles</option>
							<option>Within 200 Miles</option>
            </select>
        </div><! -- /.showing_vendors -- > -->
		
		

<!-- Zip Code Find Start -->
		
				<form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="post" name="zipform" id="zipForm">
					<label>Showing Vendors for: <input type="text" name="zipcode" size="6" maxlength="5" value="<?php echo $_POST['zipcode']; ?>" id="zipcode" /></label>
					<br />
					<select name="distance" id="zipformSelect">
						<option<?php if($_POST['distance'] == "5") { echo " selected=\"selected\""; } ?> value="5">Within 5 Miles</option>
						<option<?php if($_POST['distance'] == "10") { echo " selected=\"selected\""; } ?> value="10">Within 10 Miles</option>
						<option<?php if($_POST['distance'] == "25") { echo " selected=\"selected\""; } ?> value="25">Within 25 Miles</option>
						<option<?php if($_POST['distance'] == "50") { echo " selected=\"selected\""; } ?> value="50">Within 50 Miles</option>
						<option<?php if($_POST['distance'] == "100") { echo " selected=\"selected\""; } ?> value="100">Within 100 Miles</option>
						<option<?php if($_POST['distance'] == "200") { echo " selected=\"selected\""; } ?> value="200">Within 200 Miles</option>
					</select>
					<br />
					<input type="submit" name="submit" value="Submit" id="zipFormSubmit" />
				</form>		
				
<!--
				<script>
					document.getElementById('zipformSelect').addEventListener("change", function(){
					alert("hell0");
						document.getElementById("zipForm").submit();
					});
					
				</script>
-->
				

        
        <div class="valign_items full_width">
			

        <?php 
			if(isset($_POST['submit'])) {
				if(!preg_match('/^[0-9]{5}$/', $_POST['zipcode'])) {
					echo "<p><strong>You did not enter a properly formatted ZIP Code.</strong> Please try again.</p>\n";
				}
				elseif(!preg_match('/^[0-9]{1,3}$/', $_POST['distance'])) {
					echo "<p><strong>You did not enter a properly formatted distance.</strong> Please try again.</p>\n";
				}
				else {
					//connect to db server; select database
					$servername = "localhost"; 
					$username = "land_patchew";
					$password = "59q2GB6k$3";
					$dbname = "land_landscap_lollive";

                // Create connection
                    $link = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                    if ($link->connect_error) {
                            die("Connection failed: " . $link->connect_error);
                    }       
					
					
					

				//query for coordinates of provided ZIP Code
				
					
						//if found, set variables
						$row = mysqli_fetch_array($rs);
					
					
						$sql1 = "SELECT *  FROM `us_zips` WHERE zip = '" . $_POST['zipcode'] . "'";
						$result1 = $conn->query($sql1);  

						while($row = mysqli_fetch_array($result1)) {
							
							$enterLong = $row['lng'];
							$enterLat = $row['lat'];

						}

					
					
						$lat1 = $enterLat;
						$lon1 = $enterLong;
					
										
					
						$d = $_POST['distance'];
						$r = 3959;
						

						//compute max and min latitudes / longitudes for search square
						$latN = rad2deg(asin(sin(deg2rad($lat1)) * cos($d / $r) + cos(deg2rad($lat1)) * sin($d / $r) * cos(deg2rad(0))));
						$latS = rad2deg(asin(sin(deg2rad($lat1)) * cos($d / $r) + cos(deg2rad($lat1)) * sin($d / $r) * cos(deg2rad(180))));
						$lonE = rad2deg(deg2rad($lon1) + atan2(sin(deg2rad(90)) * sin($d / $r) * cos(deg2rad($lat1)), cos($d / $r) - sin(deg2rad($lat1)) * sin(deg2rad($latN))));
						$lonW = rad2deg(deg2rad($lon1) + atan2(sin(deg2rad(270)) * sin($d / $r) * cos(deg2rad($lat1)), cos($d / $r) - sin(deg2rad($lat1)) * sin(deg2rad($latN))));
					
						

						//display information about starting point
						//provide max and min latitudes / longitudes
						
						//find all coordinates within the search square's area
						//exclude the starting point and any empty city values
						
              

                $cat1 = $_GET['ad'];

                $sql1 = "SELECT *  FROM `us_zips` WHERE (`lat` < '" . $latN . "' AND `lat` > '" . $latS . "')";
                $result1 = $conn->query($sql1);  
								$rowcount1=mysqli_num_rows($result1);
					
                while($row = mysqli_fetch_array($result1)) {
					
							if (($row['lng'] < $lonE) && ($row['lng'] > $lonW) && ($row['zip'] != $_POST['zipcode'])) {
					
							$zCodes[] = "OR zip = '" . $row['zip'] . "'";
								
							}
								

							}
					
							$zCodesA = implode(" ",$zCodes);
					
							$zCodesB = substr($zCodesA, 3);
					
					
									$sql2 = "SELECT *  FROM `new_vendor` WHERE (" . $zCodesB . ") AND (xlist LIKE '%271%' OR xlist LIKE '%279%' OR xlist LIKE '%998%' OR xlist LIKE '%1027%' OR xlist LIKE '%1143%' OR xlist LIKE '%560%' OR xlist LIKE '%572%' OR xlist LIKE '%590%' OR xlist LIKE '%1248%' OR xlist LIKE '%1365%') AND status > '2' ORDER BY company_name ASC";
									$result2 = $conn->query($sql2);  

									while($row = mysqli_fetch_array($result2)) {

										echo '<div class="row align-items-center" style="margin-bottom: 10px;">
											<div class="col-3">
												<a href="#" class="img_fit localWholesaleVendor"><img src="https://landscapearchitect.com/products/images/' . $row['logo'] . '" alt="img" /></a>
											</div><!-- .col-3 -->
											<div class="col-4">
												<h4>' . $row['company_name'] . '</h4>
												<p>' . $row['address'] . '<br>
											  ' . $row['city'] . ',&nbsp;' . $row['state'] . '&nbsp;' . $row['zip'] .'</p>
											</div><!-- .col-4 -->
											<div class="col-2">
												<a href="tel:+' . $row['phone'] . '"><span class="number__">' . $row['phone'] . '</span></a>
											</div><!-- .col-4 -->
											<div class="col-5">
												<a href="#" class="grenAnch">Get Directions</a>
												<a href="https://landscapearchitect.com/LandscapeProducts/vendor-details.php?number=' . $row['id'] . '" class="grenAnch">Company Info</a>
											</div><!-- .col-4 -->
										</div><!-- /.row -->	';

									}					
					
						
			}
		} 
	?>				
			
<!-- Zip Code Find Start -->
			
        
            
        
        </div><!-- /.valign_items -->
        
        <div class="more_vendors full_width">
        	<h3>More Vendors</h3>
        </div><!-- /.more_vendors -->
        
        <div class="vendors_white full_width">
        <div class="row">
			
      <?php 
			if(isset($_POST['submit'])) {
				if(!preg_match('/^[0-9]{5}$/', $_POST['zipcode'])) {
					echo "<p><strong>You did not enter a properly formatted ZIP Code.</strong> Please try again.</p>\n";
				}
				elseif(!preg_match('/^[0-9]{1,3}$/', $_POST['distance'])) {
					echo "<p><strong>You did not enter a properly formatted distance.</strong> Please try again.</p>\n";
				}
				else {
					//connect to db server; select database
					$servername = "localhost"; 
					$username = "land_patchew";
					$password = "59q2GB6k$3";
					$dbname = "land_landscap_lollive";

                // Create connection
                    $link = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                    if ($link->connect_error) {
                            die("Connection failed: " . $link->connect_error);
                    }       
					
					
					

				//query for coordinates of provided ZIP Code
				
					
						//if found, set variables
						$row = mysqli_fetch_array($rs);
					
					
						$sql1 = "SELECT *  FROM `us_zips` WHERE zip = '" . $_POST['zipcode'] . "'";
						$result1 = $conn->query($sql1);  

						while($row = mysqli_fetch_array($result1)) {
							
							$enterLong = $row['lng'];
							$enterLat = $row['lat'];

						}

					
					
						$lat1 = $enterLat;
						$lon1 = $enterLong;
					
										
					
						$d = $_POST['distance'];
						$r = 3959;
						

						//compute max and min latitudes / longitudes for search square
						$latN = rad2deg(asin(sin(deg2rad($lat1)) * cos($d / $r) + cos(deg2rad($lat1)) * sin($d / $r) * cos(deg2rad(0))));
						$latS = rad2deg(asin(sin(deg2rad($lat1)) * cos($d / $r) + cos(deg2rad($lat1)) * sin($d / $r) * cos(deg2rad(180))));
						$lonE = rad2deg(deg2rad($lon1) + atan2(sin(deg2rad(90)) * sin($d / $r) * cos(deg2rad($lat1)), cos($d / $r) - sin(deg2rad($lat1)) * sin(deg2rad($latN))));
						$lonW = rad2deg(deg2rad($lon1) + atan2(sin(deg2rad(270)) * sin($d / $r) * cos(deg2rad($lat1)), cos($d / $r) - sin(deg2rad($lat1)) * sin(deg2rad($latN))));
					
						

						//display information about starting point
						//provide max and min latitudes / longitudes
						
						//find all coordinates within the search square's area
						//exclude the starting point and any empty city values
						
              

                $cat1 = $_GET['ad'];

                $sql1 = "SELECT *  FROM `us_zips` WHERE (`lat` < '" . $latN . "' AND `lat` > '" . $latS . "')";
                $result1 = $conn->query($sql1);  
								$rowcount1=mysqli_num_rows($result1);
					
                while($row = mysqli_fetch_array($result1)) {
					
							if (($row['lng'] < $lonE) && ($row['lng'] > $lonW) && ($row['zip'] != $_POST['zipcode'])) {
					
							$zCodes[] = "OR zip = '" . $row['zip'] . "'";
								
							}
								

							}
					
							$zCodesA = implode(" ",$zCodes);
					
							$zCodesB = substr($zCodesA, 3);
					
					
									$sql2 = "SELECT *  FROM `new_vendor` WHERE (" . $zCodesB . ") AND (xlist LIKE '%271%' OR xlist LIKE '%279%' OR xlist LIKE '%998%' OR xlist LIKE '%1027%' OR xlist LIKE '%1143%' OR xlist LIKE '%560%' OR xlist LIKE '%572%' OR xlist LIKE '%590%' OR xlist LIKE '%1248%' OR xlist LIKE '%1365%') AND status = '2' ORDER BY company_name ASC";
									$result2 = $conn->query($sql2);  

									while($row = mysqli_fetch_array($result2)) {
										
										$coName = substr($row['company_name'], 0, 15);

										echo '<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 for_small">
											<h4>' . $coName . '</h4>
											<span class="under">' . $row['address'] . '</span>
											<span class="under">' . $row['city'] . ',&nbsp;' . $row['state'] . '&nbsp;' . $row['zip'] .'</span>
											<span><a href="tel:+' . $row['phone'] . '">' . $row['phone'] . '</a></span>
										</div><!-- /.col-lg-4 -->';

									}					
					
						
			}
		} 
	?>				
			
<!-- Zip Code Find Start -->
			
			
			
        </div><!-- /.row -->	
        </div><!-- /.vendors_white -->
        
        
    		<div class="pagination_strip cstmar full_width">
            	<a href="#" class="prev">Prev</a>
                <a href="#" class="disable">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#" class="nxt active">Next</a>
            </div>
			</div><!-- ./white-background -->
    </div><!-- ./col-lg-9 -->
</div><!-- /.row -->
</div><!-- /.contianer -->
</section><!-- /.tool_page -->


            
<section class="green_newsletter full_width">
<div class="container">
<form id="news_letter_form">
	<h3>Sign up for LAWeekly newsletter.</h3>
    <div class="coverinput">
    <input type="text" name="email_address" placeholder="Enter your email address" />
    <button type="submit">Sign up</button>
    </div><!-- /.coverinput -->
</form>    
</div><!-- /.contianer -->
</section><!-- /.green_newsletter -->



	
<? include '../../includes/la-common-footer-inner.inc'; ?>