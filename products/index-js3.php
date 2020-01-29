<?

// Top Section - HTML
include("lo_top-main-2.inc");

?>
	
	
<?

// Top Section - Nav Section
include("lo_header-main-new.inc");

	$banName = $_GET['ad'];

	if ($banName == 28) {
		
		$picBan = "Fencing1.jpg";
		$picBan2 = "Fencing2.jpg";
		$picBan3 = "Fencing3.jpg";
		
	} elseif ($banName == 30) {
		
		$picBan = "Lighting1.jpg";
		$picBan2 = "Lighting2.jpg";
		$picBan3 = "Lighting3.jpg";
		
	} elseif ($banName == 1212) {
		
		$picBan = "Outdoor1.jpg";
		$picBan2 = "Outdoor2.jpg";
		$picBan3 = "Outdoor1.jpg";
		
	} elseif ($banName == 1213) {
		
		$picBan = "PMBR1.jpg";
		$picBan2 = "PMBR2.jpg";
		$picBan3 = "PMBR1.jpg";
		
	} elseif ($banName == 1002) {
		
		$picBan = "SiteAmenities1.jpg";
		$picBan2 = "SiteAmenities1.jpg";
		$picBan3 = "SiteAmenities1.jpg";
		
	} 




?>

	
	
  <div style="padding-left: 0px">
	  
	  
	  <!-- Slider Start -->
	  

 <div class="container" id="myCarousel">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden-xs">
        <div id="carousel-299058" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#carousel-299058" data-slide-to="0" class="active"> </li>
            <li data-target="#carousel-299058" data-slide-to="1" class=""> </li>
            <li data-target="#carousel-299058" data-slide-to="2" class=""> </li>
          </ol>
          <div class="carousel-inner">
            <div class="item"> <img class="img-responsive" src="https://landscapearchitect.com/products/images/banners/<? echo $picBan3; ?>" alt="thumb">
              <div class="carousel-caption">&nbsp;</div>
            </div>
            <div class="item active"> <img class="img-responsive" src="https://landscapearchitect.com/products/images/banners/<? echo $picBan; ?>" alt="thumb">
              <div class="carousel-caption">&nbsp;</div>
            </div>
            <div class="item"> <img class="img-responsive" src="https://landscapearchitect.com/products/images/banners/<? echo $picBan2; ?>" alt="thumb">
              <div class="carousel-caption">&nbsp;</div>
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-299058" data-slide="prev"><span class="icon-prev"></span></a> <a class="right carousel-control" href="#carousel-299058" data-slide="next"><span class="icon-next"></span></a></div>
      </div>
    </div>
  </div>	  
	  
	  
	  
	<!-- Slider End -->  
	  
	  
	  
	  
	  
	  
   
		<div style="position: relative; left: 45px; top: 25px">  
	  		<img width="30%" style="margin: 10px" src="https://landscapearchitect.com/lol-logos/LO-Header-170105.jpg">
	  	</div>
	  
	  
		<div style="position: relative; left: 550px; top: -60px">
			<span style="font-size: 32px; font-weight: bold"><? echo $_GET['catMain'] ?></span>
	  	</div>
	  
	  <div style="position: relative; left: 1350px; top: -85px">
	  <span style="font-size: 18px; font-weight: bold">
		<select onchange="if (this.value) window.location.href=this.value">
			<option value="">Choose Search Option</option>
			
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
			
											$cat1 = $_GET['ad'];
											$cat2 = $_GET['number'];
											$cat3 = $_GET['catMain'];
	  
			
			

												$sql1 = "SELECT * FROM xlist WHERE idParent = '" . $cat1 ."' AND name NOT LIKE '%*%' ORDER BY name ASC";
											$result1 = $conn->query($sql1);									
									
										// category section
			
											echo '<option value="https://landscapearchitect.com/LADetails/index-js3.php?ad='. $cat1 . '">Top Level</option>';
												
											while($row = mysqli_fetch_array($result1)) {
												
												
												$sql33 = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE vendor_product.xlist='". $row['id'] ."' AND (new_vendor.status='10' OR new_vendor.status='12' OR new_vendor.status='14' OR new_vendor.status='16' OR new_vendor.status='18')";
												$result33 = $conn->query($sql33);
												
												$rowcount33=mysqli_num_rows($result33);
												
													if ($rowcount33 != 0){
														echo '<option value="https://landscapearchitect.com/LADetails/index-sub-js4.php?ad='. $cat1 . '&number='. $row['id'] . '&catName='. $row['name'] . '&catMain='. $cat3 . '"><span style="font-family: Helvetica, Arial; font-size: 14px">'. $row['name'] . ' ('. $rowcount33 . ')</span></a></option>';
													}
												
											}
									?>		  								
			
		
		  
		  
		  </select>
		  
	  </span>
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
		}
					
		.colShift2 {
			position: absolute;
			left: -200px;
		}	
					
		.colSize {
			position: absolute;
			left: 450px;
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
			
			
			  	</style>	  
	  
	  
	  
	  
	  <table>
		  <tr>
			  <td valign="top">
  
					<table class="colShift">
							
									<?
									
										// 18 Start




										// start for the banner add counting and getting from table

											$key48 = $_GET['ad'];
						
						
											if ($key48  == 28) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='56' OR vendor_product.xlist='59' OR vendor_product.xlist='60' OR vendor_product.xlist='62' OR vendor_product.xlist='63' OR vendor_product.xlist='65' OR vendor_product.xlist='74' OR vendor_product.xlist='75' OR vendor_product.xlist='76' OR vendor_product.xlist='78' OR vendor_product.xlist='126' OR vendor_product.xlist='612' OR vendor_product.xlist='646' OR vendor_product.xlist='876' OR vendor_product.xlist='891' OR vendor_product.xlist='894' OR vendor_product.xlist='896' OR vendor_product.xlist='908' OR vendor_product.xlist='995' OR vendor_product.xlist='1041' OR vendor_product.xlist='1102' OR vendor_product.xlist='1150' OR vendor_product.xlist='1235' OR vendor_product.xlist='1244' OR vendor_product.xlist='1260' OR vendor_product.xlist='1338' OR vendor_product.xlist='1340' OR vendor_product.xlist='1357' OR vendor_product.xlist='1358') AND new_vendor.status='18' ORDER BY vendor_id ASC";
						
											} elseif ($key48  == 30) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='149' OR vendor_product.xlist='152' OR vendor_product.xlist='156' OR vendor_product.xlist='157' OR vendor_product.xlist='158' OR vendor_product.xlist='161' OR vendor_product.xlist='164' OR vendor_product.xlist='165' OR vendor_product.xlist='167' OR vendor_product.xlist='615' OR vendor_product.xlist='616' OR vendor_product.xlist='1087' OR vendor_product.xlist='1160' OR vendor_product.xlist='1164') AND new_vendor.status='18' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1212) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='322' OR vendor_product.xlist='323' OR vendor_product.xlist='324' OR vendor_product.xlist='325' OR vendor_product.xlist='783' OR vendor_product.xlist='916' OR vendor_product.xlist='933' OR vendor_product.xlist='972') AND new_vendor.status='18' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1213) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='175' OR vendor_product.xlist='179' OR vendor_product.xlist='181' OR vendor_product.xlist='189' OR vendor_product.xlist='424' OR vendor_product.xlist='425' OR vendor_product.xlist='435' OR vendor_product.xlist='440' OR vendor_product.xlist='442' OR vendor_product.xlist='443' OR vendor_product.xlist='449' OR vendor_product.xlist='971' OR vendor_product.xlist='978' OR vendor_product.xlist='979' OR vendor_product.xlist='994' OR vendor_product.xlist='1201') AND new_vendor.status='18' ORDER BY vendor_id ASC";												
												
											} elseif ($key48  == 1002) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='288' OR vendor_product.xlist='289' OR vendor_product.xlist='297' OR vendor_product.xlist='300' OR vendor_product.xlist='308' OR vendor_product.xlist='311' OR vendor_product.xlist='312' OR vendor_product.xlist='313' OR vendor_product.xlist='314' OR vendor_product.xlist='317' OR vendor_product.xlist='318' OR vendor_product.xlist='319' OR vendor_product.xlist='420' OR vendor_product.xlist='562' OR vendor_product.xlist='652' OR vendor_product.xlist='661' OR vendor_product.xlist='665' OR vendor_product.xlist='802' OR vendor_product.xlist='805' OR vendor_product.xlist='806' OR vendor_product.xlist='813' OR vendor_product.xlist='852' OR vendor_product.xlist='1015' OR vendor_product.xlist='1029' OR vendor_product.xlist='1171' OR vendor_product.xlist='1229' OR vendor_product.xlist='1308' OR vendor_product.xlist='1348') AND new_vendor.status='18' ORDER BY vendor_id ASC";									
												
											} 
						
						
						
						
											$result = $conn->query($sql);									
									
												// logo section
						
												echo "<tr>";
												
											   $xx = 0;
												$zCount = 0;
												$rowNum = 0;
											   		while($row = mysqli_fetch_assoc($result)) {
												   
														   if ($rowNum != $row['vendor_id']) {

															$venNum[] = $row['vendor_id'] . '<br>';

															   $rowNum = $row['vendor_id'];

														   }
												   
																					
												   
											   		}
						
												$venNums = shuffle($venNum);
						
															   	$xx = 0;
													$index = 1;
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status='18' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);									

																// logo section


																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																   
																   
																if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28)) {
																	
																   echo "<tr><td width='450px'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' target='_blank'><figure><div class='limagelad'><img class='limagelad2' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><br><br><figcaption><span style='font-weight: 200; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical'>" .htmlentities($row['profile']). "</span><br><hr><p class='text-center'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' class='btn btn-success' role='button' target='_blank'>View Details</a></p></figcaption></figure></td>";
																	
																	
																} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29)) {
																	
																   echo "<td width='450px' style='position:relative;left:-50px'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' target='_blank'><figure><div class='limagelad'><img class='limagelad2' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><br><br><figcaption><span style='font-weight: 200; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical'>" .htmlentities($row['profile']). "</span><br><hr><p class='text-center'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' class='btn btn-success' role='button' target='_blank'>View Details</a></p></figcaption></figure></td>";
																	
																	
																} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30)) {
																	
																   echo "<td width='450px' style='position:relative;left:-100px'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' target='_blank'><figure><div class='limagelad'><img class='limagelad2' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><br><br><figcaption><span style='font-weight: 200; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical'>" .htmlentities($row['profile']). "</span><br><hr><p class='text-center'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' class='btn btn-success' role='button' target='_blank'>View Details</a></p></figcaption></figure></td></tr><tr><td style='line-height: 5px'>&nbsp;</td></tr><tr>";
																	
																	
																}       
																   
																   
    													$index++;															   
																   
																   
															   }
													
												}
					   
					   							//  <!-- 18 End -->
					   
					   							
					?>							
							
							
									<?
									
										// 16 Start

										


										// start for the banner add counting and getting from table

											$key58 = $_GET['ad'];
						
						
											if ($key58  == 28) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='56' OR vendor_product.xlist='59' OR vendor_product.xlist='60' OR vendor_product.xlist='62' OR vendor_product.xlist='63' OR vendor_product.xlist='65' OR vendor_product.xlist='74' OR vendor_product.xlist='75' OR vendor_product.xlist='76' OR vendor_product.xlist='78' OR vendor_product.xlist='126' OR vendor_product.xlist='612' OR vendor_product.xlist='646' OR vendor_product.xlist='876' OR vendor_product.xlist='891' OR vendor_product.xlist='894' OR vendor_product.xlist='896' OR vendor_product.xlist='908' OR vendor_product.xlist='995' OR vendor_product.xlist='1041' OR vendor_product.xlist='1102' OR vendor_product.xlist='1150' OR vendor_product.xlist='1235' OR vendor_product.xlist='1244' OR vendor_product.xlist='1260' OR vendor_product.xlist='1338' OR vendor_product.xlist='1340' OR vendor_product.xlist='1357' OR vendor_product.xlist='1358') AND new_vendor.status='16' ORDER BY vendor_id ASC";
						
											} elseif ($key58  == 30) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='149' OR vendor_product.xlist='152' OR vendor_product.xlist='156' OR vendor_product.xlist='157' OR vendor_product.xlist='158' OR vendor_product.xlist='161' OR vendor_product.xlist='164' OR vendor_product.xlist='165' OR vendor_product.xlist='167' OR vendor_product.xlist='615' OR vendor_product.xlist='616' OR vendor_product.xlist='1087' OR vendor_product.xlist='1160' OR vendor_product.xlist='1164') AND new_vendor.status='16' ORDER BY vendor_id ASC";												
												
											} elseif ($key58  == 1212) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='322' OR vendor_product.xlist='323' OR vendor_product.xlist='324' OR vendor_product.xlist='325' OR vendor_product.xlist='783' OR vendor_product.xlist='916' OR vendor_product.xlist='933' OR vendor_product.xlist='972') AND new_vendor.status='16' ORDER BY vendor_id ASC";												
												
											} elseif ($key58  == 1213) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='175' OR vendor_product.xlist='179' OR vendor_product.xlist='181' OR vendor_product.xlist='189' OR vendor_product.xlist='424' OR vendor_product.xlist='425' OR vendor_product.xlist='435' OR vendor_product.xlist='440' OR vendor_product.xlist='442' OR vendor_product.xlist='443' OR vendor_product.xlist='449' OR vendor_product.xlist='971' OR vendor_product.xlist='978' OR vendor_product.xlist='979' OR vendor_product.xlist='994' OR vendor_product.xlist='1201') AND new_vendor.status='16' ORDER BY vendor_id ASC";												
												
											} elseif ($key58  == 1002) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='288' OR vendor_product.xlist='289' OR vendor_product.xlist='297' OR vendor_product.xlist='300' OR vendor_product.xlist='308' OR vendor_product.xlist='311' OR vendor_product.xlist='312' OR vendor_product.xlist='313' OR vendor_product.xlist='314' OR vendor_product.xlist='317' OR vendor_product.xlist='318' OR vendor_product.xlist='319' OR vendor_product.xlist='420' OR vendor_product.xlist='562' OR vendor_product.xlist='652' OR vendor_product.xlist='661' OR vendor_product.xlist='665' OR vendor_product.xlist='802' OR vendor_product.xlist='805' OR vendor_product.xlist='806' OR vendor_product.xlist='813' OR vendor_product.xlist='852' OR vendor_product.xlist='1015' OR vendor_product.xlist='1029' OR vendor_product.xlist='1171' OR vendor_product.xlist='1229' OR vendor_product.xlist='1308' OR vendor_product.xlist='1348') AND new_vendor.status='16' ORDER BY vendor_id ASC";									
												
											} 
						
						
						
						
						
						
						
						
						
						
											$result = $conn->query($sql);									
									
												// logo section
						
						
												echo '<tr><td colspan="3" style="position:relative;left:-100px"><hr noshade></td></tr>';
						
												echo "<tr>";
												
											   $xx = 0;
												$zCount = 0;
												$rowNum = 0;
											   		while($row = mysqli_fetch_assoc($result)) {
												   
														   if ($rowNum != $row['vendor_id']) {

															$venNum[] = $row['vendor_id'] . '<br>';

															   $rowNum = $row['vendor_id'];

														   }
												   
																					
												   
											   		}
						
												$venNums = shuffle($venNum);
						
															   	$xx = 0;
													$index = 1;
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status='16' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);									

																// logo section


																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																   
																   
																if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28)) {
																	
																   echo "<tr><td width='450px'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' target='_blank'><figure><div class='limagelad'><img class='limagelad2' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><br><br><figcaption><span style='font-weight: 200; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical'>" .htmlentities($row['profile']). "</span><br><hr><p class='text-center'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' class='btn btn-success' role='button' target='_blank'>View Details</a></p></figcaption></figure></td>";
																	
																	
																} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29)) {
																	
																   echo "<td width='450px' style='position:relative;left:-50px'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' target='_blank'><figure><div class='limagelad'><img class='limagelad2' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><br><br><figcaption><span style='font-weight: 200; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical'>" .htmlentities($row['profile']). "</span><br><hr><p class='text-center'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' class='btn btn-success' role='button' target='_blank'>View Details</a></p></figcaption></figure></td>";
																	
																	
																} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30)) {
																	
																   echo "<td width='450px' style='position:relative;left:-100px'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' target='_blank'><figure><div class='limagelad'><img class='limagelad2' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><br><br><figcaption><span style='font-weight: 200; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical'>" .htmlentities($row['profile']). "</span><br><hr><p class='text-center'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' class='btn btn-success' role='button' target='_blank'>View Details</a></p></figcaption></figure></td></tr><tr><td style='line-height: 5px'>&nbsp;</td></tr><tr>";
																	
																	
																}       
																   
																   
    													$index++;															   
																   
																   
															   }
													
												}
					   
					   							//  <!-- 16 End -->
					   
					   							
					?>	
						
						
									<?
									
										// 14 Start

										


										// start for the banner add counting and getting from table

											$key68 = $_GET['ad'];
						
						
											if ($key68  == 28) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='56' OR vendor_product.xlist='59' OR vendor_product.xlist='60' OR vendor_product.xlist='62' OR vendor_product.xlist='63' OR vendor_product.xlist='65' OR vendor_product.xlist='74' OR vendor_product.xlist='75' OR vendor_product.xlist='76' OR vendor_product.xlist='78' OR vendor_product.xlist='126' OR vendor_product.xlist='612' OR vendor_product.xlist='646' OR vendor_product.xlist='876' OR vendor_product.xlist='891' OR vendor_product.xlist='894' OR vendor_product.xlist='896' OR vendor_product.xlist='908' OR vendor_product.xlist='995' OR vendor_product.xlist='1041' OR vendor_product.xlist='1102' OR vendor_product.xlist='1150' OR vendor_product.xlist='1235' OR vendor_product.xlist='1244' OR vendor_product.xlist='1260' OR vendor_product.xlist='1338' OR vendor_product.xlist='1340' OR vendor_product.xlist='1357' OR vendor_product.xlist='1358') AND new_vendor.status='14' ORDER BY vendor_id ASC";
						
											} elseif ($key68  == 30) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='149' OR vendor_product.xlist='152' OR vendor_product.xlist='156' OR vendor_product.xlist='157' OR vendor_product.xlist='158' OR vendor_product.xlist='161' OR vendor_product.xlist='164' OR vendor_product.xlist='165' OR vendor_product.xlist='167' OR vendor_product.xlist='615' OR vendor_product.xlist='616' OR vendor_product.xlist='1087' OR vendor_product.xlist='1160' OR vendor_product.xlist='1164') AND new_vendor.status='14' ORDER BY vendor_id ASC";												
												
											} elseif ($key68  == 1212) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='322' OR vendor_product.xlist='323' OR vendor_product.xlist='324' OR vendor_product.xlist='325' OR vendor_product.xlist='783' OR vendor_product.xlist='916' OR vendor_product.xlist='933' OR vendor_product.xlist='972') AND new_vendor.status='14' ORDER BY vendor_id ASC";												
												
											} elseif ($key68  == 1213) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='175' OR vendor_product.xlist='179' OR vendor_product.xlist='181' OR vendor_product.xlist='189' OR vendor_product.xlist='424' OR vendor_product.xlist='425' OR vendor_product.xlist='435' OR vendor_product.xlist='440' OR vendor_product.xlist='442' OR vendor_product.xlist='443' OR vendor_product.xlist='449' OR vendor_product.xlist='971' OR vendor_product.xlist='978' OR vendor_product.xlist='979' OR vendor_product.xlist='994' OR vendor_product.xlist='1201') AND new_vendor.status='14' ORDER BY vendor_id ASC";												
												
											} elseif ($key68  == 1002) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='288' OR vendor_product.xlist='289' OR vendor_product.xlist='297' OR vendor_product.xlist='300' OR vendor_product.xlist='308' OR vendor_product.xlist='311' OR vendor_product.xlist='312' OR vendor_product.xlist='313' OR vendor_product.xlist='314' OR vendor_product.xlist='317' OR vendor_product.xlist='318' OR vendor_product.xlist='319' OR vendor_product.xlist='420' OR vendor_product.xlist='562' OR vendor_product.xlist='652' OR vendor_product.xlist='661' OR vendor_product.xlist='665' OR vendor_product.xlist='802' OR vendor_product.xlist='805' OR vendor_product.xlist='806' OR vendor_product.xlist='813' OR vendor_product.xlist='852' OR vendor_product.xlist='1015' OR vendor_product.xlist='1029' OR vendor_product.xlist='1171' OR vendor_product.xlist='1229' OR vendor_product.xlist='1308' OR vendor_product.xlist='1348') AND new_vendor.status='14' ORDER BY vendor_id ASC";									
												
											} 
						
						
						
						
						
						
						
						
						
											$result = $conn->query($sql);									
									
												// logo section
						
												echo '<tr><td colspan="3" style="position:relative;left:-100px"><hr noshade></td></tr>';
						
						
												echo "<tr>";
												
											   $xx = 0;
												$zCount = 0;
												$rowNum = 0;
											   		while($row = mysqli_fetch_assoc($result)) {
												   
														   if ($rowNum != $row['vendor_id']) {

															$venNum[] = $row['vendor_id'] . '<br>';

															   $rowNum = $row['vendor_id'];

														   }
												   
																					
												   
											   		}
						
												$venNums = shuffle($venNum);
						
															   	$xx = 0;
													$index = 1;
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status='14' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);									

																// logo section


																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																   
																   
																if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28)) {
																	
																   echo "<tr><td width='450px'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' target='_blank'><figure><div class='limagelad'><img class='limagelad2' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><br><br><figcaption><span style='font-weight: 200; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical'>" .htmlentities($row['profile']). "</span><br><hr><p class='text-center'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' class='btn btn-success' role='button' target='_blank'>View Details</a></p></figcaption></figure></td>";
																	
																	
																} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29)) {
																	
																   echo "<td width='450px' style='position:relative;left:-50px'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' target='_blank'><figure><div class='limagelad'><img class='limagelad2' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><br><br><figcaption><span style='font-weight: 200; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical'>" .htmlentities($row['profile']). "</span><br><hr><p class='text-center'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' class='btn btn-success' role='button' target='_blank'>View Details</a></p></figcaption></figure></td>";
																	
																	
																} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30)) {
																	
																   echo "<td width='450px' style='position:relative;left:-100px'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' target='_blank'><figure><div class='limagelad'><img class='limagelad2' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><br><br><figcaption><span style='font-weight: 200; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical'>" .htmlentities($row['profile']). "</span><br><hr><p class='text-center'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' class='btn btn-success' role='button' target='_blank'>View Details</a></p></figcaption></figure></td></tr><tr><td style='line-height: 5px'>&nbsp;</td></tr><tr>";
																	
																	
																}       
																   
																   
    													$index++;															   
																   
																   
															   }
													
												}
					   
					   							//  <!-- 14 End -->
					   
					   							
					?>													
						
						
									<?
									
										// 12 Start

											

										// start for the banner add counting and getting from table

											$key78 = $_GET['ad'];
						
						
											if ($key78  == 28) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='56' OR vendor_product.xlist='59' OR vendor_product.xlist='60' OR vendor_product.xlist='62' OR vendor_product.xlist='63' OR vendor_product.xlist='65' OR vendor_product.xlist='74' OR vendor_product.xlist='75' OR vendor_product.xlist='76' OR vendor_product.xlist='78' OR vendor_product.xlist='126' OR vendor_product.xlist='612' OR vendor_product.xlist='646' OR vendor_product.xlist='876' OR vendor_product.xlist='891' OR vendor_product.xlist='894' OR vendor_product.xlist='896' OR vendor_product.xlist='908' OR vendor_product.xlist='995' OR vendor_product.xlist='1041' OR vendor_product.xlist='1102' OR vendor_product.xlist='1150' OR vendor_product.xlist='1235' OR vendor_product.xlist='1244' OR vendor_product.xlist='1260' OR vendor_product.xlist='1338' OR vendor_product.xlist='1340' OR vendor_product.xlist='1357' OR vendor_product.xlist='1358') AND new_vendor.status='12' ORDER BY vendor_id ASC";
						
											} elseif ($key78  == 30) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='149' OR vendor_product.xlist='152' OR vendor_product.xlist='156' OR vendor_product.xlist='157' OR vendor_product.xlist='158' OR vendor_product.xlist='161' OR vendor_product.xlist='164' OR vendor_product.xlist='165' OR vendor_product.xlist='167' OR vendor_product.xlist='615' OR vendor_product.xlist='616' OR vendor_product.xlist='1087' OR vendor_product.xlist='1160' OR vendor_product.xlist='1164') AND new_vendor.status='12' ORDER BY vendor_id ASC";												
												
											} elseif ($key78  == 1212) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='322' OR vendor_product.xlist='323' OR vendor_product.xlist='324' OR vendor_product.xlist='325' OR vendor_product.xlist='783' OR vendor_product.xlist='916' OR vendor_product.xlist='933' OR vendor_product.xlist='972') AND new_vendor.status='12' ORDER BY vendor_id ASC";												
												
											} elseif ($key78  == 1213) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='175' OR vendor_product.xlist='179' OR vendor_product.xlist='181' OR vendor_product.xlist='189' OR vendor_product.xlist='424' OR vendor_product.xlist='425' OR vendor_product.xlist='435' OR vendor_product.xlist='440' OR vendor_product.xlist='442' OR vendor_product.xlist='443' OR vendor_product.xlist='449' OR vendor_product.xlist='971' OR vendor_product.xlist='978' OR vendor_product.xlist='979' OR vendor_product.xlist='994' OR vendor_product.xlist='1201') AND new_vendor.status='12' ORDER BY vendor_id ASC";												
												
											} elseif ($key78  == 1002) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='288' OR vendor_product.xlist='289' OR vendor_product.xlist='297' OR vendor_product.xlist='300' OR vendor_product.xlist='308' OR vendor_product.xlist='311' OR vendor_product.xlist='312' OR vendor_product.xlist='313' OR vendor_product.xlist='314' OR vendor_product.xlist='317' OR vendor_product.xlist='318' OR vendor_product.xlist='319' OR vendor_product.xlist='420' OR vendor_product.xlist='562' OR vendor_product.xlist='652' OR vendor_product.xlist='661' OR vendor_product.xlist='665' OR vendor_product.xlist='802' OR vendor_product.xlist='805' OR vendor_product.xlist='806' OR vendor_product.xlist='813' OR vendor_product.xlist='852' OR vendor_product.xlist='1015' OR vendor_product.xlist='1029' OR vendor_product.xlist='1171' OR vendor_product.xlist='1229' OR vendor_product.xlist='1308' OR vendor_product.xlist='1348') AND new_vendor.status='12' ORDER BY vendor_id ASC";									
												
											} 
						
						
						
						
						
						
						
						
											$result = $conn->query($sql);									
									
												// logo section
						
												echo '<tr><td colspan="3" style="position:relative;left:-100px"><hr noshade></td></tr>';
						
						
												echo "<tr>";
												
											   $xx = 0;
												$zCount = 0;
												$rowNum = 0;
											   		while($row = mysqli_fetch_assoc($result)) {
												   
														   if ($rowNum != $row['vendor_id']) {

															$venNum[] = $row['vendor_id'] . '<br>';

															   $rowNum = $row['vendor_id'];

														   }
												   
																					
												   
											   		}
						
												$venNums = shuffle($venNum);
						
															   	$xx = 0;
													$index = 1;
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status='12' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);									

																// logo section


																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																   
																   
																if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28)) {
																	
																   echo "<tr><td width='450px'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' target='_blank'><figure><div class='limagelad'><img class='limagelad2' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><br><br><figcaption><span style='font-weight: 200; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical'>" .htmlentities($row['profile']). "</span><br><hr><p class='text-center'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' class='btn btn-success' role='button' target='_blank'>View Details</a></p></figcaption></figure></td>";
																	
																	
																} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29)) {
																	
																   echo "<td width='450px' style='position:relative;left:-50px'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' target='_blank'><figure><div class='limagelad'><img class='limagelad2' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><br><br><figcaption><span style='font-weight: 200; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical'>" .htmlentities($row['profile']). "</span><br><hr><p class='text-center'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' class='btn btn-success' role='button' target='_blank'>View Details</a></p></figcaption></figure></td>";
																	
																	
																} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30)) {
																	
																   echo "<td width='450px' style='position:relative;left:-100px'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' target='_blank'><figure><div class='limagelad'><img class='limagelad2' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><br><br><figcaption><span style='font-weight: 200; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical'>" .htmlentities($row['profile']). "</span><br><hr><p class='text-center'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' class='btn btn-success' role='button' target='_blank'>View Details</a></p></figcaption></figure></td></tr><tr><td style='line-height: 5px'>&nbsp;</td></tr><tr>";
																	
																	
																}       
																   
																   
    													$index++;															   
																   
																   
															   }
													
												}
					   
					   							//  <!-- 12 End -->
					   
					   							
					?>													
						
						
									<?
									
										// 10 Start


										// start for the banner add counting and getting from table

											$key88 = $_GET['ad'];
						
						
											if ($key48  == 28) {
						

											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='56' OR vendor_product.xlist='59' OR vendor_product.xlist='60' OR vendor_product.xlist='62' OR vendor_product.xlist='63' OR vendor_product.xlist='65' OR vendor_product.xlist='74' OR vendor_product.xlist='75' OR vendor_product.xlist='76' OR vendor_product.xlist='78' OR vendor_product.xlist='126' OR vendor_product.xlist='612' OR vendor_product.xlist='646' OR vendor_product.xlist='876' OR vendor_product.xlist='891' OR vendor_product.xlist='894' OR vendor_product.xlist='896' OR vendor_product.xlist='908' OR vendor_product.xlist='995' OR vendor_product.xlist='1041' OR vendor_product.xlist='1102' OR vendor_product.xlist='1150' OR vendor_product.xlist='1235' OR vendor_product.xlist='1244' OR vendor_product.xlist='1260' OR vendor_product.xlist='1338' OR vendor_product.xlist='1340' OR vendor_product.xlist='1357' OR vendor_product.xlist='1358') AND new_vendor.status='10' ORDER BY vendor_id ASC";
						
											} elseif ($key88  == 30) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='149' OR vendor_product.xlist='152' OR vendor_product.xlist='156' OR vendor_product.xlist='157' OR vendor_product.xlist='158' OR vendor_product.xlist='161' OR vendor_product.xlist='164' OR vendor_product.xlist='165' OR vendor_product.xlist='167' OR vendor_product.xlist='615' OR vendor_product.xlist='616' OR vendor_product.xlist='1087' OR vendor_product.xlist='1160' OR vendor_product.xlist='1164') AND new_vendor.status='10' ORDER BY vendor_id ASC";												
												
											} elseif ($key88  == 1212) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='322' OR vendor_product.xlist='323' OR vendor_product.xlist='324' OR vendor_product.xlist='325' OR vendor_product.xlist='783' OR vendor_product.xlist='916' OR vendor_product.xlist='933' OR vendor_product.xlist='972') AND new_vendor.status='10' ORDER BY vendor_id ASC";												
												
											} elseif ($key88  == 1213) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='175' OR vendor_product.xlist='179' OR vendor_product.xlist='181' OR vendor_product.xlist='189' OR vendor_product.xlist='424' OR vendor_product.xlist='425' OR vendor_product.xlist='435' OR vendor_product.xlist='440' OR vendor_product.xlist='442' OR vendor_product.xlist='443' OR vendor_product.xlist='449' OR vendor_product.xlist='971' OR vendor_product.xlist='978' OR vendor_product.xlist='979' OR vendor_product.xlist='994' OR vendor_product.xlist='1201') AND new_vendor.status='10' ORDER BY vendor_id ASC";												
												
											} elseif ($key88  == 1002) {
												
											$sql = "SELECT * FROM new_vendor LEFT JOIN vendor_product ON new_vendor.id=vendor_product.vendor_id WHERE (vendor_product.xlist='288' OR vendor_product.xlist='289' OR vendor_product.xlist='297' OR vendor_product.xlist='300' OR vendor_product.xlist='308' OR vendor_product.xlist='311' OR vendor_product.xlist='312' OR vendor_product.xlist='313' OR vendor_product.xlist='314' OR vendor_product.xlist='317' OR vendor_product.xlist='318' OR vendor_product.xlist='319' OR vendor_product.xlist='420' OR vendor_product.xlist='562' OR vendor_product.xlist='652' OR vendor_product.xlist='661' OR vendor_product.xlist='665' OR vendor_product.xlist='802' OR vendor_product.xlist='805' OR vendor_product.xlist='806' OR vendor_product.xlist='813' OR vendor_product.xlist='852' OR vendor_product.xlist='1015' OR vendor_product.xlist='1029' OR vendor_product.xlist='1171' OR vendor_product.xlist='1229' OR vendor_product.xlist='1308' OR vendor_product.xlist='1348') AND new_vendor.status='10' ORDER BY vendor_id ASC";									
												
											} 
						
						
						
						
											$result = $conn->query($sql);									
									
												// logo section
						
												echo '<tr><td colspan="3" style="position:relative;left:-100px"><hr noshade></td></tr>';
						
						
												echo "<tr>";
												
											   $xx = 0;
												$zCount = 0;
												$rowNum = 0;
											   		while($row = mysqli_fetch_assoc($result)) {
												   
														   if ($rowNum != $row['vendor_id']) {

															$venNum[] = $row['vendor_id'] . '<br>';

															   $rowNum = $row['vendor_id'];

														   }
												   
																					
												   
											   		}
						
												$venNums = shuffle($venNum);
						
															   	$xx = 0;
													$index = 1;
												foreach ($venNum as $value) {
													
													$value[number];
													
															$sql55 = "SELECT * FROM new_vendor WHERE id='" .$value. "' AND status='10' ORDER BY company_name ASC";
															$result55 = $conn->query($sql55);									

																// logo section


																$zCount = 0;
															   while($row = mysqli_fetch_assoc($result55)) {
																   
																   
																if (($index == 1) || ($index == 4) || ($index == 7) || ($index == 10) || ($index == 13) || ($index == 16) || ($index == 19) || ($index == 22) || ($index == 25) || ($index == 28)) {
																	
																   echo "<tr><td width='450px'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' target='_blank'><figure><div class='limagelad'><img class='limagelad2' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><br><br><figcaption><span style='font-weight: 200; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical'>" .htmlentities($row['profile']). "</span><br><hr><p class='text-center'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' class='btn btn-success' role='button' target='_blank'>View Details</a></p></figcaption></figure></td>";
																	
																	
																} elseif (($index == 2) || ($index == 5) || ($index == 8) || ($index == 11) || ($index == 14) || ($index == 17) || ($index == 20) || ($index == 23) || ($index == 26) || ($index == 29)) {
																	
																   echo "<td width='450px' style='position:relative;left:-50px'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' target='_blank'><figure><div class='limagelad'><img class='limagelad2' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><br><br><figcaption><span style='font-weight: 200; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical'>" .htmlentities($row['profile']). "</span><br><hr><p class='text-center'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' class='btn btn-success' role='button' target='_blank'>View Details</a></p></figcaption></figure></td>";
																	
																	
																} elseif (($index == 3) || ($index == 6) || ($index == 9) || ($index == 12) || ($index == 15) || ($index == 18) || ($index == 21) || ($index == 24) || ($index == 27) || ($index == 30)) {
																	
																   echo "<td width='450px' style='position:relative;left:-100px'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' target='_blank'><figure><div class='limagelad'><img class='limagelad2' src='https://landscapearchitect.com/products/images/".$row['logo']."' alt='product image'></div></a><br><br><figcaption><span style='font-weight: 200; font-family: Helvetica, Arial; font-size: 14px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical'>" .htmlentities($row['profile']). "</span><br><hr><p class='text-center'><a href='https://landscapearchitect.com/LADetails/index-vendor-js.php?number=" .$row['id']. "' class='btn btn-success' role='button' target='_blank'>View Details</a></p></figcaption></figure></td></tr><tr><td style='line-height: 5px'>&nbsp;</td></tr><tr>";
																	
																	
																}       
																   
																   
    													$index++;															   
																   
																   
															   }
													
												}
					   
					   							//  <!-- 10 End -->
					   
					   							
					?>													
						
						


							
							
							
						</table><br>
			  </td>
			  
				<style>
					
		.adShift {
			position: relative;
			left: -15px;
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
				  
				  	<!-- ROS Banner Start -->
				  
									<?
									
										// Banner Ads Start

										

										// start for the banner add counting and getting from table
										
											// $ad = $_GET["ad"];
											$ad = 1;

											if ($ad=='1') {

											$sql = "SELECT * FROM banner_ups3 where ROS = 'yes' ORDER BY RAND()";
											$result = $conn->query($sql);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {
												
												$links = substr('' . $row[picture]. '', 0, 5);
												
												// echo $links;
												
													if ($links == 'vista'){
														
														
													?><section><ins class='dcmads' style='display:inline-block;width:240px;height:240px'
													data-dcm-placement='N46002.2575001LANDSCAPEONLINE.CO/B11050930.207463698'
													data-dcm-rendering-mode='iframe'
													data-dcm-https-only
													data-dcm-resettable-device-id=''
													data-dcm-app-id=''>
													<script src='https://www.googletagservices.com/dcm/dcmads.js'></script>
												</ins><br><br>
										
												<?
												

														
											} else {
														
													echo "<section><a href='" . $row['web'] . "' onclick='window.open(trackOutboundLink('" . $row['web'] . "'); return false;)' target='_blank'><img class='adSize' src='https://landscapearchitect.com/banner/" . $row[picture] . "' alt='' /></a></section><br>";														
														
										}
												
												
											}
												
												
												
										}else{
											$sql = "SELECT * FROM banner_ups where product = '" . $ad . "' ORDER BY RAND()";
											$result = $conn->query($sql);									
									
										// banner rotating section
											while($row = mysqli_fetch_array($result)) {
													if (empty($row[web])) { 
													echo "&nbsp;";
													}else{
													echo "<section><a href='" . $row['web'] . "' onclick='window.open(trackOutboundLink('" . $row['web'] . "'); return false;)' target='_blank'><img class='adSize' src='https://landscapearchitect.com/banner/" . $row[picture] . "' alt='' /></a>
													</section><br>";													
													}
											}										
										}
				  
												mysqli_close($conn);
				  
				  
									?>       										
				  
				  	<!-- ROS Banner End -->
				  
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
	

<!-- <hr noshade width="40%" style="text-align: left"> -->

				
				
				
				
				
				
				
  </div>
</div>
	
	
	
	
<!-- <section>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h3>Featured Products</h3>
        <hr>
		  
		 <style>
			
			 .featImage{
				 width: 75px;
			 } 
			 
					.limageSm {
						width: 100%;
						height: 75px;    
						overflow: hidden;
						margin-top: 5px;
						text-align: center;
						line-height: 75px;
					}
					.limageSm2 {
						max-width: 100%;
						max-height: 100%;
						vertical-align: middle;
						position: relative;
						top: 50%;
						transform: translateY(-50%);			
					}			 
			 
			 
			 
			 
		 </style>
		  
		  
		  
		  
        <div class="row">
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			  <div class="text-center"> <div class="limageSm"><img class="limageSm2" src="https://landscapearchitect.com/products/images/DuMor-Jan2018-16_1516148450.jpg" alt="Thumbnail Image 1"></div> </div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <div class="limageSm"><img class="limageSm2" src="https://landscapearchitect.com/products/images/SiloamStonePF1802_1516138379.jpg" alt="Thumbnail Image 1"></div> </div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <div class="limageSm"><img class="limageSm2" src="https://landscapearchitect.com/products/images/TufxPP9_1516130329.jpg" alt="Thumbnail Image 1"></div> </div>
          </div>      
        </div>
        <hr>
        <div class="row">
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <div class="limageSm"><img class="limageSm2" src="https://landscapearchitect.com/products/images/GeorgiaPrecastPP2_1516120135.jpg" alt="Thumbnail Image 1"></div> </div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <div class="limageSm"><img class="limageSm2" src="https://landscapearchitect.com/products/images/TrellisStructuresPF1712_1510689686.jpg" alt="Thumbnail Image 1"></div> </div>
</div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <div class="limageSm"><img class="limageSm2" src="https://landscapearchitect.com/products/images/prod_86ea9f486fb7aa9d2605eb744ace25a4.jpg" alt="Thumbnail Image 1"></div> </div>
</div>
        </div>
        <hr>
        <div class="row">
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <div class="limageSm"><img class="limageSm2" src="https://landscapearchitect.com/products/images/StoneForestPF1801_1513616208.jpg" alt="Thumbnail Image 1"></div> </div>
</div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <div class="limageSm"><img class="limageSm2" src="https://landscapearchitect.com/products/images/prod_5ccfd1c33bf0a2b9a429435b43fea0c2.jpg" alt="Thumbnail Image 1"></div> </div>
</div>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="text-center"> <div class="limageSm"><img class="limageSm2" src="https://landscapearchitect.com/products/images/KafkaPF1802_1515184758.jpg" alt="Thumbnail Image 1"></div> </div>
</div>
        </div>
      </div>
      <div class="col-lg-6">
        <h3>Our Services</h3>
        <hr>
        <ul id="myTab1" class="nav nav-tabs">
          <li class="active"> <a href="#home1" data-toggle="tab"> Tab Panel 1 </a> </li>
          <li><a href="#pane2" data-toggle="tab">Tab Panel 2</a></li>
          <li> <a href="#pane3" data-toggle="tab">Tab Panel 3</a> </li>
        </ul>
        <div id="myTabContent1" class="tab-content">
          <div class="tab-pane fade in active" id="home1">
            <p class="text-center"><img src="images/3b536b.jpg" alt=""></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus maxime aut ea impedit voluptates aperiam dolor laborum officiis autem aspernatur! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, alias, repudiandae sunt illo consequatur aperiam doloribus nesciunt ut deserunt ipsa est tempora nihil. Totam eveniet aperiam debitis fugit ipsa doloremque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio sequi dolorem suscipit assumenda molestiae voluptatem qui consequuntur magni? Deleniti, corporis.</p>
          </div>
          <div class="tab-pane fade" id="pane2">
            <p class="text-center"><img src="images/9b59b6.jpg" alt=""></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus maxime aut ea impedit voluptates aperiam dolor laborum officiis autem aspernatur! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, alias, repudiandae sunt illo consequatur aperiam doloribus nesciunt ut deserunt ipsa est tempora nihil. Totam eveniet aperiam debitis fugit ipsa doloremque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio sequi dolorem suscipit assumenda molestiae voluptatem qui consequuntur magni? Deleniti, corporis.</p>
          </div>
          <div class="tab-pane fade" id="pane3">
            <p class="text-center"><img src="images/16a085.jpg" alt=""></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus maxime aut ea impedit voluptates aperiam dolor laborum officiis autem aspernatur! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, alias, repudiandae sunt illo consequatur aperiam doloribus nesciunt ut deserunt ipsa est tempora nihil. Totam eveniet aperiam debitis fugit ipsa doloremque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio sequi dolorem suscipit assumenda molestiae voluptatem qui consequuntur magni? Deleniti, corporis.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->


	
<?

// Top Section - Footer Section
// include("lad_footer-main.inc");
include("lo_top-main2-bottom-lad.inc");

?>	

<?
include("lo_footer-main2-new.inc");
?>
	
	