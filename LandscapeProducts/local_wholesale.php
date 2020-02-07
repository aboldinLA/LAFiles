<? 
	$pageId = "products";
	include '../modules/configuration.inc';
	include '../modules/db.php';
	include $rootInclude.'la-common-top.php'; 
  	include $rootInclude.'la-common-header.inc'; 
	
	
	
	if(isset($_POST['zipcode'])){
		$zipcode = $_POST['zipcode'];
	}	else if (isset($_GET['zip'])){
		$zipcode = $_GET['zip'];
	} else {
		$zipcode = 0;
	}
	
	//xlist category
	if(isset($_POST['ad'])){
		$cat = $_POST['ad'];
	}	else if (isset($_GET['ad'])){
		$cat = $_GET['ad'];
	} else {
		$cat = 0;
	}
	
	//distance
	if(isset($_POST['distance'])){
		$distance = $_POST['distance'];
	}	else if (isset($_GET['d'])){
		$distance = $_GET['d'];
	} else {
		$distance = '100';
	}
	

	
?>


            
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
			
					<form action="<?php echo htmlentities($_SERVER['PHP_SELF']) . '?zip=' . $zipcode ?>" method="post" name="zipformHeader">
	
						<input type="text" name="zipcode" size="6" maxlength="5" value="<?php echo $zipcode ?>" />
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
    	<div class="white_side full_width min-h-0 localWholesaleMenu">
        <a href="<?php echo BASE_URL; ?>LandscapeProducts/local_wholesale.php?zip=<? echo $zipcode ?>&d=<? echo $distance ?>">
					<img src="<?php echo BASE_URL; ?>lol-logos/sidebar-search-engine/lopse-sidebar-logo.jpg" width="100%" alt="Local Wholesale and Plant Material Search Engine" id="sidebarLogo">
				</a>
        <div class="full_width" id="mobile_slide">
						<h2 class="sideMenuSubHead">Plant Materials</h2>
            <a href="<?php echo BASE_URL; ?>LandscapeProducts/local_wholesale.php?ad=1027&zip=<? echo $zipcode ?>&d=<? echo $distance ?>"><h4 class="panel-title">Ground Cover</h4></a>
            <a href="<?php echo BASE_URL; ?>LandscapeProducts/local_wholesale.php?ad=279&zip=<? echo $zipcode ?>&d=<? echo $distance ?>"><h4 class="panel-title">Tree Relocation Services</h4></a>
            <a href="<?php echo BASE_URL; ?>LandscapeProducts/local_wholesale.php?ad=271&zip=<? echo $zipcode ?>&d=<? echo $distance ?>"><h4 class="panel-title">Trees - Palms</h4></a>
            <a href="<?php echo BASE_URL; ?>LandscapeProducts/local_wholesale.php?ad=998&zip=<? echo $zipcode ?>&d=<? echo $distance ?>"><h4 class="panel-title">Trees - Wholesale</h4></a>
            <a href="<?php echo BASE_URL; ?>LandscapeProducts/local_wholesale.php?ad=1143&zip=<? echo $zipcode ?>&d=<? echo $distance ?>"><h4 class="panel-title">Turf Grass / Sod / Seed</h4></a>
						
						<h2 class="sideMenuSubHead" style="margin-top: 20px;">Local Wholesale</h2>
            <a href="<?php echo BASE_URL; ?>LandscapeProducts/local_wholesale.php?ad=572&zip=<? echo $zipcode ?>&d=<? echo $distance ?>"><h4 class="panel-title">Chemicals, Soil Nutrients &amp; Mulch</h4></a>
            <a href="<?php echo BASE_URL; ?>LandscapeProducts/local_wholesale.php?ad=560&zip=<? echo $zipcode ?>&d=<? echo $distance ?>"><h4 class="panel-title">Landscape / Irrigation Supply</h4></a>
            <a href="<?php echo BASE_URL; ?>LandscapeProducts/local_wholesale.php?ad=1248&zip=<? echo $zipcode ?>&d=<? echo $distance ?>"><h4 class="panel-title">Pavers, Masonry, Blocks &amp; Rocks</h4></a>
            <a href="<?php echo BASE_URL; ?>LandscapeProducts/local_wholesale.php?ad=590&zip=<? echo $zipcode ?>&d=<? echo $distance ?>"><h4 class="panel-title">Power Equipment</h4></a>
            <a href="<?php echo BASE_URL; ?>LandscapeProducts/local_wholesale.php?ad=1365&zip=<? echo $zipcode ?>&d=<? echo $distance ?>"><h4 class="panel-title">Small Engine Repair</h4></a>

       
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
		
		
				<?
					
						if($cat == 1027){
							$catName = 'Ground Cover';
						} else if($cat == 279){
							$catName = 'Tree Relocation Services';
						} else if($cat == 271){
							$catName = 'Trees - Palms';
						} else if($cat == 998){
							$catName = 'Trees - Wholesale';
						} else if($cat == 1143){
							$catName = 'Turf Grass / Sod / Seed';
						} else if($cat == 572){
							$catName = 'Chemicals, Soil Nutrients &amp; Mulch';
						} else if($cat == 560){
							$catName = 'Landscape / Irrigation Supply';
						} else if($cat == 1248){
							$catName = 'Pavers, Masonry, Blocks &amp; Rocks';
						} else if($cat == 590){
							$catName = 'Power Equipment';
						} else if($cat == 1365){
							$catName = 'Small Engine Repair';
						}

				?>
		
    
    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
			<div class="whiteback-rounded">
    	<div class="full_width headtext">
					
					<?
						
						if($cat == 0){
							echo "<h6>Local Wholesale &amp; Plant Materials</h6>";
						} else {
							echo "<h6 class='smallHeadtext'>Local Wholesale &amp; Plant Materials:</h6>
										<h6 class='largeHeadtext'>" . $catName . "</h6>";
						}
					
					?>
			
        </div><!-- /.headtext -->

<!-- Zip Code Find Start -->
		
				<form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="post" name="zipform" id="zipForm">
					<label>Showing Vendors for: <input type="text" name="zipcode" size="6" maxlength="5" value="<?php echo $zipcode ?>" id="zipcode" /></label>
					<br />
					<select name="distance" id="zipformSelect">
						<option<?php if($distance == "5") { echo " selected=\"selected\""; } ?> value="5">Within 5 Miles</option>
						<option<?php if($distance == "10") { echo " selected=\"selected\""; } ?> value="10">Within 10 Miles</option>
						<option<?php if($distance == "25") { echo " selected=\"selected\""; } ?> value="25">Within 25 Miles</option>
						<option<?php if($distance == "50") { echo " selected=\"selected\""; } ?> value="50">Within 50 Miles</option>
						<option<?php if($distance == "100") { echo " selected=\"selected\""; } ?> value="100">Within 100 Miles</option>
						<option<?php if($distance == "200") { echo " selected=\"selected\""; } ?> value="200">Within 200 Miles</option>
					</select>
					<input type="hidden" name="ad" value="<? echo $cat ?>" id="zipcode" />
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
			if($zipcode != 0) {
				if(!preg_match('/^[0-9]{5}$/', $zipcode)) {
					echo "<p class='errorText'><strong>You did not enter a properly formatted ZIP Code.</strong> Please try again.</p>\n";
				}
				elseif(!preg_match('/^[0-9]{1,3}$/', $distance)) {
					echo "<p class='errorText'><strong>You did not enter a properly formatted distance.</strong> Please try again.</p>\n";
				}
				else {
				

						//query for coordinates of provided ZIP Code
				
					
						//if found, set variables
						$row = mysqli_fetch_array($rs);
					
					
						$sql1 = "SELECT * FROM `us_zips` WHERE zip = '" . $zipcode . "'";
						$result1 = $conn->query($sql1);  

						while($row = mysqli_fetch_array($result1)) {
							
							$enterLong = $row['lng'];
							$enterLat = $row['lat'];

						}

						if(mysqli_num_rows($result1) == 0){
							echo "<p class='errorText'><strong>You did not enter a zip code in our database or there was an error.</strong> Please try again.</p>\n";
						}
					
					
						$lat1 = $enterLat;
						$lon1 = $enterLong;
					
										
					
						$d = $distance;
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
						
              

                $sql1 = "SELECT *  FROM `us_zips` WHERE (`lat` < '" . $latN . "' AND `lat` > '" . $latS . "')";
                $result1 = $conn->query($sql1);  
								$rowcount1=mysqli_num_rows($result1);
					
                while($row = mysqli_fetch_array($result1)) {
					
									if (($row['lng'] < $lonE) && ($row['lng'] > $lonW) && ($row['zip'] != $zipcode)) {

										$zCodes[] = "OR zip = '" . $row['zip'] . "'";

									}


								}
					
							$zCodesA = implode(" ",$zCodes);
					
							$zCodesB = substr($zCodesA, 3);
							
									
									$xlist = ($cat > 0) 
										? "xlist LIKE '%" . $cat . "%'"
										: "xlist LIKE '%271%' OR xlist LIKE '%279%' OR xlist LIKE '%998%' OR xlist LIKE '%1027%' OR xlist LIKE '%1143%' OR xlist LIKE '%560%' OR xlist LIKE '%572%' OR xlist LIKE '%590%' OR xlist LIKE '%1248%' OR xlist LIKE '%1365%'";
										
					
									$sql2 = "SELECT * FROM `new_vendor` WHERE (" . $zCodesB . ") AND (" . $xlist . ") AND status > '2' ORDER BY company_name ASC";
									$result2 = $conn->query($sql2);  

									while($row = mysqli_fetch_array($result2)) {
										
																$string =  $row['company_name']; // Trim String

																$string = strtolower($string); //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )

																$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);  //Strip any unwanted characters

																$string = preg_replace("/[\s-]+/", " ", $string); // Clean multiple dashes or whitespaces

																$string = preg_replace("/[\s_]/", "-", $string); //Convert whitespaces and underscore to dash										
										

										echo '<div class="row align-items-center" style="margin-bottom: 10px;">
											<div class="col-3">
												<a href="'.BASE_URL.'landscape-design-products/' . $string . '/'. $row['id'] . '" class="img_fit localWholesaleVendor">
													<img src="'.BASE_URL.'products/images/' . $row['logo'] . '" alt="img" />
												</a>
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
												<a href="'.BASE_URL.'landscape-design-products/' . $string . '/'. $row['id'] . '" class="grenAnch">Company Info</a>
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
			if($zipcode != 0) {
				if(!preg_match('/^[0-9]{5}$/', $zipcode)) {
					echo "<p style='margin-bottom: 50px;'><strong>You did not enter a properly formatted ZIP Code.</strong> Please try again.</p>\n";
				}
				elseif(!preg_match('/^[0-9]{1,3}$/', $distance)) {
					echo "<p style='margin-bottom: 50px;'><strong>You did not enter a properly formatted distance.</strong> Please try again.</p>\n";
				}
				else {


						//query for coordinates of provided ZIP Code				
					
						//if found, set variables
						$row = mysqli_fetch_array($rs);
					
					
						$sql1 = "SELECT *  FROM `us_zips` WHERE zip = '" . $zipcode . "'";
						$result1 = $conn->query($sql1);  

						while($row = mysqli_fetch_array($result1)) {
							
							$enterLong = $row['lng'];
							$enterLat = $row['lat'];

						}
						
						if(mysqli_num_rows($result2) == 0){
							echo "<p style='margin-bottom: 50px;'><strong>You did not enter a zip code in our database or there was an error.</strong> Please try again.</p>\n";
						}

					
					
						$lat1 = $enterLat;
						$lon1 = $enterLong;
					
										
					
						$d = $distance;
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
						
              
                $sql1 = "SELECT *  FROM `us_zips` WHERE (`lat` < '" . $latN . "' AND `lat` > '" . $latS . "')";
                $result1 = $conn->query($sql1);  
								$rowcount1=mysqli_num_rows($result1);
					
                while($row = mysqli_fetch_array($result1)) {
					
							if (($row['lng'] < $lonE) && ($row['lng'] > $lonW) && ($row['zip'] != $zipcode)) {
					
							$zCodes[] = "OR zip = '" . $row['zip'] . "'";
								
							}
								

							}
					
							$zCodesA = implode(" ",$zCodes);
					
							$zCodesB = substr($zCodesA, 3);
							
								
									$xlist = ($cat > 0) 
										? "xlist LIKE '%" . $cat . "%'"
										: "xlist LIKE '%271%' OR xlist LIKE '%279%' OR xlist LIKE '%998%' OR xlist LIKE '%1027%' OR xlist LIKE '%1143%' OR xlist LIKE '%560%' OR xlist LIKE '%572%' OR xlist LIKE '%590%' OR xlist LIKE '%1248%' OR xlist LIKE '%1365%'";
					
					
									$sql2 = "SELECT *  FROM `new_vendor` WHERE (" . $zCodesB . ") AND (" . $xlist . ") AND status = '2' ORDER BY company_name ASC";
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
        
        
<!--
    		<div class="pagination_strip cstmar full_width">
            	<a href="#" class="prev">Prev</a>
                <a href="#" class="disable">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#" class="nxt active">Next</a>
            </div>
-->
			</div><!-- ./white-background -->
    </div><!-- ./col-lg-9 -->
</div><!-- /.row -->
</div><!-- /.contianer -->
</section><!-- /.tool_page -->


            
<section class="green_newsletter full_width">
<div class="container">
<form id="news_letter_form">
	<h3>Sign up for  <img src="/lol-logos/Landscape-Architect-Weekly-WHITE.png" style="width: 100%; max-width: 190px; margin-left: 10px; padding: 15px 10px 10px;"></h3>
    <div class="coverinput">
    <input type="text" name="email_address" placeholder="Enter your email address" />
    <button type="submit">Sign up</button>
    </div><!-- /.coverinput -->
</form>    
</div><!-- /.contianer -->
</section><!-- /.green_newsletter -->



	
<? include $rootInclude.'la-common-footer-inner.inc'; ?>

				<!-- added from local-wholesale page start -->
				 <script src="js/jquery.validate.min.js"></script>
        <script>
        	$(function(){
				var $width = $(window).width();
				if($width < 992){
					$('.mobtoggle').text('');
					$('.mobtoggle').append('<div class="dip"><i class="fa fa-filter"></i></div><div class="dip">CATEGORIES</div></span>');
										
				$('.mobtoggle').on('click', function(e){
					$('#mobile_slide').slideToggle(300);
				});
				}
				
				
			});
        </script>
        <script>
		  $(document).ready(function() {
			$("#news_letter_form").validate({
			  rules: {
				email_address: {
				  required: true,
				  email: true
				}
			  },
			  messages: {
				email_address: "Please enter a valid email address"
			  }
			});
		  });
		</script>
		<!-- added from local-wholesale page end -->
		
    </body>
</html>