<? include '../includes/la-common-top.php'; ?>


<? include '../includes/la-common-header.inc'; ?>

<? //$keywordSE = 'pool'; ?>

<section class="gray_shade_anchor full_width">
<div class="container">
	<div class="full_width overflow_">
	<a href="#" class="active">LA DETAILS</a>
    <a href="#">TOOLS &amp; EQUIPMENT</a>
    <a href="#">LOCAL WHOLESALE &amp; PLANT MATERIALS</a>
    </div><!-- /.overflow_-->
</div><!-- /.container -->
</section><!-- /.gray_shade_anchor -->

<section class="search_section_ban full_width">
<div class="container">
<div class="row">
	<div class="col-lg-9 col-lg-offset-3 col-md-8 col-md-offset-4 col-sm-12 col-xs-12">
    	<div class="full_width relative">
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" name="productFinder">
				<input type="text" name="keywordSE4"  value="<?php echo $_POST['keywordSE4']; ?>" />
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
    	<div class="white_side full_width">  
        	<h2 class="mobtoggle">ALL CATEGORIES</h2>
            <div class="full_width" id="mobile_slide">
                
                
            <?

            include '../includes/connect4.inc'; 
						
						// sidebar accordian menu 
						include '../includes/la-common-sidebar-menu.inc';
                   
									
				
													
						if(isset($_POST['brandVen'])){
							 unset($_SESSION['brandVen']);
							 $_SESSION['brandVen'] = $_POST['brandVen'];
						}

						if($_GET['brand'] != 'y'){
							unset($_SESSION['brandVen']);
						}

						$vendorID = 0;

						$xlistNumber = $_GET['xlist'];

						$adNum = $_GET['ad'];

						$baseLink = 'https://landscapearchitect.com/LandscapeProducts/la_details.php?ad=' . $_GET['ad'] . '&xlist=' . $_GET['xlist'];

						if($_GET['brand'] == 'y'){
							$baseLink .= "&brand=y";
						}
                
                
         ?>
                
            <!-- Brand List Start -->
            <h2 class="mobtoggle" style="margin-top: 30px;">BRAND</h2>
            
             <form method="post" action="<? echo 'https://landscapearchitect.com/LandscapeProducts/la_details.php?ad=' . $_GET['ad'] . '&xlist=' . $_GET['xlist'] . '&brand=y&limit=24&page=1' ?>" id="brandsListForm">   
            	<ul class="brandList">                
                

          	<?
            
                    $sql1 =  "SELECT * FROM vendor_product LEFT JOIN new_vendor ON vendor_product.vendor_id = new_vendor.id WHERE vendor_product.xlist = '" . $xlistNumber ."' AND new_vendor.status > 2 ORDER BY new_vendor.company_name ASC";
                    $result1 = $conn->query($sql1);  

                    $rowcount1=mysqli_num_rows($result1);
                    $brandCount = 1;

                    while($row = mysqli_fetch_array($result1)) {
										
                        $companyName = substr($row['company_name'],0,30);
												$checkClass = '';

                        if ($companyName2 != $row['company_name']) {
												
														foreach($_SESSION['brandVen'] as $brandId){
															if($brandId == $row['vendor_id']){
																$checkClass = "checked";
															}
														}

                            $sql99 = "SELECT * FROM vendor_product WHERE xlist = '" . $xlistNumber ."' AND vendor_id = '" . $row['vendor_id'] ."' AND series_product = 0";
                            $result99 = $conn->query($sql99);  

                            $rowcount99=mysqli_num_rows($result99);  
														

                            echo '<li>
                                    <div class="check_box__ pull-left">
                                        <input type="checkbox" class="form-check-input brandCheckboxes" id="chkk'. $brandCount . '" name="brandVen[]" value="' . $row['vendor_id'] . '"' . $checkClass . '>
                                        <label for="chkk'. $brandCount . '"></label>
                                        <label class="form-check-label" for="chkk'. $brandCount . '">' . $companyName . ' (' . $rowcount99 . ')</label>
                                    </div>
                                </li>'; 

                            $brandCount++;
														


                            $companyName2 = $row['company_name'];

                        }

                    }

        		?>   
            <!-- Brand List End -->

            </ul>
						
                 
								<br><br>
                <button type="submit" value="Submit" id="brandSubmit" class="brandsSubmitBtn">Submit</button>
								<button type="button" value="Clear" id="brandClearBtn" class="brandsClearBtn">Clear</button>
                 
            </form>                    
                
                
            </div><!-- #mobile_slide -->
            
        </div><!-- /.white_side -->
        
        <div class="add__ full_width">
        	<img src="images/add2.png" alt="img" />
        </div><!-- /.add__ -->
        <div class="add__ full_width">
        	<img src="images/ad.JPG" alt="img" />
        </div><!-- /.add__ -->
        
        
    </div><!-- /.col-lg-3 -->
	
	
	<?
	
					// $keywordSE = 'dog park'; 
	
	
					if(isset($_POST['keywordSE4'])) {
				
						$keywordSE = $_POST['keywordSE4']; 
							
					} else {
						
						$choices = array("bench", "play structure","fence", "pool");
						
						$keywordSE = $choices[array_rand($choices)];
						
					}	
	
				
	
		
	
	?>
	
	

	
    
    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
    <div class="row">
    	<div class="col-xs-12 adver">
        	<img src="images/advertise.jpg" alt="img" />
        </div><!-- /.adver -->
    	<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 center_section">
            <h2 class="adj_mar">Showing Results for: <? echo $keywordSE; ?> <? echo $keywordSE44; ?></h2>
            
            <p class="sort_area">930 Products</p><p class="sort_area">Sort from A-Z</p>
            <p class="sort_area">Show <span>24</span> | <span>48</span> | <a href="#">View All</a></p>
            
            
            <div class="full_width brand_ss">
            <div class="row">
				
				<style>
					
				.contain {
					object-fit: contain;
					width: 150px;
					height: 200px;
					background-color: #FFFFFF;
					}

				</style>				
				
				
				
	<?			
				

				
				
	   				
				
						$servername = "localhost";
						$username = "land_patchew";
						$password = "59q2GB6k$3";
						$dbname = "land_landscap_lollive";

						// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
						// Check connection
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							} 
				
				
						$sql = 	"(SELECT id, product_name, description, photo, cadd, photo_time as 'date', 'product' As type FROM `vendor_product` WHERE `product_name` LIKE '%" . $keywordSE . "%' OR `description` LIKE '%" . $keywordSE . "%' ORDER BY RAND())
							UNION
								 (SELECT id, company_name, profile, logo, caddv as 'cadd', edit_date as 'date', 'vendor' As type FROM `new_vendor` WHERE `profile` LIKE '%" . $keywordSE . "%' OR `company_name` LIKE '%" . $keywordSE . "%' AND `status` != 2 ORDER BY RAND())
							UNION
								 (SELECT id, name, idParent, sub_number, caddx as 'cadd', idAccount as 'date', 'xlist' As type FROM `xlist` WHERE `name` LIKE '%" . $keywordSE . "%') ORDER BY RAND() LIMIT 0,24";		
				
					
						$result = $conn->query($sql);									
						
					    $num_rows33 = mysqli_num_rows($result);	
				
				
						while($row = mysqli_fetch_array($result)) {
							
							$prodNumber = $row['id'];
							
							
								$sql2 = "SELECT *  FROM `vendor_product` WHERE id = '" . $prodNumber . "'";
								$result2 = $conn->query($sql2); 
							
					    		$num_rows2 = mysqli_num_rows($result2);	
							
								if ($num_rows2 == 0) {
									
										$sql3 = "SELECT *  FROM `xlist` WHERE id = '" . $prodNumber . "'";
										$result3 = $conn->query($sql3); 

										$num_rows3 = mysqli_num_rows($result3);	
									
										if ($num_rows3 == 0) {
											
											$sql4 = "SELECT *  FROM `new_vendor` WHERE id = '" . $prodNumber . "'";
											$result4 = $conn->query($sql4); 
												while($row = mysqli_fetch_array($result4)) {
												// Vendor	
												echo '<a href="https://landscapearchitect.com/LandscapeProducts/vendor-details.php?number=' . $row['logo'] . '" class="col-md-4 col-sm-6 col-xs-6 for_small">
													<div class="full_width brdr" style="height: 300px; background-color:#FFFFFF">
														<img class="contain" src="https://landscapearchitect.com/products/images/' . $row['logo'] . '" alt="img" />
														<span class="full_width he_det">
															<h4>' . $row['company_name'] . '<span>27 Matching Products</span></h4>
														</span>
													</div>    
													</a>';


												}
											
										} else {
											
											$sql6 = "SELECT *  FROM `vendor_product` WHERE xlist = '" . $prodNumber . "'";
											$result6 = $conn->query($sql6); 
												while($row = mysqli_fetch_array($result6)) {
												// XList		
												echo '<a href="https://landscapearchitect.com/LandscapeProducts/product-details.php?number=' . $row['vendor_id'] . '&prodNum=' . $row['id'] . '" class="col-md-4 col-sm-6 col-xs-6 for_small">
														<div class="full_width brdr" style="height: 300px; background-color:#FFFFFF">
															<img class="contain" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '" alt="img" />
															<span class="full_width he_det">
																<h4>' . $row['product_name'] . '<span>27 Matching Products</span></h4>
															</span>
														</div>    
														</a>';


												}
											
										}
											
										
											
									
								} else {
									
										$sql5 = "SELECT *  FROM `vendor_product` WHERE id = '" . $prodNumber . "'";
										$result5 = $conn->query($sql5); 
											while($row = mysqli_fetch_array($result5)) {
											//Product
											echo '<a href="https://landscapearchitect.com/LandscapeProducts/product-details.php?number=' . $row['vendor_id'] . '&prodNum=' . $row['id'] . '" class="col-md-4 col-sm-6 col-xs-6 for_small">
													<div class="full_width brdr" style="height: 300px; background-color:#FFFFFF">
														<img class="contain" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '" alt="img" />
														<span class="full_width he_det">
															<h4>' . $row['product_name'] . '<span>27 Matching Products</span></h4>
														</span>
													</div>    
													</a>';
												
												
											}
									
								}
							
							
					
							
								//$sql1 = "SELECT *  FROM `vendor_product` WHERE id = '" . $prodNumber . "' AND series_product = '0' AND photo LIKE '%jpg%'";
								//$result1 = $conn->query($sql1);  

								//while($row = mysqli_fetch_array($result1)) {
									
									//if (!empty($row['id'])){							
							
							//echo '<a href="#" class="col-md-4 col-sm-6 col-xs-6 for_small">
									//<div class="full_width brdr">
										//<img class="contain" src="https://landscapearchitect.com/products/images/' . $row['photo'] . '" alt="img" />
										//<span class="full_width he_det">
											//<h4>' . $row['product_name'] .  '<span>27 Matching Products</span></h4>
										//</span>
									//</div>    
									//</a>';
								
										
									//} else {
										
										//echo 'cow';
										
									//}

								//}
							
						}
				
				
				
				
				
		?>	
				
				
				
				
				
				
				
   
                
            </div><!-- /.row -->
            </div><!-- /.full_width -->
			
            <div class="pagination_strip full_width">
            	<a href="#" class="prev">Prev</a>
                <a href="#" class="disable">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#" class="nxt active">Next</a>
            </div><!-- /.pagination_strip -->
            
        </div><!-- ./col-lg-8 -->
        
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
            <div class="add__ full_width">
                <img src="images/add2.png" alt="img" />
            </div><!-- /.add__ -->
            <div class="add__ full_width">
                <img src="images/ad-3.JPG" alt="img" />
            </div><!-- /.add__ -->
            <div class="add__ full_width">
                <img src="images/adver2.jpg" alt="img" />
            </div><!-- /.add__ -->
        </div><!-- ./col-lg-4 -->
    </div><!-- /.row -->
    	
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
	
            
			

		
			<? include '../includes/la-common-footer.inc'; ?>
			
			<!-- must go below footer to access jquery -->
			<? include '../includes/la-common-magazine-subscribe.php'; ?>
			